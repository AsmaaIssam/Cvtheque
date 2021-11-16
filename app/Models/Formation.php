<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
    'salarie_id',
    'Année_d_obtention',
    'Niveau_des_études',
    'Intitulé_formation',
    'Intitulé_diplôme',
    'Etablissement_formation',
    'Pays_établissement',
    'Date_de_début',
    'Date_de_fin'
    ];

    public function salarie()
    {
        return $this->belongsTo(Salarie::class);
    }
}
