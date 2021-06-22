<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\auction;
use Auth;
use Carbon\Carbon;
use App\Models\{User,Offer,Post,Categories,Sub_categorie,Message,bidder,ActivityLog,Point};

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
        $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
        $messages = Message::where('receiver_id',Auth::id())->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        $points = Point::Where('user_id',Auth::id())->first();
        return view('auctions.index',compact('auctions','categories','sub_categories','notifications','messages','offer','points'));
    }

    public function create()
    {   
         
        $messages = Message::where('receiver_id',Auth::id())->simplepaginate(15);
        $categories = Categories::all();
        $sub_categories = Sub_categorie::all();
        $offer = Offer::where('sender_id',Auth::id())->get();
        $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
        $points = Point::Where('user_id',Auth::id())->first();
        return view('auctions.create',compact('messages','categories','sub_categories','offer','notifications','points'));
    }

    public function store(Request $request)
     {
        
         $data = request()->validate([
                'product_name' => 'required',
                 'estimated_price' => 'required|string|min:2|max:6',
                'bidding_start_price' => 'required|string|min:2|max:6',
                'description' => 'required',
                 'end_date' => 'required',
                 'category_id' => 'required',
                 'sub_category_id' => 'required',
                 'image' => 'required|max:8192|image'

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
             'image' => $imagePath,
             'created_at' => Carbon::now()->timezone('Asia/Manila'),
             'updated_at' => Carbon::now()->timezone('Asia/Manila')


         ]);
         $action = "Created auction item $request->product_name";
         $activitylog = ActivityLog::store_log($action);
         return redirect('auctions/index')->with('success','Please wait for the approval of your product');
        
          
    }
    public function show(Auction $auction)
    {
        // <-- validation to user for bidding -->
       
           if($auction->user_id == Auth::id())
           {
            return redirect()->route('auctions.index')
              ->with('error','You are not able to Bid on your own item');
           }
           $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
           $more_posts = Auction::where('user_id',$auction->user_id)->simplepaginate(20);
           $messages = Message::where('receiver_id',Auth::id())->get();
           $offer = Offer::where('sender_id',Auth::id())->get();
           $bidders = bidder::where('auction_id',$auction->id)->orderBy('amount','desc')->get();
           $points = Point::Where('user_id',Auth::id())->first();
           return view('auctions.view',compact('auction','more_posts','notifications','messages','offer','bidders','points'));
        
    }
    public function edit($id){
        $auctions = auction::find($id);
        if($auctions->approved == true){
            return redirect()->back()->with("error",'Your post has been reviewed and verified by the admin ! Changing information is prohibited');
        }
        $messages = Message::where('receiver_id',Auth::id())->simplepaginate(15);
        $categories = Categories::all();
        $sub_categories = Sub_categorie::all();
        $offer = Offer::where('sender_id',Auth::id())->get();
        $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
        $points = Point::Where('user_id',Auth::id())->first();
        return view('auctions.edit',compact('messages','categories','sub_categories','offer','notifications','points','auctions'));

    }
    public function update(Request $request,$id){
        $request->validate([
            'product_name'        => 'required',
            'estimated_price'     => 'required|string|min:2|max:6',
            'bidding_start_price' => 'required|string|min:2|max:6',
            'description'         => 'required',
            'end_date'            => 'required|date|after_or_equal:date',
            'category_id'         => 'required',
            'sub_category_id'     => 'required',
            'image'               => 'required|max:8192|image'
        ]);
        $imagePath = $request->image->store('uploads','public');
        $auctions = auction::find($id)->update([
            'product_name'         => $request->product_name,
            'estimated_price'      => $request->estimated_price,
            'bidding_start_price'  => $request->bidding_start_price,
            'description'          => $request->description,
            'end_date'             => $request->end_date,
            'category_id'          => $request->category_id,
            'sub_category_id'      => $request->sub_category_id,
            'image'                => $imagePath
        ]);
        return redirect()->route('user.auction_view')->with('success','Auction Post Updated Successfully');
    }
    public function delete($id){
        $item_name = auction::findOrFail($id);
        $action = "Deleted an auction item $item_name->product_name";
         $activitylog = ActivityLog::store_log($action);
        $auction = auction::findOrFail($id)->delete();
        return redirect()->back()->with('success','Auction Deleted Successfully');
    }
    public function search()
    {

        $search = request()->query('search');
       
        
        if($search!="")
        {   $auctions = auction::where(function ($query) use ($search){
            $query->where('product_name', 'like', '%'.$search.'%');
        })
        ->simplepaginate(20);
        $auctions->appends(['search' => $search]);
           
        }
        else
        {
            $auctions = auction::simplepaginate(20);
        }
        $categories = Categories::all();
        $sub_categories = sub_categorie::all();
        $notifications = offer::where('receiver_id',Auth::id())->get();
        $messages = Message::where('receiver_id',Auth::id())->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
      $points = Point::Where('user_id',Auth::id())->first();
        return view('auctions.index',compact('auctions','categories','sub_categories','notifications','messages','offer','points'));
        
    }
}
