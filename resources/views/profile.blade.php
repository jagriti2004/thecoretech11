<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixelCraft Studios | Creative Development Team</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Glide Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css">
    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #8b5cf6;
            --accent-color: #06b6d4;
            --dark-color: #0f172a;
            --light-color: #f8fafc;
            --card-bg: rgba(30, 41, 59, 0.6);
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        [data-theme="light"] {
            --dark-color: #f8fafc;
            --light-color: #0f172a;
            --card-bg: rgba(248, 250, 252, 0.8);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            color: var(--light-color);
            line-height: 1.6;
            background-color: var(--dark-color);
            transition: var(--transition);
            position: relative;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(99, 102, 241, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(139, 92, 246, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(6, 182, 212, 0.1) 0%, transparent 50%);
            z-index: -1;
            pointer-events: none;
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
        }
        
        /* Custom cursor */
        .cursor-dot {
            width: 8px;
            height: 8px;
            background-color: var(--primary-color);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: transform 0.1s;
        }
        
        .cursor-outline {
            width: 40px;
            height: 40px;
            border: 2px solid var(--primary-color);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9998;
            transform: translate(-50%, -50%);
            transition: all 0.2s ease-out;
        }
        
        /* Navbar */
        .navbar {
            padding: 25px 0;
            transition: var(--transition);
            background: rgba(15, 23, 42, 0.8) !important;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        [data-theme="light"] .navbar {
            background: rgba(248, 250, 252, 0.8) !important;
        }
        
        .navbar.scrolled {
            padding: 15px 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 900;
            color: var(--light-color);
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .navbar-brand span {
            color: var(--primary-color);
        }
        
        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 900;
            font-size: 1.5rem;
        }
        
        .nav-link {
            color: var(--light-color);
            font-weight: 500;
            margin: 0 10px;
            transition: var(--transition);
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            transition: var(--transition);
        }
        
        .nav-link:hover {
            color: var(--primary-color);
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Theme Toggle */
        .theme-toggle {
            position: fixed;
            top: 25px;
            right: 20px;
            z-index: 10000;
        }
        
        .theme-toggle button {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--light-color);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(10px);
        }
        
        .theme-toggle button:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(30deg);
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding-top: 100px;
        }
        
        .hero-content h1 {
            font-size: 4.5rem;
            font-weight: 900;
            margin-bottom: 20px;
            line-height: 1.1;
        }
        
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: rgba(255, 255, 255, 0.8);
            max-width: 600px;
        }
        
        [data-theme="light"] .hero-content p {
            color: rgba(0, 0, 0, 0.7);
        }
        
        .hero-highlight {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 300% 300%;
            animation: gradientText 5s ease infinite;
        }
        
        @keyframes gradientText {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .btn-primary {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 18px 45px;
            border-radius: 12px;
            font-weight: 600;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            z-index: 1;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--secondary-color), var(--primary-color));
            transition: all 0.6s;
            z-index: -1;
        }
        
        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(99, 102, 241, 0.4);
        }
        
        .btn-primary:hover::before {
            left: 0;
        }
        
        /* Floating elements */
        .floating-element {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            animation: float 8s infinite ease-in-out;
            z-index: -1;
        }
        
        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .floating-element:nth-child(2) {
            width: 50px;
            height: 50px;
            top: 60%;
            left: 5%;
            animation-delay: 1s;
        }
        
        .floating-element:nth-child(3) {
            width: 70px;
            height: 70px;
            top: 30%;
            right: 10%;
            animation-delay: 2s;
        }
        
        .floating-element:nth-child(4) {
            width: 40px;
            height: 40px;
            bottom: 20%;
            right: 15%;
            animation-delay: 3s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(10deg); }
        }
        
        /* Section Padding */
        section {
            padding: 120px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 80px;
        }
        
        .section-title h2 {
            font-weight: 900;
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 15px;
            font-size: 3rem;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 6px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 3px;
        }
        
        .section-subtitle {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }
        
        [data-theme="light"] .section-subtitle {
            color: rgba(0, 0, 0, 0.7);
        }
        
        /* About Section */
        .about {
            position: relative;
            overflow: hidden;
        }
        
        .about-content h3 {
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }
        
        .about-content p {
            margin-bottom: 30px;
        }
        
  /* Team Card Styles */
        .team-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            transition: var(--transition);
            height: 100%;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .team-card:hover {
            transform: translateY(-20px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }
        
        .team-img-container {
            position: relative;
            overflow: hidden;
            height: 300px;
        }
        
        .team-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .team-card:hover .team-img {
            transform: scale(1.05);
        }
        
        .team-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(15, 23, 42, 0.9), transparent);
            padding: 20px;
            transform: translateY(10px);
            opacity: 0;
            transition: var(--transition);
        }
        
        .team-card:hover .team-overlay {
            transform: translateY(0);
            opacity: 1;
        }
        
        .team-info {
            padding: 30px;
        }
        
        .team-info h4 {
            margin-bottom: 5px;
            font-size: 1.5rem;
        }
        
        .team-role {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
            display: block;
        }
        
        .team-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 15px;
        }
        
        .skill-tag {
            background: rgba(59, 130, 246, 0.1);
            color: var(--primary-color);
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }
        
        .team-social {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .team-social a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light-color);
            transition: var(--transition);
        }
        
        .team-social a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }
        
        /* Swiper Carousel */
        .team-carousel {
            position: relative;
            padding: 20px 0;
        }
        
        .swiper {
            width: 100%;
            padding: 30px 10px 50px;
        }
        
        .swiper-slide {
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .swiper-button-next, .swiper-button-prev {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            color: white;
            transition: var(--transition);
        }
        
        .swiper-button-next:after, .swiper-button-prev:after {
            font-size: 1.2rem;
        }
        
        .swiper-button-next:hover, .swiper-button-prev:hover {
            background: var(--primary-color);
            transform: scale(1.1);
        }
        
        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.3);
            opacity: 1;
        }
        
        .swiper-pagination-bullet-active {
            background: var(--primary-color);
            transform: scale(1.2);
        }
        
        /* View Toggle */
        .view-toggle {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            gap: 10px;
        }
        
        .view-toggle-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding: 10px 25px;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .view-toggle-btn.active {
            background: var(--primary-color);
            box-shadow: 0 5px 20px rgba(59, 130, 246, 0.4);
        }
        
        .view-toggle-btn:hover:not(.active) {
            background: rgba(255, 255, 255, 0.2);
        }
        
        /* Grid View */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        /* Carousel View */
        .team-carousel-view {
            display: none;
        }
        
        .team-carousel-view.active {
            display: block;
        }
        
        .team-grid-view.active {
            display: grid;
        }
        
        /* Responsive */
        @media (max-width: 1200px) {
            .team-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .section {
                padding: 70px 0;
            }
            
            .section-title h2 {
                font-size: 2.5rem;
            }
            
            .team-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto;
            }
            
            .swiper-button-next, .swiper-button-prev {
                display: none;
            }
        }
        
        @media (max-width: 576px) {
            .section-title h2 {
                font-size: 2rem;
            }
            
            .section-subtitle {
                font-size: 1rem;
            }
        }
        
        /* Stats Section */
        .stats {
            padding: 80px 0;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
        }
        
        .stat-card {
            text-align: center;
            padding: 40px 20px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.1);
        }
        
        .stat-number {
            font-size: 3.5rem;
            font-weight: 900;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
            line-height: 1;
        }
        
        .stat-text {
            font-size: 1.1rem;
            font-weight: 600;
        }
        
        /* Portfolio Section */
        .portfolio {
            position: relative;
        }
        
        .portfolio-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 50px;
            gap: 10px;
        }
        
        .filter-btn {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 12px 30px;
            margin: 5px;
            color: var(--light-color);
            font-weight: 500;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .filter-btn.active, .filter-btn:hover {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
        }
        
        .portfolio-item {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            margin-bottom: 30px;
            height: 350px;
            cursor: pointer;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .portfolio-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(99, 102, 241, 0.9), rgba(139, 92, 246, 0.9));
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 30px;
            opacity: 0;
            transition: var(--transition);
        }
        
        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
        
        .portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
        }
        
        .portfolio-title {
            color: white;
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 1.5rem;
            transform: translateY(20px);
            transition: var(--transition);
            opacity: 0;
        }
        
        .portfolio-category {
            color: rgba(255, 255, 255, 0.9);
            transform: translateY(20px);
            transition: var(--transition);
            opacity: 0;
        }
        
        .portfolio-item:hover .portfolio-title,
        .portfolio-item:hover .portfolio-category {
            transform: translateY(0);
            opacity: 1;
            transition-delay: 0.2s;
        }
        
        /* Testimonials Carousel */
        .testimonials {
            position: relative;
        }
        
        .testimonial-slider {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .testimonial-card {
            background: var(--card-bg);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            margin: 0 20px;
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 4px solid var(--primary-color);
        }
        
        .testimonial-author {
            font-weight: 600;
            margin-top: 20px;
        }
        
        .testimonial-author span {
            color: var(--primary-color);
            display: block;
            font-weight: 500;
            margin-top: 5px;
        }
        
        /* Contact Section */
        .contact {
            position: relative;
        }
        
        .contact-form {
            background: var(--card-bg);
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 18px;
            border-radius: 12px;
            margin-bottom: 25px;
            color: var(--light-color);
            transition: var(--transition);
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--primary-color);
            box-shadow: 0 0 20px rgba(99, 102, 241, 0.3);
            color: var(--light-color);
        }
        
        textarea.form-control {
            min-height: 180px;
        }
        
        /* Footer */
        footer {
            background: rgba(15, 23, 42, 0.9);
            padding: 100px 0 40px;
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        [data-theme="light"] footer {
            background: rgba(248, 250, 252, 0.9);
        }
        
        .footer-logo {
            font-weight: 900;
            color: var(--light-color);
            font-size: 2rem;
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
            max-width: 400px;
        }
        
        .social-icons {
            margin-bottom: 40px;
        }
        
        .social-icon {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            color: var(--light-color);
            border-radius: 12px;
            margin: 0 8px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .social-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 12px;
            transform: scale(0);
            transition: var(--transition);
            z-index: -1;
        }
        
        .social-icon:hover {
            color: var(--light-color);
            transform: translateY(-5px);
        }
        
        .social-icon:hover::before {
            transform: scale(1);
        }
        
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: var(--light-color);
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 999;
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.5);
        }
        
        /* Responsive */
        @media (max-width: 1200px) {
            .hero-content h1 {
                font-size: 3.5rem;
            }
        }
        
        @media (max-width: 992px) {
            .hero-content h1 {
                font-size: 3rem;
            }
            
            .section-title h2 {
                font-size: 2.5rem;
            }
            
            .contact-form {
                padding: 40px;
            }
        }
        
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .contact-form {
                padding: 30px;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero {
                padding-top: 150px;
            }
            
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .testimonial-card {
                padding: 30px;
            }
        }
        <style>
    /* Profile Modal Styles - Add these to existing CSS */
    .profile-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 10000;
        padding: 20px;
        backdrop-filter: blur(10px);
    }
    
    .profile-modal.active {
        display: flex;
        animation: fadeIn 0.3s ease-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .profile-card {
        background: linear-gradient(135deg, rgba(30, 41, 59, 0.95), rgba(15, 23, 42, 0.95));
        border-radius: 25px;
        width: 100%;
        max-width: 1000px;
        max-height: 90vh;
        overflow-y: auto;
        position: relative;
        border: 1px solid rgba(255, 255, 255, 0.15);
        box-shadow: 0 40px 80px rgba(0, 0, 0, 0.5);
        animation: slideUp 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    @keyframes slideUp {
        from { transform: translateY(50px) scale(0.9); opacity: 0; }
        to { transform: translateY(0) scale(1); opacity: 1; }
    }
    
    .modal-close {
        position: absolute;
        top: 25px;
        right: 25px;
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        cursor: pointer;
        z-index: 10;
        transition: var(--transition);
        border: none;
        font-size: 1.5rem;
    }
    
    .modal-close:hover {
        background: var(--primary-color);
        transform: rotate(90deg);
    }
    
    .profile-header {
        padding: 50px 50px 30px;
        display: flex;
        align-items: center;
        gap: 40px;
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), transparent);
        border-radius: 25px 25px 0 0;
    }
    
    .profile-avatar {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid var(--primary-color);
        box-shadow: 0 15px 40px rgba(99, 102, 241, 0.3);
        flex-shrink: 0;
    }
    
    .profile-header-info {
        flex-grow: 1;
    }
    
    .profile-header-info h3 {
        font-size: 2.5rem;
        margin-bottom: 10px;
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .profile-role {
        font-size: 1.3rem;
        color: var(--accent-color);
        font-weight: 600;
        margin-bottom: 15px;
        display: block;
    }
    
    .profile-tagline {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 20px;
    }
    
    .profile-social {
        display: flex;
        gap: 15px;
    }
    
    .profile-social a {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: var(--transition);
        font-size: 1.2rem;
    }
    
    .profile-social a:hover {
        background: var(--primary-color);
        transform: translateY(-5px);
    }
    
    .profile-content {
        padding: 30px 50px 50px;
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
    }
    
    .profile-main {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }
    
    .profile-sidebar {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }
    
    .profile-section {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 25px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: var(--transition);
    }
    
    .profile-section:hover {
        background: rgba(255, 255, 255, 0.08);
        transform: translateY(-5px);
    }
    
    .profile-section h4 {
        font-size: 1.3rem;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--accent-color);
    }
    
    .profile-section h4 i {
        color: var(--primary-color);
    }
    
    /* Skills Section */
    .profile-skills {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .profile-skill-tag {
        background: rgba(99, 102, 241, 0.15);
        color: var(--primary-color);
        padding: 10px 18px;
        border-radius: 50px;
        font-weight: 500;
        transition: var(--transition);
        border: 1px solid rgba(99, 102, 241, 0.3);
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    
    .profile-skill-tag:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(99, 102, 241, 0.4);
    }
    
    .profile-skill-tag::after {
        content: attr(data-level);
        position: absolute;
        top: -5px;
        right: -5px;
        background: var(--secondary-color);
        color: white;
        font-size: 0.6rem;
        padding: 2px 6px;
        border-radius: 10px;
        opacity: 0;
        transition: var(--transition);
    }
    
    .profile-skill-tag:hover::after {
        opacity: 1;
    }
    
    /* Education Section */
    .education-list {
        list-style: none;
        padding: 0;
    }
    
    .education-item {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        position: relative;
        padding-left: 40px;
    }
    
    .education-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }
    
    .education-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 5px;
        width: 25px;
        height: 25px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        content: '\f19d';
        color: white;
        font-size: 0.8rem;
    }
    
    .education-degree {
        font-weight: 600;
        color: white;
        margin-bottom: 5px;
    }
    
    .education-school {
        color: var(--accent-color);
        font-size: 0.95rem;
        margin-bottom: 5px;
    }
    
    .education-year {
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.85rem;
    }
    
    /* Contact Section */
    .contact-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    .contact-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 10px;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }
    
    .contact-item:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateX(5px);
    }
    
    .contact-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background: var(--primary-color);
        opacity: 0;
        transition: var(--transition);
    }
    
    .contact-item:hover::before {
        opacity: 1;
    }
    
    .contact-item i {
        width: 40px;
        height: 40px;
        background: rgba(99, 102, 241, 0.1);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        flex-shrink: 0;
        transition: var(--transition);
    }
    
    .contact-item:hover i {
        background: var(--primary-color);
        color: white;
        transform: rotate(15deg);
    }
    
    .contact-details {
        flex-grow: 1;
    }
    
    .contact-label {
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 3px;
    }
    
    .contact-value {
        font-weight: 500;
        color: white;
        word-break: break-all;
    }
    
    /* Bio Section */
    .profile-bio p {
        margin-bottom: 15px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.7;
    }
    
    /* Experience Section */
    .experience-list {
        list-style: none;
        padding: 0;
    }
    
    .experience-list li {
        margin-bottom: 15px;
        padding-left: 25px;
        position: relative;
        color: rgba(255, 255, 255, 0.8);
    }
    
    .experience-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--primary-color);
        font-weight: bold;
    }
    
    /* Make team cards clickable */
    .team-card {
        cursor: pointer;
    }
    
    .view-profile-btn {
        position: absolute;
        bottom: 20px;
        right: 20px;
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        opacity: 0;
        transform: translateY(20px);
        transition: var(--transition);
        z-index: 2;
        cursor: pointer;
    }
    
    .team-card:hover .view-profile-btn {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .profile-content {
            grid-template-columns: 1fr;
        }
    }
    
    @media (max-width: 992px) {
        .profile-header {
            flex-direction: column;
            text-align: center;
            gap: 30px;
            padding: 40px 30px 20px;
        }
        
        .profile-avatar {
            width: 150px;
            height: 150px;
        }
        
        .profile-content {
            padding: 20px 30px 40px;
        }
    }
    
    @media (max-width: 768px) {
        .profile-header h3 {
            font-size: 2rem;
        }
        
        .modal-close {
            top: 15px;
            right: 15px;
            width: 40px;
            height: 40px;
        }
    }
    
    @media (max-width: 576px) {
        .profile-header {
            padding: 30px 20px 20px;
        }
        
        .profile-content {
            padding: 20px 20px 30px;
        }
        
        .profile-section {
            padding: 20px;
        }
    }


    </style>
