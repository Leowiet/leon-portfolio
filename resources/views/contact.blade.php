@extends('layouts.app')

@section('content')
<!-- Contact Hero Section with Animated Background -->
<section class="hero-section relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-900 via-blue-900 to-indigo-900">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
            <div class="shape shape-5"></div>
        </div>
    </div>

    <!-- Contact Content -->
    <div class="relative z-10 max-w-6xl mx-auto px-6 py-20">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 animate-fade-in-up">
                Get In <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Touch</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                Ready to start your next project? Let's connect and bring your ideas to life.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <!-- Contact Form -->
            <div class="glass-card p-8 animate-fade-in-left">
                <h2 class="text-3xl font-bold text-white mb-8">Send Message</h2>
                <form action="{{ route('contact') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="block text-gray-300 text-sm font-medium mb-2">Full Name</label>
                        <input type="text" id="name" name="name" required 
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all duration-300">
                    </div>

                    <div class="form-group">
                        <label for="email" class="block text-gray-300 text-sm font-medium mb-2">Email Address</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all duration-300">
                    </div>

                    <div class="form-group">
                        <label for="subject" class="block text-gray-300 text-sm font-medium mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" required 
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all duration-300">
                    </div>

                    <div class="form-group">
                        <label for="message" class="block text-gray-300 text-sm font-medium mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required 
                                  class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all duration-300 resize-none"></textarea>
                    </div>

                    <button type="submit" 
                            class="w-full py-4 bg-gradient-to-r from-cyan-500 to-purple-500 text-white font-semibold rounded-lg hover:from-cyan-600 hover:to-purple-600 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-cyan-500/25">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-8 animate-fade-in-right">
                <!-- Contact Details Card -->
                <div class="glass-card p-8">
                    <h2 class="text-3xl font-bold text-white mb-8">Contact Information</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold">Name</h3>
                                <p class="text-gray-300">Leon</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold">Email</h3>
                                <a href="mailto:mrlonely1711ken@gmail.com" class="text-cyan-400 hover:text-cyan-300 transition-colors">
                                    mrlonely1711ken@gmail.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold">Response Time</h3>
                                <p class="text-gray-300">Within 24 hours</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Links Card -->
                <div class="glass-card p-8">
                    <h3 class="text-2xl font-bold text-white mb-6">Connect With Me</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="social-btn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-btn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-btn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24c6.624 0 11.99-5.367 11.99-11.987C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-btn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C5.374 0 0 5.373 0 12 0 17.302 3.438 21.8 8.207 23.387c.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Floating Shapes Animation */
.floating-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    animation: float 20s infinite linear;
}

.shape-1 {
    width: 80px;
    height: 80px;
    left: 10%;
    animation-duration: 25s;
    animation-delay: -5s;
}

.shape-2 {
    width: 120px;
    height: 120px;
    left: 70%;
    animation-duration: 30s;
    animation-delay: -10s;
}

.shape-3 {
    width: 60px;
    height: 60px;
    left: 40%;
    animation-duration: 35s;
    animation-delay: -15s;
}

.shape-4 {
    width: 100px;
    height: 100px;
    left: 20%;
    animation-duration: 40s;
    animation-delay: -20s;
}

.shape-5 {
    width: 140px;
    height: 140px;
    left: 80%;
    animation-duration: 45s;
    animation-delay: -25s;
}

@keyframes float {
    0% {
        transform: translateY(100vh) rotate(0deg);
        opacity: 0;
    }
    10% {
        opacity: 1;
    }
    90% {
        opacity: 1;
    }
    100% {
        transform: translateY(-100px) rotate(360deg);
        opacity: 0;
    }
}

/* Glass Card Effect */
.glass-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.glass-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
}

/* Form Styling */
.form-group input:focus,
.form-group textarea:focus {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

/* Social Buttons */
.social-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    w-12 h-12;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 12px;
    color: white;
    transition: all 0.3s ease;
}

.social-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

/* Animations */
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

@keyframes fade-in-left {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fade-in-right {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out forwards;
}

.animate-fade-in-left {
    animation: fade-in-left 0.8s ease-out forwards;
}

.animate-fade-in-right {
    animation: fade-in-right 0.8s ease-out forwards;
}

.animation-delay-200 {
    animation-delay: 0.2s;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 3rem;
    }
    
    .glass-card {
        padding: 1.5rem;
    }
    
    .shape {
        display: none;
    }
}
</style>
@endsection