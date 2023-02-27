<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: index.php");
}
require 'db_connection.php';
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
          <li><a href="logout.php" class="getstarted">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

   <!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Admin Panel</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="admin_dashboard.php">Admin</a></li>
            <li><a href="update_booking.php">Update Booking</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/admin-01.png)">
          <div class="carousel-container">
            <div class="container">
              <h1 class="animate__animated animate__fadeInDown display-3 fw-bold text-uppercase"><span style="color:#fff">Update Bookings</span></h1>
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

  <div class="carousel-container text-center mt-5 mb-5">
            <div class="container">
              <h1 class="animate__animated animate__fadeInDown display-3 text-uppercase fw-bold"> Update <spam style="color:#d9232d"> Clients</spam> Booking</h1>
            </div>
          </div>



          

          <div class="container mt-5 mb-5">

<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Booking Update 
                    
                </h4>
            </div>
            <div class="card-body">

               
                        <form action="database_query.php" method="POST">

                          

                            <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" name="name" value="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" value="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Contact No</label>
                                <input type="text" name="phone" value=""  class="form-control">
                            </div>
                            <div class="mb-3">
                    <label for="person">Travelling with</label>

<select id="person" class="form-control" name="partners">
<option value="" > </option>
  <option value="solo" >Solo</option>
  <option value="OneGuy" >Duo</option>
  <option value="3people" >3 person</option>
  <option value="4people" >4 person</option>
</select>
                    </div>
                            <div class="mb-3">
                                <label>Date and Time</label>
                                <input type="datetime-local" name="date" value="" class="form-control">
                            </div>
                            <div class="mb-3">
                    <label for="person">Re-Select Destination</label>

<select id="person" class="form-control" name="destination">
<option value="" > </option>
  <option value="Rajshahi" >Rajshahi</option>
  <option value="SadaPathor" >Sada pathor</option>
  <option value="Ratargul" >Ratargul</option>
  <option value="Sylhet" >Sylhet</option>
  <option value="Jaflong" >Jaflong</option>
  <option value="SajekVally" >Sajek Vally</option>
  <option value="Ranggamati" >Ranggamati</option>
  <option value="Bandarbans" >Bandarbans</option>
  <option value="Sitakundo" >Sitakundo</option>
  <option value="CoxsBazar" >Coxs Bazar</option>
  <option value="SaintMartin" >Saint Martin</option>
</select>
                    </div>
                            <div class="mb-3">
                                <label>Submit your New Trip Code</label>
                                <input type="text" name="code" value="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_booking" class="btn btn-primary">
                                    Update Booking
                                </button>
                            </div>

                        </form>
                       
            </div>
        </div>
    </div>
</div>
</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



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