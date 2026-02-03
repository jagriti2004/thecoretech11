<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixelCraft Blog | Web Design Insights & Digital Strategy</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Expert insights on web design, SEO strategies, and digital marketing for businesses, students, and entrepreneurs. Learn how to grow your online presence.">
    <meta name="keywords" content="web design, SEO, digital marketing, small business websites, student projects, UI/UX design">
    <meta name="author" content="PixelCraft Studios">
    <meta property="og:title" content="PixelCraft Blog | Web Design Insights & Digital Strategy">
    <meta property="og:description" content="Expert insights on web design, SEO strategies, and digital marketing.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80">
    <meta property="og:url" content="https://pixelcraft.com/blog">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #8b5cf6;
            --accent-color: #06b6d4;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --dark-color: #0f172a;
            --light-color: #f8fafc;
            --gray-light: #e2e8f0;
            --gray-medium: #94a3b8;
            --card-bg: rgba(30, 41, 59, 0.6);
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            --gradient-primary: linear-gradient(135deg, #6366f1, #8b5cf6);
            --gradient-dark: linear-gradient(135deg, #1e293b, #0f172a);
            --shadow-sm: 0 4px 6px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 10px 25px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 50px rgba(0, 0, 0, 0.15);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            color: var(--dark-color);
            line-height: 1.7;
            background-color: #ffffff;
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            line-height: 1.2;
        }
        
        p {
            color: #475569;
            margin-bottom: 1.5rem;
        }
        
        a {
            text-decoration: none;
            transition: var(--transition);
        }
        
        .section {
            padding: 100px 0;
        }
        
        .container-narrow {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Navbar */
        .navbar {
            padding: 25px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
        }
        
        .navbar.scrolled {
            padding: 15px 0;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
        }
        
        .navbar-brand {
            font-weight: 900;
            font-size: 1.8rem;
            color: var(--dark-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .navbar-brand span {
            color: var(--primary-color);
        }
        
        .logo-icon {
            width: 36px;
            height: 36px;
            background: var(--gradient-primary);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 900;
            font-size: 1.2rem;
        }
        
        .nav-link {
            color: var(--dark-color);
            font-weight: 500;
            margin: 0 10px;
            padding: 8px 16px !important;
            border-radius: 8px;
            transition: var(--transition);
        }
        
        .nav-link:hover {
            color: var(--primary-color);
            background-color: rgba(99, 102, 241, 0.1);
        }
        
        .nav-link.active {
            color: var(--primary-color);
            background-color: rgba(99, 102, 241, 0.1);
        }
        
        .btn-primary {
            background: var(--gradient-primary);
            border: none;
            padding: 16px 36px;
            border-radius: 12px;
            font-weight: 600;
            color: white;
            transition: var(--transition);
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            transition: all 0.6s;
            z-index: -1;
        }
        
        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .btn-primary:hover::before {
            left: 0;
        }
        
        /* Hero Section */
        .blog-hero {
            padding: 180px 0 100px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #f0f9ff 0%, #f8fafc 100%);
        }
        
        .blog-hero::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.1) 0%, transparent 70%);
            z-index: 0;
        }
        
        .blog-hero::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.1) 0%, transparent 70%);
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 24px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: #64748b;
        }
        
        .search-bar {
            max-width: 600px;
            margin: 40px auto 0;
            position: relative;
        }
        
        .search-bar input {
            width: 100%;
            padding: 18px 60px 18px 25px;
            border-radius: 12px;
            border: 2px solid var(--gray-light);
            font-size: 1.1rem;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
        }
        
        .search-bar input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }
        
        .search-bar button {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--gradient-primary);
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .search-bar button:hover {
            transform: translateY(-50%) rotate(10deg);
        }
        
        /* Featured Articles */
        .featured-section {
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }
        
        .section-title p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
            color: #64748b;
        }
        
        .featured-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            height: 100%;
            position: relative;
        }
        
        .featured-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-lg);
        }
        
        .featured-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--gradient-primary);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            z-index: 2;
        }
        
        .featured-img {
            height: 250px;
            width: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .featured-card:hover .featured-img {
            transform: scale(1.05);
        }
        
        .featured-content {
            padding: 30px;
        }
        
        .featured-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        .featured-content p {
            color: #64748b;
            margin-bottom: 20px;
        }
        
        .article-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            color: var(--gray-medium);
            font-size: 0.9rem;
        }
        
        .author-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .author-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .read-time {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        /* Categories Section */
        .categories-section {
            background-color: #f8fafc;
        }
        
        .category-card {
            background: white;
            border-radius: 15px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border: 2px solid transparent;
            height: 100%;
        }
        
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-color);
        }
        
        .category-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: var(--primary-color);
            font-size: 2rem;
            transition: var(--transition);
        }
        
        .category-card:hover .category-icon {
            background: var(--gradient-primary);
            color: white;
            transform: rotate(15deg) scale(1.1);
        }
        
        .category-card h4 {
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .category-card p {
            font-size: 0.95rem;
            color: #64748b;
            margin-bottom: 20px;
        }
        
        /* Articles Grid */
        .articles-section {
            background-color: white;
        }
        
        .article-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            height: 100%;
            border: 1px solid var(--gray-light);
        }
        
        .article-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-color);
        }
        
        .article-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
        
        .article-content {
            padding: 25px;
        }
        
        .article-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 15px;
        }
        
        .tag {
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary-color);
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .article-content h4 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        .article-content p {
            font-size: 0.95rem;
            color: #64748b;
            margin-bottom: 20px;
        }
        
        /* CTA Section */
        .cta-section {
            background: var(--gradient-dark);
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: -100px;
            left: -100px;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.2) 0%, transparent 70%);
            z-index: 0;
        }
        
        .cta-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(139, 92, 246, 0.2) 0%, transparent 70%);
            z-index: 0;
        }
        
        .cta-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .cta-content h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .cta-content p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 40px;
        }
        
        /* Resources Section */
        .resources-section {
            background-color: #f8fafc;
        }
        
        .resource-card {
            background: white;
            border-radius: 15px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            height: 100%;
        }
        
        .resource-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }
        
        .resource-icon {
            font-size: 3rem;
            margin-bottom: 25px;
            color: var(--primary-color);
        }
        
        .resource-card h4 {
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .resource-card p {
            font-size: 0.95rem;
            color: #64748b;
            margin-bottom: 20px;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 80px 0 40px;
        }
        
        .footer-logo {
            font-weight: 900;
            font-size: 1.8rem;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .footer-logo span {
            color: var(--primary-color);
        }
        
        .footer-about {
            margin-bottom: 30px;
            color: #94a3b8;
            max-width: 350px;
        }
        
        .footer-links h5 {
            font-size: 1.1rem;
            margin-bottom: 25px;
            color: white;
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links ul li {
            margin-bottom: 12px;
        }
        
        .footer-links ul li a {
            color: #94a3b8;
            transition: var(--transition);
        }
        
        .footer-links ul li a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        
        .social-icon {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: var(--transition);
        }
        
        .social-icon:hover {
            background: var(--primary-color);
            transform: translateY(-5px);
        }
        
        .newsletter {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 15px;
            margin-top: 30px;
        }
        
        .newsletter h5 {
            margin-bottom: 20px;
        }
        
        .newsletter input {
            width: 100%;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.05);
            color: white;
            margin-bottom: 15px;
        }
        
        .newsletter input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }
        
        .copyright {
            text-align: center;
            padding-top: 40px;
            margin-top: 60px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #94a3b8;
            font-size: 0.9rem;
        }
        
        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        .floating-element {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(5px);
            animation: float 6s infinite ease-in-out;
            z-index: 0;
        }
        
        /* Responsive */
        @media (max-width: 1200px) {
            .hero-content h1 {
                font-size: 3rem;
            }
            
            .section-title h2 {
                font-size: 2.5rem;
            }
            
            .cta-content h2 {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 992px) {
            .blog-hero {
                padding: 150px 0 80px;
                text-align: center;
            }
            
            .section {
                padding: 80px 0;
            }
        }
        
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .cta-content h2 {
                font-size: 2rem;
            }
            
            .search-bar {
                margin: 30px auto 0;
            }
        }
        
        @media (max-width: 576px) {
            .blog-hero {
                padding: 130px 0 60px;
            }
            
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .featured-content, .article-content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-narrow">
            <a class="navbar-brand" href="#">
                <div class="logo-icon">PC</div>
                Pixel<span>Craft</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../portfolio.html">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.html">Contact</a>
                    </li>
                </ul>
                <a href="../contact.html" class="btn btn-primary d-none d-lg-inline-block">Get Free Consultation</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="blog-hero section">
        <!-- Floating elements -->
        <div class="floating-element" style="width: 80px; height: 80px; top: 20%; left: 10%; animation-delay: 0s;"></div>
        <div class="floating-element" style="width: 50px; height: 50px; top: 60%; left: 5%; animation-delay: 1s;"></div>
        <div class="floating-element" style="width: 70px; height: 70px; top: 30%; right: 10%; animation-delay: 2s;"></div>
        
        <div class="container-narrow">
            <div class="hero-content" data-aos="fade-up">
                <h1>Master Digital Success with Expert Insights</h1>
                <p>Practical guides, strategies, and insights on web design, SEO, and digital marketing tailored for businesses, students, and entrepreneurs.</p>
                
                <div class="search-bar">
                    <input type="text" placeholder="Search for articles, tutorials, or guides...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
                
                <div class="mt-5">
                    <span class="badge bg-primary me-2 p-2">Web Design</span>
                    <span class="badge bg-secondary me-2 p-2">SEO</span>
                    <span class="badge bg-success me-2 p-2">Digital Marketing</span>
                    <span class="badge bg-warning me-2 p-2">Small Business</span>
                    <span class="badge bg-info p-2">Student Projects</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Articles -->
    <section class="featured-section section">
        <div class="container-narrow">
            <div class="section-title" data-aos="fade-up">
                <h2>Featured Articles</h2>
                <p>Handpicked insights to help you succeed in the digital world</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="featured-card">
                        <div class="featured-badge">Most Popular</div>
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="featured-img" alt="Web Design">
                        <div class="featured-content">
                            <div class="article-meta">
                                <div class="author-info">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Author">
                                    <span>Alex Morgan</span>
                                </div>
                                <div class="read-time">
                                    <i class="far fa-clock"></i> 8 min read
                                </div>
                            </div>
                            <h3>The 2024 Guide to Website Design That Converts</h3>
                            <p>Learn how to design websites that don't just look good but actually convert visitors into customers. Essential for small businesses and startups.</p>
                            <a href="#" class="btn btn-primary">Read Full Article</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="featured-card">
                        <div class="featured-badge">For Students</div>
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="featured-img" alt="Student Projects">
                        <div class="featured-content">
                            <div class="article-meta">
                                <div class="author-info">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Author">
                                    <span>Sarah Chen</span>
                                </div>
                                <div class="read-time">
                                    <i class="far fa-clock"></i> 6 min read
                                </div>
                            </div>
                            <h3>Building Your First Web Project: A Student's Guide</h3>
                            <p>Step-by-step guide for students to create impressive web projects for portfolios, internships, and freelance opportunities.</p>
                            <a href="#" class="btn btn-primary">Read Full Article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="categories-section section">
        <div class="container-narrow">
            <div class="section-title" data-aos="fade-up">
                <h2>Explore by Category</h2>
                <p>Find exactly what you need with our organized content categories</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h4>Web Design</h4>
                        <p>UI/UX principles, responsive design, and modern web development techniques for creating stunning websites.</p>
                        <a href="#" class="btn btn-primary">Browse Articles</a>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4>SEO & Analytics</h4>
                        <p>Search engine optimization, Google Analytics, and data-driven strategies to grow your online visibility.</p>
                        <a href="#" class="btn btn-primary">Browse Articles</a>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Digital Marketing</h4>
                        <p>Social media marketing, content strategy, and conversion optimization for business growth.</p>
                        <a href="#" class="btn btn-primary">Browse Articles</a>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <h4>Small Business</h4>
                        <p>Affordable web solutions, marketing strategies, and growth hacks for small business owners.</p>
                        <a href="#" class="btn btn-primary">Browse Articles</a>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>Student Resources</h4>
                        <p>Tutorials, project ideas, and career guidance for students pursuing web development and design.</p>
                        <a href="#" class="btn btn-primary">Browse Articles</a>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>Tools & Resources</h4>
                        <p>Curated lists of essential tools, plugins, and resources for web designers and developers.</p>
                        <a href="#" class="btn btn-primary">Browse Articles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Articles -->
    <section class="articles-section section">
        <div class="container-narrow">
            <div class="section-title" data-aos="fade-up">
                <h2>Latest Articles</h2>
                <p>Fresh content to keep you updated with the latest trends and techniques</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="article-card">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="article-img" alt="Mobile First Design">
                        <div class="article-content">
                            <div class="article-tags">
                                <span class="tag">Web Design</span>
                                <span class="tag">Mobile</span>
                            </div>
                            <h4>Why Mobile-First Design is Non-Negotiable in 2024</h4>
                            <p>With over 60% of web traffic coming from mobile devices, learn how to prioritize mobile design for better user experience and SEO.</p>
                            <a href="#" class="text-primary fw-semibold">Read More →</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="article-card">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="article-img" alt="SEO Basics">
                        <div class="article-content">
                            <div class="article-tags">
                                <span class="tag">SEO</span>
                                <span class="tag">Beginners</span>
                            </div>
                            <h4>SEO Basics Every Small Business Owner Should Know</h4>
                            <p>Simple, actionable SEO strategies that don't require a big budget. Perfect for local businesses and startups.</p>
                            <a href="#" class="text-primary fw-semibold">Read More →</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="article-card">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="article-img" alt="Portfolio Building">
                        <div class="article-content">
                            <div class="article-tags">
                                <span class="tag">Students</span>
                                <span class="tag">Career</span>
                            </div>
                            <h4>Building a Web Design Portfolio That Gets You Hired</h4>
                            <p>Step-by-step guide for students and beginners to create a portfolio that stands out to employers and clients.</p>
                            <a href="#" class="text-primary fw-semibold">Read More →</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="article-card">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="article-img" alt="E-commerce">
                        <div class="article-content">
                            <div class="article-tags">
                                <span class="tag">E-commerce</span>
                                <span class="tag">Business</span>
                            </div>
                            <h4>Converting Visitors: E-commerce Design Strategies That Work</h4>
                            <p>Proven design techniques to increase conversions and reduce cart abandonment for online stores.</p>
                            <a href="#" class="text-primary fw-semibold">Read More →</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="article-card">
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="article-img" alt="WordPress">
                        <div class="article-content">
                            <div class="article-tags">
                                <span class="tag">WordPress</span>
                                <span class="tag">CMS</span>
                            </div>
                            <h4>WordPress for Beginners: Building Your First Website</h4>
                            <p>Complete tutorial for non-technical users to create a professional website using WordPress.</p>
                            <a href="#" class="text-primary fw-semibold">Read More →</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="article-card">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="article-img" alt="Social Media">
                        <div class="article-content">
                            <div class="article-tags">
                                <span class="tag">Marketing</span>
                                <span class="tag">Social Media</span>
                            </div>
                            <h4>Social Media Integration for Small Business Websites</h4>
                            <p>How to effectively integrate social media into your website to boost engagement and traffic.</p>
                            <a href="#" class="text-primary fw-semibold">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="#" class="btn btn-primary btn-lg">View All Articles</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container-narrow">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Transform Your Online Presence?</h2>
                <p>Whether you're a small business owner looking to grow, a student starting your career, or an entrepreneur building your brand, we have the expertise to help you succeed.</p>
                <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                    <a href="../contact.html" class="btn btn-primary">Get Free Website Audit</a>
                    <a href="../services.html" class="btn btn-outline-light">View Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Free Resources -->
    <section class="resources-section section">
        <div class="container-narrow">
            <div class="section-title" data-aos="fade-up">
                <h2>Free Resources</h2>
                <p>Download our free guides and templates to kickstart your digital journey</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-file-download"></i>
                        </div>
                        <h4>Website Planning Template</h4>
                        <p>Complete worksheet to plan your website structure, content, and goals before you start building.</p>
                        <a href="#" class="btn btn-primary">Download Free</a>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4>SEO Checklist for Beginners</h4>
                        <p>Step-by-step SEO checklist to optimize your website for search engines and improve rankings.</p>
                        <a href="#" class="btn btn-primary">Download Free</a>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="resource-card">
                        <div class="resource-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4>Color Scheme Generator</h4>
                        <p>Interactive tool to create beautiful color palettes for your websites and branding materials.</p>
                        <a href="#" class="btn btn-primary">Try For Free</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container-narrow">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-logo">
                        <div class="logo-icon">PC</div>
                        Pixel<span>Craft</span>
                    </div>
                    <p class="footer-about">We help businesses, students, and entrepreneurs succeed in the digital world through expert web design, SEO, and digital marketing solutions.</p>
                    
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                    
                    <div class="newsletter">
                        <h5>Stay Updated</h5>
                        <input type="email" placeholder="Your email address">
                        <button class="btn btn-primary w-100">Subscribe</button>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <h5>Blog Categories</h5>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">SEO & Analytics</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Small Business</a></li>
                            <li><a href="#">Student Resources</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <h5>Services</h5>
                        <ul>
                            <li><a href="../services.html">Website Design</a></li>
                            <li><a href="../services.html">E-commerce Development</a></li>
                            <li><a href="../services.html">SEO Optimization</a></li>
                            <li><a href="../services.html">Brand Identity</a></li>
                            <li><a href="../services.html">Digital Marketing</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="../index.html#about">About Us</a></li>
                            <li><a href="../portfolio.html">Portfolio</a></li>
                            <li><a href="../contact.html">Contact</a></li>
                            <li><a href="../index.html#team">Our Team</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <h5>Contact</h5>
                        <ul>
                            <li><a href="mailto:hello@pixelcraft.com">hello@pixelcraft.com</a></li>
                            <li><a href="tel:+15551234567">+1 (555) 123-4567</a></li>
                            <li>123 Digital Street</li>
                            <li>San Francisco, CA</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2024 PixelCraft Studios. All rights reserved. | <a href="#" style="color: #94a3b8;">Privacy Policy</a> | <a href="#" style="color: #94a3b8;">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navbar links
        document.querySelectorAll('a.nav-link').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Search functionality
        const searchInput = document.querySelector('.search-bar input');
        const searchButton = document.querySelector('.search-bar button');
        
        searchButton.addEventListener('click', function() {
            if (searchInput.value.trim()) {
                alert(`Searching for: "${searchInput.value}"`);
                // In real implementation, this would redirect to search results
            }
        });
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && searchInput.value.trim()) {
                alert(`Searching for: "${searchInput.value}"`);
                // In real implementation, this would redirect to search results
            }
        });

        // Newsletter subscription
        const newsletterInput = document.querySelector('.newsletter input');
        const newsletterButton = document.querySelector('.newsletter .btn-primary');
        
        newsletterButton.addEventListener('click', function() {
            if (newsletterInput.value.trim()) {
                alert(`Thank you for subscribing with: ${newsletterInput.value}`);
                newsletterInput.value = '';
            } else {
                alert('Please enter your email address');
            }
        });

        // Floating elements animation
        const floatingElements = document.querySelectorAll('.floating-element');
        floatingElements.forEach((el, index) => {
            el.style.animationDelay = `${index * 2}s`;
        });

        // Article card interactions
        document.querySelectorAll('.article-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(-10px)';
            });
        });

        // Category card interactions
        document.querySelectorAll('.category-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.category-icon');
                icon.style.transform = 'rotate(15deg) scale(1.1)';
            });
            
            card.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.category-icon');
                icon.style.transform = 'rotate(0) scale(1)';
            });
        });

        // Resource download tracking
        document.querySelectorAll('.resource-card .btn-primary').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const resourceTitle = this.closest('.resource-card').querySelector('h4').textContent;
                alert(`Downloading: ${resourceTitle}\nThank you for downloading our free resource!`);
                // In real implementation, this would trigger a download and track analytics
            });
        });

        // Conversion tracking for CTA buttons
        document.querySelectorAll('.btn-primary').forEach(button => {
            if (button.textContent.includes('Free') || button.textContent.includes('Consultation') || button.textContent.includes('Audit')) {
                button.addEventListener('click', function(e) {
                    // In real implementation, this would send data to analytics
                    console.log('CTA clicked:', this.textContent);
                });
            }
        });
    </script>
</body>
</html>