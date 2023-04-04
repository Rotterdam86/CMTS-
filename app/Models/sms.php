<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sms extends Model
{
    use HasFactory;

    // les champs qu'on peut travailler
    protected $fillable = ['nom', 'prenom', 'email', 'sms'];
}
