<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
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
    $posts = post::where('user_id',Auth::id())->paginate(10);
    return view('user.profile', compact('posts'));
   }
  
   public function search()
    {

        $search = request()->query('search');
       
        
        if($search!="")
        {   $posts = post::where(function ($query) use ($search){
            $query->where('product_name','like', '%'.$search.'%')
                  ->orWhere('id', 'like', '%'.$search.'%');
        })
        ->paginate(10);
        $posts->appends(['search' => $search]);
           
        }
        else
        {
            $posts = post::paginate(10);
        }
    
        return view('user.profile',compact('posts'));
        
    }
   public function auth_item_show(post $post)
   {
       return view('posts.auth_view',compact('post'));
   }
   public function edit_auth_user_post($posts)
   {
          $posts = post::find($posts);
         return view('posts.edit_user_post',compact('posts'));
   }
   public function update_auth_user_post(Request $request ,post $posts )
   {
      $request->validate([
                'product_name' => 'required',
                'description' => 'required',
                'location' => 'required',
                'wishitem' => 'required',
                'price' => 'required',
                'delivery_method' => 'required'
     ]);
      $posts->update($request->all());
      return redirect()->route('user.profile')
            ->with('success','Product updated successfully');
     
   }
   public function destroy_auth_user_post($posts)
   {
         $posts = post::find($posts);
         $posts->delete();
         return redirect()->route('user.profile')
            ->with('success','Product deleted successfully');
   }
}
