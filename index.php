<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techno Doct - Tanya Sekarang, Solusi Digital Langsung Datang</title>
    <!-- Google Fonts & FontAwesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* --- DESIGN SYSTEM & VARIABLES --- */
        :root {
            --primary: #2d2b7c;
            --accent: #5b51ec;
            --bg-base: #e2e3f3;
            --text-main: #000000;
            --text-muted: #4a4a6a;
            --secondary-panel: rgba(245, 245, 243, 0.6);
            --glass-bg: rgba(255, 255, 255, 0.45);
            --glass-border: rgba(255, 255, 255, 0.6);
            --glass-glow: rgba(91, 81, 236, 0.15);
            --card-shadow: 0 8px 32px 0 rgba(45, 43, 124, 0.08);
            --transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
            --radius: 20px;
        }

        /* Dark Mode Theme overrides */
        [data-theme="dark"] {
            --primary: #9d96ff;
            --accent: #7c73ff;
            --bg-base: #0b0a1a;
            --text-main: #ffffff;
            --text-muted: #b0b0cc;
            --secondary-panel: rgba(20, 19, 35, 0.6);
            --glass-bg: rgba(20, 19, 35, 0.55);
            --glass-border: rgba(255, 255, 255, 0.1);
            --glass-glow: rgba(124, 115, 255, 0.2);
            --card-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        /* --- BASE STYLES --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--bg-base);
            color: var(--text-main);
            overflow-x: hidden;
            transition: background var(--transition), color var(--transition);
            line-height: 1.6;
        }

        /* Neon abstract background blobs for Glasspunk aesthetic */
        .bg-glows {
            position: fixed;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: -1;
            pointer-events: none;
            overflow: hidden;
        }
        .glow-1 {
            position: absolute;
            top: -10%; left: -10%;
            width: 50vw; height: 50vw;
            background: radial-gradient(circle, rgba(91,81,236,0.3) 0%, rgba(0,0,0,0) 70%);
            filter: blur(80px);
        }
        .glow-2 {
            position: absolute;
            bottom: 10%; right: -5%;
            width: 45vw; height: 45vw;
            background: radial-gradient(circle, rgba(45,43,124,0.25) 0%, rgba(0,0,0,0) 70%);
            filter: blur(100px);
        }

        /* --- GLASSPUNK UTILITIES --- */
        .glass-panel {
            background: var(--glass-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--glass-border);
            box-shadow: var(--card-shadow), inset 0 1px 1px rgba(255,255,255,0.2);
            border-radius: var(--radius);
        }

        .section-compact {
            padding: 40px 5%;
            position: relative;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--primary);
            text-align: center;
            margin-bottom: 30px;
            letter-spacing: -0.5px;
        }

        /* --- SCROLL ANIMATIONS --- */
        .fade-in-element {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in-element.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- NAVIGATION --- */
        .navbar {
            position: fixed;
            top: 0; left: 0; right: 0;
            height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 5%;
            z-index: 1000;
            border-radius: 0;
            border-top: none;
            border-left: none;
            border-right: none;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            color: var(--accent);
            text-shadow: 0 0 10px var(--glass-glow);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-main);
            font-weight: 600;
            font-size: 0.95rem;
            transition: var(--transition);
            position: relative;
            padding: 5px 0;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0;
            width: 0; height: 2px;
            background: var(--accent);
            transition: var(--transition);
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .theme-toggle, .hamburger {
            background: none;
            border: none;
            color: var(--text-main);
            font-size: 1.3rem;
            cursor: pointer;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: var(--transition);
        }

        .theme-toggle:hover {
            background: rgba(91, 81, 236, 0.15);
            color: var(--accent);
        }

        .hamburger {
            display: none;
        }

        /* --- HERO SECTION --- */
        #hero {
            padding-top: 140px;
            padding-bottom: 60px;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.15;
            color: var(--primary);
            margin-bottom: 15px;
            letter-spacing: -1px;
        }

        .hero-tagline {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 20px;
        }

        .hero-description {
            font-size: 1.1rem;
            color: var(--text-muted);
            margin-bottom: 30px;
            max-width: 600px;
        }

        .cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 30px;
            background: var(--accent);
            color: white;
            text-decoration: none;
            font-weight: 700;
            border-radius: 14px;
            box-shadow: 0 4px 15px rgba(91, 81, 236, 0.4);
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(91, 81, 236, 0.6);
            background: var(--primary);
        }

        .hero-image-container {
            position: relative;
            width: 100%;
            height: 420px;
        }

        .hero-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: var(--radius);
            border: 1px solid var(--glass-border);
        }

        .floating-badge {
            position: absolute;
            bottom: 30px;
            left: -30px;
            padding: 15px 25px;
            display: flex;
            align-items: center;
            gap: 15px;
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }

        /* --- ABOUT & SERVICES (GRID) --- */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .feature-card {
            padding: 35px;
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
            box-shadow: 0 12px 40px var(--glass-glow);
        }

        .card-icon {
            width: 60px;
            height: 60px;
            border-radius: 14px;
            background: rgba(91, 81, 236, 0.15);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.4rem;
            color: var(--primary);
            margin-bottom: 12px;
        }

        .feature-card p {
            color: var(--text-muted);
            font-size: 0.98rem;
        }

        /* --- CAROUSEL / TESTIMONIALS --- */
        .carousel-container {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
            overflow: hidden;
            padding: 20px 0;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
            width: 100%;
        }

        .testimonial-slide {
            min-width: 100%;
            padding: 40px;
            box-sizing: border-box;
            text-align: center;
        }

        .testi-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 3px solid var(--accent);
        }

        .testi-text {
            font-size: 1.2rem;
            font-style: italic;
            color: var(--text-main);
            margin-bottom: 20px;
        }

        .testi-name {
            font-weight: 700;
            color: var(--primary);
        }

        .testi-role {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .carousel-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            color: var(--text-main);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            z-index: 10;
        }

        .carousel-arrow:hover {
            background: var(--accent);
            color: white;
        }

        .arrow-left { left: 10px; }
        .arrow-right { right: 10px; }

        .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 15px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--text-muted);
            opacity: 0.4;
            cursor: pointer;
            transition: var(--transition);
        }

        .dot.active {
            opacity: 1;
            background: var(--accent);
            width: 24px;
            border-radius: 5px;
        }

        /* --- FAQ ACCORDION --- */
        .faq-wrapper {
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .faq-item {
            border-radius: 15px;
            overflow: hidden;
            transition: var(--transition);
        }

        .faq-trigger {
            width: 100%;
            padding: 22px 30px;
            background: none;
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: left;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary);
            cursor: pointer;
        }

        .faq-icon {
            transition: var(--transition);
            color: var(--accent);
        }

        .faq-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
            padding: 0 30px;
            color: var(--text-muted);
            font-size: 0.98rem;
        }

        .faq-item.active .faq-content {
            padding-bottom: 22px;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        /* --- CONTACT & MAPS --- */
        .contact-container {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 30px;
        }

        .contact-form-panel, .map-panel {
            padding: 35px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: var(--text-main);
        }

        .form-control {
            width: 100%;
            padding: 14px 20px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            color: var(--text-main);
            font-size: 1rem;
            transition: var(--transition);
        }

        [data-theme="dark"] .form-control {
            background: rgba(0, 0, 0, 0.2);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 15px var(--glass-glow);
        }

        .error-msg {
            color: #ff4d4d;
            font-size: 0.8rem;
            margin-top: 5px;
            display: none;
        }

        .map-panel {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .map-iframe-wrapper {
            width: 100%;
            height: 100%;
            min-height: 250px;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid var(--glass-border);
        }

        /* --- MULTI-COLUMN FOOTER --- */
        footer {
            background: var(--secondary-panel);
            backdrop-filter: blur(10px);
            border-top: 1px solid var(--glass-border);
            padding: 60px 5% 30px;
            color: var(--text-main);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1.2fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .footer-col p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 15px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            text-decoration: none;
            color: var(--text-muted);
            transition: var(--transition);
            font-size: 0.95rem;
        }

        .footer-links a:hover {
            color: var(--accent);
            padding-left: 5px;
        }

        .social-icons {
            display: flex;
            gap: 12px;
            margin-top: 15px;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            color: var(--text-main);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: var(--transition);
        }

        .social-btn:hover {
            background: var(--accent);
            color: white;
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 25px;
            border-top: 1px solid var(--glass-border);
            font-size: 0.88rem;
            color: var(--text-muted);
        }

        /* --- RESPONSIVE DESIGN (MEDIA QUERIES) --- */
        @media (max-width: 1024px) {
            #hero {
                grid-template-columns: 1fr;
                text-align: center;
                padding-top: 120px;
            }
            .hero-text h1 { font-size: 2.8rem; }
            .hero-description { margin: 0 auto 30px; }
            .hero-image-container { height: 350px; max-width: 600px; margin: 0 auto; }
            .floating-badge { left: 20px; }
            .contact-container { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 768px) {
            .hamburger { display: flex; }
            .nav-links {
                position: fixed;
                top: 80px; left: -100%;
                width: 100%; height: calc(100vh - 80px);
                background: var(--glass-bg);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 50px 0;
                transition: var(--transition);
                border-top: 1px solid var(--glass-border);
            }
            .nav-links.active { left: 0; }
            .footer-grid { grid-template-columns: 1fr; gap: 30px; }
            .section-title { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

    <!-- Neon Glow System -->
    <div class="bg-glows">
        <div class="glow-1"></div>
        <div class="glow-2"></div>
    </div>

    <!-- Fixed Glass Navigation Bar -->
    <nav class="navbar glass-panel">
        <a href="#hero" class="logo">
            <i class="fa-solid fa-heart-pulse"></i> Techno Doct
        </a>
        <ul class="nav-links" id="navLinks">
            <li><a href="#hero" class="nav-item">Beranda</a></li>
            <li><a href="#tentang" class="nav-item">Tentang Kami</a></li>
            <li><a href="#layanan" class="nav-item">Layanan</a></li>
            <li><a href="#testimoni" class="nav-item">Testimoni</a></li>
            <li><a href="#faq" class="nav-item">FAQ</a></li>
            <li><a href="#kontak" class="nav-item">Kontak</a></li>
        </ul>
        <div class="nav-actions">
            <button class="theme-toggle" id="themeToggle" aria-label="Toggle Theme">
                <i class="fa-solid fa-moon"></i>
            </button>
            <button class="hamburger" id="hamburger" aria-label="Open Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="hero" class="section-compact">
        <div class="hero-text fade-in-element">
            <p class="hero-tagline">Tanya Sekarang, Solusi Digital Langsung Datang.</p>
            <h1>Navigasi Kesehatan Digital Anda</h1>
            <p class="hero-description">
                Dapatkan saran awal kesehatan berbasis kecerdasan buatan terpercaya serta simulasi konsultasi interaktif secara instan di mana pun Anda berada.
            </p>
            <a href="#layanan" class="cta-btn">
                Mulai Konsultasi Gratis <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="hero-image-container fade-in-element">
            <img src="https://picsum.photos/id/250/600/450" alt="Digital Healthcare Concept" class="hero-img">
            <div class="floating-badge glass-panel">
                <div class="card-icon" style="margin-bottom:0; width:40px; height:40px; font-size:1rem;">
                    <i class="fa-solid fa-robot"></i>
                </div>
                <div>
                    <h5 style="font-weight:800; font-size:0.9rem;">AI Responsif</h5>
                    <p style="font-size:0.75rem; color:var(--text-muted);">Tersedia 24/7 non-stop</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="section-compact fade-in-element">
        <h2 class="section-title">Tentang Kami</h2>
        <div class="glass-panel" style="padding: 40px; max-width: 1000px; margin: 0 auto; text-align: center;">
            <p style="font-size: 1.15rem; color: var(--text-muted); margin-bottom: 20px; font-weight: 500;">
                Menjadi platform digital terdepan yang berdedikasi dalam memperluas aksesibilitas informasi kesehatan melalui integrasi kecerdasan buatan.
            </p>
            <p style="color: var(--text-muted); font-size: 1rem;">
                Kami berkomitmen untuk menjembatani kesenjangan informasi dengan menyediakan sistem Chatbot cerdas berbasis kata kunci yang responsif, serta menghadirkan pengalaman simulasi konsultasi dokter secara real-time. Melalui pendekatan ini, kami bertujuan untuk membekali masyarakat dengan saran awal yang akurat dan persiapan mental yang matang sebelum melanjutkan ke layanan medis profesional.
            </p>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="section-compact fade-in-element">
        <h2 class="section-title">Layanan Utama</h2>
        <div class="card-grid">
            <div class="feature-card glass-panel">
                <div class="card-icon"><i class="fa-solid fa-comments"></i></div>
                <h3>Chatbot Kesehatan AI</h3>
                <p>Sistem cerdas berbasis kata kunci pintar yang siap menjawab pertanyaan awal gejala medis Anda secara instan dan interaktif.</p>
            </div>
            <div class="feature-card glass-panel">
                <div class="card-icon"><i class="fa-solid fa-user-doctor"></i></div>
                <h3>Simulasi Real-Time</h3>
                <p>Rasakan alur pengalaman simulasi konsultasi bersama dokter digital untuk melatih persiapan mental sebelum pemeriksaan tatap muka.</p>
            </div>
            <div class="feature-card glass-panel">
                <div class="card-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h3>Saran Awal Akurat</h3>
                <p>Dukungan validasi algoritma penyaringan informasi terstruktur demi menjaga agar Anda terhindar dari disinformasi medis berbahaya.</p>
            </div>
        </div>
    </section>

    <!-- Testimoni Carousel Section -->
    <section id="testimoni" class="section-compact fade-in-element">
        <h2 class="section-title">Apa Kata Mereka</h2>
        <div class="carousel-container glass-panel">
            <button class="carousel-arrow arrow-left" id="prevBtn" aria-label="Previous Testimonial">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <div class="carousel-track" id="carouselTrack">
                <div class="testimonial-slide">
                    <img src="https://picsum.photos/id/64/150/150" alt="User Avatar" class="testi-avatar">
                    <p class="testi-text">"Sistem Chatbot dari Techno Doct sangat responsif! Saya mendapat kejelasan informasi awal mengenai gejala pusing saya di tengah malam secara rasional."</p>
                    <h4 class="testi-name">Budi Santoso</h4>
                    <span class="testi-role">Karyawan Swasta, Jakarta</span>
                </div>
                <div class="testimonial-slide">
                    <img src="https://picsum.photos/id/91/150/150" alt="User Avatar" class="testi-avatar">
                    <p class="testi-text">"Simulasi konsultasi real-time membantu meredakan kecemasan medis saya sebelum akhirnya mantap pergi menemui dokter spesialis di rumah sakit."</p>
                    <h4 class="testi-name">Dewi Lestari</h4>
                    <span class="testi-role">Ibu Rumah Tangga, Bandung</span>
                </div>
                <div class="testimonial-slide">
                    <img src="https://picsum.photos/id/338/150/150" alt="User Avatar" class="testi-avatar">
                    <p class="testi-text">"Sebuah inovasi inklusif yang menjembatani masyarakat awam dengan dunia medis profesional lewat kemudahan akses teknologi kecerdasan buatan."</p>
                    <h4 class="testi-name">Dr. Rian Prakoso</h4>
                    <span class="testi-role">Praktisi Kesehatan, Surabaya</span>
                </div>
            </div>
            <button class="carousel-arrow arrow-right" id="nextBtn" aria-label="Next Testimonial">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
            <div class="carousel-dots" id="carouselDots"></div>
        </div>
    </section>

    <!-- FAQ Accordion Section -->
    <section id="faq" class="section-compact fade-in-element">
        <h2 class="section-title">Pertanyaan Umum (FAQ)</h2>
        <div class="faq-wrapper">
            <div class="faq-item glass-panel">
                <button class="faq-trigger">
                    <span>Apakah Techno Doct bisa menggantikan diagnosa dokter asli?</span>
                    <i class="fa-solid fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-content">
                    <p>Tidak. Platform kami murni bertujuan memberikan saran edukasi awal berbasis kata kunci AI serta simulasi kesiapan mental. Setiap diagnosa medis final tetap wajib dikonsultasikan dengan dokter profesional.</p>
                </div>
            </div>
            <div class="faq-item glass-panel">
                <button class="faq-trigger">
                    <span>Apakah layanan konsultasi simulasi ini berbayar?</span>
                    <i class="fa-solid fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-content">
                    <p>Untuk saat ini seluruh fitur simulasi chatbot pintar di platform Techno Doct dapat diakses dan digunakan sepenuhnya secara gratis tanpa biaya.</p>
                </div>
            </div>
            <div class="faq-item glass-panel">
                <button class="faq-trigger">
                    <span>Bagaimana privasi riwayat obrolan saya dijaga?</span>
                    <i class="fa-solid fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-content">
                    <p>Keamanan privasi Anda prioritas utama kami. Obrolan enkripsi otomatis diproses lokal secara langsung dan sistem berkala menghapus logs demi menjaga rahasia data kesehatan pengguna.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak & Google Maps Section -->
    <section id="kontak" class="section-compact fade-in-element">
        <h2 class="section-title">Hubungi Kami</h2>
        <div class="contact-container">
            <div class="contact-form-panel glass-panel">
                <h3 style="margin-bottom: 20px; color: var(--primary);">Kirim Pesan</h3>
                <form id="contactForm" novalidate>
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" class="form-control" placeholder="Masukkan nama Anda">
                        <div class="error-msg" id="nameError">Nama lengkap wajib diisi.</div>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" class="form-control" placeholder="nama@email.com">
                        <div class="error-msg" id="emailError">Format email tidak valid atau kosong.</div>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan Anda</label>
                        <textarea id="message" class="form-control" rows="4" placeholder="Tuliskan pesan atau pertanyaan Anda di sini..."></textarea>
                        <div class="error-msg" id="messageError">Pesan minimal berisi 10 karakter.</div>
                    </div>
                    <button type="submit" class="cta-btn" style="width: 100%; justify-content: center;">Kirim Sekarang</button>
                </form>
            </div>
            <div class="map-panel glass-panel">
                <h3 style="color: var(--primary);">Lokasi Kantor</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;"><i class="fa-solid fa-location-dot" style="color: var(--accent);"></i> Gedung TechMed Hub Digital, Lt. 5, Kuningan, Jakarta Selatan</p>
                <div class="map-iframe-wrapper">
                    <!-- Standard Google Maps Embed Placeholder -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.253874013406!2d106.82424367583021!3d-6.23022136101235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f4b8f09075%3A0x2d1fd6bb95d66661!2sKuningan%20Epicentrum!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Multi-Column Footer -->
    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <a href="#hero" class="logo" style="margin-bottom: 15px;">
                    <i class="fa-solid fa-heart-pulse"></i> Techno Doct
                </a>
                <p>Platform terdepan yang berdedikasi memperluas aksesibilitas informasi kesehatan melalui integrasi kecerdasan buatan terpercaya.</p>
                <div class="social-icons">
                    <a href="#" class="social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-btn" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="social-btn" aria-label="Linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Navigasi</h4>
                <ul class="footer-links">
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="#layanan">Layanan Utama</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Legalitas</h4>
                <ul class="footer-links">
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Syarat & Ketentuan</a></li>
                    <li><a href="#">Sanggahan Medis</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Kontak & Bantuan</h4>
                <p><i class="fa-solid fa-envelope" style="color:var(--accent); margin-right:8px;"></i> support@technodoct.id</p>
                <p><i class="fa-solid fa-phone" style="color:var(--accent); margin-right:8px;"></i> +62 (21) 555-8921</p>
                <p><i class="fa-solid fa-clock" style="color:var(--accent); margin-right:8px;"></i> Setiap Hari (24 Jam)</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Techno Doct. Seluruh Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <!-- INTERACTIVE JAVASCRIPT LOGIC -->
    <script>
        // --- Dark/Light Mode Switcher ---
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = themeToggle.querySelector('i');

        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            if (currentTheme === 'dark') {
                document.documentElement.removeAttribute('data-theme');
                themeIcon.className = 'fa-solid fa-moon';
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
                themeIcon.className = 'fa-solid fa-sun';
            }
        });

        // --- Responsive Mobile Hamburger Menu ---
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');
        const navItems = document.querySelectorAll('.nav-item');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.querySelector('i').classList.toggle('fa-bars');
            hamburger.querySelector('i').classList.toggle('fa-xmark');
        });

        // Close menu on link click
        navItems.forEach(item => {
            item.addEventListener('click', () => {
                navLinks.classList.remove('active');
                hamburger.querySelector('i').className = 'fa-solid fa-bars';
            });
        });

        // --- Active Navigation Link on Scroll ---
        const sections = document.querySelectorAll('header, section');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 120) {
                    current = section.getAttribute('id');
                }
            });
            navItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('href').includes(current)) {
                    item.classList.add('active');
                }
            });
        });

        // --- Scroll Triggered Fade-In Animations ---
        const animatedElements = document.querySelectorAll('.fade-in-element');
        const intersectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, { threshold: 0.1 });

        animatedElements.forEach(element => intersectionObserver.observe(element));

        // --- Testimonial Carousel Mechanism ---
        const track = document.getElementById('carouselTrack');
        const slides = Array.from(track.children);
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const dotsContainer = document.getElementById('carouselDots');
        let currentIndex = 0;

        // Generate Pagination Dots
        slides.forEach((_, idx) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (idx === 0) dot.classList.add('active');
            dot.addEventListener('click', () => updateCarousel(idx));
            dotsContainer.appendChild(dot);
        });

        const dots = Array.from(dotsContainer.children);

        function updateCarousel(index) {
            track.style.transform = `translateX(-${index * 100}%)`;
            dots[currentIndex].classList.remove('active');
            dots[index].classList.add('active');
            currentIndex = index;
        }

        nextBtn.addEventListener('click', () => {
            let nextIndex = currentIndex + 1 >= slides.length ? 0 : currentIndex + 1;
            updateCarousel(nextIndex);
        });

        prevBtn.addEventListener('click', () => {
            let prevIndex = currentIndex - 1 < 0 ? slides.length - 1 : currentIndex - 1;
            updateCarousel(prevIndex);
        });

        // Auto play carousel every 6 seconds
        setInterval(() => {
            let nextIndex = currentIndex + 1 >= slides.length ? 0 : currentIndex + 1;
            updateCarousel(nextIndex);
        }, 6000);

        // --- Accordion FAQ Interactive Mechanism ---
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const trigger = item.querySelector('.faq-trigger');
            const content = item.querySelector('.faq-content');

            trigger.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Close all other open items
                faqItems.forEach(otherItem => {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-content').style.maxHeight = null;
                });

                if (!isActive) {
                    item.classList.add('active');
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });

        // --- Form Validation Control ---
        const contactForm = document.getElementById('contactForm');

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            let isValid = true;
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');

            // Name validation
            if (name.value.trim() === "") {
                document.getElementById('nameError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('nameError').style.display = 'none';
            }

            // Email validation regex pattern
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email.value.trim())) {
                document.getElementById('emailError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('emailError').style.display = 'none';
            }

            // Message validation
            if (message.value.trim().length < 10) {
                document.getElementById('messageError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('messageError').style.display = 'none';
            }

            // Action on Successful Validation
            if (isValid) {
                alert('Terima kasih! Pesan Anda berhasil dikirim ke tim medis Techno Doct.');
                contactForm.reset();
            }
        });
    </script>
</body>
</html>