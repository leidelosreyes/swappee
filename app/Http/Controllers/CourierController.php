<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Profile;

class CourierController extends Controller
{
    public function calculate_order(){
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, 'https://robotapitest.mrspeedy.ph/api/business/1.1/calculate-order'); 
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); 
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-DV-Auth-Token: 3AA731EB88E2F1155562E4CBFA059C8D00C20959']); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $profile = Profile::where('user_id',Auth::id())->first();
        $location = $profile->address;
        $data = [ 
            'matter' => 'Documents', 
            'points' => [ 
                [ 
                    'address' => $location, 
                ], 
                [ 
                    'address' => 'Unit 802, EcoTower, 32nd Street corner 9th Avenue, BGC, Taguig, 1634 Metro Manila', 
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
        echo $object->order->payment_amount;
        
      
       

    }
}
