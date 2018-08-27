<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail ;
class EmailController extends Controller
{
    public function send(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('login', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('me@gmail.com', 'Christian Nwamba');

            $message->to('dev.abdelrahman1995@gmail.com');

        });

        return response()->json(['message' => 'Request completed']);    }
}
