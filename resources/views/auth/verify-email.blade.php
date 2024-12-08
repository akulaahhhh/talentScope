<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Email Verification</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('talentScope-img') }}/talentScope-mentol.svg" rel="icon">
  <link href="{{ asset('template') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('template') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('template') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('template') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('template') }}/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: QuickStart
  * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    #forgot-password:hover{
        color: #c95a00 !important;
    }
    #register:hover{
        color: #c95a00 !important;
    }

    #submitlogin:hover {
        background-color:rgb(38, 37, 56) !important;
    }
  </style>
</head>
<body class="index-page">
    <x-main-navbar />
    <div class="hero-bg">
      </div>
      <main>
        <section id="hero" class="hero section p-0">
            <div class="hero-bg">
                <img src="{{ asset('template') }}/assets/img/hero-bg-light.webp" alt="">
            </div>
    
            <!-- Alert Component Positioned at the Top Center -->
            <x-alert />
    
            <div class="container d-flex justify-content-center align-items-center vh-100">
                <div class="text-center">
                    <h1>Verify Your Email Address</h1>
                    <p>A verification link has been sent to your email address. Please check your inbox and click on the link to verify your email.</p>
    
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Resend Verification Email</button>
                    </form>
                </div>
            </div>
        </section><!-- /Hero Section -->
    </main>
    
    

    <x-main-footer/>
  

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Preloader -->
    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="{{ asset('template') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  
    <!-- Main JS File -->
    <script src="{{ asset('template') }}/assets/js/main.js"></script>
  
  </body>
  
  </html>