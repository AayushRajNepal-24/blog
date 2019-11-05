<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

    <title>{{ config('app.name', 'Laravel Vue Task App') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this theme -->
    <link href="landing-page/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="landing-page/css/freelancer.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/css/app.css') }}" rel="stylesheet">
</head>
<body id="page-top">

<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#">Dhaka Topi Network </a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded " href="landing-page/#contact">posts</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="landing-page/#about">About</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="landing-page/#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- Masthead -->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

        <img class="masthead-avatar mb-5" style="width:10%;border-radius:40px" src="landing-page/img/logo.svg" alt="">
        <!-- Masthead Avatar Image -->
        <img class="masthead-avatar mb-5" style="width:10%;border-radius:40px" src="landing-page/img/photo.jpg" alt="">

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">Aayush Raj Nepal</h1>
        <a href="{{url('aayush-raj-nepal')}}" style="color: white">Visit My Blog</a>
        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-light mb-0">Never late for latest</p>

    </div>
</header>
<footer class="footer text-center">
    <div class="container">
        <div class="row">

            <!-- Footer Location -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">Ranibari,Samakhusi
                    <br>Kathmandu,Nepal</p>
            </div>

            <!-- Footer Social Icons -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/DhakaTopi10/">
                    <i class="fab fa-fw fa-facebook-f"></i>
                </a>

            </div>
        </div>
    </div>
</footer>

<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; DhakatowepiNetwork 2019</small>
    </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="landing-page/#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>
</body>