</head>
<body data-theme="dark">
    <!-- Custom cursor -->
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <!-- Theme Toggle -->
    <div class="theme-toggle">
        <button id="toggleTheme" title="Toggle Theme">
            <i class="fas fa-moon"></i>
        </button>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="logo-icon">PC</div>
                Pixel<span>Craft</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <!-- Floating elements -->
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right" data-aos-delay="200">
                    <div class="hero-content">
                        <h1>We Build <span class="hero-highlight">Digital Experiences</span> That Matter</h1>
                        <p>PixelCraft Studios is a creative development team specializing in modern web solutions, UI/UX design, and digital innovation. We transform ideas into impactful digital experiences.</p>
                        <a href="#portfolio" class="btn btn-primary">View Our Work <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="300">
                    <div class="hero-stats">
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="stat-card">
                                    <div class="stat-number">150+</div>
                                    <div class="stat-text">Projects Completed</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card">
                                    <div class="stat-number">98%</div>
                                    <div class="stat-text">Client Satisfaction</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card">
                                    <div class="stat-number">50+</div>
                                    <div class="stat-text">Happy Clients</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card">
                                    <div class="stat-number">8+</div>
                                    <div class="stat-text">Years Experience</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>About Our Studio</h2>
                <p class="section-subtitle">We're a multidisciplinary team passionate about creating exceptional digital products that solve real problems and deliver measurable results.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="about-img" style="border-radius: 20px; overflow: hidden; box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="img-fluid" alt="Our Team">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="about-content">
                        <h3>Where Creativity Meets Technology</h3>
                        <p>Founded in 2015, PixelCraft Studios brings together a diverse team of designers, developers, and strategists who share a common goal: to build digital experiences that delight users and drive business growth.</p>
                        <p>Our collaborative approach ensures that every project benefits from multiple perspectives, resulting in solutions that are both innovative and practical.</p>
                        
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> User-Centered Design</h5>
                                <p class="small">We prioritize user needs in every decision</p>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Agile Development</h5>
                                <p class="small">Flexible processes that adapt to your needs</p>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Cutting-Edge Tech</h5>
                                <p class="small">Using the latest tools and technologies</p>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Ongoing Support</h5>
                                <p class="small">We're here even after project completion</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- Team Section -->
   <!-- Update the Team Section HTML -->
