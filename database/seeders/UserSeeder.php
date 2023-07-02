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
            'password' => bcrypt('K!5@F6w#9g$2rL8a'),
        ]);

        $registrar = User::create([
            'name' => 'Madelyn Romero',
            'email' => 'registrar@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('K!5@F6w#9g$2rL8a'),
        ]);

        $accounting = User::create([
            'name' => 'Jordan Earl Pascua',
            'email' => 'accounting@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('K!5@F6w#9g$2rL8a'),
        ]);

        $disabled = User::create([
            'name' => 'Earl Scoth',
            'email' => 'disabled@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('K!5@F6w#9g$2rL8a'),
        ]);


        // Assign roles to users
        $disabled->assignRole('Disabled');
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
