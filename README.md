# WorkByte

WorkByte adalah platform yang memungkinkan pengguna untuk mencari pekerjaan, belajar, dan menghadapi tantangan baru untuk meningkatkan keterampilan mereka.

## Fitur Utama
- **Pembelajaran**: Akses berbagai course dan tantangan untuk meningkatkan keterampilan.
- **Tantangan**: Selesaikan tantangan dari perusahaan atau komunitas untuk mendapatkan pengalaman.
- **Pencarian Kerja**: Temukan berbagai lowongan pekerjaan yang sesuai dengan keahlian Anda.

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan WorkByte di lingkungan lokal Anda:

### 1. Clone Repository
```bash
git clone https://github.com/username/workbyte.git
cd workbyte
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Konfigurasi Environment
Duplikat file `.env.example` menjadi `.env` dan atur konfigurasi database:
```bash
cp .env.example .env
```
Lalu, generate application key:
```bash
php artisan key:generate
```

### 4. Migrasi Database & Seeding
```bash
php artisan migrate --seed
```

### 5. Menjalankan Aplikasi
Jalankan Tailwind CSS dan server Laravel:
```bash
npm run dev
php artisan serve
```

Aplikasi sekarang dapat diakses di `http://127.0.0.1:8000`.
