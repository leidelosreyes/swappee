<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{Post,User,Offer,Message,Categories,Sub_categorie,auction};
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
    $notifications = Offer::where('receiver_id',Auth::id())->get();
    return view('User.profile', compact('posts','messages','notifications','offer'));
   }
   public function auction_index()
   {
    //    query builder
    // $posts = DB::table('posts')->where('user_id', auth()->id())->get();
    //     eloquent orm
    $posts = post::where('user_id',Auth::id())->simplepaginate(20);
    $messages = Message::where('receiver_id',Auth::id())->get();
    $offer = Offer::where('sender_id',Auth::id())->get();
    $notifications = Offer::where('receiver_id',Auth::id())->get();
    $auctions = auction::where('user_id',Auth::id())->simplepaginate(20);
    return view('auctions.profile_view', compact('posts','messages','notifications','offer','auctions'));
   }
   public function index_public_view()
   {
    //    query builder
    // $posts = DB::table('posts')->where('user_id', auth()->id())->get();
    //     eloquent orm
    $categories = Categories::all();
    $posts = Post::where('user_id',Auth::id())->paginate(10);
    return view('User.profile_public_view', compact('posts','categories'));
   }
   public function search_public_view()
   {

       $search = request()->query('search'); 
       if($search!="")
       {   $posts = Post::where('product_name','like', '%'.$search.'%')
           ->where('user_id',Auth::id())->paginate(10);
           $posts->appends(['search' => $search]);
         
       }
       else
       {
           $posts = Post::paginate(10);
       }
   
       return view('User.profile_public_view',compact('posts'));
       
   }
  
   public function search()
    {

        $search = request()->query('search');
        $messages = Message::where('receiver_id',Auth::id())->get();
        $notifications = Offer::where('receiver_id',Auth::id())->get();
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
    $notifications = Offer::where('receiver_id',Auth::id())->get();
       return view('posts.auth_view',compact('post','notifications'));
   }
   public function edit_auth_user_post($posts)
   {
          $posts = Post::find($posts);
          $messages = Message::where('receiver_id',Auth::id())->get();
          $notifications = Offer::where('receiver_id',Auth::id())->get();
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
      return redirect()->route('user.profile')
            ->with('success','Product updated successfully');
     
   }
   public function destroy_auth_user_post($posts)
   {
         $posts = Post::find($posts);
         $posts->delete();
         return redirect()->route('user.profile')
            ->with('success','Product deleted successfully');
   }
}
