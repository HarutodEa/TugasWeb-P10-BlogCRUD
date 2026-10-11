<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Ruang Menulis')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans p-8">
    <div class="max-w-3xl mx-auto">
        @if (session('success'))
            <div class="p-4 mb-4 text-white bg-green-500 rounded-lg">{{ session('success') }}</div>
        @endif
        <main class="bg-white p-6 rounded-lg shadow-md">
            @yield('content')
        </main>
    </div>
</body>
</html>