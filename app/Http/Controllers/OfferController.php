<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Offer;
use Mail;
use App\Models\Message;
use App\Models\User;
use Auth;

class OfferController extends Controller
{
   public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
   public function create($post,$post_id)
   {
      
      $notifications = Offer::where('receiver_id',Auth::id())->get();
      return view('offers.create',compact('post','notifications','post_id'));

   }
   public function show_offers()
   {
    $offer = Offer::where('sender_id',Auth::id())->get();
    $notifications = Offer::where('receiver_id',Auth::id())->get();
    $messages = Message::where('receiver_id',Auth::id())->get();
    
    return view('User.offer', compact('offer','messages','notifications'));
   
   }
   public function show_notifications()
   {
    $notifications = Offer::where('receiver_id',Auth::id())->get();
     $messages = Message::where('receiver_id',Auth::id())->get();
     $offer = Offer::where('sender_id',Auth::id())->get();
    return view('User.notification',compact('notifications','messages','offer'));
   
   }
   public function store(Request $request )
   {
      
         $data = request()->validate
       ([
        'product_name' => 'required',
        'description' => 'required',
        'location' => 'required',
        'price' => 'required',
        'delivery_method' => 'required',
        'receiver_id' =>'required',
        'post_id' => 'required',
        'image' => 'required|max:8192|image'

       ]);
      
       $imagePath = request('image')->store('uploads','public');
    auth()->user()->sender()->create
    ([
    'product_name' => $data['product_name'],
    'description' => $data['description'],
    'location' => $data['location'],
    'price' => $data['price'],
    'delivery_method' => $data['delivery_method'],
    'receiver_id' => $data['receiver_id'],
    'post_id' => $data['post_id'],
    'image' => $imagePath
       ]);
       //-------------------------- for sending notifications -------------------------//
       $find_receiver_id = $request->receiver_id;
       $receiver= User::findOrFail($find_receiver_id);
       $receiver_name = $receiver->name;
       $user_email = $receiver->email;
       $sender_name = Auth::user()->name;
       $body_message = "{$sender_name} makes an offer to your item; \n item offered name : {$request->product_name} \n Clink the link to redirect to Swappee to see full details";
       $subject= "Congratulations You Are The Winner";
       $data = array('name'=>$receiver_name, "body" => $body_message);
       Mail::send('messages.mail', $data, function($message) use($user_email) {
       $message->to($user_email)->subject('For Swap');
       $message->from('swappee6@gmail.com','Swappee');
       });
       
       return redirect('home')->with('success','Please wait to accept your offer');
   }
}
