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
        <h1 class="text-4xl font-bold text-workbyte-800 mb-8 mt-12">Cari Kerja di WorkByte</h1>
        
        <div class="mb-8">
            <form action="#" method="GET" class="flex flex-wrap gap-4">
                <input type="text" name="keyword" placeholder="Kata kunci" class="flex-grow px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-workbyte-600">
                <select name="category" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-workbyte-600">
                    <option value="">Semua Kategori</option>
                    <option value="web-development">Web Development</option>
                    <option value="mobile-development">Mobile Development</option>
                    <option value="data-science">Data Science</option>
                    <option value="ui-ux">UI/UX Design</option>
                </select>
                <button type="submit" class="bg-workbyte-600 text-white px-6 py-2 rounded-lg hover:bg-workbyte-700 transition duration-300">Cari</button>
            </form>
        </div>
    
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-workbyte-800 mb-2">Frontend Developer</h2>
                <p class="text-gray-600 mb-4">TechCorp</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-workbyte-100 text-workbyte-800 rounded-full px-3 py-1 text-sm font-semibold">JavaScript</span>
                    <span class="bg-workbyte-100 text-workbyte-800 rounded-full px-3 py-1 text-sm font-semibold">React</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-workbyte-600 font-semibold">Jakarta, Indonesia</span>
                    <a href="#" class="bg-workbyte-600 text-white px-4 py-2 rounded hover:bg-workbyte-700 transition duration-300">Lamar Sekarang</a>
                </div>
            </div>
    
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-workbyte-800 mb-2">Data Scientist</h2>
                <p class="text-gray-600 mb-4">DataCorp</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-workbyte-100 text-workbyte-800 rounded-full px-3 py-1 text-sm font-semibold">Python</span>
                    <span class="bg-workbyte-100 text-workbyte-800 rounded-full px-3 py-1 text-sm font-semibold">Machine Learning</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-workbyte-600 font-semibold">Bandung, Indonesia</span>
                    <a href="#" class="bg-workbyte-600 text-white px-4 py-2 rounded hover:bg-workbyte-700 transition duration-300">Lamar Sekarang</a>
                </div>
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