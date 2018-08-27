<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function dashboard () {
        $allUsers = User::where('isAdmin',0)->count();
        $specialUsers = User::where('membership_type','special')->where('isAdmin',0)->count();
        $blockedUsers = User::where('isBlocked',1)->where('isAdmin',0)->count();
        $maleUsers = User::where('gender','ذكر')->where('isAdmin',0)->count();
        $femaleUsers = User::where('gender','انثي')->where('isAdmin',0)->count();
        $mysiarUsers = User::where('accept_misyar',1)->where('isAdmin',0)->count();
        $devorcedUsers = User::where('social_status','مطلق')->where('isAdmin',0)->count();

        return view('admin.dashboard', [
            'allUsers' =>$allUsers ,
            'specialUsers' => $specialUsers ,
            'blockedUsers' => $blockedUsers ,
            'maleUsers' => $maleUsers ,
            'femaleUsers' => $femaleUsers ,
            'mysiarUsers' => $mysiarUsers ,
            'devorcedUsers' => $devorcedUsers

        ]);
    }
    

    public function all_members () {
        $users = User::paginate('15')->where('isAdmin',0);
        return view('admin.all_members',['users'=>$users]);
    }


    public function blocked_members () {
        $users = User::paginate('15')->where('isBlocked',1);
        return view('admin.blocked_members',['users'=>$users]);
    }


    public function special_members () {
        $users = User::paginate('15')->where('membership_type','special');
        return view('admin.special_members',['users'=>$users]);
    }


    public function get_user_data ($id) {
        $user = User::where('id',$id)->first();
        return view('admin.user', ['user'=>$user]);
    }

    public function block_user ($id) {
        $user = User::findOrFail($id);
        $user->isBlocked = 1 ;
        $user->save();
        return back()->with('alert','تم حظر المستخدم');
    }

    public function unblock_user ($id) {
        $user = User::findOrFail($id);
        $user->isBlocked = 0 ;
        $user->save();
        return back()->with('alert','تم  الغاء الحظر ');
    }


    public function subscribe_user ($id) {
        $user = User::findOrFail($id);
        $user->membership_type = "special" ;
        $user->save();
        return back()->with('alert','تم ترقية العضو');
    }

    public function unsubscribe_user ($id) {
        $user = User::findOrFail($id);
        $user->membership_type = "normal" ;
        $user->save();
        return back()->with('alert','تم الغاء ترقية العضو');
    }
}

