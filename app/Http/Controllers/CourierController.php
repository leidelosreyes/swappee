<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Models\Profile;

class CourierController extends Controller
{
    public function calculate_order(){
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, 'https://robotapitest.mrspeedy.ph/api/business/1.1/create-order'); 
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); 
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-DV-Auth-Token: 3AA731EB88E2F1155562E4CBFA059C8D00C20959']); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $profile = Profile::where('user_id',Auth::id())->first();
        $data = [ 
            'matter' => 'Documents', 
            'points' => [ 
                [ 
                    'address' => 'camarin caloocan city', 
                    'contact_person' => [ 
                        'phone' => '639195380326', 
                    ], 
                ], 
                [ 
                    'address' => 'Unit 802, EcoTower, 32nd Street corner 9th Avenue, BGC, Taguig, 1634 Metro Manila', 
                    'contact_person' => [ 
                        'phone' => '639195380326', 
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
}
