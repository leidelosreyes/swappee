<?php

namespace App\Http\Controllers;

use App\Models\{bidder,auction,Offer,Message,User};
use Auth;
use Mail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BidderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datenow = date('Y-m-d');
        $auction = auction::where('end_date',$datenow)->first();
        if( $datenow  == $auction->end_date)
        {
            $max_amount = bidder::max('amount');
            $winners = bidder::where('amount',$max_amount)->first();
            $user_id = $winners->user_id;
            $user = User::findOrFail($user_id);
            $user_email = $user->email;
            $user_name  = $user->name;
            $body_message = "You are the winner of the bidding Please Go to swappee and pay the Cost of item and delivery Charge then give your Drop off location and Contact Person to Deliver your item" ;
            $subject= "Congratulations You Are The Winner";
            $data = array('name'=>$user_name, "body" => $body_message);
            Mail::send('messages.mail', $data, function($message) use($user_email) {
            $message->to($user_email)->subject('Congratulations Bidders You are the winner');
            $message->from('swappee6@gmail.com','Swappee');
            });
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auction = auction::find($request->auction_id);
        $datenow = date('Y-m-d');
        if( $datenow  == $auction->end_date)
        {
            $max_amount = bidder::max('amount');
            $winners = bidder::where('amount',$max_amount)->update([
                'winners' => 1
            ]);
            return redirect()->back()
            ->with('error','Sorry bid has been ended');
        }
        if($request->amount == null){
            return redirect()->back()
            ->with('error','Please enter the amount of your bid');
        }
         
        $data =  request()->validate([
            'amount' => 'required|string|min:2|max:6', 
            'auction_id' => 'required'
        ]);
        $auction = auction::find($request->auction_id);
        if($auction->bidding_start_price > $request->amount)
        {
            return redirect()->back()
            ->with('error','Bid must be higher than bid current price');
        }
        if($auction->bidding_start_price == $request->amount)
        {
            return redirect()->back()
            ->with('error','Bid must be higher than bid current price');
        }

      
        $current_price = $request->amount;
        $auction->bidding_start_price = $current_price;
        $auction->save();
      
        $bidder = bidder::insert([
            'auction_id' => $request->auction_id,
            'user_id'    => Auth::id(),
            'amount'     => $request->amount,
            'created_at' => Carbon::now()->timezone('Asia/Manila'),
        ]);


        return redirect()->back()
        ->with('success','Your Bid is successfuly placed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $messages = Message::where('receiver_id',Auth::id())->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        $notifications = Offer::where('receiver_id',Auth::id())->get();
        $winners = bidder::where('user_id',Auth::id())->Where('winners',1)->simplepaginate(20);
        return view('bidding.winner',compact('winners','messages','offer','notifications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function edit(bidder $bidder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bidder $bidder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function destroy(bidder $bidder)
    {
        //
    }

    public function test(){
        $datenow = date('Y-m-d');
        if( $datenow  == $auction->end_date)
        {
            $max_amount = bidder::max('amount');
            $winners = bidder::where('amount',$max_amount)->update([
                'winners' => 1
            ]);
        }
    }
}
