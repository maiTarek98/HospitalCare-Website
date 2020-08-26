<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Openion extends Model
{
    protected $fillable = [
        'doctorName', 'patientName','text','image','country'
    ];

}
