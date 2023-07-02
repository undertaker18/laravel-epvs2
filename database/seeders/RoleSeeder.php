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
     */
    public function run(): void
    {
    $superAdmin  =  Role::create(['name' => 'Super Admin']);
    $Registrar = Role::create(['name' => 'Registrar']);
    $Accounting  = Role::create(['name' => 'Accounting Staff']);
    $disabled  = Role::create(['name' => 'Disabled']);

        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'read']);
        Permission::create(['name' => 'update']);
        Permission::create(['name' => 'delete']);
      // Retrieve Permissions
      $permissions = Permission::all();

    // Assign Permissions to Roles
    $superAdmin->syncPermissions($permissions);

    // Assign specific permissions to the $userRole
    $disabled->syncPermissions(['read']);
    $Registrar->syncPermissions(['read']);

    // Assign specific permissions to the $userRole
    $Accounting->syncPermissions(['read', 'update', 'delete']);


    }
}
