<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cready - Web Developer Profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Include SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        /* Navbar di desktop */
        .navbar.nav-menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            overflow-y: auto;
        }

        /* About Section */
        #about .section-title h2 {
            font-size: 48px;
            text-align: center;
            margin-bottom: 20px;
        }

        #about .section-title p {
            font-size: 22px;
            line-height: 1.6;
            text-align: center;
            margin-bottom: 30px;
        }

        #about .content h3 {
            font-size: 44px;
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: left;
        }

        #about .content p.fst-italic {
            font-size: 20px;
            font-style: italic;
            margin-bottom: 20px;
            text-align: left;
        }

        #about .content ul {
            font-size: 18px;
            line-height: 1.8;
        }

        #about .content ul li {
            margin-bottom: 15px;
            text-align: left;
        }

        #about .row {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .profile-img {
            border: 5px solid #ddd;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s ease;
            width: 250px;
            height: 350px;
            object-fit: cover;
        }

        .profile-img:hover {
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.3);
        }

        /* Facts Section */
        #facts {
            min-height: 100vh;
            background-color: #ffffff;
            padding: 40px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: -20px;
        }

        #facts .section-title {
            text-align: center;
        }

        #facts .section-title h2 {
            font-size: 48px;
            margin-bottom: 20px;
            text-align: center;
        }

        #facts .section-title p {
            font-size: 20px;
            line-height: 1.8;
        }

        .count-box {
            background-color: #ffffff;
            padding: 40px 20px;
            border-radius: 15px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease;
        }

        .count-box:hover {
            transform: translateY(-15px);
        }

        .count-box i {
            font-size: 80px;
            color: #2980b9;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .count-box:hover i {
            transform: scale(1.2);
        }

        .count-box p {
            font-size: 24px;
            font-weight: 600;
            color: #000000;
        }

        #facts .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 30px;
        }

        #facts .col-lg-3,
        #facts .col-md-6 {
            flex: 1 1 calc(50% - 30px);
            display: flex;
            justify-content: center;
            max-width: calc(50% - 30px);
            box-sizing: border-box;
        }

        /* Skills Section */
        .skills-content {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .progress {
            width: 100%;
            margin-bottom: 20px;
        }

        .progress-bar-wrap {
            height: 25px;
            width: 100%;
            background: #f2f2f2;
            border-radius: 15px;
        }

        .progress-bar {
            height: 100%;
            background-color: #4caf50;
            border-radius: 15px;
            transition: width 1s ease-in-out;
        }

        .skill {
            font-weight: bold;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .section-title h2 {
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 30px;
        }

        .section-title p {
            text-align: center;
            font-size: 1.1em;
            color: #666;
        }

        .val {
            font-weight: normal;
        }

        /* Portfolio Section */
        .portfolio-item.filter-web img,
        .portfolio-item.filter-mobile img {
            width: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        .portfolio-item.filter-web img {
            height: 250px;
        }

        .portfolio-item.filter-mobile img {
            height: 650px;
        }

        /* Testimonials Section */
        #testimonials {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 0;
        }

        .testimonials-slider {
            height: 100%;
            width: 100%;
        }

        .swiper-wrapper {
            height: 100%;
        }

        .swiper-slide {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .testimonial-item {
            max-width: 90%;
            width: 100%;
            padding: 60px;
            text-align: center;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .testimonial-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .testimonial-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 30px;
            border: 6px solid #f1f1f1;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .testimonial-img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        #testimonials .section-title h2 {
            font-size: 48px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* SweetAlert Custom Button */
        .custom-btn {
            background-color: #0D6FFD;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }

        .custom-btn:hover {
            background-color: #0563BB;
        }

        /* Footer Section */
        #footer {
            font-size: 15px;
            padding: 30px 0;
        }

        #footer h3 {
            font-size: 18px;
            margin-bottom: 8px;
        }

        #footer p {
            font-size: 14px;
            margin-bottom: 12px;
        }

        #footer .social-links a {
            font-size: 16px;
            margin: 0 8px;
        }

        #footer .copyright {
            font-size: 13px;
            margin-top: -25px;
        }

        #footer .container {
            max-width: 960px;
            text-align: center;
        }

        /* Untuk perangkat tablet (768px - 1024px) */
        @media (min-width: 768px) and (max-width: 1024px) {

            /* Navbar pada tablet */
            .navbar.nav-menu {
                display: flex;
                position: static;
                height: auto;
                background-color: transparent;
                transform: none;
            }

            /* About Section */
            #about .section-title h2 {
                font-size: 48px;
            }

            #about .section-title p {
                font-size: 16px;
                margin-bottom: -10px;
            }

            #about .content h3 {
                font-size: 40px;
            }

            #about .content p.fst-italic {
                font-size: 20px;
            }

            #about .content ul {
                font-size: 18px;
                line-height: 1.6;
            }

            .profile-img {
                width: 200px;
                height: 300px;
                margin-bottom: -20px;
            }

            /* Facts Section */
            #facts .section-title h2 {
                font-size: 48px;
            }

            #facts .section-title p {
                font-size: 18px;
            }

            .count-box {
                padding: 30px 15px;
            }

            /* Skills Section */
            .skills-content {
                gap: 20px;
            }

            .skill {
                font-size: 16px;
            }

            /* Portfolio Section */
            .portfolio-item.filter-web img {
                height: 200px;
            }

            .portfolio-item.filter-mobile img {
                height: 500px;
            }

            /* Testimonials Section */
            #testimonials .section-title h2 {
                font-size: 48px;
            }

            .testimonial-item {
                padding: 15px;
            }

            .testimonial-img {
                width: 120px;
                height: 120px;
            }

            /* Footer Section */
            #footer {
                padding: 20px 0;
            }

            #footer .container {
                max-width: 900px;
            }
        }

        /* Untuk perangkat mobile (max-width: 768px) */
        @media (max-width: 768px) {

            /* Navbar pada mobile */
            .navbar.nav-menu {
                display: none;
            }

            .navbar.nav-menu.active {
                display: block;
                transform: translateX(0);
            }

            .mobile-nav-toggle {
                display: block;
            }

            /* About Section */
            #about .section-title h2 {
                font-size: 40px;
            }

            #about .section-title p {
                font-size: 14px;
                margin-bottom: -10px;
            }

            #about .content h3 {
                font-size: 32px;
            }

            #about .content p.fst-italic {
                font-size: 18px;
            }

            #about .content ul {
                font-size: 16px;
                line-height: 1.4;
            }

            .profile-img {
                width: 175px;
                height: 275px;
                margin-bottom: -20px;
            }

            /* Facts Section */
            #facts .section-title h2 {
                font-size: 40px;
            }

            #facts .section-title p {
                font-size: 16px;
                margin-bottom: -50px;
            }

            /* Skills Section */
            .skills-content {
                gap: 15px;
            }

            .progress-bar-wrap {
                height: 20px;
            }

            /* Portfolio Section */
            .portfolio-item.filter-web img {
                height: 200px;
            }

            .portfolio-item.filter-mobile img {
                height: 450px;
            }

            /* Testimonials Section */
            #testimonials .section-title h2 {
                font-size: 40px;
            }

            .testimonial-item {
                padding: 10px;
            }

            .testimonial-img {
                width: 100px;
                height: 100px;
            }

            /* Footer Section */
            #footer {
                padding: 15px 0;
            }

            #footer .container {
                max-width: 800px;
            }
        }

        /* Untuk perangkat dengan layar kecil (misalnya, smartphone kecil) */
        @media (max-width: 480px) {
            .navbar.nav-menu {
                display: none;
            }

            .navbar.nav-menu.active {
                display: block;
                transform: translateX(0);
            }

            .mobile-nav-toggle {
                display: block;
            }

            /* About Section */
            #about .section-title h2 {
                font-size: 36px;
            }

            #about .section-title p {
                font-size: 12px;
                margin-bottom: -10px;
            }

            #about .content h3 {
                font-size: 24px;
            }

            #about .content p.fst-italic {
                font-size: 14px;
                margin-top: -10px;
            }

            #about .content ul {
                font-size: 14px;
                line-height: 1.2;
            }

            .profile-img {
                width: 150px;
                height: 200px;
                margin-bottom: -20px;
            }

            /* Facts Section */
            #facts .section-title h2 {
                font-size: 36px;
            }

            #facts .section-title p {
                font-size: 14px;
                margin-bottom: -50px;
            }

            /* Skills Section */
            .skills-content {
                gap: 10px;
            }

            /* Portfolio Section */
            .portfolio-item.filter-web img {
                height: 180px;
            }

            .portfolio-item.filter-mobile img {
                height: 400px;
            }

            /* Testimonials Section */
            #testimonials .section-title h2 {
                font-size: 36px;
            }

            .testimonial-item {
                padding: 5px;
            }

            .testimonial-img {
                width: 90px;
                height: 90px;
            }

            /* Footer Section */
            #footer {
                padding: 10px 0;
            }

            #footer .container {
                max-width: 700px;
            }
        }
    </style>

