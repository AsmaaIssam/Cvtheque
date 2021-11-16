<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        for ($i=0; $i<10; $i++) {
        DB::table('missions')->insert([
            [
                'poste_id'=> rand(1,10),
                'Désignation'=> Str::random(10),
                'created_at' => Carbon::now()->format('d-m-Y H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
    }
}
