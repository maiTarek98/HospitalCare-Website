<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactform extends Model
{
    protected $fillable = [
        'fullname', 'email', 'phone','message','subject'
    ];
}
