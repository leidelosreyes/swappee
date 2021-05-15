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

    // $messages_side = Message::where('receiver_id',Auth::id())->get();
       
     $notifications = Offer::where('receiver_id',Auth::id())->get();
     $reply = Message::where('id',$messages->id)
      ->where('sender_id',Auth::id())
     ->where('reply',1)
      ->get();
      $offer = Offer::where('sender_id',Auth::id())->get();
    
     
    // dd($reply);
     return view('messages.message',compact('messages','notifications','reply','offer'));
    
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
 
        return redirect('home')->with('success','Your Message successfully sent');
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
}
