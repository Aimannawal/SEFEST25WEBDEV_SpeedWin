<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex flex-col items-center justify-center">
    <h1 class="text-3xl font-bold">Admin Dashboard</h1>
    <p class="mt-2 text-gray-600">Selamat datang, {{ Auth::user()->username }}</p>
    
    <form action="{{ route('logout') }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
    </form>
</body>
</html>
