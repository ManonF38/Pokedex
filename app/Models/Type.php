<?php

namespace App\Models;

// On importe le "CoreModel" de Lumen
use Illuminate\Database\Eloquent\Model;

class Type extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'type';

    /**
     * Récupère les Pokemon liés au Type
     */
    public function pokemons()
    {
        return $this->belongsToMany('App\Models\Pokemon', 'pokemon_type','type_id', 'pokemon_numero');

    }

}
