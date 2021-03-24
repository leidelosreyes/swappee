<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class OfferController extends Controller
{
   public function create(post $posts)
   {
     
    
      return view('offers.create',compact('posts'));

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
        'image' => ['required','image']

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
    'image' => $imagePath
       ]);

       echo "success";
   }
}
