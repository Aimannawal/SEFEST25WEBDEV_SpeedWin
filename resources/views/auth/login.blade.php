<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="flex items-center justify-center h-screen bg-gray-100">
        <form action="{{ route('login') }}" method="POST" class="bg-white p-6 rounded shadow-md w-96">
            @csrf
            <h2 class="text-2xl font-bold mb-4 text-workbyte-800">Login</h2>
            <label class="block">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded mb-3" required>
            <label class="block">Password</label>
            <input type="password" name="password" class="w-full p-2 border rounded mb-3" required>
            <button type="submit" class="w-full bg-workbyte-600 text-white p-2 rounded hover:bg-workbyte-700 transition duration-300">Login</button>
        </form>
    </div>
</body>
</html>
