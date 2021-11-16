<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salarie extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom',
        'Prénom',
        'CIN',
        'Date_de_naissance',
        'Lieu_de_naissance',
        'Situation_familiale',
        'Nombre_d_enfants',
        'Nationalité',
        'Adresse_1',
        'Adresse_2',
        'Code_Postal',
        'Email',
        'Téléphone_fixe',
        'Téléphone_portable',
        'Photo_d_identité',
        'Profile',
        'Numéro_CNSS',
        'Responsable_hiérarchique',
        'Poste',
        'Date_d_embauche',
        'Département_d_affectation',
        'Numéro_contrat_de_travail',
        'Type_de_contrat',
        'Contrat_du',
        'Contrat_au',
        'Langues',
        'Niveau'

    ];

    public function formation()
    {
        return $this->hasOne(Formation::class);
    }

    public function reference()
    {
        return $this->hasOne(ReferenceAnterieure::class);
    }
}
