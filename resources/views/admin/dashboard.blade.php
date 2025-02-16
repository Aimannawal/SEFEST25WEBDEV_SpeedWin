<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-poppins">
    <div class="flex h-screen">
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
                <a href="/admin/dashboard" class="flex items-center px-4 py-2 text-gray-700 bg-gray-200">
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

            <div class="p-6">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Dashboard</h2>
                
                <!-- Overview Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <!-- Total Applicants Card -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-700">Total Applicants</h3>
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <p class="text-3xl font-bold text-gray-800 mt-2">{{ $totalApplicants }}</p>
                        <p class="text-sm {{ $applicantsGrowth >= 0 ? 'text-green-500' : 'text-red-500' }} mt-2">
                            {{ $applicantsGrowth }}% from last month
                        </p>
                    </div>
            
                    <!-- Reviewed Applications Card -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-700">Reviewed Applications</h3>
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <p class="text-3xl font-bold text-gray-800 mt-2">{{ $reviewedApplications }}</p>
                        <p class="text-sm text-gray-500 mt-2">
                            {{ $totalApplicants > 0 ? round(($reviewedApplications / $totalApplicants) * 100) : 0 }}% of total
                        </p>
                    </div>
            
                    <!-- Total Challenges Card -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-700">Active Challenges</h3>
                            <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <p class="text-3xl font-bold text-gray-800 mt-2">{{ $totalChallenges }}</p>
                        <p class="text-sm text-gray-500 mt-2">Ongoing challenges</p>
                    </div>
            
                    <!-- Total Participants Card -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-700">Total Participants</h3>
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <p class="text-3xl font-bold text-gray-800 mt-2">{{ $totalParticipants }}</p>
                        <p class="text-sm text-gray-500 mt-2">Across all challenges</p>
                    </div>
                </div>
            
                <!-- Recent Activities and Challenges -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Recent Applicants -->
                    <div class="lg:col-span-2 bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Recent Applicants</h3>
                        <div class="space-y-4">
                            @forelse($recentApplicants as $applicant)
                            <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg transition-colors">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4 flex-1">
                                    <div class="flex items-center justify-between">
                                        <p class="text-sm font-medium text-gray-900">{{ $applicant->name }}</p>
                                        <p class="text-sm text-gray-500">{{ $applicant->created_at->diffForHumans() }}</p>
                                    </div>
                                    <p class="text-sm text-gray-500">
                                        Applied {{ $applicant->created_at->format('M d, Y') }}
                                    </p>
                                </div>
                                {{-- <span class="ml-2 px-2 py-1 text-xs font-medium rounded-full
                                    @switch($applicant->status)
                                        @case('pending') bg-yellow-100 text-yellow-800 @break
                                        @case('reviewed') bg-blue-100 text-blue-800 @break
                                        @case('accepted') bg-green-100 text-green-800 @break
                                        @case('rejected') bg-red-100 text-red-800 @break
                                        @default bg-gray-100 text-gray-800
                                    @endswitch
                                ">
                                    {{ ucfirst($applicant->status) }}
                                </span> --}}
                            </div>
                            @empty
                            <div class="text-center text-gray-500 py-4">
                                No recent applications
                            </div>
                            @endforelse
                        </div>
                    </div>
            
                    <!-- Active Challenges -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Active Challenges</h3>
                        <div class="space-y-4">
                            @forelse($recentChallenges as $challenge)
                            <div class="p-3 hover:bg-gray-50 rounded-lg transition-colors">
                                <div class="flex items-center justify-between">
                                    <div class="flex-1">
                                        <p class="font-semibold text-gray-700">{{ $challenge->title }}</p>
                                        <div class="flex items-center mt-1">
                                            <svg class="w-4 h-4 text-gray-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                            <p class="text-sm text-gray-500">{{ $totalParticipants }} participants</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-end">
                                        <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">
                                            Active
                                        </span>
                                        <p class="text-xs text-gray-500 mt-1">
                                            Ends: {{ Carbon\Carbon::parse($challenge->end_date)->format('M d, Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="text-center text-gray-500 py-4">
                                No active challenges
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            
        </main>
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