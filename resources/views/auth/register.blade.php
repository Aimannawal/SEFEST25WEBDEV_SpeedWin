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
    
            <label class="block">Daftar Sebagai:</label>
            <select name="is_admin" class="w-full p-2 border rounded mb-3" required>
                <option value="0">User (Pencari Kursus & Pekerjaan)</option>
                <option value="1">Admin / Perusahaan</option>
            </select>
    
            <button type="submit" class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600 transition duration-300">Register</button>
        </form>
    </div>
    
</body>
</html>
