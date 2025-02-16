<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkByte Admin - Profile</title>
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
            <a href="/admin/learn" class="flex items-center px-4 py-2 mt-2 text-gray-600 hover:bg-gray-200">
                <i data-feather="book-open" class="w-5 h-5 mr-2"></i>
                Learn
            </a>
            <a href="/admin/profile" class="flex items-center px-4 py-2 mt-2 text-gray-700 bg-gray-200">
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
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Profile</h1>

            @if (session('success'))
                <div class="mb-4 px-4 py-2 bg-green-100 text-green-700 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <img src="{{ $user->company_logo ? asset('storage/' . $user->company_logo) : 'https://via.placeholder.com/150' }}" alt="Company Logo" class="w-24 h-24 rounded-full mr-6">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h2>
                            <p class="text-gray-600">{{ $user->email }}</p>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="industry" class="block text-sm font-medium text-gray-700 mb-1">Industry</label>
                                <input type="text" id="industry" name="industry" value="{{ old('industry', $user->industry) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                            </div>
                            <div>
                                <label for="company-size" class="block text-sm font-medium text-gray-700 mb-1">Company Size</label>
                                <select id="company-size" name="company_size" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                                    <option value="1-10" {{ $user->company_size == '1-10' ? 'selected' : '' }}>1-10 employees</option>
                                    <option value="11-50" {{ $user->company_size == '11-50' ? 'selected' : '' }}>11-50 employees</option>
                                    <option value="51-200" {{ $user->company_size == '51-200' ? 'selected' : '' }}>51-200 employees</option>
                                    <option value="201-500" {{ $user->company_size == '201-500' ? 'selected' : '' }}>201-500 employees</option>
                                    <option value="501-1000" {{ $user->company_size == '501-1000' ? 'selected' : '' }}>501-1000 employees</option>
                                    <option value="1001+" {{ $user->company_size == '1001+' ? 'selected' : '' }}>1001+ employees</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="founded-year" class="block text-sm font-medium text-gray-700 mb-1">Founded Year</label>
                                <input type="number" id="founded-year" name="founded_year" value="{{ old('founded_year', $user->founded_year) }}" min="1900" max="{{ date('Y') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                            </div>
                            <div>
                                <label for="headquarters" class="block text-sm font-medium text-gray-700 mb-1">Headquarters</label>
                                <input type="text" id="headquarters" name="headquarters" value="{{ old('headquarters', $user->headquarters) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="website" class="block text-sm font-medium text-gray-700 mb-1">Website</label>
                                <input type="url" id="website" name="website" value="{{ old('website', $user->website) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>
                            </div>
                            <div>
                                <label for="linkedin" class="block text-sm font-medium text-gray-700 mb-1">LinkedIn</label>
                                <input type="url" id="linkedin" name="linkedin" value="{{ old('linkedin', $user->linkedin) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="twitter" class="block text-sm font-medium text-gray-700 mb-1">Twitter</label>
                                <input type="url" id="twitter" name="twitter" value="{{ old('twitter', $user->twitter) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500">
                            </div>
                            <div>
                                <label for="facebook" class="block text-sm font-medium text-gray-700 mb-1">Facebook</label>
                                <input type="url" id="facebook" name="facebook" value="{{ old('facebook', $user->facebook) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500">
                            </div>
                        </div>

                        <div>
                            <label for="company-logo" class="block text-sm font-medium text-gray-700 mb-1">Company Logo</label>
                            <input type="file" id="company-logo" name="company_logo" accept="image/*" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500">
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                            <textarea id="description" name="description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-workbyte-500" required>{{ old('description', $user->description) }}</textarea>
                        </div>

                        <div>
                            <button type="submit" class="bg-workbyte-600 text-white px-4 py-2 rounded-md hover:bg-workbyte-700 transition duration-300">Update Profile</button>
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