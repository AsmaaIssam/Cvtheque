<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceAnterieure extends Model
{
    use HasFactory;

    protected $fillable = [
    'salarie_id',
    'Date_de_début',
    'Date_de_fin',
    'Poste_occupé',
    'Société',
    'Pays',
    'Ville',
    'Adresse',
    'Description'
    ];

    public function salarie()
    {
        return $this->belongsTo(Salarie::class);
    }
}
