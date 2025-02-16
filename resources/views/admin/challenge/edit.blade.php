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
    <div class="container mx-auto px-6 py-8">
        <div class="container mx-auto px-6 py-8">
            <button id="menuButton" onclick="toggleSidebar()" class="lg:hidden p-2 text-gray-600 focus:outline-none">
                <i data-feather="menu"></i>
            </button>
        </div>

        <h1 class="text-3xl font-bold text-gray-800 mb-4">Edit Challenge</h1>
    
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
    
                <form method="POST" action="{{ route('admin.challenge.update', $challenge->id) }}" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Challenge Title</label>
                            <input type="text" name="title" value="{{ $challenge->title }}" class="w-full px-3 py-2 border rounded-md focus:ring-2" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Challenge Type</label>
                            <select name="type" class="w-full px-3 py-2 border rounded-md focus:ring-2" required>
                                <option value="{{ $challenge->type }}" {{ $challenge->type }}>{{ $challenge->type }}</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Frontend Development">Frontend Development</option>
                                <option value="Devops">DevOps</option>
                                <option value="Backend Development">Backend Development</option>
                                <option value="Full Stack Development">Full Stack Development</option>
                                <option value="Mobile App Development">Mobile App Development</option>
                                <option value="UI/UX">UI/UX</option>
                            </select>
                        </div>
                    </div>
    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Challenge Description</label>
                        <textarea name="description" rows="4" class="w-full px-3 py-2 border rounded-md focus:ring-2" required>{{ $challenge->description }}</textarea>
                    </div>
    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Challenge Requirements</label>
                        <textarea name="requirements" rows="4" class="w-full px-3 py-2 border rounded-md focus:ring-2" required>{{ $challenge->requirements }}</textarea>
                    </div>
    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Evaluation Criteria</label>
                        <textarea name="evaluation_criteria" rows="4" class="w-full px-3 py-2 border rounded-md focus:ring-2" required>{{ $challenge->evaluation_criteria }}</textarea>
                    </div>
    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                            <input type="date" name="start_date" value="{{ $challenge->start_date }}" class="w-full px-3 py-2 border rounded-md focus:ring-2" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
                            <input type="date" name="end_date" value="{{ $challenge->end_date }}" class="w-full px-3 py-2 border rounded-md focus:ring-2" required>
                        </div>
                    </div>
    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Prize Description</label>
                        <input type="text" name="prize_description" value="{{ $challenge->prize_description }}" class="w-full px-3 py-2 border rounded-md focus:ring-2" required>
                    </div>
    
                    <div class="flex items-center">
                        <input type="hidden" name="active" value="0">
                        <input type="checkbox" 
                               name="active" 
                               value="1" 
                               {{ $challenge->active ? 'checked' : '' }} 
                               class="h-4 w-4 text-workbyte-600 focus:ring-workbyte-500 border-gray-300 rounded">
                        <label class="ml-2 block text-sm text-gray-900">Make this challenge active immediately</label>
                    </div>                  
    
                    <div>
                        <button type="submit" class="w-full bg-workbyte-600 text-white px-4 py-2 rounded-md hover:bg-workbyte-700 transition duration-300">
                            Update Challenge
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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