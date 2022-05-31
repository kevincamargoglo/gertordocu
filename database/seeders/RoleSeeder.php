<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /*
     Admin=> all
     Manager => user 
     Cenabast => ver
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $manager = Role::create(['name' => 'manager']);
        $cenabast = Role::create(['name' => 'cenabast']);

        Permission::create(['name'=> 'admin'])->syncRoles([$admin]);
        Permission::create(['name'=> 'manager'])->syncRoles([$admin,$manager]);
        Permission::create(['name'=> 'cenabast'])->syncRoles([$admin,$cenabast]);

        


    }
}
