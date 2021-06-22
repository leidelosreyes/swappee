<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Mail;
use App\Models\{Post,User,Offer,Message,Categories,Sub_categorie,auction,ActivityLog,Point,Receiveitem};
use Auth;

class OfferController extends Controller
{
   public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
   public function create($post,$post_id)
   {
      $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
      return view('offers.create',compact('post','notifications','post_id'));

   }
   public function show_offers()
   {
    $offer = Offer::where('sender_id',Auth::id())->simplepaginate(20);
    $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
    $messages = Message::where('receiver_id',Auth::id())->get();
    $points = Point::Where('user_id',Auth::id())->first();
    return view('User.offer', compact('offer','messages','notifications','points'));
   
   }
   public function show_notifications()
   {
     $notifications = Offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
     $messages = Message::where('receiver_id',Auth::id())->get();
     $offer = Offer::where('sender_id',Auth::id())->get();
     $points = Point::Where('user_id',Auth::id())->first();
    return view('User.notification',compact('notifications','messages','offer','points'));
   
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

   // function for accepting offer
    public function accept_offer($id){
      $find_user = Offer::findOrFail($id);
      $receiver_id = $find_user->sender_id;
      $receiver = User::findOrFail($receiver_id);
      $user_email = $receiver->email;
      $receiver_name = $receiver->name;
      $sender_name = Auth::user()->name;
      $body_message = "Your Offer is Accepted Clink the link to redirect to Swappee to see full details";
      $subject= "Accepted Offer";
      $data = array('name'=>$receiver_name, "body" => $body_message);
      Mail::send('messages.mail', $data, function($message) use($user_email) {
      $message->to($user_email)->subject('For Swap');
      $message->from('swappee6@gmail.com','Swappee');
      });

         
         $offer = Offer::findOrFail($id)->update([
            'is_accepted' => 1
         ]);
         $offer_id = Offer::find($id);
         $to_recieve = Receiveitem::create([
            'offer_id' => $offer_id->id
         ]);
   //-------------------------- for sending notifications -------------------------//
         return redirect()->back()->with('success','Offer succesfully accepted'); 
      }
   //--------------------------------Show accepted item ---------------------------------
     public function show_for_delivery(){
      $delivery = Offer::where('delivery_method','Delivery')
      ->where('is_accepted',1)
      ->where('receiver_id',Auth::id())
      ->simplepaginate(1);

      dd($delivery);
      $offer = Offer::where('sender_id',Auth::id())->simplepaginate(20);
      $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
      $messages = Message::where('receiver_id',Auth::id())->get();
      $points = Point::Where('user_id',Auth::id())->first();
      return view('accepted_item.delivery_item', compact('offer','messages','notifications','delivery','points'));
   }
   public function show_for_meetup(){
      $delivery = Offer::where('delivery_method','Meet Up')
      ->where('is_accepted',1)
      ->where('receiver_id',Auth::id())
      ->simplepaginate(1);
      $offer = Offer::where('sender_id',Auth::id())->simplepaginate(20);
      $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
      $messages = Message::where('receiver_id',Auth::id())->get();
  $points = Point::Where('user_id',Auth::id())->first();
      return view('accepted_item.meetup_item', compact('offer','messages','notifications','delivery','points'));
   }
      public function send_info_meetup(Request $request){
         $user = User::find($request->sender_id);
         $receiver_name = $user->name;
         $user_email = $user->email;
         $sender_name = Auth::user()->name;
         $body_message = "{$sender_name} Send to you a meetup information Date : {$request->end_date} \n Location : {$request->meetup_location}\n Available Time : {$request->meetup_time}\n Contact number : {$request->contact_no}";
         $data = array('name'=>$receiver_name, "body" => $body_message);
         Mail::send('messages.mail', $data, function($message) use($user_email) {
         $message->to($user_email)->subject('Meet Up Information');
         $message->from('swappee6@gmail.com','Swappee');
         });

         return redirect()->back()->with('success','Meet Up information Succesfully sent');

      }

      public function edit($id){
         $offers = Offer::findOrFail($id);
         if($offers->is_accepted = true){
            return redirect()->back()->with('error','Your Offer is already accepted editing your offer is prohibited');
         }
         $messages = Message::where('receiver_id',Auth::id())->get();
          $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
         $offer = Offer::where('sender_id',Auth::id())->get();
         $sub_categories = Sub_categorie::all();
         $categories = Categories::all();
     $points = Point::Where('user_id',Auth::id())->first();
        return view('offers.edit_user',compact('offers','messages','categories','notifications','sub_categories','offer','points'));
      }

      public function delete($id){
         $offers = Offer::findOrFail($id);
         if($offers->is_accepted = true){
            return redirect()->back()->with('error','Your Offer is already accepted deleting your offer is prohibited');
         }
         if($offers->delete()){
            $action = 'Delete Offers';
            ActivityLog::store_log($action);
            return redirect()->back()->with('success','Offer Successfully Deleted');
         }
   
      }
      public function delete_notification($id){
         $offers = Offer::findOrFail($id);
         if($offers->delete()){
            $action = 'Delete Notifications';
            ActivityLog::store_log($action);
            return redirect()->back()->with('success','Notification Successfully Deleted');
         }
   
      }

   

}
