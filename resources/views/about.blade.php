@extends('layouts.app')

@section('content')
<!-- Complete About Page for Leon -->
<section class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-32 left-20 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-15 animate-pulse"></div>
        <div class="absolute top-64 right-16 w-80 h-80 bg-cyan-500 rounded-full mix-blend-multiply filter blur-xl opacity-15 animate-pulse animation-delay-2000"></div>
        <div class="absolute bottom-20 left-1/3 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-15 animate-pulse animation-delay-4000"></div>
    </div>

    <!-- Floating Particles -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/5 w-2 h-2 bg-white rounded-full opacity-40 animate-ping animation-delay-1000"></div>
        <div class="absolute top-2/3 right-1/4 w-1 h-1 bg-purple-400 rounded-full opacity-60 animate-ping animation-delay-3000"></div>
        <div class="absolute top-1/2 left-3/4 w-1.5 h-1.5 bg-cyan-400 rounded-full opacity-50 animate-ping animation-delay-5000"></div>
        <div class="absolute top-1/3 right-1/2 w-1 h-1 bg-pink-400 rounded-full opacity-40 animate-ping animation-delay-2000"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 py-20">
        
        <!-- Header Section -->
        <div class="text-center mb-20 opacity-0 animate-fadeInUp">
            <div class="inline-block mb-6">
                <span class="bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent text-sm font-semibold tracking-wider uppercase">
                    Get to know me
                </span>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                About <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">Leon</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                Passionate developer, creative problem solver, and lifelong learner dedicated to crafting exceptional digital experiences that make a difference.
            </p>
        </div>

        <!-- Stats Section -->
        <div class="max-w-4xl mx-auto mb-24 opacity-0 animate-fadeInUp animation-delay-500">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center group">
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent mb-4 group-hover:scale-110 transition-transform duration-300">500+</div>
                        <div class="text-gray-300 text-lg font-medium flex items-center justify-center">
                            <i class="fas fa-coffee text-yellow-400 mr-2"></i>
                            Cups
                        </div>
                    </div>
                </div>
                <div class="text-center group">
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent mb-4 group-hover:scale-110 transition-transform duration-300">10k+</div>
                        <div class="text-gray-300 text-lg font-medium flex items-center justify-center">
                            <i class="fas fa-code text-cyan-400 mr-2"></i>
                            Lines
                        </div>
                    </div>
                </div>
                <div class="text-center group">
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent mb-4 group-hover:scale-110 transition-transform duration-300">∞</div>
                        <div class="text-gray-300 text-lg font-medium flex items-center justify-center">
                            <i class="fas fa-lightbulb text-purple-400 mr-2"></i>
                            Ideas
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Journey Section -->
        <div class="max-w-6xl mx-auto mb-24 opacity-0 animate-fadeInUp animation-delay-1000">
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 md:p-12">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">My Journey</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-purple-400 to-cyan-400 mx-auto rounded-full"></div>
                </div>
                
                <div class="prose prose-lg prose-invert mx-auto text-center">
                    <p class="text-xl text-gray-300 leading-relaxed mb-6">
                        Welcome to my world! I'm Leon, a passionate full-stack developer who believes that great code is like poetry. It should be beautiful, meaningful, and powerful.
                    </p>
                    <p class="text-lg text-gray-300 leading-relaxed mb-6">
                        My journey began with curiosity and evolved into a love affair with technology. I specialize in creating digital experiences that not only look stunning but also solve real-world problems and make people's lives easier.
                    </p>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or mentoring aspiring developers. I believe in the power of community and continuous learning.
                    </p>
                </div>
            </div>
        </div>

        <!-- Professional Experience -->
        <div class="max-w-6xl mx-auto mb-24 opacity-0 animate-fadeInUp animation-delay-1500">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Professional Experience</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-purple-400 to-cyan-400 mx-auto rounded-full"></div>
            </div>
            
            <div class="space-y-8">
                <!-- Current Role -->
                <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2">Junior Full Stack Developer</h3>
                            <p class="text-xl text-purple-400 font-semibold">Duckcloud</p>
                        </div>
                        <div class="bg-gradient-to-r from-purple-500 to-cyan-500 text-white px-4 py-2 rounded-full text-sm font-medium">
                            2025 - Present
                        </div>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Currently learning and building my foundation in web development under the guidance of a senior developer. Focusing on mastering core technologies while improving real-world problem solving.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <span class="bg-red-500/20 text-red-400 px-4 py-2 rounded-full text-sm font-medium border border-red-500/30">Laravel</span>
                        <span class="bg-cyan-500/20 text-cyan-400 px-4 py-2 rounded-full text-sm font-medium border border-cyan-500/30">Tailwind</span>
                        <span class="bg-yellow-500/20 text-yellow-400 px-4 py-2 rounded-full text-sm font-medium border border-yellow-500/30">JavaScript</span>
                        <span class="bg-purple-500/20 text-purple-400 px-4 py-2 rounded-full text-sm font-medium border border-purple-500/30">Git</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Education Section -->
        <div class="max-w-6xl mx-auto mb-24 opacity-0 animate-fadeInUp animation-delay-2000">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Education & Certifications</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-purple-400 to-cyan-400 mx-auto rounded-full"></div>
            </div>
            
            <div class="space-y-8">
                <!-- Current Education -->
                <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2">High School Student</h3>
                            <p class="text-xl text-purple-400 font-semibold">Preparing for GED</p>
                        </div>
                        <div class="bg-gradient-to-r from-green-500 to-blue-500 text-white px-4 py-2 rounded-full text-sm font-medium">
                            2025 - Present
                        </div>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Currently preparing for the GED exam through a combination of structured classes and personal study. Focused on core academic subjects while also developing real-world skills through programming and web development.
                    </p>
                </div>

                <!-- Previous Education -->
                <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2">Secondary 2 Certification</h3>
                            <p class="text-xl text-cyan-400 font-semibold">ConceptX Academy</p>
                        </div>
                        <div class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-medium">
                            2023 - 2024
                        </div>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Continuously expanding knowledge through online specialized courses in modern technologies.
                    </p>
                </div>
            </div>
        </div>

        <!-- Fun Facts Section -->
        <div class="max-w-6xl mx-auto mb-24 opacity-0 animate-fadeInUp animation-delay-2500">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Fun Facts</h2>
                <p class="text-lg text-gray-300 mb-6">A little more about me...</p>
                <div class="w-24 h-1 bg-gradient-to-r from-purple-400 to-cyan-400 mx-auto rounded-full"></div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Space Enthusiast -->
                <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-6 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-3 text-center">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">🚀</div>
                    <h3 class="text-xl font-bold text-white mb-3">Space Enthusiast</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">Love following SpaceX launches and dreaming of coding in space!</p>
                </div>

                <!-- Gamer -->
                <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-6 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-3 text-center">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">🎮</div>
                    <h3 class="text-xl font-bold text-white mb-3">Gamer at Heart</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">Strategic games help me think differently about problem-solving.</p>
                </div>

                <!-- Coffee -->
                <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-6 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-3 text-center">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">☕</div>
                    <h3 class="text-xl font-bold text-white mb-3">Coffee Connoisseur</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">My code quality is directly proportional to coffee quality!</p>
                </div>

                <!-- Tech for Good -->
                <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-6 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-3 text-center">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">🌱</div>
                    <h3 class="text-xl font-bold text-white mb-3">Tech for Good</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">Passionate about using technology to make the world better.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center opacity-0 animate-fadeInUp animation-delay-3000">
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-12 max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Let's Create Something Amazing
                </h2>
                <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                    I'm always excited to work on new projects and collaborate with creative minds. Let's turn your ideas into reality!
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <button class="group bg-gradient-to-r from-purple-600 to-cyan-600 hover:from-purple-700 hover:to-cyan-700 text-white px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center space-x-2"
                    onclick="window.location.href='{{ route('contact') }}';">
                        <span>Start a Project</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                    <!-- <button class="group border-2 border-purple-400 text-purple-400 hover:bg-purple-400 hover:text-white px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 flex items-center space-x-2">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Download CV</span>
                    </button> -->
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .animation-delay-500 {
            animation-delay: 0.5s;
        }
        
        .animation-delay-1000 {
            animation-delay: 1s;
        }
        
        .animation-delay-1500 {
            animation-delay: 1.5s;
        }
        
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        
        .animation-delay-2500 {
            animation-delay: 2.5s;
        }
        
        .animation-delay-3000 {
            animation-delay: 3s;
        }
        
        .animation-delay-4000 {
            animation-delay: 4s;
        }
        
        .animation-delay-5000 {
            animation-delay: 5s;
        }
    </style>
</section>
@endsection