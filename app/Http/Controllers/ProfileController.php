<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{Post,User,Offer,Message,Categories,Sub_categorie,auction,ActivityLog,Point};
use Carbon\Carbon;
use Auth;
class ProfileController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth']);
    }
   public function index()
   {
    //    query builder
    // $posts = DB::table('posts')->where('user_id', auth()->id())->get();
    //     eloquent orm
    $posts = post::where('user_id',Auth::id())->simplepaginate(20);
    $messages = Message::where('receiver_id',Auth::id())->get();
    $offer = Offer::where('sender_id',Auth::id())->get();
     $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
    $points = Point::where('user_id',Auth::id())->first();
    return view('User.profile', compact('posts','messages','notifications','offer','points'));
   }
   public function auction_index()
   {
    //    query builder
    // $posts = DB::table('posts')->where('user_id', auth()->id())->get();
    //     eloquent orm
    $posts = post::where('user_id',Auth::id())->simplepaginate(20);
    $messages = Message::where('receiver_id',Auth::id())->get();
    $offer = Offer::where('sender_id',Auth::id())->get();
     $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
    $auctions = auction::where('user_id',Auth::id())->simplepaginate(20);
    return view('auctions.profile_view', compact('posts','messages','notifications','offer','auctions'));
   }
   public function index_public_view()
   {
    //    query builder
    // $posts = DB::table('posts')->where('user_id', auth()->id())->get();
    //     eloquent orm
    // $categories = Categories::all();
    //  $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
    // $offer = Offer::where('sender_id',Auth::id())->get();
    // $posts = Post::where('user_id',Auth::id())->paginate(10);
    // $messages = Message::where('receiver_id',Auth::id())->get();
    // return view('User.profile_public_view', compact('posts','categories','messages','offer','notifications'));
   }
   public function search_public_view($id)
   {
       $search = request()->query('search'); 
       if($search!="")
       {   $posts = Post::where('product_name','like', '%'.$search.'%')
           ->where('user_id',$id)->paginate(10);
           $posts->appends(['search' => $search]);
         
       }
       else
       {
        $posts = Post::where('user_id',$id)->simplepaginate(20);
       }
   
       $users = User::where('id',$id)->first();
        $categories = Categories::all();
         $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
        $points = Point::where('user_id',$id)->first();
        $sub_categories = Sub_categorie::all();
        return view('User.profile_public_view', compact('posts','categories','notifications','users','points','sub_categories'));
       
   }
  
   public function search()
    {

        $search = request()->query('search');
        $messages = Message::where('receiver_id',Auth::id())->get();
         $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        
        if($search!="")
        {   $posts = Post::where('product_name','like', '%'.$search.'%')
            ->where('user_id',Auth::id())->paginate(10);
            $posts->appends(['search' => $search]);
  
        }
        else
        {
            $posts = Post::paginate(10);
        }
    
        return view('User.profile',compact('posts','messages','notifications','offer'));
        
    }
   
   public function auth_item_show(Post $post)
   {
     $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
       return view('posts.auth_view',compact('post','notifications'));
   }
   public function edit_auth_user_post($posts)
   {
          $posts = Post::find($posts);
          $messages = Message::where('receiver_id',Auth::id())->get();
           $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
          $offer = Offer::where('sender_id',Auth::id())->get();
          $sub_categories = Sub_categorie::all();
          $categories = Categories::all();
         return view('posts.edit_user_post',compact('posts','messages','categories','notifications','sub_categories','offer'));
   }
   public function update_auth_user_post(Request $request ,post $posts )
   {
    $data = request()->validate([
        'product_name' => 'required',
        'description' => 'required',
        'location' => 'required',
        'wishitem' => 'required',
        'price' => 'required|string|min:2|max:8',
        'category_id' => 'required',
        'sub_category_id' => 'required',
        'delivery_method' => 'required'    
    ]);
      $posts->update($request->all());
      $action = "Updated an item {$request->product_name}";
      $activitylog = ActivityLog::store_log($action);
      return redirect()->route('user.profile')
            ->with('success','Product updated successfully');
     
   }
   public function destroy_auth_user_post($posts)
   {
         
         $posts = Post::find($posts);
         $action = "Deleted an item {$posts->product_name}";
         $activitylog = ActivityLog::store_log($action);
         $posts->delete();
         return redirect()->route('user.profile')
            ->with('success','Product deleted successfully');
   }
   public function edit_profile(){
    $id = Auth::id();
    $user = User::findOrFail($id);
    $messages = Message::where('receiver_id',Auth::id())->get();
     $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
    $offer = Offer::where('sender_id',Auth::id())->get();
    return view('User.edit_profile',compact('user','messages','notifications','offer'));

   }
   public function update_profile(Request $request){
       $id = Auth::id();
        $request->validate([
            'name'         => 'required',
            'password'     => 'required|Confirmed|min:8',
            'cellphone_no' => 'required',
            'address'      => 'required|max:255',
            'image'        => 'required|max:8192|image'
        ]);
       $imagePath = request('image')->store('uploads','public');   
       $user = User::where('id',$id)->update([
           'name'     => $request->name,
           'email'    => $request->email,
           'password' => $request->password,
           'avatar'   => $imagePath
       ]);
       $profile = Profile::where('user_id',$id)->update([
           'cellphone_no' => $request->cellphone_no,
           'address'      => $request->address,
           'birthday'     => $request->birthday
       ]);
      
        $action = "Updated Profile information";
        $activitylog = ActivityLog::store_log($action);
   }

   public function show_public_view($id){
    $users = User::where('id',$id)->first();
    if(!$users)
    {
    return redirect(404);
    }
    $categories = Categories::all();
     $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
    $posts = Post::where('user_id',$id)->simplepaginate(10);
    $points = Point::where('user_id',$id)->first();
    $sub_categories = Sub_categorie::all();
    return view('User.profile_public_view', compact('posts','categories','notifications','users','points','sub_categories'));
   }

   public function filter_by_category($category,$id){
    $users = User::where('id',$id)->first();
    $posts = Post::where('category_id',$category)
    ->where('user_id',$id)
    ->simplepaginate(20);
    $categories = Categories::all();
    $sub_categories = Sub_categorie::all();
     $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
    $points = Point::where('user_id',$id)->first();
    return view('User.profile_public_view', compact('posts','categories','notifications','users','points','sub_categories'));
   }

   public function filter_by_sub_category($sub_category,$id){
    $users = User::where('id',$id)->first();
    $posts = Post::where('sub_category_id',$sub_category)
    ->where('user_id',$id)
    ->simplepaginate(20);
    $categories = Categories::all();
    $sub_categories = Sub_categorie::all();
     $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
    $points = Point::where('user_id',$id)->first();
    return view('User.profile_public_view', compact('posts','categories','notifications','users','points','sub_categories'));
   }
}
