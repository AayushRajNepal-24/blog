<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{config('app.blog_name')}}</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="blog,aayush,aayush nepal,aayushrajnepal,dhakatopi network">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{url('foodblog/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{url('foodblog/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{url('foodblog/css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{url('foodblog/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{url('foodblog/css/style.css')}}"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="header-social">
                <a href="https://www.facebook.com/profile.php?id=100017589585304"><i class="fa fa-facebook"></i></a>
            </div>
            <h4 style="color: white">Blog made with <i class="fa fa-heart"></i> by Aayush Raj Nepal</h4>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <a href="index.html" class="site-logo">
                <h2>{{config('app.blog_name')}}</h2>
{{--                <img src="{{url('images/logo.png')}}" alt="">--}}
            </a>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <ul class="main-menu">
                <li><a href="{{url('aayush-raj-nepal')}}">Home</a></li>
                <li><a href="{{url('contact')}}">Contact</a></li>
            </ul>
        </div>
    </div>
</header>
<!-- Header section end -->



@yield('content')


<!-- Recipes section -->


{{--<!-- Review section end -->--}}
{{--<section class="review-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">--}}
{{--                <div class="review-item">--}}
{{--                    <div class="review-thumb set-bg" data-setbg="img/thumb/11.jpg">--}}
{{--                        <div class="review-date">--}}
{{--                            <span>May 04, 2018</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="review-text">--}}
{{--                        <span>March 14, 2018</span>--}}
{{--                        <h6>Feta Cheese Burgers</h6>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star is-fade"></i>--}}
{{--                        </div>--}}
{{--                        <div class="author-meta">--}}
{{--                            <div class="author-pic set-bg" data-setbg="img/author.jpg"></div>--}}
{{--                            <p>By Janice Smith</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">--}}
{{--                <div class="review-item">--}}
{{--                    <div class="review-thumb set-bg" data-setbg="img/thumb/12.jpg">--}}
{{--                        <div class="review-date">--}}
{{--                            <span>May 04, 2018</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="review-text">--}}
{{--                        <span>March 14, 2018</span>--}}
{{--                        <h6>Mozarella Pasta</h6>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star"></i>--}}
{{--                            <i class="fa fa-star is-fade"></i>--}}
{{--                        </div>--}}
{{--                        <div class="author-meta">--}}
{{--                            <div class="author-pic set-bg" data-setbg="img/author.jpg"></div>--}}
{{--                            <p>By Janice Smith</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- Review section end -->--}}


<!-- Footer section  -->
<footer class="footer-section set-bg" data-setbg="{{url("app_image/footer_photo-i.jpg")}}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-lg-right">
                <p class="copyright">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved |DhakaTopiNetwork</a>

                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="{{url('foodblog/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('foodblog/js/owl.carousel.min.js')}}"></script>
<script src="{{url('foodblog/js/main.js')}}"></script>
</body>
</html>