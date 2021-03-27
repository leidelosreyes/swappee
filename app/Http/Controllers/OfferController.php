<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Offer;
use App\Models\User;
use Auth;

class OfferController extends Controller
{
   public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
   public function create($post)
   {

      return view('offers.create',compact('post'));

   }
   public function show_offers()
   {
    $offer = offer::where('sender_id',Auth::id())->get();
   
    
    return view('user.offer', compact('offer'));
   
   }
   public function show_notifications()
   {
    $notifications = offer::where('receiver_id',Auth::id())->get();
    
    $users = DB::table('users')
            ->leftJoin('offers', 'users.id', '=', 'offers.sender_id')
            ->get();
    return view('user.notification',compact('notifications'));
   
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

       return redirect('home')->with('success','Please wait to accept your offer');
   }
}
