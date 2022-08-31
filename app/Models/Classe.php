<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public $table = 'classes';

    public $fillable = [
        'cours',
        'niveau',
        'enseignant',
        'tranche_horaire',
        'jour_cours',
        'salle',
        'cout_formation',
        'cout_inscription',
        'cout_documentation',
        'date_debut',
        'date_fin',
        'date_test_ligne'
    ];

    protected $casts = [
        'cours' => 'string',
        'niveau' => 'string',
        'enseignant' => 'string',
        'tranche_horaire' => 'string',
        'jour_cours' => 'string',
        'salle' => 'string',
        'date_debut' => 'date',
        'date_fin' => 'date',
        'date_test_ligne' => 'date'
    ];

    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'cours' => 'required|string',
        'niveau' => 'required|string',
        'enseignant' => 'required|string',
        'tranche_horaire' => 'required|string',
        'jour_cours' => 'required|string',
        'salle' => 'required|string',
        'cout_formation' => 'required',
        'cout_inscription' => 'required',
        'cout_documentation' => 'nullable',
        'date_debut' => 'required',
        'date_fin' => 'required',
        'date_test_ligne' => 'nullable'
    ];

    
}
