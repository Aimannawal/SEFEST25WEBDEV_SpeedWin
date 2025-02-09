<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkByte - Belajar, Tantangan, dan Cari Kerja</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
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
                <div class="hidden md:flex space-x-4">
                    <a href="{{ route('login') }}" class="bg-workbyte-100 text-workbyte-600 px-6 py-2 rounded hover:bg-workbyte-200 transition duration-300">Login</a>
                    <a href="{{ route('register') }}" class="bg-workbyte-600 text-white px-6 py-2 rounded hover:bg-workbyte-700 transition duration-300">Daftar</a>
                </div>
                <div class="md:hidden">
                    <button class="text-workbyte-600 hover:text-workbyte-800">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>    

    <!-- Hero Section -->
    <header class="pt-24 pb-12 md:pt-32 md:pb-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-workbyte-800 mb-4 leading-tight">
                        Belajar, Tantangan, dan <span class="text-workbyte-600">Cari Kerja</span> dalam Satu Platform
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">Tingkatkan keterampilan, hadapi tantangan, dan temukan peluang karir impian Anda di industri teknologi.</p>
                    <a href="#" class="bg-workbyte-600 text-white px-8 py-3 rounded text-lg font-semibold hover:bg-workbyte-700 transition duration-300 transform hover:scale-105 inline-flex items-center">
                        Mulai Sekarang
                        <i data-feather="arrow-right" class="ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-workbyte-800 mb-12">Fitur Utama</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-workbyte-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                    <div class="text-workbyte-600 mb-4">
                        <i data-feather="book-open" class="w-12 h-12"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-workbyte-800 mb-4">Belajar</h3>
                    <p class="text-gray-600">Akses kursus berkualitas tinggi dan tingkatkan keterampilan Anda dalam berbagai bidang teknologi.</p>
                </div>
                <div class="bg-workbyte-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                    <div class="text-workbyte-600 mb-4">
                        <i data-feather="award" class="w-12 h-12"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-workbyte-800 mb-4">Tantangan</h3>
                    <p class="text-gray-600">Ikuti tantangan coding yang menarik, uji kemampuan Anda, dan raih penghargaan.</p>
                </div>
                <div class="bg-workbyte-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                    <div class="text-workbyte-600 mb-4">
                        <i data-feather="briefcase" class="w-12 h-12"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-workbyte-800 mb-4">Cari Kerja</h3>
                    <p class="text-gray-600">Temukan peluang karir yang sesuai dengan keterampilan dan minat Anda di industri teknologi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-workbyte-600 to-workbyte-800 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Siap untuk Memulai Perjalanan Anda?</h2>
            <p class="text-xl mb-12 max-w-2xl mx-auto">Bergabunglah dengan komunitas kami, tunjukkan keterampilan Anda, dan raih kesuksesan dalam karir teknologi Anda.</p>
            <a href="#" class="bg-white text-workbyte-600 px-8 py-3 rounded text-lg font-semibold hover:bg-workbyte-100 transition duration-300 transform hover:scale-105 inline-flex items-center">
                Daftar Gratis
                <i data-feather="user-plus" class="ml-2"></i>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-workbyte-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 mb-8 md:mb-0">
                    <h3 class="text-2xl font-bold mb-4">Work<span class="text-workbyte-400">Byte</span></h3>
                    <p class="text-workbyte-300">Platform terbaik untuk belajar, menghadapi tantangan, dan menemukan peluang karir di industri teknologi.</p>
                </div>
                <div class="w-full md:w-1/4 mb-8 md:mb-0">
                    <h4 class="text-lg font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-workbyte-300 hover:text-white transition duration-300">Tentang Kami</a></li>
                        <li><a href="#" class="text-workbyte-300 hover:text-white transition duration-300">Kursus</a></li>
                        <li><a href="#" class="text-workbyte-300 hover:text-white transition duration-300">Tantangan</a></li>
                        <li><a href="#" class="text-workbyte-300 hover:text-white transition duration-300">Lowongan Kerja</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 mb-8 md:mb-0">
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
                <div class="w-full md:w-1/4">
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
                <p>&copy; {{ date('Y') }} WorkByte. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        feather.replace()
    </script>
</body>
</html>