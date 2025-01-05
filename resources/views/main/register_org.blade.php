<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>talentScope Sign Up</title>
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

    .form-floating>label {
        margin-left: 10px;
    }
  </style>
</head>
<body class="index-page">
    <x-main-navbar />
    <div class="hero-bg">
      </div>
    <main class="login">
       
        <!-- Hero Section -->
    <section id="hero" class="hero section p-0">
        <div class="hero-bg">
          <img src="{{ asset('template') }}/assets/img/hero-bg-light.webp" alt="">
        </div>




        <div class="container text-center">
            <div class="d-flex justify-content-center align-items-center vh-100">
                <div class="card w-75 h-75 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="row g-0 h-100">
                        <!-- Left Side: Image -->
                        {{-- <div class="col-md-6 h-100">
                            <div class="h-100 w-100">
                                <img src="{{ asset('template/assets/img/hero-bg-light.webp') }}" alt="Hero Image" 
                                     class="img-fluid rounded-start h-100 w-100" style="object-fit: cover;">
                            </div>
                        </div> --}}
                        
                        <!-- Right Side: Login Form -->
                        <div class="col-md-12 h-100 ">
                            <div class="card-body d-flex flex-column justify-content-center h-100">
                                <form method="POST" action="{{ route('talentScope.register_org_submit') }}" class="h-100 d-flex flex-column justify-content-center ">
                                    @csrf
                                    <div class="row ">
                                        <h3 class="text-center " style="color: black;">Sign up and start</h3>
                                        <h3 class="text-center mb-4" style="color: black;">improving</h3>
                                        {{-- Email --}}
                                        <div class="form-floating mb-2 col-md-6">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                                   id="floatingEmail" value="{{ old('email') }}" placeholder="Email" name="email" required autofocus>
                                            <label for="floatingEmail">Email</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- Username --}}
                                        <div class="form-floating mb-2 col-md-6">
                                            <input type="username" class="form-control @error('username') is-invalid @enderror" 
                                                   id="floatingUsername" value="{{ old('username') }}" placeholder="Username" name="username" required autofocus>
                                            <label for="floatingUsername">Username</label>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- Password --}}
                                        <div class="form-floating mb-2 col-md-6">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                                   id="floatingPassword" placeholder="Password" name="password" required>
                                            <label for="floatingPassword">Password</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- Confirm Pass --}}
                                        <div class="form-floating mb-2 col-md-6">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                                   id="floatingPassword" placeholder="Password" name="password_confirmation" required>
                                            <label for="floatingPassword">Confirm Password</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- Org Name --}}
                                        <div class="form-floating mb-2 col-md-12">
                                            <input type="text" class="form-control @error('password') is-invalid @enderror" 
                                                   id="org_name" placeholder="Organization Name" name="org_name" required>
                                            <label for="org_name">Organization Name</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- Org type --}}
                                        <div class="form-floating mb-2 col-md-6">
                                            <input type="text" class="form-control @error('password') is-invalid @enderror" 
                                                   id="floatingPassword"  name="type" required>
                                            <label for="floatingPassword">Organization Type</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- SSM Reg Number --}}
                                        <div class="form-floating mb-2 col-md-6">
                                            <input type="number" class="form-control @error('ssm') is-invalid @enderror" 
                                                   id="ssm" placeholder="Password" name="ssm" required>
                                            <label for="ssm">SSM Registration Number</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" id="submitlogin" 
                                                    class="btn btn-primary btn-block" style="background-color: #FFC75F">
                                                Sign Up
                                            </button>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <a href="#" id="register" style="color: #7f95a3;">Don't have an account?</a>
                                            |
                                            <a href="#" id="forgot-password" style="color: #7f95a3;">Forgot your password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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