<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - QuickStart Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('template') }}/assets/img/favicon.png" rel="icon">
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

    #submitlogin:hover {
        background-color:rgb(38, 37, 56) !important;
    }
  </style>
</head>
<body class="index-page">
    <x-main-navbar />
    
    <main class="login">
        <section class="dark-background d-flex justify-content-center align-items-center vh-100" >
            <div class="card w-100" style="max-width: 500px;">
                <div class="card-body">
                    <h3 class="text-center mb-4" style="color: black" >Login</h3>
                    <form method="POST" action="{{ route('talentScope.login') }}">
                        @csrf
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingUsername" value="{{ old('username') }}" placeholder="Username" name="username" required autofocus>
                                <label for="floatingUsername">Username</label>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"  id="floatingPassword" placeholder="Password" name="password" required>
                                <label for="floatingPassword">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" id="submitlogin" style="background-color:rgb(108, 105, 209)" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <div class="mt-3 text-center">
                            <a href="#"  id="forgot-password" style="color: #7f95a3;">Dont have an account?</a>
                            |
                            <a href="#"  id="forgot-password" style="color: #7f95a3;">Forgot your password?</a>

                        </div>
                    </form>
                </div>
            </div>
        </section>
        
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