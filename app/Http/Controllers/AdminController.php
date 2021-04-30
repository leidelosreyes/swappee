<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User,Offer,Post,Categories,Sub_categorie,Message,bidder};
use Illuminate\Support\Facades\Hash;
use Auth;
use Carbon\Carbon;
class AdminController extends Controller
{
    
    
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
             return $params;
        }
        if($params == 3){
            return $params;
        }
        if($params == 4){
            return $params;
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
}
