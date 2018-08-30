<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSettings extends Model
{
    protected $fillable = ['logo', 'website_name','description', 'mobile_number','email','facebook_link','twitter_link','instagram_link' , 'vim_link']; // every field to fill

}
