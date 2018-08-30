<?php

namespace App\Http\Controllers;

use App\messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
  
    public function send_message (Request $request , $id) {
        $message = new messages ;
        $message->sender = \Auth::user()->id;
        $message->receiver = $id ;
        $message->title = $request->title;
        $message->content = $request->content ;
        $message->save();
        return back()->with('success','تم إرسال الرسالة بنجاح');
    }

    public function user_sent_messages($id) {
        $Messages = messages::with('senderUser')->where('sender',$id)->get();
        return view('user_sent_messages',['messages' => $Messages]);

    }

    public function user_received_messages($id) {
        $Messages = messages::with('receiverUser')->where('receiver',$id)->get();
        return view('user_received_messages',['messages' => $Messages]);

    }   


    public function single_message($messageId) {
        $message = messages::with('senderUser')->where('id',$messageId)->first();
        return view('view_message',['message'=>$message]);
    }
}
