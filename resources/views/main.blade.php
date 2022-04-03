<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="keywords" />
  <title>Hary | {{ $title }}</title>
  <link href="img/1901010046(2.).png" rel="icon" />
  <link href="img/1901010046(2.).png" rel="apple-touch-icon" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
  <link href="vendor/aos/aos.css" rel="stylesheet" />
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet" />
</head>
<body>

  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <h1 class="logo me-auto me-lg-0"><a href="{{ url('/') }}">{{ $nama }}</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{ ($title === "About") ? 'active' : '' }}" href="{{ url('/') }}">About</a></li>
          <li><a class="{{ ($title === "Education") ? 'active' : ''}}" href="{{ url('/education') }}">Education</a></li>
          <li><a class="{{ ($title === "Portfolio") ? 'active' : ''}}" href="{{ url('/portfolio') }}">Portfolio</a></li>
          <li><a class="{{ ($title === "Contact") ? 'active' : ''}}" href="{{ url('/contact') }}">Contact</a></li>
          <li><a class="{{ ($title === "Kartu") ? 'active' : ''}}" href="{{ url('/card') }}">Link</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <div class="header-social-links">
        <a href="https://twitter.com/bernacleboyy12?t=unfcVancym-E0O6DtUqLKg&s=08" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100009166721400" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/arikkmahayana/" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>

  </header>

  <!-- blade Layouting -->
  @yield('container')
  <!-- end blade -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="js/main.js"></script>
</body>
</html>