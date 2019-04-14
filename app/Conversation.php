<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Conversation extends Model
{
    // Se agrega campo adicional que se incluira en la respuesta de datos
    protected $appends = ['contact_name'];

    public function getContactNameAttribute()
    {
        return $this->contact()->first(['name'])->name;
    }

    public function contact()
    {
        // Conversation N  1 User (Contact)
        return $this->belongsTo(User::class);
    }
}
