<?php
    // Gérer les titres des pages
    // voir si la fonction page_title n'existe pas

use Illuminate\Support\Facades\Route;

    if(! function_exists('page_title'))
    {
        // on crée la fonction page_title
        function page_title($title)
        {
            // définition d'un titre de base
            $base_title = 'CMTS@ - DGBF';
            // si il n'ya pas de titre
            if($title == '')
            {
                // on renvoie le sigle CMTS@ - DGBF
                return $base_title;
            }
            else
            {
                // dans le cas contraire on retoure le titre et le sigle CMTS@ - DGBF
                return $title .' | '. $base_title;
            }
        }
    }

    // Gérer les routes actives
    // voir si la fonction set_active_route n'existe pas
    if(! function_exists('set__active_route'))
    {
        // on crée la fonction set_active_route
        function set_active_route($route)
        {
            // voir si on se trouve au niveau de la route en question
            return Route::is($route) ? 'active' : '';
        }
    }