<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ReferenceAnterieureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        for ($i=0; $i<10; $i++) {
        DB::table('reference_anterieures')->insert([
            [
            'salarie_id' => rand(1,10),
            'Date_de_début' => Carbon::today()->subDays(rand(1000, 36500)),
            'Date_de_fin' => Carbon::today()->subDays(rand(1000, 36500)),
            'Poste_occupé'=> Str::random(20),
            'Société'=> Str::random(20),
            'Pays'=> Str::random(20),
            'Ville'=> Str::random(20),
            'Adresse'=> Str::random(20),
            'Description'=> Str::random(20),
            'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
            ]);
        }
           
    }
}
