<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
class HomeController extends Controller
{

  public function search (Request $request) {

      $users = User::where('country','like','%' . $request->country . '%')->where('education',$request->education)
                    ->where('gender',$request->gender === null ? '' : $request->gender)->where('social_status',$request->social_status)->get();

    dd($users);
  }

}
