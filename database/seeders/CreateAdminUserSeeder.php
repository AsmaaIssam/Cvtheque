<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'user', 
            'first_name' => 'user', 
            'last_name' => 'user', 
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    
        $role = Role::create(['name' => 'Super Admin','description'=>"le super admin est l'utilisateur le plus puissant" ]);
        $role2 = Role::create(['name' => 'Administrateur','description'=>"l'administrateur gére les utilisateurs et les roles" ]);
        
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
        $role2->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
