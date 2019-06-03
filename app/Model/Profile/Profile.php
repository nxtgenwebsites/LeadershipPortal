<?php

namespace App\Model\Profile;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo('App\User','email','email_id1');
    }
}
