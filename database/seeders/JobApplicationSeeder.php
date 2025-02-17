<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JobApplicationSeeder extends Seeder
{
    public function run()
    {
        DB::table('job__applications')->insert([
            [
                'user_id' => 3, 
                'name' => 'Aiman Wafi\'i',
                'email' => 'aiman@gmail.com',
                'phone' => '08123456789',
                'portfolio' => 'https://portfolio-aiman.com',
                'experience' => 'Memiliki pengalaman 2 tahun dalam pengembangan backend menggunakan Laravel.',
                'resume_path' => 'resumes/aiman_resume.pdf',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@gmail.com',
                'phone' => '08129876543',
                'portfolio' => 'https://budisantoso.dev',
                'experience' => 'Berpengalaman sebagai frontend developer dengan React selama 3 tahun.',
                'resume_path' => 'resumes/budi_resume.pdf',
                'status' => 'reviewed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'name' => 'Siti Rahma',
                'email' => 'siti.rahma@gmail.com',
                'phone' => '081211223344',
                'portfolio' => null,
                'experience' => 'Berpengalaman sebagai UI/UX Designer dengan Figma selama 4 tahun.',
                'resume_path' => 'resumes/siti_resume.pdf',
                'status' => 'accepted',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'name' => 'Rizky Pratama',
                'email' => 'rizky.pratama@gmail.com',
                'phone' => '081322334455',
                'portfolio' => 'https://rizkydev.com',
                'experience' => 'DevOps Engineer dengan pengalaman 5 tahun dalam mengelola infrastruktur cloud.',
                'resume_path' => 'resumes/rizky_resume.pdf',
                'status' => 'rejected',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
