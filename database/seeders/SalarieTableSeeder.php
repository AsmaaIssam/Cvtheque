<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SalarieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        for ($i=0; $i<10; $i++) {
        DB::table('salaries')->insert([
            [
            'Nom'=> Str::random(10),
            'Prénom' => Str::random(10),
            'CIN'=> Str::random(10),
            'Date_de_naissance' => Carbon::now(),
            'Lieu_de_naissance'=> Str::random(10),
            'Situation_familiale'=> Str::random(10),
            'Nombre_d_enfants' => rand(0,20),
            'Nationalité'=> Str::random(10),
            'Adresse_1'=> Str::random(20),
            'Adresse_2'=> Str::random(20),
            'Code_Postal' => rand(10000,30000),
            'Email'=> Str::random(10),
            'Téléphone_fixe' => Str::random(10),
            'Téléphone_portable'=> Str::random(10),
            'Photo_d_identité'=>Str::random(10),
            'Profile' =>Str::random(10),
            'Numéro_CNSS'=> rand(10000,20000),
            'Responsable_hiérarchique'=> Str::random(10),
            'Poste'=> Str::random(10),
            'Date_d_embauche' => Carbon::now(),
            'Département_d_affectation'=> Str::random(10),
            'Numéro_contrat_de_travail'=> Str::random(10),
            'Type_de_contrat'=> Str::random(10),
            'Contrat_du'=>Carbon::now(),
            'Contrat_au'=>Carbon::now(),
            'Langues'=> Str::random(10),
            'Niveau'=> Str::random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s') 
            ]
        ]);
    }
             
    }
}
