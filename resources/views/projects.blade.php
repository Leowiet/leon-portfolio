@extends('layouts.app')

@section('content')
<!-- Animated Background -->
<div class="bg-animation fixed inset-0 -z-10 overflow-hidden" id="bgAnimation"></div>

<!-- Hero Header Section -->
<section class="projects-header relative text-center py-24 px-5">
    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 via-purple-500/10 to-pink-500/10 backdrop-blur-sm border-b border-white/10"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;><defs><pattern id=&quot;grid&quot; width=&quot;10&quot; height=&quot;10&quot; patternUnits=&quot;userSpaceOnUse&quot;><path d=&quot;M 10 0 L 0 0 0 10&quot; fill=&quot;none&quot; stroke=&quot;rgba(255,255,255,0.1)&quot; stroke-width=&quot;0.5&quot;/></pattern></defs><rect width=&quot;100&quot; height=&quot;100&quot; fill=&quot;url(%23grid)&quot;/></svg>');"></div>
    
    <div class="relative z-10">
        <h1 class="text-6xl md:text-8xl font-black mb-6 bg-gradient-to-r from-cyan-400 via-purple-400 to-yellow-400 bg-clip-text text-transparent animate-pulse">
            My Projects
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
            Innovative solutions crafted with passion and precision
        </p>
    </div>
</section>

<!-- Filter Navigation -->
<nav class="flex justify-center gap-4 my-12 px-5 flex-wrap">
    <a href="#" class="nav-pill active" data-filter="all">All Projects</a>
    <a href="#" class="nav-pill" data-filter="web">Web Apps</a>
    <a href="#" class="nav-pill" data-filter="mobile">Mobile</a>
    <a href="#" class="nav-pill" data-filter="ai">AI/ML</a>
    <a href="#" class="nav-pill" data-filter="api">APIs</a>
</nav>

