<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class FormationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++) {
        DB::table('formations')->insert([
            [
                'salarie_id' => rand(1,10),
                'Niveau_des_études'=> Str::random(10),
                'Intitulé_formation'=> Str::random(10),
                'Intitulé_diplôme'=> Str::random(10),
                'Etablissement_formation'=> Str::random(10),
                'Pays_établissement'=> Str::random(10),
                'Date_de_début' => Carbon::today()->subDays(rand(1000, 36500)),
                'Date_de_fin'=> Carbon::today()->subDays(rand(0, 36500)),
                'Année_d_obtention'=> Carbon::today()->subDays(rand(0, 36500)),
                'Diplôme' => Str::random(10),
                'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
            ]);
        }

    }
}
