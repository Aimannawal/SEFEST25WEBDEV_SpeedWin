<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200 h-screen">
    <div class="max-w-md mx-auto p-4 bg-white rounded shadow-md">
        <h1 class="text-3xl font-bold">Super Admin Dashboard</h1>
        <p>Selamat datang, {{ Auth::user()->name }}!</p>
        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Logout</button>
        </form>
    </div>
</body>
</html>