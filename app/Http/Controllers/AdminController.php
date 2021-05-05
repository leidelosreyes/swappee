<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User,Offer,Post,Categories,Sub_categorie,Message,bidder,auction};
use Illuminate\Support\Facades\Hash;
use Auth;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index()
    {
        return view('admins.admin.index');
    }

    public function show_admin($params)
    {
        if($params == 1){
            $admin = User::where('usertype','admin')->get();
            return view('admins.admin.show',compact('admin'));
        }
        if($params == 2){
            $admin = User::where('usertype','post-moderator-admin')->get();
            return view('admins.admin.show',compact('admin'));
        }
        if($params == 3){
            $admin = User::where('usertype','content-manager-admin')->get();
            return view('admins.admin.show',compact('admin'));
        }
        if($params == 4){
            $admin = User::where('usertype','user-manager-admin')->get();
            return view('admins.admin.show',compact('admin'));
        }
      
    }
    public function create(){
        if(Auth::user()->usertype != 'admin')
        {
            return redirect()->back()->with('error','You are not authorized to create new Administrator');
        }
        return view('admins.admin.create');
    }
    public function store(Request $request){

        $admin = User::insert([
            'name'     => $request->name,
            'email'    => $request->email,
            'usertype' => $request->usertype,
            'email_verified_at' => $request->email_verified_at,
            'password'   => Hash::make($request->password),
            'created_at' => Carbon::now()->timezone('Asia/Manila'),
            'updated_at' => Carbon::now()->timezone('Asia/Manila')
        ]);
        return redirect('admin')->with('success','New Administrator Created Successfuly');

    }

    public function edit($id){
        if(Auth::user()->usertype != 'admin')
        {
            return redirect()->back()->with('error','You are not authorized to Edit Administrator');
        }
        $admin = User::find($id);
        dd($admin);
    }
    public function delete($id){
        if(Auth::user()->usertype != 'admin')
        {
            return redirect()->back()->with('error','You are not authorized to Delete Administrator');
        }
        $admin = User::find($id);
        dd($admin);
    }

    public function show_swap(){
        if(Auth::user()->usertype == 'post-moderator-admin')
        {
             $swap = Post::all();
            return view('admins.admin.swap.show',compact('swap'));
        }
        if(Auth::user()->usertype == 'admin')
        {
             $swap = Post::all();
            return view('admins.admin.swap.show',compact('swap'));
        }
      
        return redirect()->back()->with('error','You are not authorized');
        
    }
    public function show_auction(){
        if(Auth::user()->usertype == 'admin')
        {
            $auction = User::all();
           
            return view('admins.admin.auction.show',compact('auction'));
        }
        if(Auth::user()->usertype == 'post-moderator-admin')
        {
            $auction = auction::all();
          
            return view('admins.admin.auction.show',compact('auction'));
        }
       
        return redirect()->back()->with('error','You are not authorized');
    }
    public function show_user($params){
      if($params == "verified"){
        if(Auth::user()->usertype == 'admin')
        {
            $user = User::where('usertype',null)->where('email_verified_at','!=',null)->get();
             return view('admins.admin.users.show',compact('user')); 
        }
        if(Auth::user()->usertype == 'user-manager-admin')
        {
            $user = User::where('usertype',null)->where('email_verified_at','!=',null)->get();
            return view('admins.admin.users.show',compact('user')); 
        }
      }
      if($params == "not-verified"){
        if(Auth::user()->usertype == 'admin')
        {
            $user = User::where('usertype',null)->where('email_verified_at',null)->get();
            return view('admins.admin.users.show',compact('user'));  
        }
        if(Auth::user()->usertype == 'user-manager-admin')
        {
            $user = User::where('usertype',null)->where('email_verified_at',null)->get();
            return view('admins.admin.users.show',compact('user')); 
        }
      }
        
       
         return redirect()->back()->with('error','You are not authorized');
    }


    public function create_category()
    {
        if(Auth::user()->usertype == 'admin')
        {
            return view('admins.admin.categories.create-categories');
            
        }
        if(Auth::user()->usertype == 'content-manager-admin')
        {
            return view('admins.admin.categories.create-categories');
        }
        return redirect()->back()->with('error','You are not authorized to Add Categories');
    }
    public function create_sub_category()
    {
        if(Auth::user()->usertype == 'admin')
        {
            return view('admins.admin.categories.create-categories');
        }
        if(Auth::user()->usertype == 'content-manager-admin')
        {
            return view('admins.admin.categories.create-categories');
        }
        return redirect()->back()->with('error','You are not authorized to Add Sub_Categories');
    }

}
