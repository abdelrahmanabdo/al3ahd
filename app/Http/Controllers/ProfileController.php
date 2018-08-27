<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
class ProfileController extends Controller
{
    public function update_socail_links (Request $request , $id) {
        $user = User::findOrFail($id);
        $user->facebook_link = $request->facebook;
        $user->twitter_link = $request->twitter;
        $user->gmail_link = $request->gmail;
        $user->instagram_link = $request->instagram;
        $user->linkedin_link = $request->linkedin;
        $user->save();
        return back()->with('alert','تم حفظ التغييرات بنجاح');
    }


    public function update_profile_data (Request $request , $id) {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return back()->with('alert','تم حفظ التغييرات بنجاح');
    }   
}
