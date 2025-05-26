<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leon | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-900 text-white font-sans">

    <nav class="p-4 border-b border-gray-700 flex justify-between">
        <h1 class="text-xl font-bold">Leon</h1>
        <ul class="flex gap-4">
            <li><a href="{{ route('home') }}" class="hover:text-teal-400">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-teal-400">About</a></li>
            <li><a href="{{ route('projects') }}" class="hover:text-teal-400">Projects</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-teal-400">Contact</a></li>
        </ul>
    </nav>

    <main class="p-8">
        @yield('content')
    </main>

</body>
</html>
