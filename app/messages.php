<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    public function senderUser () {
        return $this->belongsTo('App\User' , 'sender');
    }

    public function receiverUser () {
        return $this->belongsTo('App\User' , 'sender');
    }
}
