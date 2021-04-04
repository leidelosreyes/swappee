<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Message;
use App\Models\Categories;
use App\Models\Sub_Categorie;
use App\Models\Offer;
use Carbon\Carbon;
use Auth;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function create()
    {   
        $messages = Message::where('receiver_id',Auth::id())->simplepaginate(15);
        $categories = Categories::all();
        $sub_categories = sub_categorie::all();
        $notifications = Offer::all();
        return view('posts.create',compact('messages','categories','sub_categories','notifications'));
    }

    public function store()
    {
        
        $data = request()->validate([
                'product_name' => 'required',
                'description' => 'required',
                'location' => 'required',
                'wishitem' => 'required',
                'price' => 'required',
                'category_id' => 'required',
                'sub_category_id' => 'required',
                'delivery_method' => 'required',
                
                'image' => ['required','image']

        ]);

        $imagePath = request('image')->store('uploads','public');
       
        auth()->user()->posts()->create([
            'product_name' => $data['product_name'],
            'description' => $data['description'],
            'location' => $data['location'],
            'wishitem' => $data['wishitem'],
            'price' => $data['price'],
            'category_id' =>$data['category_id'],
            'sub_category_id' =>$data['sub_category_id'],
            'delivery_method' => $data['delivery_method'],
            
            'image' => $imagePath


        ]);

        return redirect('home')->with('success','Please Wait for the approval of your product !');
        
          
    }
    public function show(post $post)
    {
        // <-- validation to user for swapping -->
       
           if($post->user_id == Auth::id())
           {
            return redirect()->route('home')
              ->with('error','You are not able to Swap on your own item');
           }
       
           $more_posts = post::where('user_id',$post->user_id)->simplepaginate(20);
            return view('posts.view',compact('post','more_posts'));
        
    }


  

    
    
}