<section id="team" class="team-section section">
    <div class="container-narrow">
        <div class="section-title" data-aos="fade-up">
            <h2>Meet Our Team</h2>
            <p class="section-subtitle">Click on any team member to view their detailed profile</p>
        </div>
        
        <!-- View Toggle -->
        <div class="view-toggle" data-aos="fade-up" data-aos-delay="100">
            <button class="view-toggle-btn active" id="gridViewBtn">
                <i class="fas fa-th-large"></i> Grid View
            </button>
            <button class="view-toggle-btn" id="carouselViewBtn">
                <i class="fas fa-sliders-h"></i> Carousel View
            </button>
        </div>
        
        <!-- Grid View -->
        <div class="team-grid-view active" id="teamGridView">
            <div class="team-grid">
                <!-- Team Member 1 -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="100" onclick="openProfile(1)">
                    <div class="team-img-container">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="team-img" alt="Alex Morgan">
                        <button class="view-profile-btn">
                            <i class="fas fa-eye"></i> View Profile
                        </button>
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Alex Morgan</h4>
                        <span class="team-role">Lead Developer</span>
                        <p>Specializes in frontend architecture and scalable web applications with 8+ years of experience.</p>
                        <div class="team-skills">
                            <span class="skill-tag">React</span>
                            <span class="skill-tag">Vue.js</span>
                            <span class="skill-tag">TypeScript</span>
                            <span class="skill-tag">Node.js</span>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="200" onclick="openProfile(2)">
                    <div class="team-img-container">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="team-img" alt="Sarah Chen">
                        <button class="view-profile-btn">
                            <i class="fas fa-eye"></i> View Profile
                        </button>
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Sarah Chen</h4>
                        <span class="team-role">UI/UX Designer</span>
                        <p>Crafts intuitive user interfaces and engaging experiences with a focus on accessibility and usability.</p>
                        <div class="team-skills">
                            <span class="skill-tag">Figma</span>
                            <span class="skill-tag">Adobe XD</span>
                            <span class="skill-tag">User Research</span>
                            <span class="skill-tag">Prototyping</span>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="300" onclick="openProfile(3)">
                    <div class="team-img-container">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="team-img" alt="Marcus Johnson">
                        <button class="view-profile-btn">
                            <i class="fas fa-eye"></i> View Profile
                        </button>
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Marcus Johnson</h4>
                        <span class="team-role">Full-Stack Developer</span>
                        <p>Builds robust backend systems and seamless API integrations with expertise in cloud technologies.</p>
                        <div class="team-skills">
                            <span class="skill-tag">Python</span>
                            <span class="skill-tag">Django</span>
                            <span class="skill-tag">AWS</span>
                            <span class="skill-tag">PostgreSQL</span>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="400" onclick="openProfile(4)">
                    <div class="team-img-container">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="team-img" alt="Jessica Williams">
                        <button class="view-profile-btn">
                            <i class="fas fa-eye"></i> View Profile
                        </button>
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-medium"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Jessica Williams</h4>
                        <span class="team-role">Product Manager</span>
                        <p>Leads product strategy and roadmap, ensuring alignment between business goals and user needs.</p>
                        <div class="team-skills">
                            <span class="skill-tag">Agile</span>
                            <span class="skill-tag">Scrum</span>
                            <span class="skill-tag">Product Strategy</span>
                            <span class="skill-tag">User Stories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carousel View -->
        <div class="team-carousel-view" id="teamCarouselView">
            <div class="team-carousel">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- Team Member 1 -->
                        <div class="swiper-slide">
                            <div class="team-card" onclick="openProfile(1)">
                                <div class="team-img-container">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="team-img" alt="Alex Morgan">
                                    <button class="view-profile-btn">
                                        <i class="fas fa-eye"></i> View Profile
                                    </button>
                                    <div class="team-overlay">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>Alex Morgan</h4>
                                    <span class="team-role">Lead Developer</span>
                                    <p>Specializes in frontend architecture and scalable web applications with 8+ years of experience.</p>
                                    <div class="team-skills">
                                        <span class="skill-tag">React</span>
                                        <span class="skill-tag">Vue.js</span>
                                        <span class="skill-tag">TypeScript</span>
                                        <span class="skill-tag">Node.js</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team Member 2 -->
                        <div class="swiper-slide">
                            <div class="team-card" onclick="openProfile(2)">
                                <div class="team-img-container">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="team-img" alt="Sarah Chen">
                                    <button class="view-profile-btn">
                                        <i class="fas fa-eye"></i> View Profile
                                    </button>
                                    <div class="team-overlay">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-dribbble"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>Sarah Chen</h4>
                                    <span class="team-role">UI/UX Designer</span>
                                    <p>Crafts intuitive user interfaces and engaging experiences with a focus on accessibility and usability.</p>
                                    <div class="team-skills">
                                        <span class="skill-tag">Figma</span>
                                        <span class="skill-tag">Adobe XD</span>
                                        <span class="skill-tag">User Research</span>
                                        <span class="skill-tag">Prototyping</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team Member 3 -->
                        <div class="swiper-slide">
                            <div class="team-card" onclick="openProfile(3)">
                                <div class="team-img-container">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="team-img" alt="Marcus Johnson">
                                    <button class="view-profile-btn">
                                        <i class="fas fa-eye"></i> View Profile
                                    </button>
                                    <div class="team-overlay">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>Marcus Johnson</h4>
                                    <span class="team-role">Full-Stack Developer</span>
                                    <p>Builds robust backend systems and seamless API integrations with expertise in cloud technologies.</p>
                                    <div class="team-skills">
                                        <span class="skill-tag">Python</span>
                                        <span class="skill-tag">Django</span>
                                        <span class="skill-tag">AWS</span>
                                        <span class="skill-tag">PostgreSQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team Member 4 -->
                        <div class="swiper-slide">
                            <div class="team-card" onclick="openProfile(4)">
                                <div class="team-img-container">
                                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="team-img" alt="Jessica Williams">
                                    <button class="view-profile-btn">
                                        <i class="fas fa-eye"></i> View Profile
                                    </button>
                                    <div class="team-overlay">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-medium"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>Jessica Williams</h4>
                                    <span class="team-role">Product Manager</span>
                                    <p>Leads product strategy and roadmap, ensuring alignment between business goals and user needs.</p>
                                    <div class="team-skills">
                                        <span class="skill-tag">Agile</span>
                                        <span class="skill-tag">Scrum</span>
                                        <span class="skill-tag">Product Strategy</span>
                                        <span class="skill-tag">User Stories</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Profile Modal at the end of body -->
