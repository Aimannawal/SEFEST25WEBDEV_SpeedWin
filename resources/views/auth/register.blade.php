<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <!-- Modal -->
    <div id="roleModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg max-w-md w-full">
            <h2 class="text-2xl font-bold mb-4 text-center">Pilih Jenis Akun</h2>
            <p class="text-gray-600 mb-6 text-center">Silakan pilih jenis akun yang sesuai dengan kebutuhan Anda</p>
            <div class="space-y-4">
                <button onclick="selectRole(0)" class="w-full p-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition duration-300">
                    <span class="block font-semibold">Pelajar</span>
                    <span class="text-sm">Pencari Kursus & Pekerjaan</span>
                </button>
                <button onclick="selectRole(1)" class="w-full p-4 bg-workbyte-500 hover:bg-workbyte-600 text-white rounded-lg transition duration-300">
                    <span class="block font-semibold">Perusahaan</span>
                    <span class="text-sm">Penyedia Kursus & Lowongan</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Registration Form -->
    <div class="flex items-center justify-center h-screen bg-gray-100">
        <form action="{{ route('register') }}" method="POST" class="bg-white p-6 rounded shadow-md w-96">
            @csrf
            <h2 class="text-2xl font-bold mb-4 text-workbyte-800">Register</h2>
            <label class="block">Username</label>
            <input type="text" name="name" class="w-full p-2 border rounded mb-3" required>
            
            <label class="block">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded mb-3" required>
    
            <label class="block">Password</label>
            <input type="password" name="password" class="w-full p-2 border rounded mb-3" required>
    
            <label class="block">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="w-full p-2 border rounded mb-3" required>
    
<select id="roleSelect" class="w-full p-2 border rounded mb-3 hidden">
    <option value="0">User (Pencari Kursus & Pekerjaan)</option>
    <option value="1">Admin / Perusahaan</option>
</select>

<!-- Input hidden untuk mengirimkan nilai -->
<input type="hidden" name="role" id="hiddenRole" value="0">
    
            <button type="submit" class="w-full bg-workbyte-500 text-white p-2 rounded hover:bg-workbyte-600 transition duration-300">Register</button>
        </form>
    </div>

    <script>
         document.getElementById('roleSelect').addEventListener('change', function() {
        document.getElementById('hiddenRole').value = this.value;
    });

        function selectRole(role) {
            document.getElementById('roleSelect').value = role;
            document.getElementById('roleModal').style.display = 'none';
        }
    </script>
</body>
</html>