<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkByte - Konfirmasi Pendaftaran Tantangan</title>
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
    @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif
        
    <main class="container mx-auto px-6 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mt-20">
            <div class="p-8">
                <div class="flex items-center justify-center mb-6">
                    <div class="bg-green-100 rounded-full p-3">
                        <i data-feather="check" class="text-green-500 w-8 h-8"></i>
                    </div>
                </div>
                <h1 class="text-3xl font-bold text-workbyte-800 mb-4 text-center">Pendaftaran Berhasil!</h1>
                <p class="text-gray-700 mb-6 text-center">
                    Selamat! Anda telah berhasil mendaftar untuk tantangan Hackathon Web Development.
                </p>
                
                <div class="bg-workbyte-100 p-6 rounded-lg mb-6">
                    <h2 class="text-2xl font-semibold text-workbyte-800 mb-4">Langkah Selanjutnya</h2>
                    <ol class="list-decimal list-inside text-gray-700 space-y-2">
                        <li>Bergabung dengan grup Discord peserta</li>
                        <li>Menghadiri sesi kickoff virtual pada 30 September 2024, 09:00 WIB</li>
                        <li>Mempersiapkan tim dan peralatan Anda</li>
                        <li>Mulai mengerjakan proyek pada 30 September 2024, 09:00 WIB</li>
                    </ol>
                </div>

                <div class="bg-workbyte-100 p-6 rounded-lg mb-6">
                    <h2 class="text-2xl font-semibold text-workbyte-800 mb-4">Informasi Penting</h2>
                    <ul class="space-y-4">
                        <li>
                            <strong class="block text-workbyte-700">Link Grup Discord:</strong>
                            <a href="https://discord.gg/workbyte-hackathon" class="text-workbyte-600 hover:underline break-all" target="_blank" rel="noopener noreferrer">
                                https://discord.gg/workbyte-hackathon
                            </a>
                        </li>
                        <li>
                            <strong class="block text-workbyte-700">Link Zoom Kickoff Event:</strong>
                            <a href="https://zoom.us/j/123456789" class="text-workbyte-600 hover:underline break-all" target="_blank" rel="noopener noreferrer">
                                https://zoom.us/j/123456789
                            </a>
                        </li>
                        <li>
                            <strong class="block text-workbyte-700">Platform Pengumpulan:</strong>
                            <p class="text-gray-700">
                                Gunakan platform GitHub untuk meng-host kode proyek Anda. Kirimkan link repository GitHub Anda melalui form yang akan dibuka pada tanggal 2 Oktober 2024.
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="bg-yellow-100 border-l-4 border-yellow-500 p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i data-feather="alert-triangle" class="text-yellow-500 w-5 h-5"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                                Pastikan Anda bergabung dengan grup Discord dan menghadiri sesi kickoff untuk mendapatkan informasi penting dan update terbaru mengenai tantangan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="/" class="inline-block bg-workbyte-600 text-white px-6 py-3 rounded-lg hover:bg-workbyte-700 transition duration-300 mb-4">
                        Kembali ke Halaman Utama
                    </a>
                    <p class="text-gray-600">
                        Jika Anda memiliki pertanyaan, silakan hubungi kami di <a href="mailto:support@workbyte.com" class="text-workbyte-600 hover:underline">support@workbyte.com</a>
                    </p>
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
                <p>&copy; {{ date('Y') }} WorkByte. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        feather.replace()
    </script>
</body>
</html>