<div class="profile-modal" id="profileModal">
    <div class="profile-card" id="profileCard">
        <!-- Profile content will be dynamically inserted here -->
    </div>
</div>


   

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card">
                        <div class="stat-number">8+</div>
                        <div class="stat-text">Years Experience</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card">
                        <div class="stat-number">150+</div>
                        <div class="stat-text">Projects Completed</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card">
                        <div class="stat-number">50+</div>
                        <div class="stat-text">Happy Clients</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-card">
                        <div class="stat-number">12</div>
                        <div class="stat-text">Team Members</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Portfolio</h2>
                <p class="section-subtitle">Showcasing our best work across various industries and technologies</p>
            </div>
            
            <div class="portfolio-filter" data-aos="fade-up" data-aos-delay="100">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="web">Web Development</button>
                <button class="filter-btn" data-filter="app">Mobile Apps</button>
                <button class="filter-btn" data-filter="design">UI/UX Design</button>
            </div>
            
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-item" data-category="web">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="portfolio-img" alt="E-commerce Platform">
                        <div class="portfolio-overlay">
                            <h5 class="portfolio-title">Nexus E-commerce Platform</h5>
                            <p class="portfolio-category">Web Development • React • Node.js</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-item" data-category="app">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="portfolio-img" alt="Finance Dashboard">
                        <div class="portfolio-overlay">
                            <h5 class="portfolio-title">Finwise Mobile App</h5>
                            <p class="portfolio-category">Mobile App • React Native • Firebase</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-item" data-category="design">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="portfolio-img" alt="Travel App">
                        <div class="portfolio-overlay">
                            <h5 class="portfolio-title">Wanderlust Travel Experience</h5>
                            <p class="portfolio-category">UI/UX Design • Figma • Prototyping</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Get In Touch</h2>
                <p class="section-subtitle">Ready to bring your digital vision to life? Let's discuss how we can help.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Company (Optional)">
                            <select class="form-control" required>
                                <option value="" disabled selected>Project Type</option>
                                <option>Web Development</option>
                                <option>Mobile App</option>
                                <option>UI/UX Design</option>
                                <option>Full Project</option>
                                <option>Other</option>
                            </select>
                            <textarea class="form-control" rows="5" placeholder="Tell us about your project" required></textarea>
                            <button type="submit" class="btn btn-primary w-100">Send Message <i class="fas fa-paper-plane ms-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-logo">
                        <div class="logo-icon">PC</div>
                        Pixel<span>Craft</span>
                    </div>
                    <p class="footer-about">We're a creative development studio focused on building exceptional digital experiences that drive results and create lasting impact.</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-dribbble"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>Our Services</h5>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-2"><a href="#" class="text-decoration-none" style="color: var(--light-color);">Web Development</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none" style="color: var(--light-color);">UI/UX Design</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none" style="color: var(--light-color);">Mobile App Development</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none" style="color: var(--light-color);">E-commerce Solutions</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none" style="color: var(--light-color);">Brand Strategy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>Contact Info</h5>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-3"><i class="fas fa-map-marker-alt me-3 text-primary"></i> 123 Creative Street, Digital City</li>
                        <li class="mb-3"><i class="fas fa-phone me-3 text-primary"></i> +1 (555) 123-4567</li>
                        <li class="mb-3"><i class="fas fa-envelope me-3 text-primary"></i> hello@pixelcraft.com</li>
                        <li class="mb-3"><i class="fas fa-clock me-3 text-primary"></i> Mon-Fri: 9AM-6PM</li>
                    </ul>
                </div>
            </div>
            <hr class="my-5" style="border-color: rgba(255, 255, 255, 0.1);">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 PixelCraft Studios. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p><a href="#" class="text-decoration-none me-3" style="color: var(--light-color);">Privacy Policy</a> | 
                    <a href="#" class="text-decoration-none" style="color: var(--light-color);">Terms of Service</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Glide Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js"></script>
    <script>
        

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Custom cursor
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorOutline = document.querySelector('.cursor-outline');
        
        document.addEventListener('mousemove', (e) => {
            cursorDot.style.left = `${e.clientX}px`;
            cursorDot.style.top = `${e.clientY}px`;
            
            cursorOutline.style.left = `${e.clientX}px`;
            cursorOutline.style.top = `${e.clientY}px`;
        });
        
        // Make cursor interactive with links and buttons
        document.querySelectorAll('a, button, .portfolio-item').forEach(element => {
            element.addEventListener('mouseenter', () => {
                cursorDot.style.transform = 'translate(-50%, -50%) scale(1.5)';
                cursorOutline.style.transform = 'translate(-50%, -50%) scale(1.2)';
                cursorOutline.style.borderColor = 'var(--accent-color)';
            });
            
            element.addEventListener('mouseleave', () => {
                cursorDot.style.transform = 'translate(-50%, -50%) scale(1)';
                cursorOutline.style.transform = 'translate(-50%, -50%) scale(1)';
                cursorOutline.style.borderColor = 'var(--primary-color)';
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const backToTop = document.querySelector('.back-to-top');
            
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            // Show/hide back to top button
            if (window.scrollY > 500) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });

        // Theme toggle
        const toggleTheme = document.getElementById('toggleTheme');
        const body = document.body;
        
        toggleTheme.addEventListener('click', () => {
            const currentTheme = body.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            body.setAttribute('data-theme', newTheme);
            toggleTheme.innerHTML = newTheme === 'dark' ? '<i class="fas fa-moon"></i>' : '<i class="fas fa-sun"></i>';
            
            // Save preference to localStorage
            localStorage.setItem('theme', newTheme);
        });
        
        // Load saved theme
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            body.setAttribute('data-theme', savedTheme);
            toggleTheme.innerHTML = savedTheme === 'dark' ? '<i class="fas fa-moon"></i>' : '<i class="fas fa-sun"></i>';
        }

        // Smooth scrolling for navbar links
        document.querySelectorAll('a.nav-link, .back-to-top').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                if (this.getAttribute('href') === '#') {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                    return;
                }
                
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

        // Portfolio filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Form submission
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const formObject = {};
            formData.forEach((value, key) => {
                formObject[key] = value;
            });
            
            // In a real application, you would send this data to a server
            console.log('Form submitted:', formObject);
            
            // Show success message
            alert('Thank you for your message! We will get back to you soon.');
            contactForm.reset();
        });

        // Initialize Glide carousel for testimonials
        // Note: Glide carousel commented out as we don't have enough testimonials for a carousel
        // If you add more testimonials, uncomment this code
        /*
        new Glide('.glide', {
            type: 'carousel',
            startAt: 0,
            perView: 1,
            autoplay: 3000,
            hoverpause: true,
            breakpoints: {
                768: {
                    perView: 1
                }
            }
        }).mount();
        */