</head>

<body>

    <!-- Mobile nav toggle button -->
    <button type="button" class="mobile-nav-toggle d-xl-none">
        <i class="bi bi-list mobile-nav-toggle"></i>
    </button>

    <!-- Header -->
    <header id="header" class="d-flex flex-column justify-content-center">
        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#facts" class="nav-link scrollto"><i class="bx bx-check-circle"></i> <span>Facts</span></a>
                </li>
                <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-star"></i> <span>Skills</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Tools</span></a>
                </li>
                <li><a href="#testimonials" class="nav-link scrollto"><i class="bx bx-message-square-detail"></i>
                        <span>Testimonials</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
            </ul>
        </nav>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Cready Celgie Gildbrandsen</h1>
            <p>I'm <span class="typed" data-typed-items="Programmer, Web Developer, Full Stack Web Developer"></span>
            </p>
            <div class="social-links">
                <a href="https://x.com/cc_gildbrandsen" class="twitter" target="_blank"><i
                        class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/creadycelgie.gildbrandsen" class="facebook" target="_blank"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/cready_gildbrandsen" class="instagram" target="_blank"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://wa.me/+6282230013246" class="whatsapp" target="_blank"><i
                        class="bx bxl-whatsapp"></i></a>
                <a href="https://www.linkedin.com/in/cready-celgie-gildbrandsen" class="linkedin" target="_blank"><i
                        class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <p>I hold a Bachelor’s degree in Computer Science from Universitas Pembangunan Nasional "Veteran"
                        Jawa Timur. Skilled and developed in leadership, teamwork, communication, problem-solving, and
                        time management through organizing experience. Passionate about advancing my tech skills, with
                        hobbies in socializing and exploring tech innovations.</p>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <img src="assets/img/profile-img.jpg" class="img-fluid profile-img" alt="">
                    </div>
                    <div class="col-lg-9 pt-4 pt-lg-0 content">
                        <h3>Web Developer</h3>
                        <p class="fst-italic">
                            Here are 8 key points from my personal information.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Date of Birth:</strong> <span>17
                                            March
                                            2000</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>24</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Gender:</strong> <span>Male</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Surabaya,
                                            Indonesia</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span><a href="https://wa.me/6282230013246"
                                                target="_blank">(+62)-822-3001-3246</a></span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span><a
                                                href="mailto:creadycelgie03@gmail.com">creadycelgie03@gmail.com</a></span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i>
                                        <strong>Degree:</strong> <span>Bachelor of
                                            Computer Science</span>
                                    </li>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Remote:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Facts</h2>
                    <p>Here are four key highlights that reflect my professional experiences, completed projects,
                        awards, and certifications.</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-briefcase"></i>
                            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <h6>Years of Experience</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-code-slash"></i>
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <h6>Completed Projects</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-trophy"></i>
                            <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <h6>Achievements</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-file-earmark-check"></i>
                            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <h6>Certifications</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>Specializing in Laravel, CodeIgniter (3 & 4), React.js, Node.js, Git, SQL Databases, and REST API
                        Development.</p>
                </div>

                <div class="row skills-content">
                    <div class="col-lg-12">

                        <!-- Laravel Skill -->
                        <div class="progress">
                            <span class="skill">Laravel<i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <!-- CodeIgniter 3 & 4 Skill -->
                        <div class="progress">
                            <span class="skill">CodeIgniter 3 & 4<i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <!-- React.js & Node.js Skill -->
                        <div class="progress">
                            <span class="skill">React.js & Node.js<i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <!-- Git Version Control -->
                        <div class="progress">
                            <span class="skill">Version Control (Git)<i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <!-- SQL Databases -->
                        <div class="progress">
                            <span class="skill">SQL Databases<i class="val">95%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <!-- API Development -->
                        <div class="progress">
                            <span class="skill">API Development (REST)<i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>A comprehensive overview of my professional journey, academic background, and work experience,
                        from past achievements to present.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Summary</h3>
                        <div class="resume-item pb-0">
                            <h4>Cready Celgie Gildbrandsen</h4>
                            <p><em>Innovative and deadline-driven programmer with over a year of experience in
                                    developing and maintaining user-centric corporate websites, from concept to
                                    high-quality deliverables.
                                </em></p>
                            <ul>
                                <li>Jl. Medokan Asri Utara V/12, Surabaya</li>
                                <li><a href="https://github.com/cready2000" target="_blank">View Project on Github</a>
                                </li>
                                <li><a href="https://l1nk.dev/portofolio-cready" target="_blank">View Portfolio on
                                        Google Drive</a></li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Bachelor of Computer Science</h4>
                            <h5>2018 - 2023</h5>
                            <p><em>UPN "Veteran" Jawa Timur</em></p>
                            <p><strong>Location:</strong> Surabaya, a hub for tech and innovation.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Senior High School</h4>
                            <h5>2015 - 2018</h5>
                            <p><em>SMA Dr. Soetomo</em></p>
                            <p><strong>Location:</strong> Surabaya, nurturing future leaders.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Junior High School</h4>
                            <h5>2012 - 2015</h5>
                            <p><em>SMPN 35</em></p>
                            <p><strong>Location:</strong> Surabaya, shaping young minds.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Elementary School</h4>
                            <h5>2006 - 2012</h5>
                            <p><em>SDN Kalirungkut IV/580</em></p>
                            <p><strong>Location:</strong> Surabaya, building educational foundations.</p>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Programmer</h4>
                            <h5>2022 - 2024</h5>
                            <p><em>PT. Global Indo Milenial</em></p>
                            <ul>
                                <li>Maintain and update the GII System (GIS) by collaborating with cross-functional
                                    teams to ensure seamless integration between front-end and back-end components,
                                    utilizing the Laravel framework with MySQL as the Relational Database Management
                                    System (RDBMS).</li>
                                <li>There are 13 databases that must be maintained, consisting of :<br>
                                    1. GIS V. ABJ (First Server)<br>
                                    2. GIS V. BIB (Second Server)<br>
                                    3. GIS V. CHRONOS (Running Server)<br>
                                    4. GIS V. MALAY (Malaysia Server)<br>
                                    5. GIS for FENYI (Fenyi Indonesia)<br>
                                    6. GIS for SOLO (Solo River Electronic)<br>
                                    7. GIS for BII (Bisnis Indo Inovatif)<br>
                                    8. GIS for GIM (Global Indo Milenial)<br>
                                    9. GIS for IAM (Impian Anak Muda)<br>
                                    10. GIS for SUM (Sukses Usia Muda)<br>
                                    11. GIS for LAU (Lima Anak Unggul)<br>
                                    12. GIS for BTS (Bagus Tata Sukses)<br>
                                    13. GIS for HUG (Harapan Utama Globalindo)</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Web Developer Internship</h4>
                            <h5>2021</h5>
                            <p><em>PT. Seventhsoft Komputindo</em></p>
                            <ul>
                                <li>Develop an advanced accounting administrator website leveraging the powerful
                                    CodeIgniter 4 framework, utilizing MySQL as the Relational Database Management
                                    System (RDBMS) to ensure efficient data storage, retrieval, and management, while
                                    providing a seamless user experience and robust back-end functionalities.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>A curated collection of my portfolio, showcasing my journey from the start of my academic career
                        to the present.</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-mobile">Mobile</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/timu-1.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Timu Indonesia</h4>
                                <p>Web App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/timu-1.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Timu Indonesia"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html?project=timu-indonesia"
                                        class="portfolio-details-lightbox" data-glightbox="type: external"
                                        title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/gii-hris-1.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>GII System (HRIS)</h4>
                                <p>Web App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/gii-hris-1.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="GII System (HRIS)"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html?project=gii-system-hris"
                                        class="portfolio-details-lightbox" data-glightbox="type: external"
                                        title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/gii-bib-1.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>GII System (BIB / Beta Version)</h4>
                                <p>Web App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/gii-bib-1.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="GII System (BIB / Beta Version)"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html?project=gii-system-bib"
                                        class="portfolio-details-lightbox" data-glightbox="type: external"
                                        title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/sikosku-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Sistem Informasi Kosku (Si Kosku)</h4>
                                <p>Web App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/sikosku-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Sistem Informasi Kosku (Si Kosku)"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html?project=sikosku" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/pesona-surabaya-1.jpg" class="img-fluid"
                                alt="Pesona Surabaya">
                            <div class="portfolio-info">
                                <h4>Pesona Surabaya</h4>
                                <p>Mobile App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/pesona-surabaya-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Pesona Surabaya"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html?project=pesona-surabaya"
                                        class="portfolio-details-lightbox" data-glightbox="type: external"
                                        title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/accounting-administrator-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Accounting Administrator</h4>
                                <p>Web App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/accounting-administrator-1.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="Accounting Administrator"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html?project=accounting-administrator"
                                        class="portfolio-details-lightbox" data-glightbox="type: external"
                                        title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/health-store-1.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Health Store</h4>
                                <p>Web App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/health-store-1.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Health Store"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html?project=health-store"
                                        class="portfolio-details-lightbox" data-glightbox="type: external"
                                        title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/sitomel-1.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Sistem Informasi Toko Mebel (Sitomel)</h4>
                                <p>Web App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/sitomel-1.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Sistem Informasi Toko Mebel (Sitomel)"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html?project=sitomel" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tools</h2>
                    <p>Proficient in Laravel, CodeIgniter, React.js, Node.js, Git, and MySQL, each contributing to the
                        ability to craft robust and scalable solutions.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <img src="assets/img/laravel-logo.png" width="100" alt="">
                            <h4><a href="">Laravel</a></h4>
                            <p>Open source PHP framework, which is robust and easy to understand. It follows a
                                Model-View-Controller design pattern.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <img src="assets/img/codeigniter-logo.png" width="85" alt="">
                            <h4><a href="">CodeIgniter</a></h4>
                            <p>Free and open-source software rapid development web framework, for use in building
                                dynamic web sites with PHP.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <img src="assets/img/react-logo.png" width="120" alt="">
                            <h4><a href="">React.js</a></h4>
                            <p>JavaScript and User Interface library created by Facebook. Tool for building UI
                                components.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <img src="assets/img/node-logo.png" width="165" alt="">
                            <h4><a href="">Node.js</a></h4>
                            <p>Free and open-source server environment. Runs on various platforms (Windows, Linux, Unix,
                                Mac OS X, etc), and use JavaScript on the server.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <img src="assets/img/git-logo.png" width="120" alt="">
                            <h4><a href="">Git</a></h4>
                            <p>Free, open-source, and widely used version control system (VCS) that allows developers to
                                work on projects efficiently and quickly.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <img src="assets/img/mysql-logo.png" width="185" alt="">
                            <h4><a href="">MySQL</a></h4>
                            <p>Relational database management system (RDBMS) developed by Oracle that is based on
                                structured query language (SQL).</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>Peer feedback highlighting the positive impact of my work and collaborations.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/pic.jpg" class="testimonial-img" alt="">
                                <h3>Tono</h3>
                                <h4>PIC of PT. Global Indo Milenial</h4>
                                <p>
                                    "Cready developed essential features that have simplified complex tasks on our
                                    internal site. Their solutions improved workflow automation, allowing us to work
                                    faster and with fewer manual steps. Their contributions have been invaluable to our
                                    efficiency."
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/it-leader.jpg" class="testimonial-img" alt="">
                                <h3>Rizki Setiawan</h3>
                                <h4>IT Leader of PT. Global Indo Milenial</h4>
                                <p>
                                    "Cready revamped our internal platform to be more efficient and robust. The new
                                    functionalities have streamlined our processes, making it easier for the team to
                                    access and share information in real time. Their work has truly optimized our daily
                                    operations."
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/warehouse-leader.jpg" class="testimonial-img" alt="">
                                <h3>Rudi Pratama</h3>
                                <h4>Warehouse Leader of PT. Global Indo Milenial</h4>
                                <p>
                                    "With Cready’s expertise, our internal site is now highly functional and reliable.
                                    The updates have significantly reduced downtime and improved our data handling
                                    capabilities. This has been a game-changer for our team’s productivity."
                                </p>
                            </div>
                        </div> <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Feel free to reach out. I am always open to discussing new projects or opportunities.</p>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <a href="https://www.google.com/maps/search/Jl.+Medokan+Asri+Utara+V%2F12,+Surabaya"
                                    target="_blank">
                                    <i class="bi bi-geo-alt"></i>
                                </a>
                                <h4>Location:</h4>
                                <p>Jl. Medokan Asri Utara V/12, Surabaya</p>
                            </div>

                            <div class="email">
                                <a href="mailto:creadycelgie03@gmail.com">
                                    <i class="bi bi-envelope"></i>
                                </a>
                                <h4>Email:</h4>
                                <p>creadycelgie03@gmail.com</p>
                            </div>

                            <div class="phone">
                                <a href="https://wa.me/6282230013246" target="_blank">
                                    <i class="bi bi-phone"></i>
                                </a>
                                <h4>Call:</h4>
                                <p>(+62)-822-3001-3246</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="form_handler.php" method="post" role="form" id="contactForm"
                            onsubmit="handleSubmit(event)">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" autocomplete="off" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" autocomplete="off" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary mt-3" type="submit">Send
                                    Message</button>
                            </div>
                        </form>

                        <script>
                            function handleSubmit(event) {
                                event.preventDefault(); // Mencegah pengiriman form default

                                // Mengambil data form
                                const formData = new FormData(event.target);

                                // Kirim data form dengan AJAX ke PHP
                                fetch("form_handler.php", {
                                    method: "POST",
                                    body: formData
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.status === "success") {
                                            // Menampilkan SweetAlert saat pengiriman berhasil
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success!',
                                                text: 'Your message has been sent successfully',
                                                confirmButtonText: 'OK',
                                                customClass: {
                                                    confirmButton: 'custom-btn' // Kelas kustom untuk tombol OK
                                                }
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    // Buka link WhatsApp di tab baru
                                                    window.open(data.whatsappLink, "_blank");
                                                    // Kembali ke halaman awal (root website)
                                                    window.location.href = "/cready-resume";
                                                }
                                            });
                                        } else {
                                            // Jika terjadi kesalahan, tampilkan alert error
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: data.message,
                                            });
                                        }
                                    })
                                    .catch(error => {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Something went wrong!',
                                        });
                                    });
                            }
                        </script>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
                                const navbar = document.querySelector('#navbar');
                                const navLinks = document.querySelectorAll('.nav-link');

                                // Pastikan tombol toggle dan navbar ada
                                if (mobileNavToggle && navbar) {

                                    // Tambahkan event listener untuk menangani klik pada tombol toggle
                                    mobileNavToggle.addEventListener('click', function () {
                                        toggleNavbar();
                                    });

                                    // Fungsi untuk toggle navbar
                                    function toggleNavbar() {
                                        // Toggle kelas 'active' pada navbar untuk membuka dan menutup
                                        navbar.classList.toggle('active');
                                    }

                                    // Pastikan menu ditutup saat klik pada tautan navigasi
                                    navLinks.forEach(link => {
                                        link.addEventListener('click', function () {
                                            // Menutup menu setelah memilih tautan
                                            navbar.classList.remove('active');
                                        });
                                    });
                                } else {
                                    console.warn('Tombol atau navbar tidak ditemukan!');
                                }
                            });
                        </script>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Cready Celgie Gildbrandsen</h3>
            <p>Professional programmer and web developer specializing in full-stack web development.</p>
            <div class="social-links">
                <a href="https://x.com/cc_gildbrandsen" class="twitter" target="_blank" aria-label="Twitter"><i
                        class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/creadycelgie.gildbrandsen" class="facebook" target="_blank"
                    aria-label="Facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/cready_gildbrandsen" class="instagram" target="_blank"
                    aria-label="Instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://wa.me/+6282230013246" class="whatsapp" target="_blank" aria-label="WhatsApp"><i
                        class="bx bxl-whatsapp"></i></a>
                <a href="https://www.linkedin.com/in/cready-celgie-gildbrandsen" class="linkedin" target="_blank"
                    aria-label="LinkedIn"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; <strong>Cready Celgie Gildbrandsen</strong> | All Rights Reserved &ndash; 2024
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>