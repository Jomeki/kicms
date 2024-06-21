<!DOCTYPE html>
<html lang="sw">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KICMS - Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
{{--  <link href="{{asset('/frontend/assets/img/favicon.png')}}" rel="icon">--}}
  <link href="{{asset('/frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('/frontend/assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{url('/')}}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">KICMS</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <!-- <li><a href="#hero" class="active">Home<br></a></li> -->
          <!-- <li><a href="#about">About</a></li> -->
          <!-- <li><a href="#services">Services</a></li> -->
          <!-- <li><a href="#portfolio">Gallery</a></li> -->
          <!-- <li><a href="#team">Team</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>/
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
</li> -->
          <!-- <li><a href="#contact">Contact</a></li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ url('/admin') }}">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{asset('/frontend/assets/img/hero-bg-abstract.jpg')}}" alt="" data-aos="fade-in" class="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-out">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Welcome to Kisoka Clan Management System</h1>
            <p>Software solution designed to manage and assist in the operations of the Kisoka Clan, features include</p>
          </div>
        </div>
        <!-- <div class="text-center" data-aos="zoom-out" data-aos-delay="100"> -->
          <!-- <a href="#about" class="btn-get-started">Get Started</a></div> -->

        <div class="row gy-4 mt-5">
          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar-event"></i></div>
              <h4 class="title"><a href="">Clan Events Management</a></h4>
              <p class="description">The Clan Event Management feature of the Kisoka Clan Management System (KICMS) is designed to streamline the organization, coordination, and communication of clan events. This feature encompasses various functionalities to ensure efficient event management and active participation from clan members. </p>
            </div>
          </div><!--End Icon Box -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-cash"></i></div>
              <h4 class="title"><a href="">Clan Contributions Management</a></h4>
              <p class="description">The Clan Contribution Management feature of the Kisoka Clan Management System (KICMS) is designed to facilitate the efficient tracking, management, and reporting of contributions made by clan members. This feature is essential for ensuring transparency and accountability within the clan, especially regarding financial matters related to events and projects.</p>
            </div>
          </div><!--End Icon Box -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-file-earmark-text"></i></div>
              <h4 class="title"><a href="">Clan Projects Management</a></h4>
              <p class="description">The Clan Projects Management feature of the Kisoka Clan Management System (KICMS) is designed to facilitate the planning, tracking, and reporting of projects undertaken by the clan. This feature allows authorized users to efficiently manage various aspects of clan projects, ensuring transparency and accountability.</p>
            </div>
          </div><!--End Icon Box -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-people"></i></div>
              <h4 class="title"><a href="">Clan Member Data Management</a></h4>
              <p class="description">The Clan Member Details Management feature is a critical component of the Kisoka Clan Management System (KICMS). It facilitates the efficient handling of member information, ensuring that all clan members' details are accurately recorded, easily accessible, and updatable. This feature is designed to enhance the administrative capabilities of the clan's leadership and provide members with a personalized experience.</p>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>

    </section>
  </main>

{{--  <div class="container copyright text-center my-2">--}}
{{--      <p>© <span>Copyright</span> <strong class="px-1 sitename">OnePage</strong> <span>All Rights Reserved</span></p>--}}
{{--      <div class="credits">--}}
{{--          Designed and Developed by <a href="https://www.linkedin.com/in/joackim-kisoka-474692254/">Joachim Kisoka</a>--}}
{{--      </div>--}}
{{--  </div>--}}

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('/frontend/assets/js/main.js')}}"></script>

</body>

</html>
