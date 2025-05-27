@extends('layouts.app')

@section('content')
<!-- Hero Section with Animated Background -->
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
    
    <!-- Hero Content -->
    <div class="relative z-10 text-center text-white px-4">
        <div class="hero-content">
            <h1 class="hero-title text-6xl md:text-8xl font-black mb-6 tracking-tight">
                <span class="gradient-text">Leon</span>
            </h1>
            <div class="typewriter-container mb-8">
                <p class="text-xl md:text-2xl font-light text-gray-300">
                    Junior Full Stack Developer • UI/UX Designer • Creative Problem Solver
                </p>
            </div>
            <p class="text-lg md:text-xl text-gray-400 mb-12 max-w-2xl mx-auto leading-relaxed">
                Transforming ideas into digital experiences that captivate, engage, and inspire. 
                Let's bring your vision to life with cutting-edge technology and stunning design.
            </p>
            <div class="hero-buttons flex flex-col sm:flex-row gap-4 justify-center">
                <button class="cta-primary px-8 py-4 text-lg font-semibold rounded-full">
                    View My Work
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
                <button class="cta-secondary px-8 py-4 text-lg font-semibold rounded-full">
                    Get In Touch
                    <i class="fas fa-paper-plane ml-2"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 scroll-indicator">
        <div class="mouse">
            <div class="wheel"></div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills-section py-20 bg-gray-900 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="grid-pattern"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="section-title text-4xl md:text-5xl font-bold text-white mb-4">
                What I Do Best
            </h2>
            <div class="section-subtitle w-24 h-1 bg-gradient-to-r from-purple-500 to-blue-500 mx-auto mb-8"></div>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Crafting exceptional digital experiences with modern technologies and creative solutions
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Frontend Development -->
            <div class="skill-card group">
                <div class="skill-icon-wrapper">
                    <i class="fas fa-code skill-icon"></i>
                    <div class="skill-glow"></div>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Frontend Magic</h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Creating stunning, responsive interfaces with Tailwind, and modern CSS frameworks. 
                    Every pixel matters, every interaction delights.
                </p>
                <div class="tech-stack">
                   
                    <span class="tech-tag">JavaScript</span>
                    <span class="tech-tag">Tailwind CSS</span>
                </div>
            </div>
            
            <!-- Backend Development -->
            <div class="skill-card group">
                <div class="skill-icon-wrapper">
                    <i class="fas fa-server skill-icon"></i>
                    <div class="skill-glow"></div>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Backend Power</h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Building robust, scalable APIs and databases that power amazing user experiences. 
                    Performance and security are my top priorities.
                </p>
                <div class="tech-stack">
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">MySQL</span>
                    
                </div>
            </div>
            
            <!-- UI/UX Design -->
            <div class="skill-card group">
                <div class="skill-icon-wrapper">
                    <i class="fas fa-palette skill-icon"></i>
                    <div class="skill-glow"></div>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Design Thinking</h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Designing user-centered experiences that are both beautiful and functional. 
                    From wireframes to prototypes, I bring ideas to life.
                </p>
                <div class="tech-stack">
                    <span class="tech-tag">Figma</span>
                    <span class="tech-tag">Illustrator</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section py-16 bg-gradient-to-r from-purple-900 to-blue-900 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="stat-item">
                <div class="stat-number text-4xl md:text-5xl font-black text-white mb-2" data-count="50">0</div>
                <p class="text-purple-200 text-sm md:text-base">Projects Completed</p>
            </div>
            <div class="stat-item">
                <div class="stat-number text-4xl md:text-5xl font-black text-white mb-2" data-count="25">0</div>
                <p class="text-purple-200 text-sm md:text-base">Happy Clients</p>
            </div>
            <div class="stat-item">
                <div class="stat-number text-4xl md:text-5xl font-black text-white mb-2" data-count="3">0</div>
                <p class="text-purple-200 text-sm md:text-base">Years Experience</p>
            </div>
            <div class="stat-item">
                <div class="stat-number text-4xl md:text-5xl font-black text-white mb-2" data-count="24">0</div>
                <p class="text-purple-200 text-sm md:text-base">Hours Support</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-20 bg-gray-900 relative">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Ready to Start Your Project?
        </h2>
        <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto">
            Let's collaborate and create something extraordinary together. 
            Your success is my mission.
        </p>
        <button class="cta-primary px-10 py-5 text-xl font-semibold rounded-full">
            Let's Work Together
            <i class="fas fa-rocket ml-3"></i>
        </button>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* Custom CSS Variables */
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        --text-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    /* Hero Section Styles */
    .hero-section {
        position: relative;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

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

    .shape-1 { width: 80px; height: 80px; left: 10%; animation-delay: 0s; }
    .shape-2 { width: 120px; height: 120px; left: 20%; animation-delay: 2s; }
    .shape-3 { width: 60px; height: 60px; left: 70%; animation-delay: 4s; }
    .shape-4 { width: 100px; height: 100px; left: 80%; animation-delay: 6s; }
    .shape-5 { width: 140px; height: 140px; left: 50%; animation-delay: 8s; }

    @keyframes float {
        0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
    }

    .hero-content {
        animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .gradient-text {
        background: linear-gradient(135deg, #fff, #a78bfa);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 0 50px rgba(167, 139, 250, 0.5);
    }

    /* Button Styles */
    .cta-primary {
        background: var(--primary-gradient);
        color: white;
        border: none;
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    }

    .cta-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 40px rgba(102, 126, 234, 0.4);
    }

    .cta-secondary {
        background: rgba(255, 255, 255, 0.1);
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .cta-secondary:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-3px);
    }

    /* Scroll Indicator */
    .scroll-indicator {
        animation: bounce 2s infinite;
    }

    .mouse {
        width: 30px;
        height: 50px;
        border: 2px solid rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        position: relative;
    }

    .wheel {
        width: 4px;
        height: 10px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 2px;
        position: absolute;
        top: 8px;
        left: 50%;
        transform: translateX(-50%);
        animation: scroll 2s infinite;
    }

    @keyframes scroll {
        0% { opacity: 1; transform: translateX(-50%) translateY(0); }
        100% { opacity: 0; transform: translateX(-50%) translateY(15px); }
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0) translateX(-50%); }
        40% { transform: translateY(-10px) translateX(-50%); }
        60% { transform: translateY(-5px) translateX(-50%); }
    }

    /* Skills Section */
    .skill-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 2rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .skill-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        transition: left 0.5s;
    }

    .skill-card:hover::before {
        left: 100%;
    }

    .skill-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        border-color: rgba(167, 139, 250, 0.3);
    }

    .skill-icon-wrapper {
        position: relative;
        display: inline-block;
        margin-bottom: 1.5rem;
    }

    .skill-icon {
        font-size: 3rem;
        color: #a78bfa;
        transition: all 0.3s ease;
    }

    .skill-glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        background: radial-gradient(circle, rgba(167, 139, 250, 0.3), transparent);
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .skill-card:hover .skill-glow {
        opacity: 1;
    }

    .skill-card:hover .skill-icon {
        transform: scale(1.1);
        color: #fff;
    }

    .tech-stack {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .tech-tag {
        background: rgba(167, 139, 250, 0.2);
        color: #a78bfa;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.875rem;
        border: 1px solid rgba(167, 139, 250, 0.3);
    }

    /* Grid Pattern */
    .grid-pattern {
        background-image: 
            linear-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
        height: 100%;
        width: 100%;
    }

    /* Section Titles */
    .section-title {
        position: relative;
        display: inline-block;
    }

    /* Stats Animation */
    .stat-item {
        animation: fadeInUp 1s ease-out;
        animation-fill-mode: both;
    }

    .stat-item:nth-child(1) { animation-delay: 0.1s; }
    .stat-item:nth-child(2) { animation-delay: 0.2s; }
    .stat-item:nth-child(3) { animation-delay: 0.3s; }
    .stat-item:nth-child(4) { animation-delay: 0.4s; }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 3rem;
        }
        
        .skill-card {
            padding: 1.5rem;
        }
        
        .tech-stack {
            justify-content: center;
        }
    }
    .particles-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    pointer-events: none;
}

