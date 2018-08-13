<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request ;
use Image;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }


    /**
     * Upload user's profile picture 
     */
    protected function uploadImage(Request $request) {
        dd($request);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        if($request->hasFile('profile_picture')){
            $originalImage =  $data->file('profile_picture');
            $coursesPath = 'app/avatars/';
            $img = Image::make($originalImage);
            $imageURL = $coursesPath.time().'.'.$originalImage->getClientOriginalExtension();
            $img->save($imageURL);
        }else{
           $imageURL ='images/img-profile.jpg';
        }

        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'display_email' => $data['display_email'],
            'gender'=> $data['gender'],
            'nationality' => $data['nationality'],
            'social_status'=> $data['social_status'],
            'age' => $data['age'],
            'country' => $data['country'],
            'city'=> $data['city'],
            'education' => $data['education'],
            'accept_misyar' => $data['accept_misyar'],
            'accept_polygamy' => $data['accept_polygamy'],
            'about_me' => $data['about_me'],
            'about_another' => $data['about_another'],
            'profession' => $data['profession'],
            'children' =>$data['children'],
            'profile_picture' => $imageURL
        ]);
    }
}
