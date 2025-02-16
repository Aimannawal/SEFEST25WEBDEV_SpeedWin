<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkByte Admin - Create Job Posting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    @vite('resources/css/app.css')
</head>
<body class="font-poppins bg-gray-100 min-h-screen flex">
    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-white shadow-md flex flex-col h-screen fixed lg:relative transform -translate-x-full lg:translate-x-0 transition-transform duration-300">
        <div class="p-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">WorkByte</h1>
            <!-- Close button for mobile -->
            <button onclick="toggleSidebar()" class="lg:hidden text-gray-600 focus:outline-none">
                <i id="closeIcon" data-feather="x"></i>
            </button>
        </div>

        <nav class="mt-6 flex-1">
            <a href="/admin/dashboard" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-200">
                <i data-feather="home" class="w-5 h-5 mr-2"></i>
                Home
            </a>
            <a href="/admin/worker" class="flex items-center px-4 py-2 mt-2 text-gray-600 hover:bg-gray-200">
                <i data-feather="users" class="w-5 h-5 mr-2"></i>
                Find Workers
            </a>
            <a href="/admin/challenge" class="flex items-center px-4 py-2 mt-2 text-gray-600 hover:bg-gray-200">
                <i data-feather="award" class="w-5 h-5 mr-2"></i>
                Challenges
            </a>
            <a href="/admin/learn" class="flex items-center px-4 py-2 mt-2 text-gray-700 bg-gray-200">
                <i data-feather="book-open" class="w-5 h-5 mr-2"></i>
                Learn
            </a>
            <a href="/admin/profile" class="flex items-center px-4 py-2 mt-2 text-gray-600 hover:bg-gray-200">
                <i data-feather="user" class="w-5 h-5 mr-2"></i>
                Profile
            </a>
        </nav>

        <div class="p-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center px-4 py-2 text-red-600 hover:bg-red-100 w-full text-left">
                    <i data-feather="log-out" class="w-5 h-5 mr-2"></i>
                    Logout
                </button>
            </form>                
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto">
        <div class="container mx-auto px-6 py-8">
            <button id="menuButton" onclick="toggleSidebar()" class="lg:hidden p-2 text-gray-600 focus:outline-none">
                <i data-feather="menu"></i>
            </button>
        </div>
    
        <div class="container mx-auto px-6 py-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Tambah Course</h1>
    
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-8">
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-600 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
                    <form action="{{ route('admin.learn.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
    
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                                <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-md focus:ring-2" required>
                            </div>
                            <div>
                                <label for="level" class="block text-sm font-medium text-gray-700 mb-1">Level</label>
                                <select name="level" id="level" class="w-full px-3 py-2 border rounded-md focus:ring-2" required>
                                    <option value="">Pilih Level</option>
                                    <option value="Pemula">Pemula</option>
                                    <option value="Menengah">Menengah</option>
                                    <option value="Lanjutan">Lanjutan</option>
                                </select>
                            </div>
                        </div>
    
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                            <textarea name="description" id="description" rows="4" class="w-full px-3 py-2 border rounded-md focus:ring-2" required></textarea>
                        </div>
    
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label for="duration" class="block text-sm font-medium text-gray-700 mb-1">Durasi</label>
                                <input type="text" name="duration" id="duration" class="w-full px-3 py-2 border rounded-md focus:ring-2" required>
                            </div>
                            <div>
                                <label for="rating" class="block text-sm font-medium text-gray-700 mb-1">Rating</label>
                                <input type="number" name="rating" id="rating" class="w-full px-3 py-2 border rounded-md focus:ring-2" step="0.1" min="0" max="5">
                            </div>
                            <div>
                                <label for="students" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Siswa</label>
                                <input type="number" name="students" id="students" class="w-full px-3 py-2 border rounded-md focus:ring-2" min="0">
                            </div>
                        </div>
    
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Gambar</label>
                            <input type="file" name="image" id="image" class="w-full px-3 py-2 border rounded-md focus:ring-2">
                        </div>
    
                        <div>
                            <button type="submit" class="w-full bg-workbyte-600 text-white px-4 py-2 rounded-md hover:bg-workbyte-700 transition duration-300">
                                Simpan Course
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
         function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }

        document.addEventListener("DOMContentLoaded", function () {
            feather.replace();
        });
    </script>
</body>
</html>