<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProjetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++) {
            DB::table('projets')->insert([
                [
                    'Objet'=> Str::random(10),
                    'caract_projet_id'=> rand(1,10),
                    'processuse_id'=> rand(1,10),
                    'Maitre_d_ouvrage'=> Str::random(10),
                    'Année_d_exécution'=> Carbon::today()->year,
                    'Budget_alloué'=> rand(0,100000),
                    'Lieu_référence'=> Str::random(10),
                    'Document_référence'=> Str::random(10),
                    'Numéro_marché'=> Str::random(10),
                    'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
            ]);
        }
        
    }
}
