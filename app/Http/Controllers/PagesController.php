<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // création de la methode home
    public function home()
    {
        // on retourne la vue home
        return view('pages.home');
    }

    // création de la methode portail
    public function portail()
    {
        // on retourne la vue portail
        return view('pages.portail');
    }

    // création de la methode contact
    public function contact()
    {
        // on retourne la vue portail
        //return view('pages.portail');
    }
}
