<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 2,
        ]);

        User::create([
            'name' => 'Aiman',
            'email' => 'aiman@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 1,
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 0,
        ]);
    }
}