<!-- Projects Grid -->
<section class="projects-container max-w-7xl mx-auto px-5 pb-24">
    <div class="projects-grid grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8 mt-12" id="projectsGrid">
        
        <!-- Featured Project -->
        <div class="project-card featured-project col-span-1 lg:col-span-2 xl:col-span-3 fade-in" data-category="web ai">
            <div class="project-image h-80 bg-gradient-to-br from-pink-500 via-cyan-500 to-blue-500 relative overflow-hidden flex items-center justify-center">
                <i class="fas fa-brain text-7xl text-white/80 z-10"></i>
                <div class="absolute inset-0 bg-gradient-to-br from-black/30 to-black/10"></div>
            </div>
            <div class="project-content p-8">
                <h3 class="project-title text-3xl font-bold mb-4 bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">
                    AI-Powered Analytics Dashboard
                </h3>
                <p class="project-description text-gray-400 mb-6 text-lg leading-relaxed">
                    A comprehensive analytics platform that uses machine learning to provide intelligent insights and predictive analytics for business data. Features real-time data processing and interactive visualizations.
                </p>
                <div class="project-tech flex flex-wrap gap-2 mb-8">
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag">Vue.js</span>
                    <span class="tech-tag">Python</span>
                    <span class="tech-tag">TensorFlow</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">Redis</span>
                </div>
                <div class="project-links flex gap-4">
                    <a href="#" class="project-link primary">
                        <i class="fas fa-external-link-alt"></i>
                        Live Demo
                    </a>
                    <a href="#" class="project-link secondary">
                        <i class="fab fa-github"></i>
                        View Code
                    </a>
                </div>
            </div>
        </div>

        <!-- Regular Projects -->
        <div class="project-card fade-in" data-category="web">
            <div class="project-image h-64 bg-gradient-to-br from-blue-600 to-purple-600 relative overflow-hidden flex items-center justify-center">
                <i class="fas fa-shopping-cart text-5xl text-white/80 z-10"></i>
                <div class="absolute inset-0 bg-gradient-to-br from-black/30 to-black/10"></div>
            </div>
            <div class="project-content p-8">
                <h3 class="project-title text-2xl font-bold mb-4 text-white">E-Commerce Platform</h3>
                <p class="project-description text-gray-400 mb-5 leading-relaxed">
                    Modern e-commerce solution with advanced features including real-time inventory management, payment processing, and customer analytics.
                </p>
                <div class="project-tech flex flex-wrap gap-2 mb-6">
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag">React</span>
                    <span class="tech-tag">Stripe</span>
                    <span class="tech-tag">PostgreSQL</span>
                </div>
                <div class="project-links flex gap-3">
                    <a href="#" class="project-link primary">
                        <i class="fas fa-external-link-alt"></i>
                        Live Demo
                    </a>
                    <a href="#" class="project-link secondary">
                        <i class="fab fa-github"></i>
                        Code
                    </a>
                </div>
            </div>
        </div>

        <div class="project-card fade-in" data-category="mobile">
            <div class="project-image h-64 bg-gradient-to-br from-pink-500 to-red-500 relative overflow-hidden flex items-center justify-center">
                <i class="fas fa-mobile-alt text-5xl text-white/80 z-10"></i>
                <div class="absolute inset-0 bg-gradient-to-br from-black/30 to-black/10"></div>
            </div>
            <div class="project-content p-8">
                <h3 class="project-title text-2xl font-bold mb-4 text-white">Task Management App</h3>
                <p class="project-description text-gray-400 mb-5 leading-relaxed">
                    Cross-platform mobile application for task management with real-time synchronization and team collaboration features.
                </p>
                <div class="project-tech flex flex-wrap gap-2 mb-6">
                    <span class="tech-tag">React Native</span>
                    <span class="tech-tag">Firebase</span>
                    <span class="tech-tag">Redux</span>
                    <span class="tech-tag">Node.js</span>
                </div>
                <div class="project-links flex gap-3">
                    <a href="#" class="project-link primary">
                        <i class="fas fa-download"></i>
                        Download
                    </a>
                    <a href="#" class="project-link secondary">
                        <i class="fab fa-github"></i>
                        Code
                    </a>
                </div>
            </div>
        </div>

        <div class="project-card fade-in" data-category="api">
            <div class="project-image h-64 bg-gradient-to-br from-cyan-500 to-blue-500 relative overflow-hidden flex items-center justify-center">
                <i class="fas fa-server text-5xl text-white/80 z-10"></i>
                <div class="absolute inset-0 bg-gradient-to-br from-black/30 to-black/10"></div>
            </div>
            <div class="project-content p-8">
                <h3 class="project-title text-2xl font-bold mb-4 text-white">RESTful API Service</h3>
                <p class="project-description text-gray-400 mb-5 leading-relaxed">
                    Scalable microservices architecture with comprehensive API documentation, rate limiting, and advanced authentication.
                </p>
                <div class="project-tech flex flex-wrap gap-2 mb-6">
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag">Docker</span>
                    <span class="tech-tag">JWT</span>
                    <span class="tech-tag">Swagger</span>
                </div>
                <div class="project-links flex gap-3">
                    <a href="#" class="project-link primary">
                        <i class="fas fa-book"></i>
                        API Docs
                    </a>
                    <a href="#" class="project-link secondary">
                        <i class="fab fa-github"></i>
                        Code
                    </a>
                </div>
            </div>
        </div>

        <div class="project-card fade-in" data-category="web">
            <div class="project-image h-64 bg-gradient-to-br from-purple-500 to-yellow-500 relative overflow-hidden flex items-center justify-center">
                <i class="fas fa-chart-line text-5xl text-white/80 z-10"></i>
                <div class="absolute inset-0 bg-gradient-to-br from-black/30 to-black/10"></div>
            </div>
            <div class="project-content p-8">
                <h3 class="project-title text-2xl font-bold mb-4 text-white">Social Media Dashboard</h3>
                <p class="project-description text-gray-400 mb-5 leading-relaxed">
                    Comprehensive social media management platform with analytics, scheduling, and multi-platform integration.
                </p>
                <div class="project-tech flex flex-wrap gap-2 mb-6">
                    <span class="tech-tag">Vue.js</span>
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag">Chart.js</span>
                    <span class="tech-tag">WebSocket</span>
                </div>
                <div class="project-links flex gap-3">
                    <a href="#" class="project-link primary">
                        <i class="fas fa-external-link-alt"></i>
                        Live Demo
                    </a>
                    <a href="#" class="project-link secondary">
                        <i class="fab fa-github"></i>
                        Code
                    </a>
                </div>
            </div>
        </div>

        <div class="project-card fade-in" data-category="ai">
            <div class="project-image h-64 bg-gradient-to-br from-teal-400 to-pink-400 relative overflow-hidden flex items-center justify-center">
                <i class="fas fa-robot text-5xl text-white/80 z-10"></i>
                <div class="absolute inset-0 bg-gradient-to-br from-black/30 to-black/10"></div>
            </div>
            <div class="project-content p-8">
                <h3 class="project-title text-2xl font-bold mb-4 text-white">Chatbot Assistant</h3>
                <p class="project-description text-gray-400 mb-5 leading-relaxed">
                    AI-powered chatbot with natural language processing capabilities and integration with multiple messaging platforms.
                </p>
                <div class="project-tech flex flex-wrap gap-2 mb-6">
                    <span class="tech-tag">Python</span>
                    <span class="tech-tag">NLP</span>
                    <span class="tech-tag">TensorFlow</span>
                    <span class="tech-tag">Flask</span>
                </div>
                <div class="project-links flex gap-3">
                    <a href="#" class="project-link primary">
                        <i class="fas fa-comments"></i>
                        Try Bot
                    </a>
                    <a href="#" class="project-link secondary">
                        <i class="fab fa-github"></i>
                        Code
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Particle Animation */
    .particle {
        position: absolute;
        background: linear-gradient(45deg, #00d4ff, #ff00ff);
        border-radius: 50%;
        opacity: 0.6;
        animation: float 20s infinite linear;
    }

    @keyframes float {
        0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
        10% { opacity: 0.6; }
        90% { opacity: 0.6; }
        100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
    }

    /* Navigation Pills */
    .nav-pill {
        @apply px-6 py-3 bg-white/10 border border-white/20 rounded-full text-white font-semibold transition-all duration-300 relative overflow-hidden backdrop-blur-sm;
    }

    .nav-pill::before {
        content: '';
        @apply absolute top-0 left-0 w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent transform -translate-x-full transition-transform duration-500;
    }

    .nav-pill:hover::before {
        @apply translate-x-full;
    }

    .nav-pill:hover, .nav-pill.active {
        @apply bg-gradient-to-r from-cyan-500 to-purple-500 transform -translate-y-1;
        box-shadow: 0 10px 25px rgba(0, 212, 255, 0.3);
    }

    /* Project Cards */
    .project-card {
        @apply bg-white/5 border border-white/10 rounded-2xl overflow-hidden transition-all duration-500 relative backdrop-blur-xl cursor-pointer;
    }

    .project-card::before {
        content: '';
        @apply absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-purple-500/10 opacity-0 transition-opacity duration-300 z-10;
    }

    .project-card:hover::before {
        @apply opacity-100;
    }

    .project-card:hover {
        @apply transform -translate-y-3 scale-105 border-cyan-500/50;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(0, 212, 255, 0.2);
    }

    /* Tech Tags */
    .tech-tag {
        @apply px-3 py-2 bg-cyan-500/20 border border-cyan-500/30 rounded-full text-xs text-cyan-400 font-semibold;
    }

    /* Project Links */
    .project-link {
        @apply px-5 py-3 rounded-lg font-semibold transition-all duration-300 flex items-center gap-2 relative overflow-hidden;
    }

    .project-link.primary {
        @apply bg-gradient-to-r from-cyan-500 to-blue-600 text-white;
    }

    .project-link.secondary {
        @apply bg-white/10 text-white border border-white/20;
    }

    .project-link:hover {
        @apply transform -translate-y-1;
    }

    .project-link.primary:hover {
        box-shadow: 0 8px 25px rgba(0, 212, 255, 0.4);
    }

    .project-link.secondary:hover {
        @apply bg-white/20;
    }

    /* Animations */
    .fade-in {
        @apply opacity-0 transform translate-y-8 transition-all duration-700;
    }

    .fade-in.visible {
        @apply opacity-100 transform translate-y-0;
    }

    /* Featured Project */
    .featured-project {
        @apply bg-gradient-to-br from-cyan-500/10 to-purple-500/10 border-2 border-cyan-500/30;
    }

    .featured-project .project-title {
        @apply text-3xl bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent;
    }
</style>

<script>
    // Create animated particles
    function createParticles() {
        const container = document.getElementById('bgAnimation');
        
        setInterval(() => {
            const particle = document.createElement('div');
            particle.className = 'particle';
            
            const size = Math.random() * 4 + 2;
            const startPos = Math.random() * window.innerWidth;
            const duration = Math.random() * 10 + 15;
            
            particle.style.width = size + 'px';
            particle.style.height = size + 'px';
            particle.style.left = startPos + 'px';
            particle.style.animationDuration = duration + 's';
            
            container.appendChild(particle);
            
            setTimeout(() => {
                if (particle.parentNode) {
                    particle.parentNode.removeChild(particle);
                }
            }, duration * 1000);
        }, 300);
    }

    // Filter functionality
    function initializeFilters() {
        const filterButtons = document.querySelectorAll('.nav-pill');
        const projectCards = document.querySelectorAll('.project-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                const filter = button.getAttribute('data-filter');
                
                projectCards.forEach((card, index) => {
                    const category = card.getAttribute('data-category') || '';
                    const shouldShow = filter === 'all' || category.includes(filter);
                    
                    setTimeout(() => {
                        if (shouldShow) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 50);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(30px)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    }, index * 50);
                });
            });
        });
    }

    // Scroll animations
    function initializeScrollAnimations() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });
    }

    // Initialize everything
    document.addEventListener('DOMContentLoaded', () => {
        createParticles();
        initializeFilters();
        initializeScrollAnimations();
        
        setTimeout(() => {
            document.querySelectorAll('.project-card').forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('visible');
                }, index * 100);
            });
        }, 500);
    });
</script>
@endsection