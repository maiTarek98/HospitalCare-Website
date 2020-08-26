<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Team extends Model
{

        use SearchableTrait;
    protected $fillable = [
        'name', 'type', 'text','image', 'facebook','tewitter','linkedIn'
    ];
    protected $searchable = [
        'columns' => [
            'teams.name' => 10,
            'teams.image' => 5,
            'teams.id' => 3,

        ]
    ];
}
