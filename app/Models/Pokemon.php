<?php

namespace App\Models;

// On importe le "CoreModel" de Lumen
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model {

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'numero';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pokemon';

    /**
     * Récupère le ou les types appartenant au Pokemon
     */
    public function types()
    {
        return $this->belongsToMany('App\Models\Type', 'pokemon_type', 'pokemon_numero', 'type_id');
    }

}
