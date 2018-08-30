<?php

namespace App\Http\Controllers;

use App\blocks;
use Illuminate\Http\Request;

class BlocksController extends Controller
{
    /**
     * block user
     *
     * @return \Illuminate\Http\Response
     */
    public function block_user (Request $request) {
        $block = new blocks ; 
        $block->user1 = $request->loggedIn ;
        $block->user2 = $request->user;
        if($block->save())
        {
            return back()->with('success','تم حظر هذا المستخدم');
        }
    }

    public function user_block_list() {
        $blocked = blocks::where('user1' , auth()->user()->id);
    }

}
