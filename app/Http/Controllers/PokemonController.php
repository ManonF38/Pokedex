<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;

class PokemonController extends Controller
{
    /**
     * HTTP method: GET
     * URL : /pokemon/{id}
     */
    public function details($pokemonId) {

        $pokemon = Pokemon::where('numero', $pokemonId)->first();

        return view(
            // Nom de la View dans /resources/views
            // => /resources/views/main/home.php
            'pokemon.details',
            // Données à transmettre à la View
            [
                'pokemon' => $pokemon
            ]
        );
    }
}
