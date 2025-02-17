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
            'password' => Hash::make('12345678'),
            'role' => 1,
            'industry' => 'Technology & Business',
            'description' => 'Admin of workbyte, managing platform operations and user experience.',
            'website' => 'https://www.workbyte.com',
            'founded_year' => 2024,
            'company_size' => '1-10',
            'headquarters' => 'Jakarta, Indonesia',
            'company_logo' => 'admin_default.png', 
            'linkedin' => 'https://www.linkedin.com/company/workbyte',
            'twitter' => 'https://twitter.com/workbyte',
            'facebook' => 'https://www.facebook.com/workbyte',
        ]);        

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 0,
        ]);

        User::create( [
            'name' => 'Aiman Wafi\'i',
            'email' => 'aiman@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 0, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create( [
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 0, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'Siti Rahma',
            'email' => 'siti.rahma@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 0, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'Rizky Pratama',
            'email' => 'rizky.pratama@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 0, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}