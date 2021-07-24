<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>TB-Bank</title>
  <link rel="icon" type="image/png" href="https://www.favicon-generator.org/download/2014-12-26/f49ccb7d53e169b2d03a1cccaef04b81.ico"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><a href="index.html">TB-Bank<i class="fa fa-bank" style="color:#fff"></i></a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link" href="transact.php">Transact</a></li>
          <li><a class="nav-link " href="transactionlog.php">Transaction-log</a></li>
          <li><a class="nav-link " href="accounts.php">Accounts</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <section id="home" class="d-flex flex-column justify-content-end align-items-center">
    <div id="homeCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>TB-Bank</span></h2>
          <p class="animate__animated animate__fadeInUp">Want to send money to an account? Transact now! </p>
          <a href="transact.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Click_here</a>
        </div>
      </div>

      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Transaction log</h2>
          <p class="animate__animated animate__fadeInUp">Check out the details of the previous transactions carried out by you </p>
          <a href="transactionlog.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Click_here</a>
        </div>
      </div>

      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Accounts</h2>
          <p class="animate__animated animate__fadeInUp">Details of the indivivuals who have an account in our bank. </p>
          <a href="accounts.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Details</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#homeCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#homeCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="home-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgb(80, 154, 197)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="#1958cc">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="rgb(59, 109, 184)">
      </g>
    </svg>

  </section>
  <main id="main">
    <br>
    <br>
    <section id="services" class="services">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>Here's what we provide..,</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-cash" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="transact.php">Transact</a></h4>
              <p class="description">Send money between accounts.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="transactionlog.php">Transaction-log</a></h4>
              <p class="description">Feel like you made a wrong transaction? check out this section to find which one you did!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="fa fa-users" style="color: #3fcdc7; padding: 10px;"></i></div>
              <h4 class="title"><a href="accounts.php">Accounts</a></h4>
              <p class="description">This section contains information of all the account holders within this bank.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <br>
  <br>
<br><br><br><br><br>
  <footer id="footer">
    <div class="container">
      <h3>TB-Bank</h3>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; All rights <strong><span>Reserved.</span></strong>
      </div>
      <div class="credits">
        Designed by Harsh</a>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>