<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('learn_courses', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Nama kursus
            $table->text('description'); // Deskripsi kursus
            $table->string('duration'); // Durasi kursus (misal: "10 jam")
            $table->enum('level', ['Pemula', 'Menengah', 'Lanjutan']); // Level kursus
            $table->decimal('rating', 2, 1)->default(0); // Rating kursus (contoh: 4.5)
            $table->integer('students')->default(0); // Jumlah siswa
            $table->string('image')->default('/assets/download.jpg'); // Gambar kursus
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learn_courses');
    }
};
