<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    protected $fillable=[
        'nickname',
        'real_name',
        'origin_description',
        'superpowers',
        'catch_phrase',
        'img'
    ];
}
