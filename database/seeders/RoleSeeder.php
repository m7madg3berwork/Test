<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Create Admin Role
         */
        Role::findOrCreate('admin');

        /**
         * Create Haj Role
         */
        Role::findOrCreate('haj');

        /**
         * Create Employee Role
         */
        Role::findOrCreate('employee');
    }
}