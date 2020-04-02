<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * HTTP method: GET
     * URL : /
     */
    public function home() {
        return view(
            // Nom de la View dans /resources/views
            // => /resources/views/main/home.php
            'main.home',
            // Données à transmettre à la View
            [
                'name' => 'Toto'
            ]
        );
    }
}
