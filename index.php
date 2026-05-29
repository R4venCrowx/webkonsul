<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Konsultasi Kesehatanmu</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="Homepage/assets/img/favicon.png" rel="icon">
  <link href="Homepage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Homepage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Homepage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Homepage/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Homepage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Homepage/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="Homepage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="Homepage/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Clinic
  * Template URL: https://bootstrapmade.com/clinic-bootstrap-template/
  * Updated: Jul 23 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">
    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="../index.php" class="logo d-flex align-items-center">
          <!-- image logo -->
          <img src="Homepage/assets/img/logo.png" alt=""> 
          <h1 class="sitename">Techno Doct</h1>
        </a>
<nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="../index.php" class="active">Home</a></li>
            <li><a href="Homepage/about.php">About</a></li>
            <li><a href="Homepage/doctors.php">Doctors</a></li>
        <li><a href="<?= isset($_SESSION['sudah_login']) ? 'Homepage/appointment.php' : 'login.php'; ?>">
    <?= isset($_SESSION['sudah_login']) ? 'Appointment' : 'Appointment'; ?>
  </a>
</li>
            <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="Homepage/testimonials.php">Testimonials</a></li>
                <li><a href="Homepage/faq.php">Frequently Asked Questions</a></li>
                <li><a href="Homepage/terms.php">Terms</a></li>
                <li><a href="Homepage/privacy.php">Privacy</a></li>
                <li><a href="Homepage/404.php">404</a></li>
              </ul>
            </li>
            <li><a href="Homepage/contact.php">Contact</a></li>
          
    <li><a href="<?= isset($_SESSION['sudah_login']) ? 'logout.php' : 'login.php'; ?>">
      <?= isset($_SESSION['sudah_login']) ? 'Logout' : 'Login'; ?>
    </a></li></ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
              <div class="trust-badges mb-4" data-aos="fade-right" data-aos-delay="200">
                <div class="badge-item">
                  <i class="bi bi-shield-check"></i>
                  <span>Accredited</span>
                </div>
                <div class="badge-item">
                  <i class="bi bi-clock"></i>
                  <span>24/7 Emergency</span>
                </div>
                <div class="badge-item">
                  <i class="bi bi-star-fill"></i>
                  <span>4.9/5 Rating</span>
                </div>
              </div>

              <h1 data-aos="fade-right" data-aos-delay="300">
                Excellence in <span class="highlight">Healthcare</span> With Compassionate Care
              </h1>

              <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
              </p>

              <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2"
                      class="purecounter"></span>+</h3>
                  <p>Years Experience</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="2"
                      class="purecounter"></span>+</h3>
                  <p>Patients Treated</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="2"
                      class="purecounter"></span>+</h3>
                  <p>Medical Experts</p>
                </div>
              </div>

              <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                <a href="homepage/appointment.php" class="btn btn-primary">Book Appointment</a>

              </div>

              <div class="emergency-contact" data-aos="fade-right" data-aos-delay="700">
                <div class="emergency-icon">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="emergency-info">
                  <small>Emergency Hotline</small>
                  <strong>+1 (555) 911-2468</strong>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
              <div class="main-image">
                <img src="Homepage/assets/img/health/staff-10.webp" alt="Modern Healthcare Facility" class="img-fluid">
                <div class="floating-card appointment-card">
                  <div class="card-icon">
                    <i class="bi bi-calendar-check"></i>
                  </div>
                  <div class="card-content">
                    <h6>Next Available</h6>
                    <p>Today 2:30 PM</p>
                    <small>Dr. Sarah Johnson</small>
                  </div>
                </div>
                <div class="floating-card rating-card">
                  <div class="card-content">
                    <div class="rating-stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                    <h6>4.9/5</h6>
                    <small>1,234 Reviews</small>
                  </div>
                </div>
              </div>
              <div class="background-elements">
                <div class="element element-1"></div>
                <div class="element element-2"></div>
                <div class="element element-3"></div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- Home About Section -->
    <section id="home-about" class="home-about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
            <div class="about-content">
              <h2 class="section-heading">Compassionate Care, Advanced Medicine</h2>
              <p class="lead-text">For over two decades, we've been dedicated to providing exceptional healthcare that
                combines cutting-edge medical technology with the personal touch our patients deserve.</p>

              <p>Our multidisciplinary team of specialists works collaboratively to ensure every patient receives
                comprehensive care tailored to their unique needs. From preventive services to complex procedures, we
                maintain the highest standards of medical excellence while fostering an environment of trust and
                healing.</p>

              <div class="stats-grid">
                <div class="stat-item">
                  <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="15000"
                    data-purecounter-duration="1"></div>
                  <div class="stat-label">Patients Served</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="25"
                    data-purecounter-duration="1"></div>
                  <div class="stat-label">Years of Excellence</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="50"
                    data-purecounter-duration="1"></div>
                  <div class="stat-label">Medical Specialists</div>
                </div>
              </div>

              <div class="cta-section">
                <a href="Homepage/about.html" class="btn-primary">Learn More About Us</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-visual">
              <div class="main-image">
                <img src="Homepage/assets/img/health/facilities-9.webp" alt="Modern medical facility" class="img-fluid">
              </div>
              <div class="floating-card">
                <div class="card-content">
                  <div class="icon">
                    <i class="bi bi-heart-pulse"></i>
                  </div>
                  <div class="card-text">
                    <h4>24/7 Emergency Care</h4>
                    <p>Always here when you need us most</p>
                  </div>
                </div>
              </div>
              <div class="experience-badge">
                <div class="badge-content">
                  <span class="years">25+</span>
                  <span class="text">Years of Trusted Care</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Home About Section -->

    <!-- Featured Departments Section -->
    <section id="featured-departments" class="featured-departments section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Departments</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->
  <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="department-highlight">
              <div class="highlight-icon">
                <i class="bi bi-shield-plus"></i>
              </div>
              <h4>Orthopedic Surgery</h4>
              <p>Comprehensive musculoskeletal care utilizing advanced arthroscopic techniques and joint replacement
                procedures.</p>
              <ul class="highlight-list">
                <li>Sports Medicine</li>
                <li>Joint Replacement</li>
                <li>Spine Surgery</li>
              </ul>
              <a href="Homepage/department-details.html" class="highlight-cta">Learn More</a>
            </div>
          </div><!-- End Department Highlight -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="department-highlight">
              <div class="highlight-icon">
                <i class="bi bi-people"></i>
              </div>
              <h4>Pediatric Care</h4>
              <p>Child-centered healthcare services from newborn to adolescence with family-focused treatment
                approaches.</p>
              <ul class="highlight-list">
                <li>Neonatal Intensive Care</li>
                <li>Developmental Pediatrics</li>
                <li>Pediatric Surgery</li>
              </ul>
              <a href="Homepage/department-details.html" class="highlight-cta">Learn More</a>
            </div>
          </div><!-- End Department Highlight -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="department-highlight">
              <div class="highlight-icon">
                <i class="bi bi-activity"></i>
              </div>
              <h4>Cancer Treatment</h4>
              <p>Multidisciplinary oncology program offering personalized cancer care with latest therapeutic
                innovations.</p>
              <ul class="highlight-list">
                <li>Precision Medicine</li>
                <li>Immunotherapy</li>
                <li>Radiation Oncology</li>
              </ul>
              <a href="Homepage/department-details.html" class="highlight-cta">Learn More</a>
            </div>
          </div><!-- End Department Highlight -->

        </div>

        <div class="emergency-banner" data-aos="fade-up" data-aos-delay="400">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <div class="emergency-content">
                <h3>Emergency Services Available 24/7</h3>
                <p>Our emergency department is equipped with state-of-the-art technology and staffed by board-certified
                  emergency physicians ready to provide immediate care.</p>
              </div>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="tel:+15551234567" class="emergency-btn">
                <i class="bi bi-telephone-fill"></i>
                Call Emergency: (555) 123-4567
              </a>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Featured Departments Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="hero-content">
          <div class="row align-items-center">

            <div class="col-lg-6">
              <div class="content-wrapper" data-aos="fade-up" data-aos-delay="200">
                <h1>Excellence in Medical Care, Every Day</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                <div class="cta-wrapper">
                  <a href="Homepage/appointment.html" class="primary-cta">
                    <span>Schedule Consultation</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                  <a href="Homepage/services.html" class="secondary-cta">
                    <span>Explore Services</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="image-container" data-aos="fade-left" data-aos-delay="300">
                <img src="Homepage/assets/img/health/facilities-9.webp" alt="Medical Excellence" class="img-fluid">
              </div>
            </div>

          </div>
        </div>

        <div class="features-section">

          <div class="row g-0">

            <div class="col-lg-4">
              <div class="feature-block" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-icon">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h3>Advanced Technology</h3>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                  laborum.</p>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="feature-block" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-icon">
                  <i class="bi bi-clock"></i>
                </div>
                <h3>24/7 Availability</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                  excepteur.</p>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="feature-block" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-icon">
                  <i class="bi bi-people"></i>
                </div>
                <h3>Expert Team</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                  totam rem.</p>
              </div>
            </div>

          </div>

        </div>

  <footer id="footer" class="footer-16 footer position-relative">

    <div class="container">

      <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-start">

          <div class="col-lg-5">
            <div class="brand-section">
              <a href="index.php" class="logo d-flex align-items-center mb-4">
                <span class="sitename">Clinic</span>
              </a>
              <p class="brand-description">Crafting exceptional digital experiences through thoughtful design and
                innovative solutions that elevate your brand presence.</p>

              <div class="contact-info mt-5">
                <div class="contact-item">
                  <i class="bi bi-geo-alt"></i>
                  <span>123 Creative Boulevard, Design District, NY 10012</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-telephone"></i>
                  <span>+1 (555) 987-6543</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-envelope"></i>
                  <span>hello@designstudio.com</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="footer-nav-wrapper">
              <div class="row">

                <div class="col-6 col-lg-3">
                  <div class="nav-column">
                    <h6>Studio</h6>
                    <nav class="footer-nav">
                      <a href="#!">Our Story</a>
                      <a href="#!">Design Process</a>
                      <a href="#!">Portfolio</a>
                      <a href="#!">Case Studies</a>
                      <a href="#!">Awards</a>
                    </nav>
                  </div>
                </div>

                <div class="col-6 col-lg-3">
                  <div class="nav-column">
                    <h6>Services</h6>
                    <nav class="footer-nav">
                      <a href="#!">Brand Identity</a>
                      <a href="#!">Web Design</a>
                      <a href="#!">Mobile Apps</a>
                      <a href="#!">Digital Strategy</a>
                      <a href="#!">Consultation</a>
                    </nav>
                  </div>
                </div>

                <div class="col-6 col-lg-3">
                  <div class="nav-column">
                    <h6>Resources</h6>
                    <nav class="footer-nav">
                      <a href="#!">Design Blog</a>
                      <a href="#!">Style Guide</a>
                      <a href="#!">Free Assets</a>
                      <a href="#!">Tutorials</a>
                      <a href="#!">Inspiration</a>
                    </nav>
                  </div>
                </div>

                <div class="col-6 col-lg-3">
                  <div class="nav-column">
                    <h6>Connect</h6>
                    <nav class="footer-nav">
                      <a href="#!">Start Project</a>
                      <a href="#!">Schedule Call</a>
                      <a href="#!">Join Newsletter</a>
                      <a href="#!">Follow Updates</a>
                      <a href="#!">Partnership</a>
                    </nav>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="bottom-content" data-aos="fade-up" data-aos-delay="300">
          <div class="row align-items-center">

            <div class="col-lg-6">
              <div class="copyright">
                <p>© <span class="sitename">Clinic</span>. All rights reserved.</p>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="legal-links">
                <a href="#!">Privacy Policy</a>
                <a href="#!">Terms of Service</a>
                <a href="#!">Cookie Policy</a>
                <div class="credits">
                  <!-- All the links in the footer should remain intact. -->
                  <!-- You can delete the links only if you've purchased the pro version. -->
                  <!-- Licensing information: https://bootstrapmade.com/license/ -->
                  <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>. Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#!" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="Homepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Homepage/assets/vendor/php-email-form/validate.js"></script>
  <script src="Homepage/assets/vendor/aos/aos.js"></script>
  <script src="Homepage/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="Homepage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="Homepage/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="Homepage/assets/js/main.js"></script>

</body>

</html>