.particle {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    animation: floatUp 15s infinite linear;
    pointer-events: none;
}

.particle:nth-child(odd) {
    background: rgba(100, 200, 255, 0.15);
}

.particle:nth-child(even) {
    background: rgba(255, 100, 200, 0.15);
}

.particle:nth-child(3n) {
    background: rgba(150, 255, 150, 0.1);
}

@keyframes floatUp {
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

/* Enhanced particle effects */
.particle-glow {
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
}

.particle-large {
    box-shadow: 0 0 30px rgba(255, 255, 255, 0.2);
}
</style>

<script>
// Counter Animation
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;
    
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-count'));
        const count = parseInt(counter.innerText);
        const inc = target / speed;
        
        if (count < target) {
            counter.innerText = Math.ceil(count + inc);
            setTimeout(() => animateCounter(counter), 1);
        } else {
            counter.innerText = target;
        }
    };
    
    // Intersection Observer for counter animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target.querySelector('.stat-number');
                if (counter && counter.innerText === '0') {
                    animateCounter(counter);
                }
            }
        });
    });
    
    document.querySelectorAll('.stat-item').forEach(item => {
        observer.observe(item);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Create Particles Function
    function createParticles() {
        const container = document.getElementById('particles');
        if (!container) return;
        
        // Clear existing particles
        container.innerHTML = '';
        
        // Create 60 particles
        for (let i = 0; i < 60; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            
            // Random positioning
            particle.style.left = Math.random() * 100 + '%';
            
            // Random sizes (10px to 40px)
            const size = Math.random() * 30 + 10;
            particle.style.width = size + 'px';
            particle.style.height = size + 'px';
            
            // Random animation delay (0 to 15 seconds)
            particle.style.animationDelay = Math.random() * 15 + 's';
            
            // Random animation duration (10 to 20 seconds)
            particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
            
            // Add special effects to some particles
            if (Math.random() > 0.7) {
                particle.classList.add('particle-glow');
            }
            
            if (Math.random() > 0.8) {
                particle.classList.add('particle-large');
            }
            
            container.appendChild(particle);
        }
    }
    
    // Initialize particles
    createParticles();
    
    // Recreate particles every 30 seconds for continuous effect
    setInterval(createParticles, 30000);
});

// Also create particles on window resize
window.addEventListener('resize', function() {
    setTimeout(function() {
        const container = document.getElementById('particles');
        if (container) {
            // Re-position existing particles
            const particles = container.querySelectorAll('.particle');
            particles.forEach(particle => {
                particle.style.left = Math.random() * 100 + '%';
            });
        }
    }, 100);
});
</script>
@endpush