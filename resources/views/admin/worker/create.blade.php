<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job Posting</title>
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
            <a href="/admin/worker" class="flex items-center px-4 py-2 mt-2 text-gray-700 bg-gray-200">
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

        <div class="container mx-auto px-6 py-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Create Job Posting</h1>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden p-8">
                @if(session('success'))
                    <div class="mb-4 p-3 bg-green-500 text-white rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('admin.jobs.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Job Title</label>
                            <select id="title" name="title" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                                <option value="">Select a category</option>
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
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Company</label>
                            <input type="text" id="company" name="company" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                        </div>
                        <div>
                            <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                            <input type="text" id="location" name="location" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                        </div>
                        <div>
                            <label for="job_type" class="block text-sm font-medium text-gray-700 mb-1">Job Type</label>
                            <select id="job_type" name="job_type" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                                <option value="full-time">Full Time</option>
                                <option value="part-time">Part Time</option>
                                <option value="contract">Contract</option>
                                <option value="internship">Internship</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Job Description</label>
                        <textarea id="description" name="description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
                    </div>

                    <div>
                        <label for="responsibilities" class="block text-sm font-medium text-gray-700 mb-1">Responsibilities</label>
                        <textarea id="responsibilities" name="responsibilities" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
                    </div>

                    <div>
                        <label for="qualifications" class="block text-sm font-medium text-gray-700 mb-1">Qualifications</label>
                        <textarea id="qualifications" name="qualifications" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
                    </div>

                    <div>
                        <label for="salary_range" class="block text-sm font-medium text-gray-700 mb-1">Salary Range</label>
                        <input type="text" id="salary_range" name="salary_range" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>

                    <div>
                        <label for="application_deadline" class="block text-sm font-medium text-gray-700 mb-1">Application Deadline</label>
                        <input type="date" id="application_deadline" name="application_deadline" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                    </div>

                    <div class="flex items-center">
                        <input type="hidden" name="active" value="0">
                        <input type="checkbox" name="active" value="1" class="h-4 w-4 text-workbyte-600 focus:ring-workbyte-500 border-gray-300 rounded">
                        <label class="ml-2 block text-sm text-gray-900">Make this job active immediately</label>
                    </div>

                    <div>
                        <button type="submit" class="w-full bg-workbyte-600 text-white px-4 py-2 rounded-md hover:bg-workbyte-700">
                            Create Job Posting
                        </button>
                    </div>
                </form>
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
