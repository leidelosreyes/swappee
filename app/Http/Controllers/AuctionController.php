<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\auction;
use Auth;
use App\Models\{User,Offer,Post,Categories,Sub_categorie,Message};

class AuctionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index()
    {   
        $auctions = auction::where('approved',1)->latest('updated_at','desc')
        ->orderBy('created_at', 'desc')
        ->simplepaginate(20);
        $categories = Categories::all();
        $sub_categories = Sub_categorie::all();
        $notifications = Offer::where('receiver_id',Auth::id())->get();
        return view('auctions.index',compact('auctions','categories','sub_categories','notifications'));
    }

    public function create()
    {   
         
        $messages = Message::where('receiver_id',Auth::id())->simplepaginate(15);
        $categories = Categories::all();
        $sub_categories = Sub_categorie::all();
        $offer = Offer::where('sender_id',Auth::id())->get();
        $notifications = Offer::where('receiver_id',Auth::id())->get();
        return view('auctions.create',compact('messages','categories','sub_categories','offer','notifications'));
    }

    public function store()
     {
        
         $data = request()->validate([
                'product_name' => 'required',
                 'estimated_price' => 'required',
                'bidding_start_price' => 'required',
                'description' => 'required',
                 'end_date' => 'required',
                 'category_id' => 'required',
                 'sub_category_id' => 'required',
                  'image' => ['required','image']

         ]);

         $imagePath = request('image')->store('uploads','public');
       
         auth()->user()->auctions()->create([
             'product_name' => $data['product_name'],
             'estimated_price' => $data['estimated_price'],
             'description' => $data['description'],
             'bidding_start_price' => $data['bidding_start_price'],
             'end_date' => $data['end_date'],
             'category_id'=> $data['category_id'],
             'sub_category_id'=> $data['sub_category_id'],
             'image' => $imagePath


         ]);

         return redirect('auctions/index')->with('success','Please wait for the approval of your product');
        
          
    }
    public function show(auction $auction)
    {
        
        return view('auctions.view',compact('auction'));
    }
}
