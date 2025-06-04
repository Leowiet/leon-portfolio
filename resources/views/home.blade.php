@extends('layouts.app')
<!-- Complete Home Portfolio Page for Leon -->
<section class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-cyan-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-4000"></div>
    </div>

    <!-- Floating Particles -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-white rounded-full opacity-60 animate-ping animation-delay-1000"></div>
        <div class="absolute top-3/4 right-1/4 w-1 h-1 bg-purple-400 rounded-full opacity-80 animate-ping animation-delay-3000"></div>
        <div class="absolute top-1/2 left-3/4 w-1.5 h-1.5 bg-cyan-400 rounded-full opacity-70 animate-ping animation-delay-5000"></div>
        <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-pink-400 rounded-full opacity-60 animate-ping animation-delay-2000"></div>
        <div class="absolute top-2/3 left-1/5 w-1 h-1 bg-yellow-400 rounded-full opacity-50 animate-ping animation-delay-6000"></div>
        <div class="absolute top-1/5 right-2/3 w-1.5 h-1.5 bg-green-400 rounded-full opacity-60 animate-ping animation-delay-4500"></div>
    </div>



    <div class="relative z-10 container mx-auto px-6 flex items-center min-h-screen pt-20">
        <div class="w-full">
            <!-- Main Hero Content -->
            <div class="text-center mb-20">
                <div class="inline-block mb-6">
                    <span class="bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent text-sm font-semibold tracking-wider uppercase animate-pulse">
                        Welcome to My Digital Universe
                    </span>
                </div>
                
                <div class="mb-8">
                    <h1 class="text-6xl md:text-8xl font-bold text-white mb-4 leading-tight opacity-0 animate-fadeInUp">
                        Hi, I'm <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">Leon</span>
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold text-gray-300 mb-6 opacity-0 animate-fadeInUp animation-delay-500">
                        Junior Full Stack Developer
                    </h2>
                </div>
                
                <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto mb-8 opacity-0 animate-fadeInUp animation-delay-1000 leading-relaxed">
                    Crafting exceptional digital experiences with modern technologies and creative solutions. Passionate about building innovative web applications that make a difference.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center opacity-0 animate-fadeInUp animation-delay-1500">
                    <button class="group bg-gradient-to-r from-purple-600 to-cyan-600 hover:from-purple-700 hover:to-cyan-700 text-white px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center space-x-2">
                        <span>View My Work</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                    <button class="group border-2 border-purple-400 text-purple-400 hover:bg-purple-400 hover:text-white px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 flex items-center space-x-2">
                        <span>Get In Touch</span>
                        <svg class="w-5 h-5 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- What I Do Best Section -->
            <div class="max-w-6xl mx-auto opacity-0 animate-fadeInUp animation-delay-2000">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                        What I Do Best
                    </h2>
                    <p class="text-lg text-gray-300 max-w-2xl mx-auto mb-6">
                        Specializing in modern web development with a focus on user experience and performance
                    </p>
                    <div class="w-24 h-1 bg-gradient-to-r from-purple-400 to-cyan-400 mx-auto rounded-full"></div>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Frontend Magic -->
                    <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-3 hover:shadow-2xl hover:shadow-purple-500/20">
                        <div class="text-center mb-8">
                            <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4">Frontend Magic</h3>
                        </div>
                        <p class="text-gray-300 text-center mb-8 leading-relaxed text-lg">
                            Creating stunning, responsive interfaces with Tailwind, and modern CSS frameworks. Every pixel matters, every interaction delights.
                        </p>
                        <div class="flex justify-center space-x-3 flex-wrap gap-3">
                            <span class="bg-yellow-500/20 text-yellow-400 px-4 py-2 rounded-full text-sm font-medium border border-yellow-500/30 hover:bg-yellow-500/30 transition-colors duration-300">JavaScript</span>
                            <span class="bg-cyan-500/20 text-cyan-400 px-4 py-2 rounded-full text-sm font-medium border border-cyan-500/30 hover:bg-cyan-500/30 transition-colors duration-300">Tailwind CSS</span>
                        </div>
                    </div>

                    <!-- Backend Power -->
                    <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-3 hover:shadow-2xl hover:shadow-cyan-500/20">
                        <div class="text-center mb-8">
                            <div class="w-20 h-20 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4">Backend Power</h3>
                        </div>
                        <p class="text-gray-300 text-center mb-8 leading-relaxed text-lg">
                            Building robust, scalable APIs and databases that power amazing user experiences. Performance and security are my top priorities.
                        </p>
                        <div class="flex justify-center space-x-2 flex-wrap gap-2">
                            <span class="bg-red-500/20 text-red-400 px-4 py-2 rounded-full text-sm font-medium border border-red-500/30 hover:bg-red-500/30 transition-colors duration-300">Laravel</span>
                            <span class="bg-green-500/20 text-green-400 px-4 py-2 rounded-full text-sm font-medium border border-green-500/30 hover:bg-green-500/30 transition-colors duration-300">Node.js</span>
                            <span class="bg-blue-500/20 text-blue-400 px-4 py-2 rounded-full text-sm font-medium border border-blue-500/30 hover:bg-blue-500/30 transition-colors duration-300">MySQL</span>
                        </div>
                    </div>

                    <!-- Design Thinking -->
                    <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-3 hover:shadow-2xl hover:shadow-pink-500/20">
                        <div class="text-center mb-8">
                            <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-500 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4">Design Thinking</h3>
                        </div>
                        <p class="text-gray-300 text-center mb-8 leading-relaxed text-lg">
                            Designing user-centered experiences that are both beautiful and functional. From wireframes to prototypes, I bring ideas to life.
                        </p>
                        <div class="flex justify-center space-x-3 flex-wrap gap-3">
                            <span class="bg-purple-500/20 text-purple-400 px-4 py-2 rounded-full text-sm font-medium border border-purple-500/30 hover:bg-purple-500/30 transition-colors duration-300">Figma</span>
                            <span class="bg-orange-500/20 text-orange-400 px-4 py-2 rounded-full text-sm font-medium border border-orange-500/30 hover:bg-orange-500/30 transition-colors duration-300">Illustrator</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="max-w-4xl mx-auto mt-20 opacity-0 animate-fadeInUp animation-delay-2500">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="group">
                        <div class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent mb-2 group-hover:scale-110 transition-transform duration-300">50+</div>
                        <div class="text-gray-300 text-sm uppercase tracking-wider">Projects</div>
                    </div>
                    <div class="group">
                        <div class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-cyan-400 to-pink-400 bg-clip-text text-transparent mb-2 group-hover:scale-110 transition-transform duration-300">2+</div>
                        <div class="text-gray-300 text-sm uppercase tracking-wider">Years Coding</div>
                    </div>
                    <div class="group">
                        <div class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent mb-2 group-hover:scale-110 transition-transform duration-300">20+</div>
                        <div class="text-gray-300 text-sm uppercase tracking-wider">Happy Clients</div>
                    </div>
                    <div class="group">
                        <div class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent mb-2 group-hover:scale-110 transition-transform duration-300">24/7</div>
                        <div class="text-gray-300 text-sm uppercase tracking-wider">Support</div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-20 opacity-0 animate-fadeInUp animation-delay-3000">
                <p class="text-lg text-gray-300 mb-8">Ready to bring your ideas to life?</p>
                <button class="group bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white px-10 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center space-x-3 mx-auto">
                    <span>Let's Create Something Amazing</span>
                    <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </button>
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
        
        .animation-delay-4500 {
            animation-delay: 4.5s;
        }
        
        .animation-delay-5000 {
            animation-delay: 5s;
        }
        
        .animation-delay-6000 {
            animation-delay: 6s;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</section>