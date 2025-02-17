<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChallengeSeeder extends Seeder
{
    public function run()
    {
        DB::table('challenges')->insert([
            [
                'title' => 'Graphic Design Challenge',
                'type' => 'Graphic Design',
                'description' => 'Buat desain poster atau logo yang menarik dengan tema inovasi teknologi.',
                'requirements' => 'Kirimkan file dalam format PNG/JPG beserta file sumber (AI/PSD).',
                'evaluation_criteria' => 'Kreativitas, kejelasan pesan, dan estetika desain.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(15),
                'prize_description' => 'Hadiah Rp5.000.000 dan sertifikat.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Development Challenge',
                'type' => 'Web Development',
                'description' => 'Bangun website responsif dan interaktif menggunakan Laravel dan Tailwind CSS.',
                'requirements' => 'Kirimkan link repositori GitHub dan demo live.',
                'evaluation_criteria' => 'Kualitas kode, responsivitas, desain UI/UX, dan fungsionalitas.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(30),
                'prize_description' => 'Hadiah Rp7.500.000 dan sertifikat.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Frontend Development Challenge',
                'type' => 'Frontend Development',
                'description' => 'Kembangkan antarmuka website yang menarik dengan React atau Vue.js.',
                'requirements' => 'Kirimkan kode sumber dan dokumentasi penggunaan.',
                'evaluation_criteria' => 'Responsivitas, performa, dan estetika desain.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(25),
                'prize_description' => 'Hadiah Rp6.000.000 dan sesi mentorship.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'DevOps Challenge',
                'type' => 'DevOps',
                'description' => 'Bangun pipeline CI/CD yang efisien dan otomatis untuk proyek web.',
                'requirements' => 'Gunakan GitHub Actions atau Jenkins dan dokumentasikan prosesnya.',
                'evaluation_criteria' => 'Efisiensi, keamanan, dan skalabilitas pipeline.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(20),
                'prize_description' => 'Hadiah Rp8.000.000 dan kesempatan magang.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Backend Development Challenge',
                'type' => 'Backend Development',
                'description' => 'Bangun API RESTful yang scalable menggunakan Laravel atau Node.js.',
                'requirements' => 'Sertakan dokumentasi API dan contoh implementasi.',
                'evaluation_criteria' => 'Keamanan, efisiensi, dan skalabilitas API.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(30),
                'prize_description' => 'Hadiah Rp7.000.000 dan sesi pelatihan eksklusif.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Full Stack Development Challenge',
                'type' => 'Full Stack Development',
                'description' => 'Buat aplikasi web lengkap dengan fitur autentikasi dan CRUD.',
                'requirements' => 'Gunakan teknologi full stack seperti Laravel + Vue.js atau MERN Stack.',
                'evaluation_criteria' => 'Fungsionalitas, keamanan, dan pengalaman pengguna.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(35),
                'prize_description' => 'Hadiah Rp10.000.000 dan sertifikat.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile App Development Challenge',
                'type' => 'Mobile App Development',
                'description' => 'Kembangkan aplikasi mobile inovatif dengan Flutter atau React Native.',
                'requirements' => 'Sertakan file APK dan repositori kode sumber.',
                'evaluation_criteria' => 'UI/UX, performa, dan fitur inovatif.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(40),
                'prize_description' => 'Hadiah Rp12.000.000 dan kesempatan kerja remote.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UI/UX Design Challenge',
                'type' => 'UI/UX',
                'description' => 'Buat desain prototipe interaktif untuk aplikasi mobile atau web.',
                'requirements' => 'Gunakan Figma atau Adobe XD dan sertakan reasoning desain.',
                'evaluation_criteria' => 'Kreativitas, kemudahan penggunaan, dan estetika.',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(20),
                'prize_description' => 'Hadiah Rp6.000.000 dan mentorship dengan desainer UI/UX profesional.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
