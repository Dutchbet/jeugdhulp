<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reflectie extends Model
{   
    protected $fillable = [
        'id', 'antwoord', 'vraagnummer', 'user_id',
    ];
}
