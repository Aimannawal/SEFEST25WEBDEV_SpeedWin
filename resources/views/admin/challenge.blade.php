<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkByte Admin - Create Challenge</title>
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
            <a href="/admin/challenge" class="flex items-center px-4 py-2 mt-2 text-gray-700 bg-gray-200">
                <i data-feather="award" class="w-5 h-5 mr-2"></i>
                Challenges
            </a>
            <a href="/admin/learn" class="flex items-center px-4 py-2 mt-2 text-gray-600 hover:bg-gray-200">
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
    <!-- Main Content -->
<main class="flex-1 overflow-y-auto">
    <div class="container mx-auto px-6 py-8">
        <button id="menuButton" onclick="toggleSidebar()" class="lg:hidden p-2 text-gray-600 focus:outline-none">
            <i data-feather="menu"></i>
        </button>
    </div>

    <div class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Create Challenge</h1>
    
        <a href="{{ route('admin.challenge.create') }}" class="bg-workbyte-600 text-white px-4 py-2 rounded-md mb-4 inline-block">Create New Challenge</a>

        <!-- Existing Challenges -->
        <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Challenge Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Start Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">End Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($challenges as $challenge)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $challenge->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ ucfirst($challenge->type) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $challenge->start_date }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $challenge->end_date }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            {{ $challenge->active ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ $challenge->active ? 'Active' : 'Upcoming' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.challenge.edit', $challenge->id) }}" class="text-workbyte-600 hover:text-workbyte-900 mr-3">Edit</a>
                            <form action="{{ route('admin.challenge.destroy', $challenge->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Daftar Pendaftar Tantangan -->
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Challenge Registrations</h2>
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Institusi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. WhatsApp</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pengalaman</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($registrations as $registration)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $registration->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $registration->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $registration->institution }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $registration->whatsapp_number }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $registration->experience }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada pendaftar</td>
                    </tr>
                    @endforelse
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