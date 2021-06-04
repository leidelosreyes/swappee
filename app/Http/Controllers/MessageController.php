<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Offer;
use App\Models\User;
use App\Models\Message;
use Auth;

class MessageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function show_message(message $messages)
    {
        // $messagesside = Message::where('receiver_id',Auth::id())->get();

     $messages = Message::where('receiver_id',Auth::id())->simplepaginate();
       
     $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
     $reply = Message::where('sender_id',Auth::id())
        ->where('reply',1)
         ->get();
    //   ->get();
      $offer = Offer::where('sender_id',Auth::id())->get();
    
     
    // dd($reply);
     return view('messages.message',compact('messages','notifications','offer','reply'));
    
    }
    public function show_sender_message($id){
        $message_sender = Message::findOrFail($id);
        $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
        $reply = Message::where('sender_id',Auth::id())
        ->where('reply',1)
         ->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        $messages = Message::where('receiver_id',Auth::id())->simplepaginate();
        return view('messages.show',compact('message_sender','notifications','offer','messages','reply'));
    }
    public function show_sent_item(){
        $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
         $reply = Message::where('sender_id',Auth::id())
         ->where('reply',1)
          ->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        $messages = Message::where('receiver_id',Auth::id())->simplepaginate();
        return view('messages.sent_item',compact('reply','notifications','offer','messages'));
    }
    public function show_reply_message($id){
        $notifications = offer::where('receiver_id',Auth::id())->where('is_accepted',0)->get();
        $reply = Message::where('sender_id',Auth::id())
        ->where('reply',1)
         ->find($id);
        $offer = Offer::where('sender_id',Auth::id())->get();
        $offer = Offer::where('sender_id',Auth::id())->get();
        $messages = Message::where('receiver_id',Auth::id())->simplepaginate();
        return view('messages.show_sent_item',compact('notifications','offer','messages','reply'));
    }

    public function store(Request $request )
    {
 
     
     $data = request()->validate
        ([
         'message' => 'required',
         'receiver_id' =>'required'
        ]);
       
     auth()->user()->m_sender()->create
     ([
     'message' => $data['message'],
     'receiver_id' => $data['receiver_id']
    
        ]);
 
        return redirect()->back()->with('success','Your Message successfully sent');
    }
    public function store_reply(Request $request )
    {
 
     
     $data = request()->validate
        ([
         'message' => 'required',
         'receiver_id' =>'required'
        ]);
       
     auth()->user()->m_sender()->create
     ([
     'message' => $data['message'],
     'receiver_id' => $data['receiver_id'],
     'reply' => 1
        ]);
 
        return redirect()->back()->with('success','Your Message successfully sent');
    }

    public function delete_message($id){
        $message = Message::find($id)->delete();
        return redirect()->back()->with('success','Your Message successfully Deleted');
    }
}
