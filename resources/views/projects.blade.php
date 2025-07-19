@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute top-40 right-20 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-1000"></div>
            <div class="absolute bottom-20 left-1/2 w-80 h-80 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-500"></div>
        </div>
        
        <div class="relative z-10 container mx-auto px-6 py-20">
            <!-- Main Title with Animation -->
            <div class="text-center mb-16 opacity-0 animate-fade-in-up" style="animation-delay: 0.2s;">
                <h1 class="text-6xl md:text-7xl font-bold bg-gradient-to-r from-white via-purple-200 to-cyan-200 bg-clip-text text-transparent mb-6 tracking-tight">
                    My Projects
                </h1>
                
                <!-- Stylish Slogan -->
                <div class="max-w-4xl mx-auto">
                    <p class="text-xl md:text-2xl text-gray-300 leading-relaxed font-light">
                        Explore my journey through 
                        <span class="text-purple-400 font-semibold">code</span>, 
                        <span class="text-cyan-400 font-semibold">design</span>, and 
                        <span class="text-pink-400 font-semibold">innovation</span>. 
                        Each project represents a unique challenge solved with creativity and technical expertise.
                    </p>
                </div>
                
                <!-- Decorative Line -->
                <div class="mt-8 flex justify-center">
                    <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-cyan-500 rounded-full"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects Grid Section -->
    <div class="container mx-auto px-6 pb-20">
        <!-- Section Header -->
        <div class="text-center mb-16 opacity-0 animate-fade-in-up" style="animation-delay: 0.4s;">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Featured Work</h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                A collection of projects that showcase my skills and passion for creating exceptional digital experiences.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Project Card Template 1 -->
              <div class="group relative bg-gray-800/50 backdrop-blur-sm rounded-2xl overflow-hidden border border-gray-700/50 hover:border-purple-500/50 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/20 opacity-0 animate-fade-in-up max-w-md" style="animation-delay: 0.6s;">
        <!-- Project Image -->
        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/Flippy.png') }}" alt="Flippy Space Shooter Screenshot" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            
            <!-- Dark overlay for better text readability on hover -->
            <div class="absolute inset-0 bg-black/20"></div>
            
            <!-- Hover Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
             <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                
            </div>
        </div>
        
        <!-- Project Content -->
        <div class="p-6">
            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">
                Flippy Space Shooter
            </h3>
            <p class="text-gray-400 text-sm leading-relaxed mb-4">
                A fast-paced, addictive web game inspired by Flappy Bird, reimagined with a space theme. <br>
                Built with vanilla HTML, CSS, and JavaScript, this game challenges players to pilot a nimble spacecraft through a dynamic asteroid field. Players tap or click to flap upward and use left-click to shoot obstacles, adding an exciting combat element to classic flappy mechanics.
            </p>
            
            <!-- Tech Tags -->
            <div class="flex flex-wrap gap-2 mb-6">
                <span class="px-3 py-1 bg-purple-500/20 text-purple-300 rounded-full text-xs font-medium">HTML</span>
                <span class="px-3 py-1 bg-cyan-500/20 text-cyan-300 rounded-full text-xs font-medium">CSS</span>
                <span class="px-3 py-1 bg-pink-500/20 text-pink-300 rounded-full text-xs font-medium">JavaScript</span>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex gap-3">
                <a href="https://leowiet.github.io/Flippy_Space/" class="flex-1 bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-white py-2 px-4 rounded-lg text-sm font-medium text-center transition-all duration-300 hover:shadow-lg hover:shadow-purple-500/25">
                    View Live
                </a>
                <a href="https://github.com/Leowiet/Flippy_Space" class="flex-1 bg-gray-700/50 hover:bg-gray-600/50 text-gray-300 hover:text-white py-2 px-4 rounded-lg text-sm font-medium text-center transition-all border border-gray-600/50 hover:border-gray-500">
                    GitHub
                </a>
            </div>
        </div>
    </div>
            <!-- Project Card Template 2 --> 
             <div class="group relative bg-gray-800/50 backdrop-blur-sm rounded-2xl overflow-hidden border border-gray-700/50 hover:border-cyan-500/50 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-cyan-500/20 opacity-0 animate-fade-in-up" style="animation-delay: 0.8s;">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/Ecojitsaw.png') }}" alt="Ecojitsaw Screenshot" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <!-- Removed phone icon on hover for Ecojitsaw project -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-cyan-400 transition-colors">
                        Ecojitsaw 
                    </h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                       EcoJigsaw is an interactive nature-themed puzzle game built with HTML, CSS (Tailwind), and JavaScript. <br> Players select a difficulty and a nature category, then solve a visually engaging jigsaw puzzle by rearranging image pieces. Features include a stylish UI, image preview, drag-and-drop gameplay, a manual check system, and a personal puzzle library to track completed challenges.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-cyan-500/20 text-cyan-300 rounded-full text-xs font-medium">HTML</span>
                        <span class="px-3 py-1 bg-green-500/20 text-green-300 rounded-full text-xs font-medium">Tailwind</span>
                        <span class="px-3 py-1 bg-yellow-500/20 text-yellow-300 rounded-full text-xs font-medium">JAVASCRIPT</span>
                    </div>
                    
                    <div class="flex gap-3">
                        <a href="https://leowiet.github.io/Ecojitsaw/" class="flex-1 bg-gradient-to-r from-cyan-600 to-cyan-700 hover:from-cyan-700 hover:to-cyan-800 text-white py-2 px-4 rounded-lg text-sm font-medium text-center transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/25">
                            View Live
                        </a>
                        <a href="https://github.com/Leowiet/Ecojitsaw" class="flex-1 bg-gray-700/50 hover:bg-gray-600/50 text-gray-300 hover:text-white py-2 px-4 rounded-lg text-sm font-medium text-center transition-all border border-gray-600/50 hover:border-gray-500">
                            GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card Template 3 -->
            <!-- <div class="group relative bg-gray-800/50 backdrop-blur-sm rounded-2xl overflow-hidden border border-gray-700/50 hover:border-pink-500/50 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-pink-500/20 opacity-0 animate-fade-in-up" style="animation-delay: 1s;">
                <div class="relative h-48 bg-gradient-to-br from-pink-600 to-rose-600 overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-white/80 text-6xl">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-pink-400 transition-colors">
                        Design System
                    </h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        A comprehensive design system with reusable components, ensuring consistency across all digital platforms.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-pink-500/20 text-pink-300 rounded-full text-xs font-medium">Figma</span>
                        <span class="px-3 py-1 bg-purple-500/20 text-purple-300 rounded-full text-xs font-medium">Tailwind</span>
                        <span class="px-3 py-1 bg-orange-500/20 text-orange-300 rounded-full text-xs font-medium">Storybook</span>
                    </div>
                    
                    <div class="flex gap-3">
                        <a href="#" class="flex-1 bg-gradient-to-r from-pink-600 to-pink-700 hover:from-pink-700 hover:to-pink-800 text-white py-2 px-4 rounded-lg text-sm font-medium text-center transition-all duration-300 hover:shadow-lg hover:shadow-pink-500/25">
                            View Live
                        </a>
                        <a href="#" class="flex-1 bg-gray-700/50 hover:bg-gray-600/50 text-gray-300 hover:text-white py-2 px-4 rounded-lg text-sm font-medium text-center transition-all border border-gray-600/50 hover:border-gray-500">
                            GitHub
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Add more project cards by duplicating the above structure -->
            
        <!-- </div> -->
        
        <!-- Load More Button -->
        <!-- <div class="text-center mt-16 opacity-0 animate-fade-in-up" style="animation-delay: 1.2s;">
            <button class="bg-gradient-to-r from-purple-600 to-cyan-600 hover:from-purple-700 hover:to-cyan-700 text-white px-8 py-3 rounded-full font-medium transition-all duration-300 hover:shadow-lg hover:shadow-purple-500/25 hover:scale-105">
                Load More Projects
            </button>
        </div>
    </div> -->

    <!-- Future Testimonials Section -->
    <!-- <div class="container mx-auto px-6 py-20">
        <div class="bg-gray-800/30 backdrop-blur-sm rounded-3xl p-12 border border-gray-700/50 opacity-0 animate-fade-in-up" style="animation-delay: 1.4s;">
            <div class="text-center">
                <h3 class="text-3xl font-bold text-white mb-4">What People Say</h3>
                <p class="text-gray-400 mb-8">Testimonials from clients and collaborators will appear here.</p>
                 -->
                <!-- Placeholder for testimonials -->
                <!-- <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-cyan-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-quote-left text-white text-xl"></i>
                        </div>
                        <p class="text-gray-400 text-sm">Testimonial placeholder</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-quote-left text-white text-xl"></i>
                        </div>
                        <p class="text-gray-400 text-sm">Testimonial placeholder</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-quote-left text-white text-xl"></i>
                        </div>
                        <p class="text-gray-400 text-sm">Testimonial placeholder</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- CTA Section -->
    <div class="container mx-auto px-6 pb-20">
        <div class="text-center bg-gradient-to-r from-purple-900/50 to-cyan-900/50 backdrop-blur-sm rounded-3xl p-12 border border-purple-500/20 opacity-0 animate-fade-in-up" style="animation-delay: 1.6s;">
            <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Start Your Project?</h3>
            <p class="text-gray-300 text-lg mb-8 max-w-2xl mx-auto">
                Let's collaborate and bring your ideas to life with cutting-edge technology and creative solutions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-gradient-to-r from-purple-600 to-cyan-600 hover:from-purple-700 hover:to-cyan-700 text-white px-8 py-3 rounded-full font-medium transition-all duration-300 hover:shadow-lg hover:shadow-purple-500/25 hover:scale-105">
                    Get In Touch
                </a>
                <!-- <a href="#" class="bg-transparent border-2 border-gray-600 hover:border-gray-400 text-gray-300 hover:text-white px-8 py-3 rounded-full font-medium transition-all duration-300">
                    View Resume
                </a> -->
            </div>
        </div>
    </div>
</div>

<style>
@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out forwards;
}

/* Ensure smooth scrolling animations */
html {
    scroll-behavior: smooth;
}

/* Custom hover effects for cards */
.group:hover .fas {
    transform: scale(1.1);
    transition: transform 0.3s ease;
}
</style>

@endsection