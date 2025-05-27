@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="about-hero relative py-20 overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900">
        <div class="geometric-shapes">
            <div class="geo-shape geo-1"></div>
            <div class="geo-shape geo-2"></div>
            <div class="geo-shape geo-3"></div>
        </div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
            <div class="hero-badge inline-block px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 text-white mb-8">
                <i class="fas fa-user-circle mr-2"></i>
                Get to know me
            </div>
            <h1 class="text-5xl md:text-7xl font-black text-white mb-6">
                About <span class="gradient-text">Leon</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Passionate developer, creative problem solver, and lifelong learner dedicated to crafting 
                exceptional digital experiences that make a difference.
            </p>
        </div>
    </div>
</section>

<section class="story-section py-20 bg-gray-950 relative">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
            <!-- Left Side: Image & Stats -->
            <div class="relative w-full h-full flex flex-col items-center justify-center">
                <div class="profile-image-container relative">
                    <!-- Profile Image -->
                    <img src="{{ asset('images/My pfp.jpg') }}" alt="Leon"
                        class="rounded-full w-72 h-72 lg:w-80 lg:h-80 object-cover border-4 border-purple-300 shadow-xl">
                </div>

                <!-- Floating Stats -->
                <div class="floating-stats flex flex-wrap justify-center mt-8 gap-4">
                    <div class="stat-bubble stat-1 bg-gray-800 text-white p-4 rounded-xl shadow-md">
                        <i class="fas fa-coffee text-purple-300 text-xl"></i>
                        <span class="block mt-2">500+ Cups</span>
                    </div>
                    <div class="stat-bubble stat-2 bg-gray-800 text-white p-4 rounded-xl shadow-md">
                        <i class="fas fa-code text-purple-300 text-xl"></i>
                        <span class="block mt-2">10k+ Lines</span>
                    </div>
                    <div class="stat-bubble stat-3 bg-gray-800 text-white p-4 rounded-xl shadow-md">
                        <i class="fas fa-lightbulb text-purple-300 text-xl"></i>
                        <span class="block mt-2">∞ Ideas</span>
                    </div>
                </div>
            </div>

            <!-- Right Side: Text Content -->
              <!-- Content Side -->
            <div class="story-content">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
                    My <span class="gradient-text">Journey</span>
                </h2>
                <div class="space-y-6 text-gray-300">
                    <p class="text-lg leading-relaxed">
                        Welcome to my world! I'm Leon, a passionate full-stack developer who believes that 
                        great code is like poetry – it should be beautiful, meaningful, and powerful.
                    </p>
                    <p class="text-lg leading-relaxed">
                        My journey began with curiosity and evolved into a love affair with technology. 
                        I specialize in creating digital experiences that not only look stunning but also 
                        solve real-world problems and make people's lives easier.
                    </p>
                    <p class="text-lg leading-relaxed">
                        When I'm not coding, you'll find me exploring new technologies, contributing to 
                        open-source projects, or mentoring aspiring developers. I believe in the power 
                        of community and continuous learning.
                    </p>
                </div>
        </div>
    </div>
</section>

            
         
                
               
            </div>
        </div>
    </div>
</section>

<!-- Experience Timeline -->
<section class="experience-section py-20 bg-gray-900 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="circuit-pattern"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Professional <span class="gradient-text">Experience</span>
            </h2>
            <div class="section-divider w-24 h-1 bg-gradient-to-r from-purple-500 to-blue-500 mx-auto"></div>
        </div>
        
        <div class="timeline-container max-w-4xl mx-auto">
            <!-- Experience Item 1 -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="experience-card">
                        <div class="card-header">
                            <div class="job-badge">2025 - Present</div>
                            <h3 class="text-2xl font-bold text-white">Junior Full Stack Developer</h3>
                            <p class="text-purple-300 text-lg">Duckcloud</p>
                        </div>
                        <div class="card-body">
                            <p class="text-gray-300 mb-4">
                                Currently learning and building my foundation in web development under the guidance of a senior developer. 
                    Focusing on mastering core technologies while improving real-world problem solving.
                            </p>
                            <div class="achievements">
                                <div class="achievement">
                                    <i class="fas fa-rocket text-green-400"></i>
                                    <span>Learning Laravel, Tailwind, JS, and Git</span>
                                </div>
                                <div class="achievement">
                                    <i class="fas fa-users text-blue-400"></i>
                                    <span>Improving debugging and communication skills</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
