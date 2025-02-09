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

    <div class="container mx-auto px-6 py-8">
        <h1 class="text-4xl font-bold text-workbyte-800 mb-8 mt-12">Tantangan WorkByte</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-workbyte-800 mb-2">Hackathon Web Development</h2>
                    <p class="text-gray-600 mb-4">Buat aplikasi web inovatif dalam waktu 48 jam.</p>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-workbyte-600 font-semibold">Hadiah: $5000</span>
                        <span class="text-gray-500">Batas: 30 Sept 2024</span>
                    </div>
                    <a href="#" class="bg-workbyte-600 text-white px-4 py-2 rounded hover:bg-workbyte-700 transition duration-300 block text-center">Ikuti Tantangan</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-workbyte-800 mb-2">UI/UX Design Challenge</h2>
                    <p class="text-gray-600 mb-4">Rancang UI/UX yang menarik untuk platform edukasi.</p>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-workbyte-600 font-semibold">Hadiah: $3000</span>
                        <span class="text-gray-500">Batas: 15 Okt 2024</span>
                    </div>
                    <a href="#" class="bg-workbyte-600 text-white px-4 py-2 rounded hover:bg-workbyte-700 transition duration-300 block text-center">Ikuti Tantangan</a>
                </div>
            </div>
        </div>
    
        <div class="mt-12">
            <h2 class="text-3xl font-bold text-workbyte-800 mb-6">Leaderboard</h2>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <table class="w-full">
                    <thead>
                        <tr class="bg-workbyte-100 text-workbyte-800">
                            <th class="py-3 px-6 text-left">Peringkat</th>
                            <th class="py-3 px-6 text-left">Nama</th>
                            <th class="py-3 px-6 text-left">Skor</th>
                            <th class="py-3 px-6 text-left">Badge</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="py-4 px-6">1</td>
                            <td class="py-4 px-6">Rizky Pratama</td>
                            <td class="py-4 px-6">980</td>
                            <td class="py-4 px-6">
                                <span class="inline-block bg-workbyte-100 text-workbyte-800 rounded-full px-3 py-1 text-sm font-semibold mr-2">Champion</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-4 px-6">2</td>
                            <td class="py-4 px-6">Dewi Lestari</td>
                            <td class="py-4 px-6">920</td>
                            <td class="py-4 px-6">
                                <span class="inline-block bg-workbyte-100 text-workbyte-800 rounded-full px-3 py-1 text-sm font-semibold mr-2">Master</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-4 px-6">3</td>
                            <td class="py-4 px-6">Budi Santoso</td>
                            <td class="py-4 px-6">870</td>
                            <td class="py-4 px-6">
                                <span class="inline-block bg-workbyte-100 text-workbyte-800 rounded-full px-3 py-1 text-sm font-semibold mr-2">Expert</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

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