<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkByte - Lamar Pekerjaan Frontend Developer</title>
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
    <main class="container mx-auto px-6 py-8 mt-20">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl font-bold text-workbyte-800 mb-4">Frontend Developer</h1>
                <div class="flex items-center text-workbyte-600 mb-6">
                    <i data-feather="briefcase" class="mr-2"></i>
                    <span class="mr-4">TechCorp</span>
                    <i data-feather="map-pin" class="mr-2"></i>
                    <span>Jakarta, Indonesia</span>
                </div>
                
                <div class="bg-workbyte-100 p-6 rounded-lg mb-6">
                    <h2 class="text-2xl font-semibold text-workbyte-800 mb-4">Deskripsi Pekerjaan</h2>
                    <p class="text-gray-700 mb-4">
                        Kami mencari Frontend Developer yang berpengalaman untuk bergabung dengan tim kami di TechCorp. Anda akan bertanggung jawab untuk merancang dan mengimplementasikan antarmuka pengguna yang menarik dan responsif untuk aplikasi web kami.
                    </p>
                    <h3 class="text-xl font-semibold text-workbyte-700 mb-2">Tanggung Jawab:</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                        <li>Mengembangkan antarmuka pengguna yang responsif dan menarik</li>
                        <li>Berkolaborasi dengan tim desain dan backend</li>
                        <li>Mengoptimalkan aplikasi untuk kecepatan dan skalabilitas</li>
                        <li>Memastikan kualitas kode melalui testing dan code review</li>
                    </ul>
                    <h3 class="text-xl font-semibold text-workbyte-700 mb-2">Kualifikasi:</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Minimal 3 tahun pengalaman sebagai Frontend Developer</li>
                        <li>Keahlian dalam JavaScript, HTML, dan CSS</li>
                        <li>Pengalaman dengan React dan state management (Redux atau MobX)</li>
                        <li>Familiar dengan Git dan workflow pengembangan modern</li>
                        <li>Kemampuan komunikasi yang baik dan dapat bekerja dalam tim</li>
                    </ul>
                </div>

                <form class="bg-white p-6 rounded-lg border border-workbyte-200">
                    <h2 class="text-2xl font-semibold text-workbyte-800 mb-4">Formulir Lamaran</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                        </div>
                        <div>
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                        </div>
                        <div>
                            <label for="portfolio" class="block text-gray-700 font-medium mb-2">Link Portfolio</label>
                            <input type="url" id="portfolio" name="portfolio" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                        </div>
                        <div class="md:col-span-2">
                            <label for="experience" class="block text-gray-700 font-medium mb-2">Pengalaman Kerja</label>
                            <textarea id="experience" name="experience" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required></textarea>
                        </div>
                        <div class="md:col-span-2">
                            <label for="resume" class="block text-gray-700 font-medium mb-2">Upload Resume (PDF)</label>
                            <input type="file" id="resume" name="resume" accept=".pdf" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                        </div>
                        <div class="md:col-span-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-workbyte-600" required>
                                <span class="ml-2 text-gray-700">Saya menyetujui <a href="#" class="text-workbyte-600 hover:underline">syarat dan ketentuan</a> WorkByte.</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="w-full bg-workbyte-600 text-white px-4 py-2 rounded-md hover:bg-workbyte-700 transition duration-300">Kirim Lamaran</button>
                    </div>
                </form>
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