// Team member data with detailed information
const teamMembers = {
    1: {
        name: "Alex Morgan",
        role: "Lead Developer",
        tagline: "Frontend Architecture & Scalable Web Applications",
        image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        bio: [
            "Alex has over 8 years of experience in web development, specializing in creating scalable frontend architectures for enterprise applications.",
            "He leads our frontend team and is passionate about performance optimization, accessibility, and creating intuitive user experiences.",
            "Alex regularly contributes to open-source projects and speaks at tech conferences about modern JavaScript frameworks and best practices."
        ],
        skills: [
            { name: "React", level: "Expert" },
            { name: "Vue.js", level: "Advanced" },
            { name: "TypeScript", level: "Expert" },
            { name: "Node.js", level: "Advanced" },
            { name: "GraphQL", level: "Intermediate" },
            { name: "Webpack", level: "Expert" },
            { name: "Jest", level: "Advanced" },
            { name: "Docker", level: "Intermediate" },
            { name: "AWS", level: "Intermediate" },
            { name: "CI/CD", level: "Advanced" }
        ],
        experience: [
            "Led frontend development for 3 major enterprise applications",
            "Improved application performance by 40% through code optimization",
            "Mentored 5 junior developers who now lead their own teams",
            "Contributed to major open-source projects including React and Webpack"
        ],
        education: [
            { degree: "MSc in Computer Science", school: "Stanford University", year: "2015" },
            { degree: "BSc in Software Engineering", school: "MIT", year: "2012" },
            { degree: "Frontend Masters Certification", school: "Frontend Masters", year: "2018" }
        ],
        contact: {
            email: "alex.morgan@example.com",
            phone: "+1 (555) 123-4567",
            location: "San Francisco, CA",
            availability: "Available for consulting"
        },
        social: {
            twitter: "#",
            linkedin: "#",
            github: "#",
            website: "alexmorgan.dev"
        }
    },
    2: {
        name: "Sarah Chen",
        role: "UI/UX Designer",
        tagline: "Creating Intuitive & Engaging User Experiences",
        image: "https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        bio: [
            "Sarah is a passionate UI/UX designer with 6 years of experience creating beautiful and functional digital products.",
            "She believes in user-centered design and conducts extensive research to understand user needs and behaviors.",
            "Sarah has designed interfaces for mobile apps, web applications, and enterprise software used by millions of users."
        ],
        skills: [
            { name: "Figma", level: "Expert" },
            { name: "Adobe XD", level: "Advanced" },
            { name: "User Research", level: "Expert" },
            { name: "Prototyping", level: "Expert" },
            { name: "Wireframing", level: "Advanced" },
            { name: "Design Systems", level: "Expert" },
            { name: "Accessibility", level: "Advanced" },
            { name: "Usability Testing", level: "Advanced" },
            { name: "HTML/CSS", level: "Intermediate" },
            { name: "Motion Design", level: "Intermediate" }
        ],
        experience: [
            "Designed award-winning mobile app with 5M+ downloads",
            "Created design system used by 50+ designers",
            "Improved conversion rates by 35% through UX redesign",
            "Led accessibility audit for major e-commerce platform"
        ],
        education: [
            { degree: "BFA in Graphic Design", school: "Rhode Island School of Design", year: "2016" },
            { degree: "UX Design Certification", school: "Nielsen Norman Group", year: "2019" },
            { degree: "Accessibility Specialist", school: "IAAP", year: "2020" }
        ],
        contact: {
            email: "sarah.chen@example.com",
            phone: "+1 (555) 234-5678",
            location: "New York, NY",
            availability: "Available for freelance projects"
        },
        social: {
            dribbble: "#",
            behance: "#",
            linkedin: "#",
            website: "sarahchendesign.com"
        }
    },
    3: {
        name: "Marcus Johnson",
        role: "Full-Stack Developer",
        tagline: "Building Robust Backend Systems & API Integrations",
        image: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        bio: [
            "Marcus is a full-stack developer with expertise in building scalable backend systems and seamless API integrations.",
            "He has extensive experience with cloud technologies and database optimization for high-traffic applications.",
            "Marcus enjoys solving complex technical challenges and mentoring junior developers in backend development."
        ],
        skills: [
            { name: "Python", level: "Expert" },
            { name: "Django", level: "Expert" },
            { name: "AWS", level: "Advanced" },
            { name: "PostgreSQL", level: "Expert" },
            { name: "Redis", level: "Advanced" },
            { name: "Docker", level: "Advanced" },
            { name: "Kubernetes", level: "Intermediate" },
            { name: "REST APIs", level: "Expert" },
            { name: "Microservices", level: "Advanced" },
            { name: "DevOps", level: "Advanced" }
        ],
        experience: [
            "Built backend system handling 10M+ daily requests",
            "Reduced server costs by 60% through optimization",
            "Implemented CI/CD pipeline for 50+ microservices",
            "Led migration from monolithic to microservices architecture"
        ],
        education: [
            { degree: "MS in Computer Engineering", school: "Georgia Tech", year: "2014" },
            { degree: "BS in Computer Science", school: "UC Berkeley", year: "2012" },
            { degree: "AWS Solutions Architect", school: "Amazon Web Services", year: "2019" }
        ],
        contact: {
            email: "marcus.johnson@example.com",
            phone: "+1 (555) 345-6789",
            location: "Austin, TX",
            availability: "Available for backend consulting"
        },
        social: {
            twitter: "#",
            linkedin: "#",
            github: "#",
            website: "marcusjohnson.dev"
        }
    },
    4: {
        name: "Jessica Williams",
        role: "Product Manager",
        tagline: "Leading Product Strategy & Roadmap Development",
        image: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        bio: [
            "Jessica is a strategic product manager with 7 years of experience in tech product development and management.",
            "She excels at aligning business goals with user needs to create successful digital products.",
            "Jessica has managed products from conception to launch, with several achieving market leadership positions."
        ],
        skills: [
            { name: "Product Strategy", level: "Expert" },
            { name: "Agile/Scrum", level: "Expert" },
            { name: "Market Research", level: "Advanced" },
            { name: "User Stories", level: "Expert" },
            { name: "Roadmapping", level: "Expert" },
            { name: "Stakeholder Management", level: "Advanced" },
            { name: "Data Analysis", level: "Advanced" },
            { name: "A/B Testing", level: "Advanced" },
            { name: "Jira", level: "Expert" },
            { name: "SQL", level: "Intermediate" }
        ],
        experience: [
            "Managed product with 2M+ active users",
            "Increased user retention by 45% through feature optimization",
            "Led cross-functional team of 20+ engineers and designers",
            "Successfully launched 5 major product versions"
        ],
        education: [
            { degree: "MBA", school: "Harvard Business School", year: "2015" },
            { degree: "BS in Business Administration", school: "Wharton", year: "2011" },
            { degree: "Product Management Certification", school: "Product School", year: "2018" }
        ],
        contact: {
            email: "jessica.williams@example.com",
            phone: "+1 (555) 456-7890",
            location: "Seattle, WA",
            availability: "Available for product strategy sessions"
        },
        social: {
            twitter: "#",
            linkedin: "#",
            medium: "#",
            website: "jessicawilliams.co"
        }
    }
};

