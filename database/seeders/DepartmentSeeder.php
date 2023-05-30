<?php

namespace Database\Seeders;
use App\Models\Department;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed your data here
        Department::create(['department_list' => 'Elementary']);
        Department::create(['department_list' => 'Junior High School']);
        Department::create(['department_list' => 'Senior High School']);
        Department::create(['department_list' => 'College']);

        
    }
}
