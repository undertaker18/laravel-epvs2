<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'name' => 'Angel Blaze Candinato',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        $registrar = User::create([
            'name' => 'Madelyn Romero',
            'email' => 'registrar@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        $accounting = User::create([
            'name' => 'Jordan Earl Pascua',
            'email' => 'accounting@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);


        // Assign roles to users

        $registrar->assignRole('Registrar');
        $accounting->assignRole('Accounting Staff');

        // Get all permissions from other roles
        // Assign the 'admin' role to the admin user
        $adminRole = Role::where('name', 'Super Admin')->first();
        if ($adminRole) {
        $superAdmin->assignRole($adminRole);
    }
    }
}
