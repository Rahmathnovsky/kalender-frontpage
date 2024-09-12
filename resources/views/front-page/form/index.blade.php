<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KALENDER | Buat Akun</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/logo-kalender-main.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

    <!--
  Essential stylesheets
  =====================================-->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Jun 06 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="starter-page-page">
    @include('sweetalert::alert')

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

          <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/img/logo/logo-kalender-main.png" alt="" style="width: 70px;">
            <h1 class="sitename" style="color: #205299;">KALENDER</h1>
          </a>

          <nav id="navmenu" class="navmenu">
            <ul>
              <!-- <li><a href="#hero" class="active">Home<br></a></li> -->
              <a href="{{ route('home') }}" class="btn-getstarted">Back</a>
              <!-- <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Dropdown 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="#">Deep Dropdown 1</a></li>
                      <li><a href="#">Deep Dropdown 2</a></li>
                      <li><a href="#">Deep Dropdown 3</a></li>
                      <li><a href="#">Deep Dropdown 4</a></li>
                      <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Dropdown 2</a></li>
                  <li><a href="#">Dropdown 3</a></li>
                  <li><a href="#">Dropdown 4</a></li>
                </ul>
              </li>
              <li class="listing-dropdown"><a href="#"><span>Listing Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li>
                    <a href="#">Column 1 link 1</a>
                    <a href="#">Column 1 link 2</a>
                    <a href="#">Column 1 link 3</a>
                  </li>
                  <li>
                    <a href="#">Column 2 link 1</a>
                    <a href="#">Column 2 link 2</a>
                    <a href="#">Column 3 link 3</a>
                  </li>
                  <li>
                    <a href="#">Column 3 link 1</a>
                    <a href="#">Column 3 link 2</a>
                    <a href="#">Column 3 link 3</a>
                  </li>
                  <li>
                    <a href="#">Column 4 link 1</a>
                    <a href="#">Column 4 link 2</a>
                    <a href="#">Column 4 link 3</a>
                  </li>
                  <li>
                    <a href="#">Column 5 link 1</a>
                    <a href="#">Column 5 link 2</a>
                    <a href="#">Column 5 link 3</a>
                  </li>
                </ul>
              </li> -->
              <!-- <li><a href="#contact">Contact</a></li> -->
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

          <!-- <a class="btn-getstarted flex-md-shrink-0" data-bs-toggle="modal" data-bs-target="#enableOTP">Daftar</a> -->

        </div>
        </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}" style="color: #205299;">KALENDER</a></li>
            <li class="current" style="color: #F6CD1E">Halaman Pendaftaran</li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Page Title -->

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4 justify-content-center" style="margin-top: -124px;">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <div class="card">
              <div class="card-body">
                <!-- Logo -->
                <div class="app-brand mb-4 mt-2">
                  <a href="{{ route('home') }}" class="app-brand-link gap-2">
                    <center><span class="app-brand-text demo text-body fw-bold ms-1"><img src="assets/img/logo/logo-kalender-main.png" alt="" style="width: 90px;"></span></center>
                  </a>
                </div>
                <!-- /Logo -->
              <center><h4 class="mb-1 pt-2" style="color: #205299;">FORM PENDAFTARAN 🚀</h4>
                <p class="mb-4">Isi datanya dengan lengkap ya, kami perlu<br> mengenal diri mu dengan lebih baik.</p></center>

                <form id="formAuthentication" class="mb-3" action="{{ route('registration-form-submit') }}" method="POST">
                    @csrf
                  <div class="mb-3">
                    <label for="fullname" class="form-label">Nama Lengkap</label>
                    <input
                      type="text"
                      class="form-control"
                      id="fullname"
                      name="fullname"
                      placeholder="Enter your full name"
                      autofocus />
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="08***" />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="example@email" />
                  </div>
                  <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                      <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                    </div>
                  </div>

                  {{-- <div class="mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                      <label class="form-check-label" for="terms-conditions">
                        I agree to
                        <a href="javascript:void(0);">privacy policy & terms</a>
                      </label>
                    </div>
                  </div> --}}
                  <button class="btn btn-primary d-grid w-100" style="background-color: #205299;">Daftar</button>
                </form>

                <!-- <p class="text-center">
                  <span>Already have an account?</span>
                  <a href="auth-login-basic.html">
                    <span>Sign in instead</span>
                  </a>
                </p> -->

                <!-- <div class="divider my-4">
                  <div class="divider-text">or</div>
                </div>

                <div class="d-flex justify-content-center">
                  <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                    <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
                  </a>

                  <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                    <i class="tf-icons fa-brands fa-google fs-5"></i>
                  </a>

                  <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                    <i class="tf-icons fa-brands fa-twitter fs-5"></i>
                  </a>
                </div> -->
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/gif/dashboard.gif" class="img-fluid animated" alt="" style="width: 1000px;">
          </div> -->
        </div>
      </div>
    </section>
    <!-- /Hero Section -->

      <!-- <div class="container" data-aos="fade-up">
        <p>Use this page as a starter for your own custom pages.</p>
      </div> -->

    </section><!-- /Starter Section Section -->

  </main>

  <footer id="footer" class="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ route('home') }}" class="d-flex align-items-center">
            <span class="sitename" style="color: #F6CD1E;">KALENDER</span>
          </a>
          <div class="footer-contact pt-3">
            <p style="color: #205299;">Menara Rajawali Lt.10, Setiabudi,<br>
              Jakarta Selatan, DKI Jakarta, Indonesia.</p>
            <p style="color: #205299;"><strong style="color: #F6CD1E;">Phone:</strong> <span>+62 812 9999 5925</span></p>
            <p style="color: #205299;"><strong style="color: #F6CD1E;">Email:</strong> <span>recruitment@kalapatec.id</span></p>
            <p style="color: #205299;"><strong style="color: #F6CD1E;">Email:</strong> <span>bd.team@kalapatec.id</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 style="color: #F6CD1E;">Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#" style="color: #205299;">Privacy Policy</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#" style="color: #205299;">Terms & Conditions</a></li>
          </ul>
        </div>

        <!-- <div class="col-lg-2 col-md-3 footer-links">
          <h4 style="color: #4154f1;">Mini Games</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Discord</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Master Room</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Quiz</a></li>
          </ul>
        </div> -->

        <div class="col-lg-4 col-md-12">
          <h4 style="color: #F6CD1E;">Follow Us</h4>
          <p style="color: #205299;">KALENDER Merupakan program learning & development yang dikembangkan oleh PT. Kalapa Teknologi Putera. Untuk Informasi lebih lanjut langsung Follow dan Pantengin Social Media kita yaa!</p>
          <div class="social-links d-flex">
            <a href="https://www.instagram.com/kalapatec.id"><i class="bi bi-instagram"></i></a>
            <a href="https://facebook.com/kalapatec.id"><i class="bi bi-facebook"></i></a>
            <a href="https://www.linkedin.com/company/palapamitrasolusi"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright 2024</span> <strong class="px-1 sitename" style="color: #F6CD1E;">KALENDER</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Business by <a href="https://Kalapatec.id/" style="color: #205299;">KALAPA TECHNOLOGY</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
