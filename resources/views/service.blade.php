<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | PixelCraft Studios</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Professional web design, development, SEO, and digital marketing services">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        :root {
            --primary: #0066ff;
            --primary-dark: #0052cc;
            --secondary: #00d4ff;
            --accent: #ff6b6b;
            --dark: #0a0a0f;
            --darker: #05050a;
            --light: #f8fafc;
            --gray: #64748b;
            --gradient: linear-gradient(135deg, #0066ff, #00d4ff);
            --gradient-dark: linear-gradient(135deg, #0a0a0f, #1a1a2e);
            --shadow: 0 20px 60px rgba(0, 102, 255, 0.15);
            --glow: 0 0 40px rgba(0, 212, 255, 0.3);
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--darker);
            color: var(--light);
            overflow-x: hidden;
            line-height: 1.7;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            line-height: 1.1;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gradient);
            border-radius: 5px;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: var(--darker);
            overflow: hidden;
        }

        .gradient-circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.15;
            animation: float 20s infinite ease-in-out;
        }

        .circle-1 {
            width: 600px;
            height: 600px;
            background: var(--primary);
            top: -200px;
            left: -200px;
            animation-delay: 0s;
        }

        .circle-2 {
            width: 500px;
            height: 500px;
            background: var(--secondary);
            bottom: -150px;
            right: -150px;
            animation-delay: 5s;
        }

        .circle-3 {
            width: 400px;
            height: 400px;
            background: var(--accent);
            top: 50%;
            left: 80%;
            animation-delay: 10s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -30px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
        }

        /* Advanced Navbar */
        .navbar {
            padding: 1.5rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            background: rgba(10, 10, 15, 0.9);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }

        .navbar.scrolled {
            padding: 1rem 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
        }

        .navbar-brand::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 30px;
            height: 3px;
            background: var(--gradient);
            transition: var(--transition);
        }

        .navbar-brand:hover::after {
            width: 100%;
        }

        .nav-link {
            position: relative;
            padding: 0.5rem 1rem !important;
            color: var(--light) !important;
            font-weight: 500;
            margin: 0 0.25rem;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: var(--gradient);
            transition: var(--transition);
        }

        .nav-link:hover::before,
        .nav-link.active::before {
            width: 100%;
        }

        .btn-glow {
            background: var(--gradient);
            color: white;
            border: none;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            position: relative;
            overflow: hidden;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .btn-glow::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .btn-glow:hover {
            transform: translateY(-3px);
            box-shadow: var(--glow);
        }

        .btn-glow:hover::before {
            left: 100%;
        }

        /* Hero Section with Parallax */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 120px 0 80px;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 4.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #fff 0%, #00d4ff 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1;
        }

        .hero p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 2.5rem;
            max-width: 600px;
        }

        /* Floating 3D Cards */
        .floating-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 3rem;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .floating-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient);
            opacity: 0;
            transition: var(--transition);
            z-index: -1;
        }

        .floating-card:hover {
            transform: translateY(-20px) rotateX(5deg) rotateY(5deg);
            box-shadow: var(--glow);
        }

        .floating-card:hover::before {
            opacity: 0.1;
        }

        .card-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            color: white;
            transform: translateZ(50px);
        }

        /* Interactive Stats */
        .stats-container {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 30px;
            padding: 3rem;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 0.5rem;
            position: relative;
            display: inline-block;
        }

        .stat-number::after {
            content: '+';
            position: absolute;
            right: -20px;
            top: 0;
            font-size: 2rem;
            color: var(--secondary);
        }

        /* Process Timeline */
        .timeline {
            position: relative;
            padding: 4rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background: var(--gradient);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 4rem;
        }

        .timeline-dot {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background: var(--gradient);
            border-radius: 50%;
            box-shadow: var(--glow);
        }

        /* Hover Effects */
        .hover-3d {
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .hover-3d:hover {
            transform: translateY(-10px) scale(1.02);
        }

        /* Glitch Text Effect */
        .glitch {
            position: relative;
            display: inline-block;
        }

        .glitch::before,
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .glitch::before {
            left: 2px;
            text-shadow: -2px 0 #ff6b6b;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim 5s infinite linear alternate-reverse;
        }

        .glitch::after {
            left: -2px;
            text-shadow: -2px 0 #00d4ff;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim2 5s infinite linear alternate-reverse;
        }

        @keyframes glitch-anim {
            0% { clip: rect(31px, 9999px, 94px, 0); }
            4.16667% { clip: rect(105px, 9999px, 15px, 0); }
            8.33333% { clip: rect(65px, 9999px, 73px, 0); }
            12.5% { clip: rect(10px, 9999px, 65px, 0); }
            16.66667% { clip: rect(85px, 9999px, 5px, 0); }
            20.83333% { clip: rect(75px, 9999px, 55px, 0); }
            25% { clip: rect(8px, 9999px, 14px, 0); }
            29.16667% { clip: rect(37px, 9999px, 53px, 0); }
            33.33333% { clip: rect(87px, 9999px, 86px, 0); }
            37.5% { clip: rect(18px, 9999px, 26px, 0); }
            41.66667% { clip: rect(60px, 9999px, 38px, 0); }
            45.83333% { clip: rect(81px, 9999px, 87px, 0); }
            50% { clip: rect(24px, 9999px, 14px, 0); }
            54.16667% { clip: rect(56px, 9999px, 44px, 0); }
            58.33333% { clip: rect(43px, 9999px, 59px, 0); }
            62.5% { clip: rect(85px, 9999px, 32px, 0); }
            66.66667% { clip: rect(41px, 9999px, 21px, 0); }
            70.83333% { clip: rect(14px, 9999px, 63px, 0); }
            75% { clip: rect(72px, 9999px, 11px, 0); }
            79.16667% { clip: rect(21px, 9999px, 35px, 0); }
            83.33333% { clip: rect(53px, 9999px, 72px, 0); }
            87.5% { clip: rect(66px, 9999px, 47px, 0); }
            91.66667% { clip: rect(95px, 9999px, 80px, 0); }
            95.83333% { clip: rect(8px, 9999px, 99px, 0); }
            100% { clip: rect(31px, 9999px, 94px, 0); }
        }

        /* Pricing Cards with Tilt */
        .pricing-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 24px;
            padding: 3rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .pricing-card.popular {
            border-color: var(--primary);
            transform: scale(1.05);
            box-shadow: var(--glow);
        }

        .pricing-card.popular::before {
            content: 'MOST POPULAR';
            position: absolute;
            top: 20px;
            right: -35px;
            background: var(--gradient);
            color: white;
            padding: 8px 40px;
            font-size: 0.8rem;
            font-weight: 600;
            transform: rotate(45deg);
        }

        /* Testimonial Carousel */
        .testimonial-slide {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 24px;
            padding: 3rem;
            margin: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Cursor Effect */
        .cursor {
            width: 20px;
            height: 20px;
            border: 2px solid var(--secondary);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            mix-blend-mode: difference;
            transition: transform 0.3s;
        }

        .cursor-follower {
            width: 8px;
            height: 8px;
            background: var(--secondary);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9998;
            mix-blend-mode: difference;
            transition: transform 0.15s;
        }

        /* Loading Animation */
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--darker);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s;
        }

        .loader-content {
            text-align: center;
        }

        .loader-spinner {
            width: 60px;
            height: 60px;
            border: 3px solid transparent;
            border-top: 3px solid var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .hero h1 {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .timeline::before {
                left: 30px;
            }
            
            .timeline-dot {
                left: 30px;
            }
            
            .pricing-card.popular {
                transform: scale(1);
            }
            
            .pricing-card.popular::before {
                right: -20px;
                padding: 6px 30px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .btn-glow {
                padding: 0.8rem 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <div class="gradient-circle circle-1"></div>
        <div class="gradient-circle circle-2"></div>
        <div class="gradient-circle circle-3"></div>
    </div>

    <!-- Loading Screen -->
    <div class="loader">
        <div class="loader-content">
            <div class="loader-spinner"></div>
            <h4 class="text-light">Loading PixelCraft...</h4>
        </div>
    </div>

    <!-- Custom Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="../index.html">PIXELCRAFT</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon text-light">☰</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../portfolio.html">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../blog/blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.html">Contact</a>
                    </li>
                </ul>
                <a href="#cta" class="btn btn-glow ms-lg-3">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-right">
                        <h1 class="mb-4 glitch" data-text="Digital Excellence"></h1>
                        <p class="mb-4">We craft stunning digital experiences that drive business growth. From concept to launch, we deliver excellence at every step.</p>
                        <div class="d-flex gap-3">
                            <a href="#services" class="btn btn-glow">Our Services</a>
                            <a href="#cta" class="btn btn-outline-light btn-lg border-2 rounded-pill px-4">Book a Call</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative" data-aos="fade-left">
                        <!-- Animated 3D Model Placeholder -->
                        <div class="floating-card" style="transform-style: preserve-3d;">
                            <div class="card-icon">
                                <i class="fas fa-cube"></i>
                            </div>
                            <h3 class="mb-3">3D Web Experience</h3>
                            <p>Immersive digital solutions that captivate and convert your audience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="py-5">
        <div class="container">
            <div class="stats-container">
                <div class="row text-center">
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="150">0</div>
                            <div class="text-light">Projects</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="98">0</div>
                            <div class="text-light">Satisfaction</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="50">0</div>
                            <div class="text-light">Clients</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="24">0</div>
                            <div class="text-light">Support</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="mb-3">Our <span class="text-primary">Services</span></h2>
                <p class="text-light">Comprehensive digital solutions for modern businesses</p>
            </div>
            
            <div class="row g-4">
                <!-- Service Cards with Interactive Effects -->
                <div class="col-lg-4 col-md-6">
                    <div class="floating-card hover-3d" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h4 class="mb-3">Web Development</h4>
                        <p class="text-light mb-4">Modern, responsive websites built with cutting-edge technologies.</p>
                        <div class="service-features">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-check text-primary me-2"></i>
                                <span>React/Vue.js</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-check text-primary me-2"></i>
                                <span>Responsive Design</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-check text-primary me-2"></i>
                                <span>Performance Optimized</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="h3">$1,299+</span>
                            <a href="#cta" class="btn btn-glow w-100 mt-3">Get Quote</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="floating-card hover-3d" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h4 class="mb-3">E-commerce</h4>
                        <p class="text-light mb-4">Scalable online stores with seamless shopping experiences.</p>
                        <div class="service-features">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-check text-primary me-2"></i>
                                <span>Shopify/WooCommerce</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-check text-primary me-2"></i>
                                <span>Payment Integration</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-check text-primary me-2"></i>
                                <span>Inventory Management</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="h3">$2,499+</span>
                            <a href="#cta" class="btn btn-glow w-100 mt-3">Get Quote</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="floating-card hover-3d" data-aos="zoom-in" data-aos-delay="300">
                        <div class="card-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 class="mb-3">Digital Marketing</h4>
                        <p class="text-light mb-4">Data-driven strategies to grow your online presence.</p>
                        <div class="service-features">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-check text-primary me-2"></i>
                                <span>SEO Optimization</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-check text-primary me-2"></i>
                                <span>Social Media Management</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-check text-primary me-2"></i>
                                <span>Content Strategy</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="h3">$499/mo</span>
                            <a href="#cta" class="btn btn-glow w-100 mt-3">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Timeline -->
    <section class="py-5 bg-dark">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="mb-3">Our <span class="text-primary">Process</span></h2>
                <p class="text-light">A structured approach to ensure success</p>
            </div>
            
            <div class="timeline">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-right">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="floating-card">
                                <h4 class="text-primary">01. Discovery</h4>
                                <p>We dive deep to understand your vision and goals.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="floating-card ms-auto">
                                <h4 class="text-primary">02. Design</h4>
                                <p>Creating visual concepts that align with your brand.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="floating-card">
                                <h4 class="text-primary">03. Development</h4>
                                <p>Building robust solutions with clean code.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="floating-card ms-auto">
                                <h4 class="text-primary">04. Launch & Support</h4>
                                <p>Deploying and maintaining your digital solution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="mb-3">Pricing <span class="text-primary">Plans</span></h2>
                <p class="text-light">Choose the perfect plan for your needs</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h4 class="mb-3">Starter</h4>
                        <div class="h1 mb-3">$1,299</div>
                        <p class="text-light mb-4">Perfect for small businesses</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 5-10 Pages</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Responsive Design</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Basic SEO</li>
                            <li class="mb-2"><i class="fas fa-times text-light me-2"></i> E-commerce</li>
                        </ul>
                        <a href="#cta" class="btn btn-outline-light w-100">Get Started</a>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card popular">
                        <h4 class="mb-3">Business</h4>
                        <div class="h1 mb-3">$2,499</div>
                        <p class="text-light mb-4">Most popular choice</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 10-20 Pages</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Custom Design</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Advanced SEO</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Basic E-commerce</li>
                        </ul>
                        <a href="#cta" class="btn btn-glow w-100">Get Started</a>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <h4 class="mb-3">Enterprise</h4>
                        <div class="h1 mb-3">$4,999</div>
                        <p class="text-light mb-4">Complete solution</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Unlimited Pages</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Premium Design</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Full SEO Package</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Advanced E-commerce</li>
                        </ul>
                        <a href="#cta" class="btn btn-outline-light w-100">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="py-5">
        <div class="container">
            <div class="floating-card text-center" data-aos="zoom-in">
                <h2 class="mb-3">Ready to Transform Your Digital Presence?</h2>
                <p class="text-light mb-4">Let's build something amazing together. Schedule a free consultation today.</p>
                <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                    <a href="../contact.html" class="btn btn-glow px-5">Start Project</a>
                    <a href="tel:+15551234567" class="btn btn-outline-light px-5">
                        <i class="fas fa-phone me-2"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h4 class="mb-3">PixelCraft Studios</h4>
                    <p class="text-light">Creating digital excellence through innovative design and development.</p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-light"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-github fa-lg"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <h5 class="mb-3">Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#services" class="text-light">Web Development</a></li>
                        <li class="mb-2"><a href="#services" class="text-light">E-commerce</a></li>
                        <li class="mb-2"><a href="#services" class="text-light">Digital Marketing</a></li>
                        <li><a href="#services" class="text-light">Brand Design</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <h5 class="mb-3">Company</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="../index.html" class="text-light">Home</a></li>
                        <li class="mb-2"><a href="../portfolio.html" class="text-light">Portfolio</a></li>
                        <li class="mb-2"><a href="../blog/blog.html" class="text-light">Blog</a></li>
                        <li><a href="../contact.html" class="text-light">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <h5 class="mb-3">Contact</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-envelope me-2 text-primary"></i>hello@pixelcraft.com</li>
                        <li class="mb-2"><i class="fas fa-phone me-2 text-primary"></i>+1 (555) 123-4567</li>
                        <li><i class="fas fa-map-marker-alt me-2 text-primary"></i>San Francisco, CA</li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center pt-4 border-top border-light">
                <p class="text-light mb-0">&copy; 2024 PixelCraft Studios. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Advanced Animations -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Remove loader
        window.addEventListener('load', () => {
            gsap.to('.loader', {
                opacity: 0,
                duration: 0.5,
                onComplete: () => {
                    document.querySelector('.loader').style.display = 'none';
                }
            });
        });

        // Custom cursor
        const cursor = document.querySelector('.cursor');
        const follower = document.querySelector('.cursor-follower');

        document.addEventListener('mousemove', (e) => {
            gsap.to(cursor, {
                x: e.clientX - 10,
                y: e.clientY - 10,
                duration: 0.1
            });
            
            gsap.to(follower, {
                x: e.clientX - 4,
                y: e.clientY - 4,
                duration: 0.3
            });
        });

        // Hover effects for cursor
        document.querySelectorAll('a, button, .hover-3d').forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.style.transform = 'scale(1.5)';
                follower.style.transform = 'scale(2)';
            });
            
            el.addEventListener('mouseleave', () => {
                cursor.style.transform = 'scale(1)';
                follower.style.transform = 'scale(1)';
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Animated counters
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;
                const increment = target / 100;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(() => animateCounters(), 20);
                } else {
                    counter.innerText = target;
                }
            });
        }

        // Start counters when in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('.stat-item').forEach(el => {
            observer.observe(el);
        });

        // Parallax effect for hero
        gsap.to('.circle-1', {
            y: 30,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut"
        });

        gsap.to('.circle-2', {
            y: -40,
            duration: 4,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut"
        });

        gsap.to('.circle-3', {
            x: -20,
            duration: 5,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut"
        });

        // 3D card tilt effect
        document.querySelectorAll('.floating-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(20px)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
            });
        });

        // Text reveal animation
        gsap.from('.glitch', {
            duration: 1.5,
            y: 100,
            opacity: 0,
            ease: "power4.out",
            delay: 0.5
        });

        // Scroll animations with GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Animate cards on scroll
        document.querySelectorAll('.hover-3d').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                },
                y: 50,
                opacity: 0,
                duration: 1,
                delay: i * 0.1,
                ease: "power3.out"
            });
        });

        // Animate timeline
        gsap.from('.timeline-dot', {
            scrollTrigger: {
                trigger: '.timeline',
                start: "top 60%"
            },
            scale: 0,
            duration: 0.5,
            stagger: 0.3,
            ease: "back.out(1.7)"
        });

        // Background wave effect
        function createWave() {
            const wave = document.createElement('div');
            wave.style.cssText = `
                position: absolute;
                width: 200px;
                height: 200px;
                background: radial-gradient(circle, rgba(0, 212, 255, 0.2) 0%, transparent 70%);
                border-radius: 50%;
                pointer-events: none;
                z-index: 0;
            `;
            wave.style.left = Math.random() * 100 + '%';
            wave.style.top = Math.random() * 100 + '%';
            document.querySelector('.bg-animation').appendChild(wave);
            
            gsap.to(wave, {
                scale: 2,
                opacity: 0,
                duration: 3,
                onComplete: () => wave.remove()
            });
        }

        // Create waves periodically
        setInterval(createWave, 3000);

        // Particle effect on click
        document.addEventListener('click', (e) => {
            for (let i = 0; i < 5; i++) {
                const particle = document.createElement('div');
                particle.style.cssText = `
                    position: fixed;
                    width: 4px;
                    height: 4px;
                    background: var(--secondary);
                    border-radius: 50%;
                    pointer-events: none;
                    z-index: 10000;
                `;
                particle.style.left = e.clientX + 'px';
                particle.style.top = e.clientY + 'px';
                document.body.appendChild(particle);
                
                gsap.to(particle, {
                    x: (Math.random() - 0.5) * 100,
                    y: (Math.random() - 0.5) * 100,
                    opacity: 0,
                    duration: 1,
                    onComplete: () => particle.remove()
                });
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    gsap.to(window, {
                        duration: 1,
                        scrollTo: { y: target, offsetY: 80 },
                        ease: "power3.inOut"
                    });
                }
            });
        });

        // Typing effect for hero text
        const heroText = "Digital Excellence";
        let i = 0;
        const typingEffect = setInterval(() => {
            if (i < heroText.length) {
                document.querySelector('.glitch').textContent += heroText.charAt(i);
                i++;
            } else {
                clearInterval(typingEffect);
            }
        }, 100);
    </script>
</body>
</html>