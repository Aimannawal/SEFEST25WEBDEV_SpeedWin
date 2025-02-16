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
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Daftar Kursus</h1>

            <a href="{{ route('admin.learn.create') }}" class="bg-workbyte-600 text-white px-4 py-2 rounded-md mb-4 inline-block">Tambah Course</a>
            
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            
            <!-- Existing Courses -->
            <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deskripsi</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Durasi</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Level</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Rating</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Students</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Gambar</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($courses as $index => $course)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $course->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ Str::limit($course->description, 50) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $course->duration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $course->level }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $course->rating ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $course->students ?? 0 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($course->image)
                                    <img src="{{ asset('storage/' . $course->image) }}" width="80" alt="Course Image" class="rounded-md">
                                @else
                                    <span class="text-gray-400">Tidak ada gambar</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('admin.learn.edit', $course->id) }}" class="text-workbyte-600 hover:text-workbyte-900 mr-3">Edit</a>
                                <form action="{{ route('admin.learn.destroy', $course->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus course ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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