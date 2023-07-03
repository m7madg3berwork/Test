<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::whereHas('roles', function ($q) {
            $q->where('name', 'admin');
        })
            ->first();

        if (empty($user)) {
            $user = User::create([
                'name' => 'Admin',
                'email' => 'admin@wyfadah.com',
                'password' => encrypt('123456')
            ]);
            $role = Role::findByName('admin');
            $user->assignRole($role);
        }
    }
}