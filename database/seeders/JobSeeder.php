<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JobSeeder extends Seeder
{
    public function run()
    {
        DB::table('jobs')->insert([
            [
                'title' => 'Graphic Designer',
                'company' => 'TechCorp Solutions',
                'location' => 'Jakarta, Indonesia',
                'job_type' => 'Full-time',
                'description' => 'Bertanggung jawab untuk menciptakan desain visual menarik untuk branding dan pemasaran.',
                'responsibilities' => 'Membuat desain grafis, ilustrasi, dan materi pemasaran.',
                'qualifications' => 'Pengalaman minimal 2 tahun di bidang desain grafis dan menguasai Adobe Illustrator, Photoshop.',
                'salary_range' => 'Rp7.000.000 - Rp12.000.000',
                'application_deadline' => Carbon::now()->addDays(30),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Developer',
                'company' => 'CodeTech',
                'location' => 'Remote',
                'job_type' => 'Freelance',
                'description' => 'Mengembangkan dan memelihara website berbasis Laravel dan Tailwind CSS.',
                'responsibilities' => 'Membangun fitur baru, memperbaiki bug, dan meningkatkan performa website.',
                'qualifications' => 'Menguasai PHP, Laravel, dan Tailwind CSS.',
                'salary_range' => 'Rp10.000.000 - Rp15.000.000',
                'application_deadline' => Carbon::now()->addDays(20),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Frontend Developer',
                'company' => 'Startup Digital',
                'location' => 'Bandung, Indonesia',
                'job_type' => 'Full-time',
                'description' => 'Membangun UI interaktif dan responsif menggunakan React atau Vue.js.',
                'responsibilities' => 'Mengembangkan dan mengoptimalkan UI/UX aplikasi web.',
                'qualifications' => 'Menguasai JavaScript, React/Vue.js, dan CSS modern.',
                'salary_range' => 'Rp9.000.000 - Rp14.000.000',
                'application_deadline' => Carbon::now()->addDays(25),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'DevOps Engineer',
                'company' => 'CloudTech',
                'location' => 'Remote',
                'job_type' => 'Contract',
                'description' => 'Bertanggung jawab atas pengelolaan infrastruktur cloud dan CI/CD pipeline.',
                'responsibilities' => 'Menyiapkan dan mengelola lingkungan cloud serta mengotomatisasi deployment.',
                'qualifications' => 'Menguasai AWS, Docker, Kubernetes, dan CI/CD.',
                'salary_range' => 'Rp12.000.000 - Rp18.000.000',
                'application_deadline' => Carbon::now()->addDays(30),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Backend Developer',
                'company' => 'SoftwareHub',
                'location' => 'Surabaya, Indonesia',
                'job_type' => 'Full-time',
                'description' => 'Mengembangkan API dan sistem backend untuk aplikasi web berbasis Laravel.',
                'responsibilities' => 'Membangun API RESTful, mengoptimalkan performa, dan mengelola database.',
                'qualifications' => 'Menguasai Laravel, MySQL, dan Redis.',
                'salary_range' => 'Rp10.000.000 - Rp16.000.000',
                'application_deadline' => Carbon::now()->addDays(35),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Full Stack Developer',
                'company' => 'Innovatech',
                'location' => 'Remote',
                'job_type' => 'Full-time',
                'description' => 'Membangun aplikasi web full stack dengan MERN Stack atau Laravel + Vue.js.',
                'responsibilities' => 'Mengembangkan frontend dan backend aplikasi web.',
                'qualifications' => 'Menguasai MERN Stack atau Laravel + Vue.js.',
                'salary_range' => 'Rp11.000.000 - Rp17.000.000',
                'application_deadline' => Carbon::now()->addDays(40),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile App Developer',
                'company' => 'MobileX',
                'location' => 'Yogyakarta, Indonesia',
                'job_type' => 'Part-time',
                'description' => 'Membangun aplikasi mobile menggunakan Flutter atau React Native.',
                'responsibilities' => 'Mengembangkan aplikasi mobile yang responsif dan optimal.',
                'qualifications' => 'Menguasai Flutter atau React Native.',
                'salary_range' => 'Rp8.000.000 - Rp14.000.000',
                'application_deadline' => Carbon::now()->addDays(30),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UI/UX Designer',
                'company' => 'DesignStudio',
                'location' => 'Remote',
                'job_type' => 'Contract',
                'description' => 'Merancang pengalaman pengguna yang intuitif dan menarik untuk aplikasi web dan mobile.',
                'responsibilities' => 'Menganalisis kebutuhan pengguna dan membuat wireframe/prototipe.',
                'qualifications' => 'Menguasai Figma, Adobe XD, dan prinsip desain UI/UX.',
                'salary_range' => 'Rp7.500.000 - Rp13.000.000',
                'application_deadline' => Carbon::now()->addDays(25),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
