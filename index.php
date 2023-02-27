<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sailor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">



      <!-- <h1 class="logo me-auto"><a href="index.php">Cicerone</a></h1> -->
      <h1 class="logo me-auto"><a href="index.php"><img src= "assets/img/cicerone.png" alt=" "></a></h1>

      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.php">About</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="testimonials.php">Testimonials</a></li>

              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="Booking.php">Booking</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login_signup.php" class="getstarted">Login || Signup</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slider3-01.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Bienvenido a<span style="color:#d9232d"> Cicerone</span></h2>
              <p class="animate__animated animate__fadeInUp">Greetings from Cicerone, where you can take in the sights without having to hustle. Skim our informative blogs to learn about various tourist destinations and the information you need.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slider2-01.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">The best method to spend a fortune anywhere is on <spam style="color:#d9232d">travel</spam></h2>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slider1-01.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Traveling improves our <spam style="color:#d9232d"> mental health </spam></h2>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

    <!-- Slide 4 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slider4-01.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Nature acknowledges our <spam style="color:#d9232d">presence</spam></h2>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

  <div class="carousel-container text-center mt-5 ">
            <div class="container">
              <h1 class="animate__animated animate__fadeInDown display-3 text-uppercase fw-bold">About<spam style="color:#d9232d"> Us</spam></h1>
            </div>
          </div>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Discover the world and find yourself through travel</h2>
            <h3>Cicerone give you not only 64 district in Bangladesh but also international travel experience </h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>Cicerone is the ultimate guide to travel, providing everything you need to plan your dream trip, explore different destinations, and make unforgettable memories. We offer a wide range of options for every budget and interest, as well as insider tips, recommended itineraries, and must-see landmarks. We are passionate about encouraging people to travel and explore the world.  </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Book your trip with full of enjoyment</li>
              <li><i class="ri-check-double-line"></i> Read our premium Blogs</li>
              <li><i class="ri-check-double-line"></i> Discover you in a new way with "CICERONE"</li>
            </ul>
            <p class="fst-italic">
              Let's go with Cicerone.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <div class="carousel-container text-center mt-5 mb-5">
            <div class="container">
              <h1 class="animate__animated animate__fadeInDown display-3 text-uppercase fw-bold">Our<spam style="color:#d9232d"> Clients</spam></h1>
            </div>
          </div>


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <div class="carousel-container text-center mt-5 ">
            <div class="container">
              <h1 class="animate__animated animate__fadeInDown display-3 text-uppercase fw-bold">Our<spam style="color:#d9232d"> Services</spam></h1>
            </div>
          </div>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">We safeguard your belongings safe</a></h4>
              <p>Our top priority is to keep your belongings safe and secure.
You can trust us to safeguard your valuable possessions with the utmost care.
Rest assured that we take every measure necessary to ensure the safety of your belongings.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#"> while travelling on a vacation, exhibit your to-do checklist with Cicerone </a></h4>
              <p>Make the most of your vacation by using Cicerone to exhibit your to-do checklist.
With Cicerone, you can easily keep track of all the activities and attractions you want to experience on your trip.
From sightseeing to trying local cuisine, let Cicerone help you plan the ultimate vacation itinerary.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Throughout our webpage, we emphasize the services of hotels and restaurants</a></h4>
              <p>Our webpage focuses on highlighting the various services offered by hotels and restaurants.
You will find comprehensive information about the hotels and restaurants featured on our webpage.
From accommodations to dining experiences, our webpage showcases the best of the hospitality industry.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#"> Cicerone's services let you travel whenever you want to </a></h4>
              <p>At Cicerone, we offer flexible travel services that cater to our customer's schedules.
Whether you prefer to travel during peak season or off-peak season, we can accommodate your travel plans.
With Cicerone, you have the freedom to travel whenever you want without any constraints              #Cicerone #Travelling #NatureReadsYourMind .</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">We appreciate daytime and evening tours</a></h4>
              <p>Whether you prefer daytime or evening tours, we have something to suit your preferences.
We value the importance of catering to different schedules and offer tours throughout the day and into the evening.
No matter the time of day, you can expect a memorable and enjoyable tour experience with us.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Anytime reservation, instant opportunity for cancellation</a></h4>
              <p>We offer anytime reservation services, allowing you to book your travel plans at your convenience.
In case of any unforeseen circumstances, we also provide an instant opportunity for cancellation.
With our flexible reservation and cancellation policy, you can book your travel plans with peace of mind</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->


    <div class="carousel-container text-center mt-5 ">
            <div class="container">
              <h1 class="animate__animated animate__fadeInDown display-3 text-uppercase fw-bold">Tour places of<spam style="color:#d9232d"> Cicerone</spam></h1>
            </div>
          </div>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Bangladesh</li>
              <li data-filter=".filter-app">South-West Bangladesh</li>
              <li data-filter=".filter-card">South-East Bangladesh</li>
              <li data-filter=".filter-web">North-East Bangladesh</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/kuakata-01.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kuakata</h4>
                <p>South-West Bangladesh</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/moheskhali-01.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Moheskhali</h4>
                <p>North-East Bangladesh</li>
            </ul></p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/sundorbans-01.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sundarbans</h4>
                <p>South-West Bangladesh</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/sajek.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sajek</h4>
                <p>South-East Bangladesh</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/saintmartin-01.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Saint martin</h4>
                <p>South-East Bangladesh</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>CICERONE</h3>
              <p>
                141 & 142, Love Road,<br>
                Tejgaon Industrial Area, Dhaka-1208<br><br>
                <strong>Phone:</strong> +8801684538887<br>
                <strong>Email:</strong> info.shahedkarim@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/zannatul.ferdous.18400?mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/s_ha_he_d/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Booking.php">Book you trip</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="blog.php">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info.shahedkarim@gmail.com">Mail us</a></li>
            
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>To info about new trip or new places, do subcribe us</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Cicerone</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
         Designed and Developed by Shahed Karim and Zannatul Ferdous Daliya</a>
      </div>
    </div>
  </footer><!-- End Footer -->

<!----------------up arrow--------------->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>