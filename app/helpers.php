<?php
    // voir si la fonction page_title n'existe pas
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