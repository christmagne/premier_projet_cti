<?php

namespace App\Repositories;

use App\Models\Classe;
use App\Repositories\BaseRepository;

class ClasseRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Classe::class;
    }
}
