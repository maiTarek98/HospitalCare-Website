<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function signup()
    {
            return $this->belongsTo(Signup::Class);
    }
}
