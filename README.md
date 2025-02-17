## 🛠 Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan WorkByte di lingkungan lokal Anda:

### 1️⃣ Clone Repository
```bash
git clone https://github.com/Aimannawal/SEFEST25WEBDEV_SpeedWin.git workbyte
cd workbyte
```

### 2️⃣ Install Dependencies
```bash
composer install
npm install
```

### 3️⃣ Konfigurasi Environment
📄 Duplikat file `.env.example` menjadi `.env` dan atur konfigurasi database:
```bash
cp .env.example .env
```
🔑 Lalu, generate application key:
```bash
php artisan key:generate
```

### 4️⃣ Migrasi Database & Seeding
Jalankan migrasi database dan seeding untuk mengisi data dummy:
```bash
php artisan migrate --seed
```

### 5️⃣ Storage Link
Jalankan perintah ini untuk membuat symbolic link untuk akses file storage:
```bash
php artisan storage:link
```

### 6️⃣ Menjalankan Aplikasi
🚀 Jalankan Tailwind CSS dan server Laravel:
```bash
npm run dev
php artisan serve
```

🎉 Aplikasi sekarang dapat diakses di `http://127.0.0.1:8000`.

---

### 📧 Informasi Akun
- **Admin**  
  - Email: `admin@gmail.com`  
  - Password: `12345678`

- **User**  
  - Email: `user@gmail.com`  
  - Password: `12345678`