// Function to open profile
function openProfile(memberId) {
    const member = teamMembers[memberId];
    const modal = document.getElementById('profileModal');
    const profileCard = document.getElementById('profileCard');
    
    // Create profile HTML
    profileCard.innerHTML = `
        <button class="modal-close" onclick="closeProfile()">
            <i class="fas fa-times"></i>
        </button>
        
        <div class="profile-header">
            <img src="${member.image}" class="profile-avatar" alt="${member.name}">
            <div class="profile-header-info">
                <h3>${member.name}</h3>
                <span class="profile-role">${member.role}</span>
                <p class="profile-tagline">${member.tagline}</p>
                <div class="profile-social">
                    ${member.social.twitter ? `<a href="${member.social.twitter}"><i class="fab fa-twitter"></i></a>` : ''}
                    ${member.social.linkedin ? `<a href="${member.social.linkedin}"><i class="fab fa-linkedin-in"></i></a>` : ''}
                    ${member.social.github ? `<a href="${member.social.github}"><i class="fab fa-github"></i></a>` : ''}
                    ${member.social.dribbble ? `<a href="${member.social.dribbble}"><i class="fab fa-dribbble"></i></a>` : ''}
                    ${member.social.behance ? `<a href="${member.social.behance}"><i class="fab fa-behance"></i></a>` : ''}
                    ${member.social.medium ? `<a href="${member.social.medium}"><i class="fab fa-medium"></i></a>` : ''}
                    ${member.social.website ? `<a href="https://${member.social.website}"><i class="fas fa-globe"></i></a>` : ''}
                </div>
            </div>
        </div>
        
        <div class="profile-content">
            <div class="profile-main">
                <div class="profile-section">
                    <h4><i class="fas fa-user"></i> About Me</h4>
                    <div class="profile-bio">
                        ${member.bio.map(paragraph => `<p>${paragraph}</p>`).join('')}
                    </div>
                </div>
                
                <div class="profile-section">
                    <h4><i class="fas fa-briefcase"></i> Experience & Achievements</h4>
                    <ul class="experience-list">
                        ${member.experience.map(item => `<li>${item}</li>`).join('')}
                    </ul>
                </div>
            </div>
            
            <div class="profile-sidebar">
                <!-- Skills Section -->
                <div class="profile-section">
                    <h4><i class="fas fa-cogs"></i> Skills</h4>
                    <div class="profile-skills">
                        ${member.skills.map(skill => `
                            <span class="profile-skill-tag" data-level="${skill.level}">
                                ${skill.name}
                            </span>
                        `).join('')}
                    </div>
                </div>
                
                <!-- Education Section -->
                <div class="profile-section">
                    <h4><i class="fas fa-graduation-cap"></i> Education</h4>
                    <ul class="education-list">
                        ${member.education.map(edu => `
                            <li class="education-item">
                                <div class="education-degree">${edu.degree}</div>
                                <div class="education-school">${edu.school}</div>
                                <div class="education-year">${edu.year}</div>
                            </li>
                        `).join('')}
                    </ul>
                </div>
                
                <!-- Contact Section -->
                <div class="profile-section">
                    <h4><i class="fas fa-address-card"></i> Contact Information</h4>
                    <div class="contact-list">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div class="contact-details">
                                <div class="contact-label">Email</div>
                                <div class="contact-value">${member.contact.email}</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div class="contact-details">
                                <div class="contact-label">Phone</div>
                                <div class="contact-value">${member.contact.phone}</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="contact-details">
                                <div class="contact-label">Location</div>
                                <div class="contact-value">${member.contact.location}</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div class="contact-details">
                                <div class="contact-label">Availability</div>
                                <div class="contact-value">${member.contact.availability}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    // Show modal
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
    
    // Add click event to skill tags
    document.querySelectorAll('.profile-skill-tag').forEach(tag => {
        tag.addEventListener('click', function() {
            const level = this.getAttribute('data-level');
            alert(`Skill: ${this.textContent}\nLevel: ${level}`);
        });
    });
}

// Function to close profile
function closeProfile() {
    const modal = document.getElementById('profileModal');
    modal.classList.remove('active');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('profileModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeProfile();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeProfile();
    }
});

// Add hover effect to skill tags in team cards
document.querySelectorAll('.skill-tag').forEach(tag => {
    tag.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-3px)';
        this.style.boxShadow = '0 5px 15px rgba(99, 102, 241, 0.3)';
    });
    
    tag.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = 'none';
    });
});

// Initialize Swiper if it exists
if (typeof Swiper !== 'undefined') {
    const swiper = new Swiper('.mySwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });
}

// View Toggle Functionality
const gridViewBtn = document.getElementById('gridViewBtn');
const carouselViewBtn = document.getElementById('carouselViewBtn');
const teamGridView = document.getElementById('teamGridView');
const teamCarouselView = document.getElementById('teamCarouselView');

if (gridViewBtn && carouselViewBtn) {
    gridViewBtn.addEventListener('click', () => {
        gridViewBtn.classList.add('active');
        carouselViewBtn.classList.remove('active');
        teamGridView.classList.add('active');
        teamCarouselView.classList.remove('active');
        if (swiper) swiper.autoplay.stop();
    });
    
    carouselViewBtn.addEventListener('click', () => {
        carouselViewBtn.classList.add('active');
        gridViewBtn.classList.remove('active');
        teamCarouselView.classList.add('active');
        teamGridView.classList.remove('active');
        if (swiper) {
            swiper.autoplay.start();
            swiper.update();
        }
    });
}
        
    </script>
</body>
</html>