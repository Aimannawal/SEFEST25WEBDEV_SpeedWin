<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LearnCourseSeeder extends Seeder
{
    public function run()
    {
        DB::table('learn_courses')->insert([
            [
                'title' => 'Membuat Resep Website dengan Laravel dan React',
                'description' => 'Pelajari cara membuat website resep dengan menggunakan Laravel untuk backend dan React untuk frontend. Kursus ini akan mengajarkan Anda langkah demi langkah, mulai dari setup Laravel hingga integrasi dengan React.',
                'duration' => '10 jam',
                'level' => 'Menengah',
                'rating' => 4.5,
                'students' => 120,
                'image' => '/assets/food.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Membuat Website Portal Berita dengan Laravel',
                'description' => 'Pelajari cara membuat portal berita menggunakan Laravel. Dalam kursus ini, Anda akan belajar mengelola berita, kategori, dan pengaturan pengguna dengan Laravel sebagai framework backend yang kuat.',
                'duration' => '8 jam',
                'level' => 'Menengah',
                'rating' => 4.3,
                'students' => 95,
                'image' => '/assets/portal.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
