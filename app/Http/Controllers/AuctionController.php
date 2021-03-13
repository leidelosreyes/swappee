<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;

class AuctionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index()
    {   
        $auctions =auction::paginate(9);
        return view('auctions.index',compact('auctions'));
    }

    public function create()
    {   
        return view('auctions.create');
    }

    public function store()
     {
        
         $data = request()->validate([
                'product_name' => 'required',
                 'estimated_price' => 'required',
                'bidding_start_price' => 'required',
                'description' => 'required',
                 'end_date' => 'required',
               'image' => ['required','image']

         ]);

         $imagePath = request('image')->store('uploads','public');
       
         auth()->user()->auctions()->create([
             'product_name' => $data['product_name'],
             'estimated_price' => $data['estimated_price'],
             'description' => $data['description'],
             'bidding_start_price' => $data['bidding_start_price'],
             'end_date' => $data['end_date'],
             'image' => $imagePath


         ]);

         return redirect('home');
        
          
    }
    public function show(auction $auction)
    {
        
        return view('auctions.view',compact('auction'));
    }
}
