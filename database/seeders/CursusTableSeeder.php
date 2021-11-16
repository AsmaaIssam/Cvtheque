<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CursusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   for ($i=0; $i<10; $i++) {
        DB::table('cursuses')->insert([
        [
       'salarie_id' => rand(1,10),
        'Niveau_d_études'=> Str::random(20),
        'Intitulé_diplôme'=> Str::random(20),
        'Année_d_obtention' => Carbon::today()->subDays(rand(1000, 36500)),
        'Date_de_début' => Carbon::today()->subDays(rand(1000, 36500)),
        'Date_de_fin'=> Carbon::today()->subDays(rand(365, 8000)),
        'Etablissement_scolaire'=> Str::random(20),
        'Pays_établissement_scolaire'=> Str::random(20),
        'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]
        ]);
    }
    }
}
