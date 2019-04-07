<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // Asigna el tipo de dato a los campos que se deseen
    protected $casts = [
        'written_by_me' => 'boolean'
    ];
}
