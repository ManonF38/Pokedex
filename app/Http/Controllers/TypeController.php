<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Pokemon;

class TypeController extends Controller
{
    /**
     * HTTP method: GET
     * URL : /
     */
    public function list() {

        $typeList = Type::all();

        return view(
            // Nom de la View dans /resources/views
            // => /resources/views/main/home.php
            'type.list',
            // Données à transmettre à la View
            [
                'typeList' => $typeList,
            ]
        );
    }

    /**
     * HTTP method: GET
     * URL : /types/{id}
     */
    public function pokemonList($typeId) {

        $type = Type::find($typeId);

        return view(
            // Nom de la View dans /resources/views
            // => /resources/views/main/home.php
            'type.pokemon_list',
            // Données à transmettre à la View
            [
                'type' => $type
            ]
        );
    }


}
