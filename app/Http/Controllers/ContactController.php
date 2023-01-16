<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // définition de la methode create
    public function create()
    {
        return view('contacts.create');
    }
}
