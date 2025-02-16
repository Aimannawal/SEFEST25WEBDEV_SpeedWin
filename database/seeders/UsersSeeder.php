<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Aiman Wafi\'i',
            'email' => 'aiman@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 1,
            'industry' => 'Information Technology',
            'description' => 'TechCorp Solutions is a leading provider of innovative technology solutions.',
            'website' => 'https://www.techcorpsolutions.com',
            'founded_year' => 2010,
            'company_size' => '51-200',
            'headquarters' => 'San Francisco, CA',
            'company_logo' => 'default.png', 
            'linkedin' => 'https://www.linkedin.com/company/techcorp-solutions',
            'twitter' => 'https://twitter.com/techcorpsolutions',
            'facebook' => 'https://www.facebook.com/techcorpsolutions',
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 0,
        ]);
    }
}