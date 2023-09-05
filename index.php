<?php
include "./php/contant.php";
include "./php/uplouad.php";

$comedata = "SELECT * FROM man";

$reslut = mysqli_query($conn1, $comedata);
$sqll1 = mysqli_fetch_all($reslut, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ahmeddaahees portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="public/vendor/aos/aos.css" rel="stylesheet">
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="public/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Templat./e Main CSS File -->
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="public/img/my-image.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="/">Ahmed Dahees</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="https://www.facebook.com/ahmedmohameddahees/" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/ahmddahees/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                    </li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Resume</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>Portfolio</span></a></li>
                    <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Contact</span></a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: url("public/img/a.jpg") top center;
            background-size: cover;
        }
    </style>
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Ahmed Dahees</h1>
            <p>I'm <span class="typed" data-typed-items="graphic designer, back-end Developer, front-end designer, full stack developer"></span>
            </p>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>My name's ahmed mohamed dahees, I'm 23 years old , from egypt , i'm student at faculty
                        of law ( cairo universty ) , i'm Graphic designer , full stack web developer
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="public/img/my-image.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>graphic designer &amp; full stack web developer.</h3>
                        <p class="fst-italic">
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>31 May
                                            2001</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>+201101083878
                                            / +201015362440</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>egypt
                                        </span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>23</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>seinor</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Gmail:</strong>
                                        <span>ahmeddaheees7@gmail.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            i'm ready for your work just call me
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">

                <!-- End Facts Section -->

                <!-- ======= Skills Section ======= -->
                <section id="skills" class="skills section-bg">
                    <div class="container">

                        <div class="section-title">
                            <h2>Skills</h2>
                            <p>that's progress for my skills of HTML , CSS , JS , Node JS , Photoshop</p>
                        </div>

                        <div class="row skills-content">

                            <div class="col-lg-6" data-aos="fade-up">

                                <div class="progress">
                                    <span class="skill">HTML <i class="val">100%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">CSS <i class="val">90%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">JavaScript <i class="val">85%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                                <div class="progress">
                                    <span class="skill">PHP<i class="val">80%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">MYSQL <i class="val">80%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">Photoshop <i class="val">80%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </section>
                <!-- End Skills Section -->

                <!-- ======= Resume Section ======= -->
                <section id="resume" class="resume">
                    <div class="container">

                        <div class="section-title">
                            <h2>Resume</h2>
                            <p>I'm graphic designer +5 years , since 2016 and i'm full stack web developer +1 year since
                                2020 and i'm motion graphic +3 years since 2017.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-up">
                                <h3 class="resume-title">Summary</h3>
                                <div class="resume-item pb-0">
                                    <h4>ahmed dahees</h4>
                                    <p><em>I am a graphic designer with a high sense of graphic design and also very
                                            committed at the time + programmer of integrated websites The site is
                                            connected to the database My SQL</em></p>
                                    <ul>
                                        <li>egypt , sohag</li>
                                        <li>+201101083878</li>
                                        <li>ahmeddaheees7@gmail.com</li>
                                    </ul>
                                </div>

                                <h3 class="resume-title">Education</h3>
                                <div class="resume-item">
                                    <h4>faculty of law & full stack web developer courses</h4>
                                    <h5>2020 - now</h5>
                                    <p>i'm student at cairo universty ( faculty of law ) , i have got a lot of courses
                                        for web design , web developer , node js to be full stack web developer </p>
                                </div>

                            </div>
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="resume-title">Professional Experience</h3>
                                <div class="resume-item">
                                    <h4>Senior graphic design specialist</h4>
                                    <h5>2017 - Present</h5>
                                    <p><em>freelance </em></p>
                                    <ul>
                                        <li>Lead in the design, development, and implementation of the graphic, layout,
                                            and production communication materials</li>
                                        <li>specialist social media poster designe cuz it's hardes section in design .
                                        </li>
                                        <li>making mockup for design's to can edit it in any time later it's best way to
                                            short time for designer's</li>
                                    </ul>
                                </div>
                                <div class="resume-item">
                                    <h4>full stack web developer</h4>
                                    <h5>2020 - Present</h5>
                                    <p><em>UFO adevertising agency , freelancer</em></p>
                                    <ul>
                                        <li>developed website's for biggest company in diffrant side .</li>
                                        <li>Managed up to 3 projects or tasks at a given time while under pressure</li>
                                        <li>Extreme time commitment to get your site before deadline i said u at first
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End Resume Section -->

                <!-- ======= Portfolio Section ======= -->
                <section id="portfolio" class="portfolio section-bg">
                    <div class="container">

                        <div class="section-title">
                            <h2>Portfolio</h2>

                        </div>

                        <div class="row" data-aos="fade-up">
                            <!-- <div class="col-lg-12 d-flex justify-content-center">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">All</li>

                                </ul>
                            </div> -->
                        </div>

                        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">


                            <?php foreach ($sqll1 as $good) : ?>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-card">

                                    <div class="portfolio-wrap">
                                        <img src="./Img/<?php echo $good["link"]; ?>" class="img-fluid" alt="">
                                        <div class="portfolio-links">
                                            <a href="./Img/<?php echo $good["link"]; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" <?php echo $good["title"]; ?>    "><i class="bi bi-zoom-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>





                        </div>



                    </div>

            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>egypt </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <a href="mailto:ahmeddaheees7@gmail.com">
                                    <p>ahmeddaheees7@gmail.com</p>
                                </a>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <a href="tel:201101083878">
                                    <p>+201101083878</p>
                                    <p>+201015362440</p>
                                </a>
                            </div>

                        </div>

                    </div>


                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="index.php" method="POST" class="php-email-form">
                            <div class="row">

                                <div class="form-group">
                                    <input type="text" placeholder="your name" class="form-control" name="firstname" id="subject" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="email" class="form-control" name="your_email" id="subject" required>
                                </div>

                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="subject" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="message" name="message" rows="10" required></textarea>
                            </div>
                            <button name="submit" type="submit">Send Message</button>
                        </form>
                    </div>

                </div>

            </div>

        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                <strong><span>Ahmed Dahees</span></strong>
            </div>
            <!-- <div class="credits">
                Designed by <a href="https://www.facebook.com/ahmedmohameddahees/">Ahmed Dahees</a>
            </div> -->
        </div>
    </footer>
    <!-- End  Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="public/vendor/aos/aos.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="public/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="public/vendor/purecounter/purecounter.js"></script>
    <script src="public/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="public/vendor/typed.js/typed.min.js"></script>
    <script src="public/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="public/js/main.js"></script>

</body>

</html>