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
    <div class="container mx-auto px-6 py-8 pt-24">
        <h1 class="text-4xl font-bold text-workbyte-800 mb-8">Belajar di WorkByte</h1>
    
        <!-- Course Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($courses as $course)
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-lg">
                    <img src="{{ $course->image }}" alt="{{ $course->title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-workbyte-800 mb-2">{{ $course->title }}</h2>
                        <p class="text-gray-600 mb-4">{{ $course->description }}</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-workbyte-600 font-semibold">{{ $course->duration }}</span>
                            <span class="bg-workbyte-100 text-workbyte-600 px-2 py-1 rounded-full text-sm">{{ $course->level }}</span>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <i data-feather="star" class="text-yellow-400 mr-1"></i>
                                <span class="text-gray-700">{{ $course->rating }}</span>
                            </div>
                            <span class="text-gray-500 text-sm">{{ $course->students }} siswa</span>
                        </div>
                        <a href="/detail-learn" class="block bg-workbyte-600 text-white text-center px-4 py-2 rounded hover:bg-workbyte-700 transition duration-300">Mulai Belajar</a>
                    </div>
                </div>
            @endforeach
        </div>
    
        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            {{ $courses->links() }}
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
        function toggleMobileMenu() {
       const mobileMenu = document.getElementById('mobileMenu');
       mobileMenu.classList.toggle('hidden');
   }

   // Feather Icons
   feather.replace();

   // Dropdown Menu
   const dropdownButton = document.querySelector('.relative button');
   const dropdownMenu = document.querySelector('.relative .hidden');

   dropdownButton.addEventListener('click', () => {
       dropdownMenu.classList.toggle('hidden');
   });

   // Close dropdown when clicking outside
   document.addEventListener('click', (event) => {
       if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
           dropdownMenu.classList.add('hidden');
       }
   });
   </script>
</body>
</html>
    