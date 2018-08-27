<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
use Image ;
use Storage ;
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
        return back()->with('social_alert','تم حفظ التغييرات بنجاح');
    }


    public function update_profile_data (Request $request , $id) {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return back()->with('data_alert','تم حفظ التغييرات بنجاح');
    }  
    
    
    public function update_profile_avatar (Request $request , $id) {
        
        if($request->hasFile('avatar')){
            $originalImage =  $request->file('avatar');
            $coursesPath = storage_path('app/public/avatars/');
            $img = Image::make($originalImage);
            $imageURL = time().'.'.$originalImage->getClientOriginalExtension();
            $img->stream(); // <-- Key point
            Storage::disk('local')->put('avatars/'.'/'.$imageURL, $img);
            $img->save($imageURL);
            $user = User::findOrFail($id);
            $user->profile_picture = $imageURL;
            $user->update();
            return back()->with('avatar_alert','تم تغيير الصورة بنجاح');

        }else{
            return back()->with('alert','من فضلك  أختر صورة جديدة');

        }

    }   
}
