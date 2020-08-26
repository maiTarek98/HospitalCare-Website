<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'sectionTitle', 'sectionText','bgImage'
    ];

    public function chosen()
    {
            return $this->hasMany(Chosen::Class);
    }
}
