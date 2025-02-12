<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// route pour la page d'accueil
$router->get(
    '/',
    [
        'uses' => 'MainController@home',
        'as'   => 'main-home'
    ]
);

// route pour la page détails
$router->get(
    '/pokemon/{id}',
    [
        'uses' => 'PokemonController@details',
        'as'   => 'pokemon-details'
    ]
);

// route pour la liste des types
$router->get(
    '/types',
    [
        'uses' => 'TypeController@list',
        'as'   => 'type-list'
    ]
);


// route pour la liste des types
$router->get(
    '/types/{id}',
    [
        'uses' => 'TypeController@pokemonList',
        'as'   => 'type-pokemon-list'
    ]
);
