<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CaractProjetTableSeeder extends Seeder   
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++) {
            DB::table('caract_projets')->insert([
                [
                    'Code_caract'=> Str::random(10),
                    'désignation'=> Str::random(10),
                    'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
            ]);
        }
    }
}
