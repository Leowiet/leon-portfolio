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
                        
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/in/leon-ken-07a466338/" target="_blank" class="social-btn" aria-label="LinkedIn">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14C2.238 0 0 2.239 0 5v14c0 2.762 2.238 5 5 5h14c2.762 0 5-2.238 5-5V5c0-2.761-2.238-5-5-5zm-11 20H5v-11h3v11zm-1.5-12.271c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zM20 20h-3v-5.604c0-1.336-.027-3.056-1.865-3.056-1.867 0-2.154 1.46-2.154 2.968V20h-3v-11h2.881v1.504h.041c.402-.761 1.383-1.563 2.848-1.563 3.045 0 3.609 2.005 3.609 4.612V20z"/>
                        </svg>
                        </a>

                        <!-- Discord -->
                        <a href="https://discord.com/users/1334419183215054869" target="_blank" class="social-btn" aria-label="Discord">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.317 4.369a19.791 19.791 0 00-4.885-1.515.074.074 0 00-.079.037 13.875 13.875 0 00-.651 1.337 19.736 19.736 0 00-5.861 0 13.874 13.874 0 00-.658-1.337.075.075 0 00-.079-.037 19.736 19.736 0 00-4.885 1.515.07.07 0 00-.032.027C.533 9.043-.319 13.579.099 18.057a.082.082 0 00.031.056c2.052 1.507 4.041 2.422 5.992 3.029a.077.077 0 00.084-.027c.461-.63.873-1.295 1.227-1.994a.076.076 0 00-.041-.104 13.073 13.073 0 01-1.884-.905.077.077 0 01-.008-.129c.127-.095.255-.193.378-.291a.074.074 0 01.077-.007c3.927 1.793 8.18 1.793 12.061 0a.074.074 0 01.078.006c.123.099.251.197.379.292a.077.077 0 01-.006.129 12.612 12.612 0 01-1.886.904.076.076 0 00-.04.105c.36.699.772 1.364 1.229 1.994a.077.077 0 00.084.028c1.961-.607 3.95-1.522 6.002-3.03a.077.077 0 00.031-.055c.5-5.177-.838-9.673-3.548-13.661a.062.062 0 00-.03-.028zM8.02 15.331c-1.182 0-2.153-1.085-2.153-2.419 0-1.333.955-2.418 2.153-2.418 1.21 0 2.174 1.096 2.153 2.418 0 1.334-.955 2.419-2.153 2.419zm7.974 0c-1.182 0-2.153-1.085-2.153-2.419 0-1.333.955-2.418 2.153-2.418 1.21 0 2.174 1.096 2.153 2.418 0 1.334-.943 2.419-2.153 2.419z"/>
                        </svg>
                        </a>

                        <!-- GitHub -->
                        <a href="https://github.com/Leowiet" target="_blank" class="social-btn" aria-label="GitHub">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .296c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577v-2.02c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.084-.729.084-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.31.469-2.381 1.236-3.221-.123-.303-.535-1.524.116-3.176 0 0 1.008-.322 3.3 1.23a11.52 11.52 0 013.003-.404c1.02.005 2.048.138 3.003.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.241 2.874.118 3.176.77.84 1.236 1.911 1.236 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.565 22.092 24 17.592 24 12.296c0-6.627-5.373-12-12-12"/>
                        </svg>
                        </a>

                        <!-- Telegram -->
                        <a href="https://t.me/Leowiet_ken" target="_blank" class="social-btn" aria-label="Telegram">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.373 0 0 5.372 0 12c0 6.627 5.373 12 12 12s12-5.373 12-12c0-6.628-5.373-12-12-12zm5.229 8.255l-1.991 9.38c-.15.676-.552.84-1.117.524l-3.084-2.278-1.487 1.432c-.164.164-.303.303-.621.303l.222-3.156 5.744-5.199c.25-.222-.055-.346-.387-.125l-7.096 4.47-3.06-.956c-.665-.206-.676-.665.138-.98l11.957-4.611c.552-.206 1.033.125.856.956z"/>
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