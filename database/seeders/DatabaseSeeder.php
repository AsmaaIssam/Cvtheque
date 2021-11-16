<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
         /*    UserSeeder::class, */
            SalarieTableSeeder::class,
            FormationTableSeeder::class,
            ReferenceAnterieureTableSeeder::class,
            ProcessusTableSeeder::class,
            PosteTableSeeder::class,
            CaractProjetTableSeeder::class,
            MissionTableSeeder::class,
            ProjetTableSeeder::class,
            ActiviteTableSeeder::class,
            ProjetTableSeeder::class,
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            
        ]);
        
    }
}
