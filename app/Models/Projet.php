<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'Objet',
        'caract_projet_id',
        'processuse_id',
        'Maitre_d_ouvrage',
        'Année_d_exécution',
        'Budget_alloué',
        'Lieu_référence',
        'Document_référence',
        'Numéro_marché'
    ];
}
