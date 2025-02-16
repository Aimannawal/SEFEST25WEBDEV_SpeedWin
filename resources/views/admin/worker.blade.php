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
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Job Listings</h1>
        
            <a href="{{ route('admin.jobs.create') }}" class="bg-workbyte-600 text-white px-4 py-2 rounded-md mb-4 inline-block">Create New Job</a>
        
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Company</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Location</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($jobs as $job)
                        <tr>
                            <td class="px-6 py-4">{{ $job->title }}</td>
                            <td class="px-6 py-4">{{ $job->company }}</td>
                            <td class="px-6 py-4">{{ $job->location }}</td>
                            <td class="px-6 py-4">
                                <span class="px-2 inline-flex text-xs font-semibold rounded-full {{ $job->active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $job->active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.jobs.edit', $job->id) }}" class="text-workbyte-600 hover:text-workbyte-900 mr-3">Edit</a>
                                <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" class="inline">
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

            <div class="container mx-auto mt-4">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Job Applications</h1>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phone</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($applications as $application)
                            <tr>
                                <td class="px-6 py-4">{{ $application->name }}</td>
                                <td class="px-6 py-4">{{ $application->email }}</td>
                                <td class="px-6 py-4">{{ $application->phone }}</td>
                                <td class="px-6 py-4">
                                    <button onclick="openResumeModal({{ $application->id }})"
                                    class="text-workbyte-600 hover:text-workbyte-900">View Resume</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
<div id="resumeModal" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-2xl w-full relative">
        <button onclick="closeResumeModal()" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">&times;</button>
        <h2 class="text-xl font-bold mb-4">Resume Details</h2>
        <div id="resumeContent">
            <p><strong>Name:</strong> <span id="modalName"></span></p>
            <p><strong>Email:</strong> <span id="modalEmail"></span></p>
            <p><strong>Phone:</strong> <span id="modalPhone"></span></p>
            <p><strong>Experience:</strong></p>
            <p id="modalExperience" class="border p-2"></p>
            <p><strong>Status:</strong> <span id="modalStatus"></span></p>
            <p><strong>Portfolio:</strong> <a id="modalPortfolio" href="#" target="_blank" class="text-workbyte-500"></a></p>
            <p><strong>Resume:</strong> 
                <a href="{{ route('admin.resume.download', $application->id) }}" class="text-workbyte-500">Download Resume</a>
            </p>
        </div>
    </div>
</div>

    <script>
        function openResumeModal(applicationId) {
        fetch('/get-resume/' + applicationId)
            .then(response => response.json())
            .then(data => {
                document.getElementById('modalName').textContent = data.name;
                document.getElementById('modalEmail').textContent = data.email;
                document.getElementById('modalPhone').textContent = data.phone;
                document.getElementById('modalExperience').textContent = data.experience;
                document.getElementById('modalStatus').textContent = data.status;
                
                if (data.portfolio) {
                    document.getElementById('modalPortfolio').textContent = "View Portfolio";
                    document.getElementById('modalPortfolio').href = data.portfolio;
                } else {
                    document.getElementById('modalPortfolio').textContent = "No Portfolio";
                    document.getElementById('modalPortfolio').href = "#";
                }

                function openResumeModal(resumeUrl) {
    document.getElementById('modalResume').href = resumeUrl;
    document.getElementById('modalResume').setAttribute('download', 'resume.pdf'); 
    document.getElementById('resumeModal').classList.remove('hidden');
}

                document.getElementById('resumeModal').classList.remove('hidden');
            })
            .catch(error => console.error('Error:', error));
    }

    function closeResumeModal() {
        document.getElementById('resumeModal').classList.add('hidden');
    }

         function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }

        document.addEventListener("DOMContentLoaded", function () {
            feather.replace();
        });
    </script>
</body>
</html>