<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChallengeRegistrationSeeder extends Seeder
{
    public function run()
    {
        DB::table('challenge__registrations')->insert([
            [
                'user_id' => 3, 
                'name' => 'Aiman Wafi\'i',
                'email' => 'aiman@gmail.com',
                'institution' => 'SMK TELKOM SIDOARJO',
                'whatsapp_number' => '08123456789',
                'experience' => 'Memiliki pengalaman dalam pengembangan web dan aplikasi menggunakan berbagai teknologi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@gmail.com',
                'institution' => 'Universitas Teknologi',
                'whatsapp_number' => '08129876543',
                'experience' => 'Pengalaman dalam pengembangan aplikasi mobile menggunakan React Native.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'name' => 'Siti Rahma',
                'email' => 'siti.rahma@gmail.com',
                'institution' => 'Institut Desain UI/UX',
                'whatsapp_number' => '081211223344',
                'experience' => 'Berpengalaman dalam desain UI/UX dan penggunaan Figma untuk prototyping.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'name' => 'Rizky Pratama',
                'email' => 'rizky.pratama@gmail.com',
                'institution' => 'Sekolah Tinggi Teknologi',
                'whatsapp_number' => '081322334455',
                'experience' => 'Memiliki pengalaman dalam DevOps dan penggunaan berbagai alat CI/CD.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
