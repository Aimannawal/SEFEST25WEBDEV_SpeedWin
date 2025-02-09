<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkByte - Belajar</title>
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

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-8 pt-24">
        <h1 class="text-4xl font-bold text-workbyte-800 mb-8">Belajar di WorkByte</h1>
        
        <!-- Search and Filter -->
        <div class="mb-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <div class="relative">
                        <input type="text" placeholder="Cari kursus..." class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-workbyte-600">
                        <button class="absolute right-3 top-2">
                            <i data-feather="search" class="text-gray-400"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full md:w-1/2 flex justify-end space-x-4">
                    <select class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-workbyte-600">
                        <option>Semua Kategori</option>
                        <option>Web Development</option>
                        <option>Mobile Development</option>
                        <option>Data Science</option>
                        <option>UI/UX Design</option>
                    </select>
                    <select class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-workbyte-600">
                        <option>Semua Level</option>
                        <option>Pemula</option>
                        <option>Menengah</option>
                        <option>Lanjutan</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Course Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $courses = [
                    ['title' => 'Pemrograman Dasar', 'description' => 'Pelajari dasar-dasar pemrograman dengan bahasa Python.', 'duration' => '10 jam', 'level' => 'Pemula', 'rating' => 4.5],
                    ['title' => 'Web Development', 'description' => 'Bangun website modern dengan HTML, CSS, dan JavaScript.', 'duration' => '15 jam', 'level' => 'Menengah', 'rating' => 4.8],
                    ['title' => 'Data Science', 'description' => 'Pelajari analisis data dengan Python dan library populer.', 'duration' => '20 jam', 'level' => 'Lanjutan', 'rating' => 4.7],
                    ['title' => 'UI/UX Design', 'description' => 'Desain antarmuka pengguna yang menarik dan fungsional.', 'duration' => '12 jam', 'level' => 'Menengah', 'rating' => 4.6],
                    ['title' => 'Mobile Development', 'description' => 'Buat aplikasi mobile dengan Flutter dan Dart.', 'duration' => '18 jam', 'level' => 'Menengah', 'rating' => 4.9],
                    ['title' => 'Cloud Computing', 'description' => 'Pelajari layanan cloud seperti AWS, Google Cloud, dan Azure.', 'duration' => '25 jam', 'level' => 'Lanjutan', 'rating' => 4.4]
                ];
            @endphp

            @foreach($courses as $course)
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-lg">
                    <img src="https://via.placeholder.com/400x200" alt="{{ $course['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-workbyte-800 mb-2">{{ $course['title'] }}</h2>
                        <p class="text-gray-600 mb-4">{{ $course['description'] }}</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-workbyte-600 font-semibold">{{ $course['duration'] }}</span>
                            <span class="bg-workbyte-100 text-workbyte-600 px-2 py-1 rounded-full text-sm">{{ $course['level'] }}</span>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <i data-feather="star" class="text-yellow-400 mr-1"></i>
                                <span class="text-gray-700">{{ $course['rating'] }}</span>
                            </div>
                            <span class="text-gray-500 text-sm">1,234 siswa</span>
                        </div>
                        <a href="#" class="block bg-workbyte-600 text-white text-center px-4 py-2 rounded hover:bg-workbyte-700 transition duration-300">Mulai Belajar</a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <i data-feather="chevron-left" class="h-5 w-5"></i>
                </a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">...</span>
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">8</a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">9</a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">10</a>
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <i data-feather="chevron-right" class="h-5 w-5"></i>
                </a>
            </nav>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-workbyte-900 text-white py-12 mt-12">
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
    