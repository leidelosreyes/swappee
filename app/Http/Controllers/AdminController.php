<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{User,Offer,Post,Categories,Sub_categorie,Message,bidder,auction,ActivityLog,Profile,Point};
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Auth;
use Mail;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index()
    {   
        $users = User::where('usertype',null)->get();
        $winners = Bidder::where('winners',1)->get();
        $swaps = Post::get();
        $bidders = bidder::get();
        $points = Point::get();
        return view('admins.admin.index',compact('users','winners','swaps','bidders','points'));
    }

    public function show_admin($params)
    {
        if($params == 1){
            $admins = User::where('usertype','admin')->simplepaginate(10);
            return view('admins.admin.show',compact('admins'));
        }
        if($params == 2){
            $admins = User::where('usertype','post-moderator-admin')->simplepaginate(10);
            return view('admins.admin.show',compact('admins'));
        }
        if($params == 3){
            $admins = User::where('usertype','content-manager-admin')->simplepaginate(10);
            return view('admins.admin.show',compact('admins'));
        }
        if($params == 4){
            $admins = User::where('usertype','user-manager-admin')->simplepaginate(10);
            return view('admins.admin.show',compact('admins'));
        }
      
    }
    public function create(){
        if(Auth::user()->usertype != 'admin')
        {
            $action = "Attempted to access unauthorized module!";
            $activitylog = ActivityLog::store_log($action);
            return redirect()->back()->with('error','You are not authorized to create new Administrator');
        }
        return view('admins.admin.create');
    }
    public function store(Request $request){
        $id = Auth::id();
        $validateData = $request->validate([
            'name' => ['required' ,'min:3' ,'max:50'],
            'email' =>['required'],
            'usertype' => ['required'],
            'email_verified-at'=>$request->email_verified_at,
            'password' => ['required']
        ]);

        $admin = User::insert([
            'name'     => $request->name,
            'email'    => $request->email,
            'usertype' => $request->usertype,
            'email_verified_at' => $request->email_verified_at,
            'password'   => Hash::make($request->password),
            'created_at' => Carbon::now()->timezone('Asia/Manila'),
            'updated_at' => Carbon::now()->timezone('Asia/Manila')
        ]);
        $profile = Profile::where('user_id',$id)->insert([
            'cellphone_no' => $request->cellphone_no,
            'address'      => $request->address,
            'birthday'      => $request->birthday
        ]);
        $action = "Added {$request->name} as {$request->usertype}";
        $activitylog = ActivityLog::store_log($action);
        return redirect('admin')->with('success','New Administrator Created Successfuly');

    }

    public function edit($id){
        if(Auth::user()->usertype != 'admin')
        {
            $action = "Attempted Access unauthorized module ";
            $activitylog = ActivityLog::store_log($action);
            return redirect()->back()->with('error','You are not authorized to Edit Administrator');
        }
        $admin = User::find($id);
        
    }
    public function delete($id){
        if(Auth::user()->usertype != 'admin')
        {
            return redirect()->back()->with('error','You are not authorized to Delete Administrator');
        }
        $admin = User::findOrFail($id);  
    }

    public function show_swap(){
        if(Auth::user()->usertype == 'post-moderator-admin')
        {
             $swaps = Post::simplepaginate(1);
             $sub_categorie = Sub_categorie::all();
             return view('admins.admin.swap.show',compact('swaps','categories','sub_categorie'));
        }
        if(Auth::user()->usertype == 'admin')
        {
             $swaps = Post::simplepaginate(1);
             $categories = Categories::all();
             $sub_categorie = Sub_categorie::all();
            return view('admins.admin.swap.show',compact('swaps','categories','sub_categorie'));
        }
        return redirect()->back()->with('error','You are not authorized');
        
    }
    public function show_auction(){
        if(Auth::user()->usertype == 'admin')
        {
            $auctions = Auction::simplepaginate(10);
           
            return view('admins.admin.auction.show',compact('auctions'));
        }
        if(Auth::user()->usertype == 'post-moderator-admin')
        {
            $auctions = auction::simplepaginate(10);
          
            return view('admins.admin.auction.show',compact('auctions'));
        }

        return redirect()->back()->with('error','You are not authorized');

    }
    public function show_user($params){
      if($params == "verified"){
        if(Auth::user()->usertype == 'admin')
        {
            $users = User::where('usertype',null)->where('email_verified_at','!=',null)->simplepaginate(10);
             return view('admins.admin.users.show',compact('users')); 
        }
        if(Auth::user()->usertype == 'user-manager-admin')
        {
            $users = User::where('usertype',null)->where('email_verified_at','!=',null)->simplepaginate(10);
            return view('admins.admin.users.show',compact('users')); 
        }
      }
      if($params == "not-verified"){
        if(Auth::user()->usertype == 'admin')
        {
            $users = User::where('usertype',null)->where('email_verified_at',null)->simplepaginate(10);
            return view('admins.admin.users.show',compact('users'));  
        }
        if(Auth::user()->usertype == 'user-manager-admin')
        {
            $users = User::where('usertype',null)->where('email_verified_at',null)->simplepaginate(10);
            return view('admins.admin.users.show',compact('users')); 
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
            return view('admins.admin.categories.create-sub-category');
        }
        if(Auth::user()->usertype == 'content-manager-admin')
        {
            return view('admins.admin.categories.create-sub-category');
        }
        return redirect()->back()->with('error','You are not authorized to Add Sub_Categories');
    }


    public function archive($deleted){
        if($deleted == 'posts_deleted'){
            $posts = Post::onlyTrashed()->simplePaginate(20);
            return view('admins.admin.archive.show',compact('posts'));
        }
        if($deleted == 'auctions_deleted'){
            $auctions = Auction::onlyTrashed()->simplepaginate(20);
            return view('admins.admin.archive.auction',compact('auctions'));
        }
        if($deleted == 'admins_deleted'){
            $admins = User::onlyTrashed()->simplepaginate(20);
            return view('admins.admin.archive.admin_disposed',compact('admins'));
        }
        if($deleted == 'offers_deleted'){
            $offers = Offer::onlyTrashed()->simplepaginate(20);
            return view('admins.admin.archive.offer',compact('offers'));
        }
        if($deleted == 'message'){
            $messages = Messages::onlyTrashed()->simplepaginate(20);
        }
       
       
        
    }
   
    public function delete_offer($id){
        $offer = Offer::findOrFail($id)->delete();
        return redirect()->back()->with('success','Admin Deleted Successfully');
    }
    public function post_approval($id){
        $item_name= Post::findOrFail($id);
        $user_id = $item_name->user_id;
        $user = User::findOrFail($user_id);
        $user_name = $user->name;
        $user_email = $user->email;
        $body_message = "Your Post for Swap has been approved and reviewed by Swappee Ph" ;
        $data = array('name'=>$user_name, "body" => $body_message);
        Mail::send('messages.mail', $data, function($message) use($user_email) {
        $message->to($user_email)->subject('Post Approval');
        $message->from('swappee6@gmail.com','Swappee');
        });
        $post = Post::findOrFail($id)->update([
        'approved'=> 1 
        ]);
      
        $action = "Approved Swap Item: {$item_name->product_name}";
        $activitylog = ActivityLog::store_log($action);
        return redirect()->back()->with('success','Posted Item succesfully approved'); 
    }
   
    public function auction_approval($id){
        $post = Auction::findOrFail($id)->update([
        'approved'=> 1 
        ]);
        $item_name= Auction::findOrFail($id);
        $user_id = $item_name->user_id;
        $user = User::findOrFail($user_id);
        $user_name = $user->name;
        $user_email = $user->email;
        $body_message = "Your Post  For Auction has been approved and reviewed by Swappee Ph" ;
        $data = array('name'=>$user_name, "body" => $body_message);
        Mail::send('messages.mail', $data, function($message) use($user_email) {
        $message->to($user_email)->subject('Post Approval');
        $message->from('swappee6@gmail.com','Swappee');
        });
        $action = "Approved Auction Item: {$item_name->product_name}";
        $activitylog = ActivityLog::store_log($action);
        return redirect()->back()->with('success','Auction succesfully approved'); 
    }
    public function delete_swap($id){
        
        $item_name= Post::findOrFail($id);
        $action = "Deleted Item Swap: {$item_name->product_name}";
        $activitylog = ActivityLog::store_log($action);
        $swap = Post::findOrFail($id)->delete();
        return redirect()->back()->with('success','Swap Post Deleted Successfully');
    }
    public function delete_auction($id){
        $item_name= Auction::findOrFail($id);
        $action = "Deleted Auctioned Item: {$item_name->product_name}";
        $activitylog = ActivityLog::store_log($action);
        $auction = Auction::findOrFail($id)->delete();
        return redirect()->back()->with('success','Auction Post Deleted Successfully');
    }

    //----------------------------- function for bidders -------------------------------------//
    public function show_all_bidders(){
         $bidders = Bidder::simplepaginate(20);
         return view('admins.admin.bidding.bidder',compact('bidders'));
    }

    public function show_all_winners(){
        $winners = Bidder::where('winners',1)->simplepaginate(20);
        return view('admins.admin.bidding.winner',compact('winners'));
    }
    public function send_notify($id){
        $winners = Bidder::where('id',$id)->first();
        $user_id = $winners->user_id;
        $user = User::findOrFail($user_id);
        $user_email = $user->email;
        $user_name  = $user->name;
        $body_message = "You are the winner of the bidding Please Go to Swappee Web App and pay the Cost of item and delivery Charge then give your Drop off location and Contact Person to Deliver your item" ;
        $subject= "Congratulations You Are The Winner";
        $data = array('name'=>$user_name, "body" => $body_message);
        Mail::send('messages.mail', $data, function($message) use($user_email) {
        $message->to($user_email)->subject('Congratulations Bidders You are the winner');
        $message->from('swappee6@gmail.com','Swappee');
        });

        return redirect()->back()->with('success','Notification successfully Sent');

    }
    //--------------------------------- end function -----------------------------------------//

    public function update(Request $request,$id){
       
        if(Auth::user()->usertype != 'admin')
        {
            return redirect()->back()->with('error','You are not authorized to Update Administrator');
        }
      
        $admin = User::where('id',$id)->update([
              'name'       =>$request->name,
              'email'      =>$request->email,
              'usertype'   =>$request->usertype,
          ]);
          $profile = Profile::where('id',$id)->update([
            'cellphone_no'=>$request->cellphone_no,
            'address'    =>$request->address
          ]);
        return redirect('admin')->with('success','Admin Successfully updated');
    }
    public function show_activity_logs(){
        $logs = ActivityLog::orderBy('created_at','desc')->simplepaginate(10);
        return view('admins.admin.activity_log',compact('logs'));
    }
    public function search_activity(Request $request){
        if($request->search!="")
        {   $logs = ActivityLog::where('action' , 'like' , '%' .$request->search. '%')
        ->simplepaginate(20);
        $logs->appends(['search' => $request->search]);
        }
        else
        {
            $logs = ActivityLog::simplepaginate(10);
        }
        return view('admins.admin.activity_log',compact('logs'));
    }
    public function search_post(Request $request){
        if($request->search!="")
        {   $swaps= Post::where('product_name' , 'like' , '%' .$request->search. '%')
        ->simplepaginate(20);
        $swap->appends(['search' => $request->search]);
        }
        else
        {
            $swaps = Post::simplepaginate(10);
        }
        return view('admins.admin.swap.show',compact('swaps'));
    }
    public function search_auction(Request $request){
        if($request->search!="")
        {   $swaps= auction::where('product_name' , 'like' , '%' .$request->search. '%')
        ->simplepaginate(20);
        $swap->appends(['search' => $request->search]);
        }
        else
        {
            $swaps = auction::simplepaginate(10);
        }
        return view('admins.admin.swap.show',compact('swaps'));
    }
    public function search_user(Request $request){
        if($request->search!="")
        {   $users= User::where('name' , 'like' , '%' .$request->search. '%')
        ->simplepaginate(20);
        $users->appends(['search' => $request->search]);
        }
        else
        {
            $users = User::simplepaginate(10);
        }
        return view('admins.admin.swap.show',compact('users'));
    }
    public function search_admin(Request $request){
        if($request->search!="")
        {   $admins= User::where('name' , 'like' , '%' .$request->search. '%')
        ->simplepaginate(20);
        $admins->appends(['search' => $request->search]);
        }
        else
        {
            $admins = User::simplepaginate(10);
        }
        return view('admins.admin.show',compact('admins'));
    }
    public function post_details($id){
        $posts = Post::findOrfail($id);
        return view('admins.admin.swap.show_details',compact('posts'));
    }
    public function edit_post(Request $request,$id){
        if(Auth::user()->usertype != 'admin')
        {
            return redirect()->back()->with('error','You are not authorized to Update Administrator');
        }
        $edit = Post::where('id',$id)->update([
            'product_name'      => $request->product_name,
            'description'       => $request->description,
            'location'          => $request->location,
            'wishitem'          => $request->wishitem,
            'price'             => $request->price,
            'delivery_method'   => $request->delivery_method,
            
        ]);
        return redirect()->back()->with('success','Item updated successfully');
    }
    // public function search_admin($admin_id){
    //     $search = $request->query('search_admin');
    //     if($search!=""){
    //         $admin = Users::where('name','like','%'.$search.'%')
    //         ->where('user_id',$admin_id)->paginate(10);
    //         $admin->appends(['search_admin'=>$search]);
    //     }else{
    //         $admin = Users::where('user_id',$admin_id)->simplepaginate(20);
    //     }
    //     return view('admins.admin.show',compact('admins'));
    // }
   
   
}
