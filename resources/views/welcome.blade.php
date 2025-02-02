<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>GoLink</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  {{-- <link href="assets/img/favicon.png" rel="icon"> --}}
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">p
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}

  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/js/min.css')}}" rel="stylesheet">
  {{-- <link href="{{asset('assets/jquery/min.css')}}" rel="stylesheet"> --}}

  <link href="{{asset('assets/site/css/min.css')}}" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    
    .logo-image{
      max-height: none!important;
    margin-right: none!important;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
      <div>
		<img src="{{asset('assets/img/gallery/logo.png')}}" alt="" width="300px" class="img-fluid logo-image">
	  </div>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li> 
          <li><a href="{{ url('/auth/login') }}" class="btn btn-primary btn-sm btn-lg px-4 py-2 shadow rounded-pill" >Login</a></li>

          <li>
            <a href="{{ url('/studentForm') }}" class="btn btn-primary btn-lg px-4 py-2 shadow rounded-pill">
                <i class="bi bi-file-earmark-text"></i> Student Data Form
            </a>
        </li>
          </li>
         
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">
      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/hero-img.png" class=" img-fluid animated" alt="" ;>

          </div>

       
          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>GOLink</h1>
            <p>A WEB-BASED SYSTEM FOR GUIDANCE OFFICE ACCUMULATIVE RECORDS AND AUTOMATED PRINT MANAGEMENT AT ANDRES SORIANO COLLEGES OF BISLIG, INC</p>
            <div class="d-flex">

            </div>
          </div>

        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->





    



    <!-- About Section -->
    <section id="about" class="about section" >

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <h2>GOLink</h2>
            <p> is a user-friendly web system that optimizes accumulative record management and print automation, ensuring a more efficient workflow for the Guidance Office at Andres Soriano Colleges of Bislig, Inc.</p>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-file-earmark-text"></i> 
                  <h3>Record Management</h3>
                  <p>Organizes and maintains student records efficiently</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-printer"></i>
                  <h3>Print Automation</h3>
                  <p>Streamlines the printing process for documents.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-gear-wide-connected"></i>
                  <h3>Workflow Optimization</h3>
                  <p>Enhances productivity and task managemen</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-person-check"></i>
                  <h3>Guidance Efficiency –</h3>
                  <p>Supports the Guidance Office in handling cases effectively.</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
 
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{asset('assets/img/gallery/logo.png')}}" alt="" width="250px" class="img-fluid logo-image">
          </a>
          <div class="footer-contact pt-3">
            <p>Andres Soriano Colleges of Bislig, Inc</p>
            <p>Bislig city, Surigao del Sur</p>
           
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        

       

      

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">GoLink</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
  
        Designed by <a href="#">GoLink</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  
  {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> --}}
<script src={{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<script src={{asset('assets/vendor/php-email-form/validate.js')}}></script>
<script src={{asset('assets/vendor/aos/aos.js')}}></script>
<script src={{asset('assets/vendor/glightbox/js/glightbox.min.js')}}></script>
<script src={{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}></script>
<script src={{asset('assets/vendor/jquery/min.js')}}></script>
<script src={{asset('assets/vendor/swiper/swiper-bundle.min.js')}}></script>
<script src={{asset('assets/js/min.js')}}></script>
  



<script>
   $(document).ready(function () {
        $("#navigateButton").click(function () {
            window.location.href = "/studentForm"; // Redirect to the Laravel route
        });
    });
</script>









  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>