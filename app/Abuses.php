<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abuses extends Model
{
    public function user (){
        return $this->belongsTo('App\Abuses','user_id');
    }
}
