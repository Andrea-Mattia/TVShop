<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    protected $fillable = [
        'name',
        'description',
        'inch',
        'price'
    ];
}
