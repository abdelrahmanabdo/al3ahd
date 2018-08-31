<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function message () {
        return $this->hasMany('App\messages');
    }


    public function abuses (){
        return $this->hasMany('App\Abuses');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'display_email' , 'gender' , 'nationality' , 'social_status' , 'age' ,'children',
        'country' , 'city' , 'education' ,  'accept_misyar' , 'accept_polygamy' , 'about_me' ,'about_another' , 'profession' , 'profile_picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