</section>

<!-- Education Section -->
<section class="education-section py-20 bg-gray-950">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                <span class="gradient-text">Education</span> & Certifications
            </h2>
            <div class="section-divider w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <!-- Education Card 1 -->
            <div class="education-card group">
                <div class="card-icon">
                    <i class="fas fa-university"></i>
                </div>
                <div class="card-content">
                    <div class="edu-badge">2025 - Present</div>
                    <h3 class="text-2xl font-bold text-white mb-2">High School Student</h3>
                    <p class="text-purple-300 text-lg mb-4">Preparing for GED</p>
                    <p class="text-gray-400 mb-4">
                         Currently preparing for the GED exam through a combination of structured classes and personal study.
            Focused on core academic subjects while also developing real-world skills through programming and web development.
        </p>
                    </p>
                    
                </div>
            </div>
            
            <!-- Certification Card -->
            <div class="education-card group">
                <div class="card-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <div class="card-content">
                    <div class="edu-badge">2023 - 2024</div>
                    <h3 class="text-2xl font-bold text-white mb-2"> Secondary 2 Certification</h3>
                    <p class="text-purple-300 text-lg mb-4">ConceptX Academy</p>
                    <p class="text-gray-400 mb-4">
                        Continuously expanding knowledge through online specialized courses in modern technologies.
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fun Facts Section -->
<section class="fun-facts-section py-20 bg-gradient-to-r from-purple-900 to-indigo-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Fun <span class="text-yellow-300">Facts</span>
            </h2>
            <p class="text-xl text-purple-200">A little more about me...</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <div class="fun-fact-card">
                <div class="fact-icon">🚀</div>
                <h3 class="text-xl font-bold text-white mb-2">Space Enthusiast</h3>
                <p class="text-purple-200">Love following SpaceX launches and dreaming of coding in space!</p>
            </div>
            
            <div class="fun-fact-card">
                <div class="fact-icon">🎮</div>
                <h3 class="text-xl font-bold text-white mb-2">Gamer at Heart</h3>
                <p class="text-purple-200">Strategic games help me think differently about problem-solving.</p>
            </div>
            
            <div class="fun-fact-card">
                <div class="fact-icon">☕</div>
                <h3 class="text-xl font-bold text-white mb-2">Coffee Connoisseur</h3>
                <p class="text-purple-200">My code quality is directly proportional to coffee quality!</p>
            </div>
            
            <div class="fun-fact-card">
                <div class="fact-icon">🌱</div>
                <h3 class="text-xl font-bold text-white mb-2">Tech for Good</h3>
                <p class="text-purple-200">Passionate about using technology to make the world better.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-20 bg-gray-900 relative">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Let's Create Something <span class="gradient-text">Amazing</span>
        </h2>
        <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto">
            I'm always excited to work on new projects and collaborate with creative minds. 
            Let's turn your ideas into reality!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="cta-primary px-10 py-5 text-xl font-semibold rounded-full">
                Start a Project
                <i class="fas fa-arrow-right ml-3"></i>
            </button>
            <button class="cta-secondary px-10 py-5 text-xl font-semibold rounded-full">
                Download CV
                <i class="fas fa-download ml-3"></i>
            </button>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* Hero Section Styles */
    .about-hero {
        position: relative;
        min-height: 60vh;
    }

    .geometric-shapes {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .geo-shape {
        position: absolute;
        opacity: 0.1;
        animation: rotate 20s linear infinite;
    }

    .geo-1 {
        width: 100px;
        height: 100px;
        background: linear-gradient(45deg, #fff, transparent);
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .geo-2 {
        width: 150px;
        height: 150px;
        background: linear-gradient(45deg, #a78bfa, transparent);
        border-radius: 50%;
        top: 60%;
        right: 15%;
        animation-delay: 5s;
    }

    .geo-3 {
        width: 80px;
        height: 80px;
        background: linear-gradient(45deg, #06b6d4, transparent);
        clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);
        bottom: 20%;
        left: 70%;
        animation-delay: 10s;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .hero-badge {
        animation: fadeInDown 1s ease-out;
    }

    .gradient-text {
        background: linear-gradient(135deg, #a78bfa, #06b6d4);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Profile Section */
    .profile-image-container {
        position: relative;
        width: 300px;
        height: 300px;
        margin: 0 auto;
    }

    .profile-glow {
        position: absolute;
        inset: -20px;
        background: linear-gradient(135deg, #a78bfa, #06b6d4);
        border-radius: 50%;
        opacity: 0.3;
        animation: pulse 3s ease-in-out infinite;
    }

    .profile-placeholder {
        position: relative;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        position: relative;
        z-index: 2;
    }

    .floating-stats {
        position: absolute;
        inset: 0;
    }

    .stat-bubble {
        position: absolute;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 1rem;
        color: white;
        font-size: 0.875rem;
        font-weight: 600;
        animation: float 6s ease-in-out infinite;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .stat-1 { top: -10px; right: -20px; animation-delay: 0s; }
    .stat-2 { bottom: 50px; left: -30px; animation-delay: 2s; }
    .stat-3 { top: 40%; right: -40px; animation-delay: 4s; }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes pulse {
        0%, 100% { opacity: 0.3; transform: scale(1); }
        50% { opacity: 0.6; transform: scale(1.05); }
    }

    /* Skills Preview */
    .skill-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
    }

    .skill-tag {
        background: rgba(167, 139, 250, 0.2);
        color: #a78bfa;
        padding: 0.5rem 1rem;
        border-radius: 25px;
        font-size: 0.875rem;
        font-weight: 600;
        border: 1px solid rgba(167, 139, 250, 0.3);
        transition: all 0.3s ease;
    }

    .skill-tag:hover {
        background: rgba(167, 139, 250, 0.3);
        transform: translateY(-2px);
    }

    /* Timeline Styles */
    .timeline-container {
        position: relative;
    }

    .timeline-container::before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 4px;
        height: 100%;
        background: linear-gradient(to bottom, #a78bfa, #06b6d4);
        border-radius: 2px;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 3rem;
        display: flex;
        align-items: center;
    }

    .timeline-item:nth-child(odd) .timeline-content {
        margin-right: 50%;
        padding-right: 3rem;
        text-align: right;
    }

    .timeline-item:nth-child(even) .timeline-content {
        margin-left: 50%;
        padding-left: 3rem;
    }

    .timeline-dot {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 20px;
        height: 20px;
        background: linear-gradient(135deg, #a78bfa, #06b6d4);
        border-radius: 50%;
        border: 4px solid #1f2937;
        z-index: 10;
        animation: pulse 2s ease-in-out infinite;
    }

    .experience-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 2rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .experience-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        transition: left 0.5s;
    }

    .experience-card:hover::before {
        left: 100%;
    }

    .experience-card:hover {
        transform: translateY(-5px);
        border-color: rgba(167, 139, 250, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .job-badge {
        background: linear-gradient(135deg, #a78bfa, #06b6d4);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 1rem;
    }

    .achievements {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .achievement {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        color: #d1d5db;
    }

    /* Education Cards */
    .education-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 2rem;
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .education-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        transition: left 0.5s;
    }

    .education-card:hover::before {
        left: 100%;
    }

    .education-card:hover {
        transform: translateY(-10px);
        border-color: rgba(167, 139, 250, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .card-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #a78bfa, #06b6d4);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: white;
        margin-bottom: 1.5rem;
    }

    .edu-badge {
        background: rgba(167, 139, 250, 0.2);
        color: #a78bfa;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 1rem;
        border: 1px solid rgba(167, 139, 250, 0.3);
    }

    .edu-highlights {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .highlight-tag {
        background: rgba(6, 182, 212, 0.2);
        color: #06b6d4;
        padding: 0.25rem 0.75rem;
        border-radius: 15px;
        font-size: 0.75rem;
        font-weight: 600;
        border: 1px solid rgba(6, 182, 212, 0.3);
    }

    /* Fun Facts */
    .fun-fact-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
        transition: all 0.3s ease;
    }

    .fun-fact-card:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.15);
    }

    .fact-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        display: block;
    }

    /* Button Styles */
    .cta-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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

    /* Circuit Pattern */
    .circuit-pattern {
        background-image: 
            radial-gradient(circle at 25px 25px, rgba(255, 255, 255, 0.1) 2px, transparent 0),
            radial-gradient(circle at 75px 75px, rgba(255, 255, 255, 0.1) 2px, transparent 0);
        background-size: 100px 100px;
        height: 100%;
        width: 100%;
    }

    .section-divider {
        animation: pulse 2s ease-in-out infinite;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .timeline-container::before {
            left: 30px;
        }
        
        .timeline-item:nth-child(odd) .timeline-content,
        .timeline-item:nth-child(even) .timeline-content {
            margin-left: 80px;
            margin-right: 0;
            padding-left: 2rem;
            padding-right: 0;
            text-align: left;
        }
        
        .timeline-dot {
            left: 30px;
        }
    }

    @media (max-width: 768px) {
        .profile-image-container {
            width: 250px;
            height: 250px;
        }
        
        .floating-stats {
            display: none;
        }
        
        .timeline-container::before {
            left: 20px;
        }
        
        .timeline-item:nth-child(odd) .timeline-content,
        .timeline-item:nth-child(even) .timeline-content {
            margin-left: 60px;
            padding-left: 1.5rem;
        }
        
        .timeline-dot {
            left: 20px;
        }
        
        .experience-card,
        .education-card {
            padding: 1.5rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe timeline items
    document.querySelectorAll('.timeline-item').forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(50px)';
        item.style.transition = `all 0.6s ease ${index * 0.2}s`;
        observer.observe(item);
    });
    
    // Observe education cards
    document.querySelectorAll('.education-card').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(50px)';
        card.style.transition = `all 0.6s ease ${index * 0.3}s`;
        observer.observe(card);
    });
    
    // Observe fun fact cards
    document.querySelectorAll('.fun-fact-card').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(50px)';
        card.style.transition = `all 0.6s ease ${index * 0.1}s`;
        observer.observe(card);
    });
    
    // Animate skill tags
    document.querySelectorAll('.skill-tag').forEach((tag, index) => {
        tag.style.opacity = '0';
        tag.style.transform = 'scale(0.8)';
        tag.style.transition = `all 0.4s ease ${index * 0.1}s`;
        
        setTimeout(() => {
            tag.style.opacity = '1';
            tag.style.transform = 'scale(1)';
        }, 1000 + (index * 100));
    });
    
    // Floating stats animation
    const floatingStats = document.querySelectorAll('.stat-bubble');
    floatingStats.forEach((stat, index) => {
        stat.style.opacity = '0';
        stat.style.transform = 'translateY(30px) scale(0.8)';
        stat.style.transition = `all 0.6s ease ${index * 0.3}s`;
        
        setTimeout(() => {
            stat.style.opacity = '1';
            stat.style.transform = 'translateY(0) scale(1)';
        }, 2000 + (index * 300));
    });
    
    // Parallax effect for hero section
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const heroContent = document.querySelector('.about-hero');
        if (heroContent) {
            heroContent.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
        
        // Geometric shapes parallax
        const shapes = document.querySelectorAll('.geo-shape');
        shapes.forEach((shape, index) => {
            const speed = 0.2 + (index * 0.1);
            shape.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.1}deg)`;
        });
    });
    
    // Add hover effect to timeline dots
    document.querySelectorAll('.timeline-dot').forEach(dot => {
        dot.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(-50%) scale(1.3)';
            this.style.boxShadow = '0 0 20px rgba(167, 139, 250, 0.6)';
        });
        
        dot.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(-50%) scale(1)';
            this.style.boxShadow = 'none';
        });
    });
    
    // Typewriter effect for subtitle (if you want to add it)
    function typeWriter(element, text, speed = 50) {
        let i = 0;
        element.innerHTML = '';
        
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }
        
        type();
    }
    
    // You can uncomment this if you want a typewriter effect
    // const subtitle = document.querySelector('.hero-subtitle');
    // if (subtitle) {
    //     typeWriter(subtitle, 'Passionate developer, creative problem solver, and lifelong learner dedicated to crafting exceptional digital experiences that make a difference.', 30);
    // }
});
</script>
@endpush