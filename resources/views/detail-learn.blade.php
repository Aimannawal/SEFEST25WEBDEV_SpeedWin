<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkByte - Detail Kursus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    @vite('resources/css/app.css')
</head>
<body class="font-poppins bg-gradient-to-br from-workbyte-100 to-workbyte-200 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white bg-opacity-90 backdrop-filter backdrop-blur-lg fixed w-full z-10">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold text-workbyte-600">
                    Work<span class="text-workbyte-400">Byte</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="/learn" class="text-workbyte-600 hover:text-workbyte-800 transition duration-300">Belajar</a>
                    <a href="/challenge" class="text-workbyte-600 hover:text-workbyte-800 transition duration-300">Tantangan</a>
                    <a href="/jobs" class="text-workbyte-600 hover:text-workbyte-800 transition duration-300">Cari Kerja</a>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    @auth
                        <div class="relative">
                            <button class="flex items-center text-workbyte-600 hover:text-workbyte-800 focus:outline-none">
                                <span>{{ Auth::user()->name }}</span>
                                <i data-feather="chevron-down" class="ml-2"></i>
                            </button>
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 hidden">
                                <a href="/profile" class="block px-4 py-2 text-sm text-workbyte-600 hover:bg-workbyte-100">Profile</a>
                                <form action="{{ route('logout') }}" method="POST" class="mt-2">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-red-100">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="bg-workbyte-100 text-workbyte-600 px-6 py-2 rounded hover:bg-workbyte-200 transition duration-300">Login</a>
                        <a href="{{ route('register') }}" class="bg-workbyte-600 text-white px-6 py-2 rounded hover:bg-workbyte-700 transition duration-300">Daftar</a>
                    @endauth
                </div>
                <div class="md:hidden">
                    <button class="text-workbyte-600 hover:text-workbyte-800 focus:outline-none" onclick="toggleMobileMenu()">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white" id="mobileMenu">
            <div class="px-6 py-4">
                <a href="/learn" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Belajar</a>
                <a href="/challenge" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Tantangan</a>
                <a href="/jobs" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Cari Kerja</a>
                @auth
                    <a href="/profile" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Profile</a>
                    <form action="{{ route('logout') }}" method="POST" class="mt-2">
                        @csrf
                        <button type="submit" class="block w-full text-left text-red-500 hover:text-red-700 py-2">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Login</a>
                    <a href="{{ route('register') }}" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Daftar</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mt-8">
            <div class="max-w-4xl mx-auto p-4">
                <div class="relative aspect-video rounded-xl overflow-hidden shadow-xl group">
                  <img
                    src="assets/portal.png"
                    alt="Course Cover"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                  />
                  <div class="absolute inset-0 bg-black bg-opacity-30 transition-opacity duration-300 opacity-0 group-hover:opacity-100"></div>
                  <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <h2 class="text-2xl font-bold mb-2">Website Portal Berita</h2>
                    <p class="text-sm">Ayo buat website portal beritamu dengan Laravel</p>
                  </div>
                </div>
              </div>
            <div class="p-8">
                <h1 class="text-3xl font-bold text-workbyte-800 mb-4">Membuat Portal Berita dengan Laravel</h1>
                <div class="flex items-center text-workbyte-600 mb-4">
                    <i data-feather="clock" class="mr-2"></i>
                    <span>8 jam</span>
                </div>
                <p class="text-gray-700 mb-6">
                    Pelajari cara membangun portal berita modern menggunakan Laravel, framework PHP yang powerful untuk membangun aplikasi web yang skalabel dan mudah dikelola.
                </p>
                <div class="bg-workbyte-100 p-6 rounded-lg mb-6">
                    <h2 class="text-2xl font-semibold text-workbyte-800 mb-4">Apa yang akan Anda pelajari:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Dasar-dasar Laravel dan MVC</li>
                        <li>Manajemen database dengan Eloquent ORM</li>
                        <li>Autentikasi dan otorisasi pengguna</li>
                        <li>Membuat sistem manajemen konten berita</li>
                        <li>Implementasi fitur komentar dan kategori</li>
                    </ul>
                </div>
                <div class="bg-workbyte-100 p-6 rounded-lg mb-6">
                    <h2 class="text-2xl font-semibold text-workbyte-800 mb-4">Prasyarat:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Pemahaman dasar HTML, CSS, dan PHP</li>
                        <li>Familiar dengan konsep pemrograman berorientasi objek</li>
                        <li>Pengalaman dengan database MySQL</li>
                    </ul>
                </div>
                <div class="flex flex-col md:flex-row justify-between items-center bg-workbyte-50 p-6 rounded-lg">
                    <div class="mb-4 md:mb-0">
                        <span class="text-3xl font-bold text-workbyte-600">Rp 1.800.000</span>
                        <span class="text-gray-600 ml-2">/ Akses Seumur Hidup</span>
                    </div>
                    <a href="/course" class="bg-workbyte-600 text-white px-8 py-3 rounded-lg hover:bg-workbyte-700 transition duration-300 text-lg font-semibold w-full md:w-auto text-center">
                        Mulai Belajar
                    </a>
                </div>
            </div>
        </div>
    
        <!-- Instructor Section -->
        <div class="mt-12 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-workbyte-800 mb-6">Instruktur</h2>
            <div class="flex items-center">
                <img src="https://avatars.githubusercontent.com/u/118147438?v=4" alt="Instructor" class="w-20 h-20 rounded-full mr-6">
                <div>
                    <h3 class="text-xl font-semibold text-workbyte-700">Masyhudi Affandi</h3>
                    <p class="text-gray-600">Senior Web Developer & Laravel Expert</p>
                    <p class="mt-2 text-gray-700">
                        Masyhudi adalah seorang pengembang web berpengalaman dengan lebih dari 10 tahun di industri. 
                        Ia telah mengembangkan berbagai aplikasi web menggunakan Laravel dan memiliki passion dalam berbagi pengetahuan tentang pengembangan portal berita modern.
                    </p>
                </div>
            </div>
        </div>
    
        <!-- Course Curriculum -->
        <div class="mt-12 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-workbyte-800 mb-6">Kurikulum Kursus</h2>
            <div class="space-y-4">
                <div class="border-b pb-4">
                    <button class="flex justify-between items-center w-full text-left">
                        <span class="text-lg font-medium text-workbyte-700">1. Pengenalan Laravel dan Setup Proyek</span>
                        <i data-feather="chevron-down" class="text-workbyte-600"></i>
                    </button>
                    <ul class="mt-2 ml-4 hidden">
                        <li class="text-gray-700">1.1 Apa itu Laravel?</li>
                        <li class="text-gray-700">1.2 Instalasi Laravel dan konfigurasi proyek</li>
                        <li class="text-gray-700">1.3 Struktur proyek Laravel</li>
                    </ul>
                </div>
                <div class="border-b pb-4">
                    <button class="flex justify-between items-center w-full text-left">
                        <span class="text-lg font-medium text-workbyte-700">2. Database dan Model</span>
                        <i data-feather="chevron-down" class="text-workbyte-600"></i>
                    </button>
                    <ul class="mt-2 ml-4 hidden">
                        <li class="text-gray-700">2.1 Desain database untuk portal berita</li>
                        <li class="text-gray-700">2.2 Membuat migrasi dan model</li>
                        <li class="text-gray-700">2.3 Eloquent ORM dan relasi antar model</li>
                    </ul>
                </div>
                <div class="border-b pb-4">
                    <button class="flex justify-between items-center w-full text-left">
                        <span class="text-lg font-medium text-workbyte-700">3. Autentikasi dan Otorisasi</span>
                        <i data-feather="chevron-down" class="text-workbyte-600"></i>
                    </button>
                    <ul class="mt-2 ml-4 hidden">
                        <li class="text-gray-700">3.1 Implementasi sistem login dan registrasi</li>
                        <li class="text-gray-700">3.2 Middleware dan otorisasi berbasis peran</li>
                        <li class="text-gray-700">3.3 Manajemen sesi pengguna</li>
                    </ul>
                </div>
                <div class="border-b pb-4">
                    <button class="flex justify-between items-center w-full text-left">
                        <span class="text-lg font-medium text-workbyte-700">4. Manajemen Konten Berita</span>
                        <i data-feather="chevron-down" class="text-workbyte-600"></i>
                    </button>
                    <ul class="mt-2 ml-4 hidden">
                        <li class="text-gray-700">4.1 CRUD operasi untuk artikel berita</li>
                        <li class="text-gray-700">4.2 Implementasi kategori dan tag</li>
                        <li class="text-gray-700">4.3 Upload dan manajemen gambar</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </main>

    <!-- Footer -->
    <footer class="bg-workbyte-900 text-white py-12 mt-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Work<span class="text-workbyte-400">Byte</span></h3>
                    <p class="text-workbyte-300">Platform terbaik untuk belajar, menghadapi tantangan, dan menemukan peluang karir di industri teknologi.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-workbyte-300 hover:text-white transition duration-300">Tentang Kami</a></li>
                        <li><a href="#" class="text-workbyte-300 hover:text-white transition duration-300">Kursus</a></li>
                        <li><a href="#" class="text-workbyte-300 hover:text-white transition duration-300">Tantangan</a></li>
                        <li><a href="#" class="text-workbyte-300 hover:text-white transition duration-300">Lowongan Kerja</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Hubungi Kami</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i data-feather="mail" class="mr-2"></i>
                            <a href="mailto:info@workbyte.com" class="text-workbyte-300 hover:text-white transition duration-300">info@workbyte.com</a>
                        </li>
                        <li class="flex items-center">
                            <i data-feather="phone" class="mr-2"></i>
                            <span class="text-workbyte-300">+62 123 4567 890</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-workbyte-300 hover:text-white transition duration-300">
                            <i data-feather="facebook"></i>
                        </a>
                        <a href="#" class="text-workbyte-300 hover:text-white transition duration-300">
                            <i data-feather="twitter"></i>
                        </a>
                        <a href="#" class="text-workbyte-300 hover:text-white transition duration-300">
                            <i data-feather="instagram"></i>
                        </a>
                        <a href="#" class="text-workbyte-300 hover:text-white transition duration-300">
                            <i data-feather="linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-workbyte-700 mt-12 pt-8 text-center">
                <p>&copy; 2023 WorkByte. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
    <script>
        feather.replace();

        // Simple toggle for curriculum sections
        document.querySelectorAll('.border-b button').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                content.classList.toggle('hidden');
                const icon = button.querySelector('i');
                icon.setAttribute('data-feather', content.classList.contains('hidden') ? 'chevron-down' : 'chevron-up');
                feather.replace();
            });
        });
    </script>
</body>
</html>

