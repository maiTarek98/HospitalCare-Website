<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'firstName', 'lastName','email','phone','gender','service','date','time','message'
    ];
   
}
