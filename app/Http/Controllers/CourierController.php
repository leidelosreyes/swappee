<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{bidder,auction,Offer,Message,User};
use Auth;
use Mail;
use App\Models\Profile;

class CourierController extends Controller
{
    public function calculate_order(){
        $auction_id= bidder::where('user_id',Auth::id())->Where('winners',1)->first();
        $id = $auction_id->auction_id;
        $find_owner = auction::where('id',$id)->first();
        $owner_id = $find_owner->user_id;
        $owner = User::findOrFail($owner_id);
        $pickup_location = $owner->profile->address;
        $contact_no =  $owner->profile->cellphone_no;
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, 'https://robotapitest.mrspeedy.ph/api/business/1.1/calculate-order'); 
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); 
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-DV-Auth-Token: 3AA731EB88E2F1155562E4CBFA059C8D00C20959']); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $profile = Profile::where('user_id',Auth::id())->first();
        $data = [ 
            'matter' => 'Documents', 
            'points' => [ 
                [ 
                    'address' => $pickup_location, 
                ], 
                [ 
                    'address' => $request->drop_off_location, 
                ], 
            ], 
        ]; 
         
        $json = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); 
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json); 
         
        $result = curl_exec($curl); 
        if ($result === false) { 
            throw new Exception(curl_error($curl), curl_errno($curl)); 
        } 
         
        $object = json_decode($result);
        dd($object);
        echo $object->order->points['0']->address;
        echo '<br>';
        echo $object->order->points['1']->address;
        echo '<br>';
      
        echo '<br>';
        echo $object->order->points['0']->tracking_url;
        echo '<br>';
        echo $object->order->delivery_fee_amount;
        echo $object->order->status;
        
    }

    public function store(Request $request){
        $auction_id= bidder::where('user_id',Auth::id())->Where('winners',1)->first();
        $id = $auction_id->auction_id;
        $find_owner = auction::where('id',$id)->first();
        $owner_id = $find_owner->user_id;
        $owner = User::findOrFail($owner_id);
        $pickup_location = $owner->profile->address;
        $contact_no =  $owner->profile->cellphone_no;
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, 'https://robotapitest.mrspeedy.ph/api/business/1.1/calculate-order'); 
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); 
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-DV-Auth-Token: 3AA731EB88E2F1155562E4CBFA059C8D00C20959']); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $profile = Profile::where('user_id',Auth::id())->first();
        $data = [ 
            'matter' => 'Documents', 
            'points' => [ 
                [ 
                    'address' => $pickup_location, 
                    'contact_person' => [ 
                        'phone' => $contact_no, 
                    ], 
                ], 
                [ 
                    'address' =>   $request->drop_off_location, 
                    'contact_person' => [ 
                        'phone' =>$request->contact_number, 
                    ], 
                ], 
            ], 
        ]; 
         
        $json = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); 
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json); 
         
        $result = curl_exec($curl); 
        if ($result === false) { 
            throw new Exception(curl_error($curl), curl_errno($curl)); 
        } 
         
        $object = json_decode($result);
    
        echo $object->order->points['0']->address;
        echo '<br>';
        echo $object->order->points['1']->address;
        echo '<br>';
      
        echo '<br>';
        echo $object->order->points['0']->tracking_url;
        echo '<br>';
        echo $object->order->delivery_fee_amount;
        echo $object->order->status;
        
    }
    public function courier_info_and_location()
    {
        $body_message = "You are the winner of the bidding Please Go to swappee and buy the Cost of item and delivery Charge then give your Drop off location and Contact Person to Deliver your item" ;
        $subject= "Congratulations You Are The Winner";
        $data = array('name'=>"Paulo Onceno", "body" => $body_message);
        Mail::send('messages.mail', $data, function($message) {
        $message->to('shopao1221@gmail.com')->subject('Congratulations Bidders You are the winner');
        $message->from('swappee6@gmail.com','Swappee');
        });

        echo 'email send';
        // $curl = curl_init(); 
        // curl_setopt($curl, CURLOPT_URL, 'https://robotapitest.mrspeedy.ph/api/business/1.1/cancel-order'); 
        // curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); 
        // curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-DV-Auth-Token: 3AA731EB88E2F1155562E4CBFA059C8D00C20959']); 
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
         
        // $data = [ 
        //     'order_id' => 96715, 
        // ]; 
         
        // $json = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); 
        // curl_setopt($curl, CURLOPT_POSTFIELDS, $json); 
         
        // $result = curl_exec($curl); 
        // if ($result === false) { 
        //     throw new Exception(curl_error($curl), curl_errno($curl)); 
        // } 
         
        // echo $result;
    }

    public function calculate_order_swap(Request $request){
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, 'https://robotapitest.mrspeedy.ph/api/business/1.1/calculate-order'); 
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); 
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-DV-Auth-Token: 3AA731EB88E2F1155562E4CBFA059C8D00C20959']); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = [ 
            'matter' => 'Documents', 
            'points' => [ 
                [ 
                    'address' => $request->pickup_location, 
                    'contact_person' => [ 
                        'phone' => $request->contact_no, 
                    ], 
                ], 
                [ 
                    'address' =>   $request->drop_off_location, 
                    'contact_person' => [ 
                        'phone' =>$request->contact_number, 
                    ], 
                ], 
            ], 
        ]; 
         
        $json = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); 
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json); 
         
        $result = curl_exec($curl); 
        if ($result === false) { 
            throw new Exception(curl_error($curl), curl_errno($curl)); 
        } 
         
        $courier = json_decode($result);
        $messages = Message::where('receiver_id',Auth::id())->get();
        $notifications = Offer::where('receiver_id',Auth::id())->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        return view('courier.place_order',compact('courier','messages','notifications','offer'));
    }

     public function place_order_swap(Request $request){
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, 'https://robotapitest.mrspeedy.ph/api/business/1.1/create-order'); 
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); 
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-DV-Auth-Token:  3AA731EB88E2F1155562E4CBFA059C8D00C20959']); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
         
        $data = [ 
            'matter' => 'Documents', 
            'points' => [ 
                [ 
                    'address' => $request->pickup_location, 
                    'contact_person' => [ 
                        'phone' => $request->contact_no, 
                    ], 
                ], 
                [ 
                    'address' =>   $request->drop_off_location, 
                    'contact_person' => [ 
                        'phone' =>$request->contact_number, 
                    ], 
                ], 
            ], 
        ]; 
         
        $json = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); 
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json); 
         
        $result = curl_exec($curl); 
        if ($result === false) { 
            throw new Exception(curl_error($curl), curl_errno($curl)); 
        } 
        $courier = json_decode($result);
        $messages = Message::where('receiver_id',Auth::id())->get();
        $notifications = Offer::where('receiver_id',Auth::id())->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        return view('courier.order_list',compact('courier','messages','notifications','offer'));
     }
}
