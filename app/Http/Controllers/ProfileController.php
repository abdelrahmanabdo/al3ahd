<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
use Image ;
use Storage ;
use Hash;
use Auth;
use App\Abuses;
use App\askSubscription;
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

    public function changePassword(Request $request){
 
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
 
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
 
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
 
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
 
        return redirect()->back()->with("success","تم تغيير كلمة السر بنجاح !");
 
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
    

    public function removeAccount () {
        if(User::findOrFail(auth()->user()->id)->delete()){
            return route('home')->with('delete_account','تم مسح الاكونت بنجاح');
        }
    }


    public function report_abuse (Request $request , $id) {
        $abuses = new Abuses ;
        $abuses->abuseContent = $request->abuseContent;
        $abuses->user_id = $id;
        if($abuses->save())
        {
        return back()->with('success','تم ارسال الإساءة بنجاح');
        }else{
        return back()->with('success','حدث خطأاثناء ارسال الرسالة');

        }   
    }

    public function ask_subscription(Request $request) {
        $subscribe = new askSubscription ;
        $subscribe->email = $request->email;
        $subscribe->mobile_number = $request->mobile_number;
        $subscribe->user_id = auth()->user()->id;
        if($subscribe->save()){
            return back()->with('success','تم ارسال طلب الترقية بنجاح');
        }
    }

}