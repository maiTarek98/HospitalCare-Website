<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    protected $fillable = [
        'name', 'birth', 'password','retype','position','phone','facebook','twitter','linkedIn','address',
    ];
    public function profile()
    {
            return $this->belongsTo(Profile::Class);
    }
}
