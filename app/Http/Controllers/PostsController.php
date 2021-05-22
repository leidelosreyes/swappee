<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Message;
use App\Models\Categories;
use App\Models\Sub_categorie;
use App\Models\{ActivityLog,Offer,Profile};
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
        $sub_categories = Sub_categorie::all();
        $offer = Offer::where('sender_id',Auth::id())->get();
        $notifications = Offer::where('receiver_id',Auth::id())->get();
        return view('posts.create',compact('messages','categories','sub_categories','offer','notifications'));
    }


    public function store(Request $request)
    {
        
        $data = request()->validate([
                'product_name' => 'required',
                'description' => 'required',
                'location' => 'required',
                'wishitem' => 'required',
                'price' => 'required|string|min:2|max:6',
                'category_id' => 'required',
                'sub_category_id' => 'required',
                'delivery_method' => 'required',
                
                'image' => 'required|max:8192|image'

        ]);

        $imagePath = request('image')->store('uploads','public');
        // $imagePath = $request->image;
        // $request->image->move(base_path('public/image'),$imagePath);
        auth()->user()->posts()->create([
            'product_name' => $data['product_name'],
            'description' => $data['description'],
            'location' => $data['location'],
            'wishitem' => $data['wishitem'],
            'price' => $data['price'],
            'category_id' =>$data['category_id'],
            'sub_category_id' =>$data['sub_category_id'],
            'delivery_method' => $data['delivery_method'],
            
            'image' => $imagePath,
            'created_at' => Carbon::now()->timezone('Asia/Manila'),
            'updated_at' => Carbon::now()->timezone('Asia/Manila')


        ]);
        $action = "Created swap item {$request->product_name}";
        $activitylog = ActivityLog::store_log($action);
        return redirect('home')->with('success','Please Wait for the approval of your product !');
        
          
    }
    public function show(post $post)
    {
        // <-- validation to user for swapping -->
        //  $address = auth()->user()->profile->address;
        //     if($address == null){
        //         return redirect()->route('home')
        //       ->with('error','Please go to your profile and provide address');
        //     }
        //     if(Auth::User()->profile->contact_no == null){
        //         return redirect()->route('home')
        //       ->with('error','Please go to your profile and provide contact no');
        //     }
           
           if($post->user_id == Auth::id())
           {
            $action = "Failed Swap-Trying to swap own item";
            $activitylog = ActivityLog::store_log($action);
            return redirect()->route('home')
              ->with('error','You are not able to Swap on your own item');
           }
           $notifications = Offer::where('receiver_id',Auth::id())->get();
           $messages = Message::where('receiver_id',Auth::id())->get();
           $offer = Offer::where('sender_id',Auth::id())->get();
           $more_posts = Post::where('approved',1)->where('user_id',$post->user_id)->simplepaginate(20);
           return view('posts.view',compact('post','more_posts','notifications','messages','offer'));
        
    }


  

    
    
}
