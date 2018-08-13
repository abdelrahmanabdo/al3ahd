<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Input;

use App\User;
class NavigationController extends Controller
{
    //

    public function home () {
        $armlUsers = User::where('social_status','ارمل')->limit(9)->get();
        $a3zbUsers = User::where('social_status','اعزب')->limit(9)->get();
        $misyarUsers = User::where('accept_misyar',1)->where('gender','انثى')->limit(9)->get();

        return view('home' , [
            'armlUsers' => $armlUsers ,
            'a3zbUsers' => $a3zbUsers ,
            'misyarUsers' => $misyarUsers
        ]);
    }

    public function new_members () {
        $newUsers = User::orderBy('id', 'desc')->limit(8)->get();
        return view('new_members' , ['users' => $newUsers]);
    }

    public function special_members () {
        return view('special_members');
    }

    public function women_mesiar () {
        $mesiarUsers = User::where('accept_misyar','=',1)->where('gender','انثى')->paginate(10);
        return view('women_mesiar' , ['mesiarUsers' => $mesiarUsers]);    
    }

    public function women_multi () {
        $multiUsers = User::where('accept_polygamy','=','1')->where('gender','انثى')->paginate(10);
        return view('women_multi' ,['multiUsers' => $multiUsers]);    
    }


    public function profile ($id) {
        $user = User::where('id',$id)->first();
        return view('profile', ['user' => $user]);      
    }

    public function profile_settings ($id) {
        $user = User::where('id',$id)->first();
        return view('profile_settings', ['user' => $user]);      
    }

    public function login () {
        return view('login');      
    }
    
    public function contact () {
        return view('contact');      
    }

    public function about () {
        return view('about');      
    }

    public function new_account () {
        return view('new_account');      
    }
}
