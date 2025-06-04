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

    <!-- Beautiful Navigation - REPLACE YOUR OLD NAV WITH THIS -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-slate-900/80 backdrop-blur-md border-b border-white/10">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent">
                    Leon
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-white hover:text-purple-400 transition-colors duration-300 font-medium {{ request()->routeIs('home') ? 'text-purple-400' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium {{ request()->routeIs('about') ? 'text-purple-400' : '' }}">About</a>
                    <a href="{{ route('projects') }}" class="text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium {{ request()->routeIs('projects') ? 'text-purple-400' : '' }}">Projects</a>
                    <a href="{{ route('contact') }}" class="text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium {{ request()->routeIs('contact') ? 'text-purple-400' : '' }}">Contact</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white" id="mobile-menu-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div class="md:hidden mt-4 hidden" id="mobile-menu">
                <div class="space-y-2 pb-4">
                    <a href="{{ route('home') }}" class="block text-white hover:text-purple-400 transition-colors duration-300 font-medium py-2 {{ request()->routeIs('home') ? 'text-purple-400' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="block text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium py-2 {{ request()->routeIs('about') ? 'text-purple-400' : '' }}">About</a>
                    <a href="{{ route('projects') }}" class="block text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium py-2 {{ request()->routeIs('projects') ? 'text-purple-400' : '' }}">Projects</a>
                    <a href="{{ route('contact') }}" class="block text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium py-2 {{ request()->routeIs('contact') ? 'text-purple-400' : '' }}">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content - UPDATED WITH PADDING FOR FIXED NAV -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Mobile Menu Script -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>