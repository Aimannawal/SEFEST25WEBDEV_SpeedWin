<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkByte - Pemrograman Web dengan React</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    @vite('resources/css/app.css')
</head>
<body class="font-poppins bg-gray-100 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold text-workbyte-600">
                    <a href="/">Work<span class="text-workbyte-400">Byte</span></a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-workbyte-600 hover:text-workbyte-800 transition duration-300">Kursus Saya</a>
                    <a href="#" class="text-workbyte-600 hover:text-workbyte-800 transition duration-300">Tantangan</a>
                    <a href="#" class="text-workbyte-600 hover:text-workbyte-800 transition duration-300">Forum</a>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <button class="text-workbyte-600 hover:text-workbyte-800">
                        <i data-feather="bell"></i>
                    </button>
                    <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-10 h-10 rounded-full">
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
    <div class="flex-grow flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-workbyte-800 mb-4">Kurikulum Kursus</h2>
                <div class="space-y-2">
                    <div>
                        <button class="flex items-center justify-between w-full text-left p-2 rounded hover:bg-workbyte-100">
                            <span class="text-workbyte-700">1. Pengenalan React</span>
                            <i data-feather="chevron-down" class="w-4 h-4 text-workbyte-600"></i>
                        </button>
                        <div class="ml-4 mt-2 space-y-1">
                            <a href="#" class="block p-2 rounded text-workbyte-600 hover:bg-workbyte-100">1.1 Apa itu React?</a>
                            <a href="#" class="block p-2 rounded text-workbyte-600 hover:bg-workbyte-100">1.2 Setting up environment</a>
                            <a href="#" class="block p-2 rounded bg-workbyte-200 text-workbyte-800">1.3 Membuat aplikasi pertama</a>
                        </div>
                    </div>
                    <div>
                        <button class="flex items-center justify-between w-full text-left p-2 rounded hover:bg-workbyte-100">
                            <span class="text-workbyte-700">2. Komponen dan Props</span>
                            <i data-feather="chevron-right" class="w-4 h-4 text-workbyte-600"></i>
                        </button>
                    </div>
                    <div>
                        <button class="flex items-center justify-between w-full text-left p-2 rounded hover:bg-workbyte-100">
                            <span class="text-workbyte-700">3. State dan Lifecycle</span>
                            <i data-feather="chevron-right" class="w-4 h-4 text-workbyte-600"></i>
                        </button>
                    </div>
                    <div>
                        <button class="flex items-center justify-between w-full text-left p-2 rounded hover:bg-workbyte-100">
                            <span class="text-workbyte-700">4. Handling Events</span>
                            <i data-feather="chevron-right" class="w-4 h-4 text-workbyte-600"></i>
                        </button>
                    </div>
                    <div>
                        <button class="flex items-center justify-between w-full text-left p-2 rounded hover:bg-workbyte-100">
                            <span class="text-workbyte-700">5. Hooks dan Function Components</span>
                            <i data-feather="chevron-right" class="w-4 h-4 text-workbyte-600"></i>
                        </button>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Course Content -->
        <main class="flex-grow p-6">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-3xl font-bold text-workbyte-800 mb-4">1.3 Membuat Aplikasi React Pertama</h1>
                
                <!-- Video Player -->
                <div class="bg-black aspect-video mb-6 flex items-center justify-center">
                    <button class="text-white bg-workbyte-600 hover:bg-workbyte-700 transition duration-300 rounded-full p-4">
                        <i data-feather="play" class="w-8 h-8"></i>
                    </button>
                </div>

                <!-- Course Progress -->
                <div class="bg-white p-4 rounded-lg shadow mb-6">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-workbyte-700 font-semibold">Progress Kursus</span>
                        <span class="text-workbyte-600">15% Selesai</span>
                    </div>
                    <div class="w-full bg-workbyte-100 rounded-full h-2.5">
                        <div class="bg-workbyte-600 h-2.5 rounded-full" style="width: 15%"></div>
                    </div>
                </div>

                <!-- Lesson Content -->
                <div class="bg-white p-6 rounded-lg shadow mb-6">
                    <h2 class="text-2xl font-semibold text-workbyte-800 mb-4">Membuat Aplikasi React Pertama</h2>
                    <p class="text-gray-700 mb-4">
                        Dalam pelajaran ini, kita akan membuat aplikasi React pertama kita. Kita akan menggunakan Create React App untuk menyiapkan lingkungan pengembangan dengan cepat dan mudah.
                    </p>
                    <h3 class="text-xl font-semibold text-workbyte-700 mb-2">Langkah-langkah:</h3>
                    <ol class="list-decimal list-inside space-y-2 text-gray-700 mb-4">
                        <li>Buka terminal atau command prompt</li>
                        <li>Jalankan perintah: <code class="bg-gray-100 px-2 py-1 rounded">npx create-react-app my-first-app</code></li>
                        <li>Tunggu proses instalasi selesai</li>
                        <li>Masuk ke direktori proyek: <code class="bg-gray-100 px-2 py-1 rounded">cd my-first-app</code></li>
                        <li>Jalankan aplikasi: <code class="bg-gray-100 px-2 py-1 rounded">npm start</code></li>
                    </ol>
                    <p class="text-gray-700 mb-4">
                        Setelah menjalankan langkah-langkah di atas, Anda akan melihat aplikasi React default berjalan di browser Anda pada <code class="bg-gray-100 px-2 py-1 rounded">http://localhost:3000</code>.
                    </p>
                    <div class="bg-workbyte-100 border-l-4 border-workbyte-600 p-4 mb-4">
                        <p class="text-workbyte-800 font-semibold">Catatan Penting:</p>
                        <p class="text-workbyte-700">Pastikan Anda telah menginstal Node.js dan npm di komputer Anda sebelum menjalankan perintah di atas.</p>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between items-center">
                    <a href="#" class="bg-workbyte-100 text-workbyte-600 px-6 py-2 rounded hover:bg-workbyte-200 transition duration-300 flex items-center">
                        <i data-feather="arrow-left" class="mr-2"></i>
                        Sebelumnya
                    </a>
                    <a href="#" class="bg-workbyte-600 text-white px-6 py-2 rounded hover:bg-workbyte-700 transition duration-300 flex items-center">
                        Selanjutnya
                        <i data-feather="arrow-right" class="ml-2"></i>
                    </a>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-workbyte-900 text-white py-6">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between items-center">
                <div class="w-full md:w-1/3 text-center md:text-left mb-4 md:mb-0">
                    <h3 class="text-2xl font-bold">Work<span class="text-workbyte-400">Byte</span></h3>
                </div>
                <div class="w-full md:w-1/3 text-center mb-4 md:mb-0">
                    <p>&copy; 2023 WorkByte. Hak Cipta Dilindungi.</p>
                </div>
                <div class="w-full md:w-1/3 text-center md:text-right">
                    <div class="flex justify-center md:justify-end space-x-4">
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
        </div>
    </footer>

    <script>
        feather.replace();

        // Simple toggle for curriculum sections
        document.querySelectorAll('aside button').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                content.classList.toggle('hidden');
                const icon = button.querySelector('i');
                icon.setAttribute('data-feather', content.classList.contains('hidden') ? 'chevron-right' : 'chevron-down');
                feather.replace();
            });
        });
    </script>
</body>
</html>

