<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ asset('template') }}/assets/images/favicon.png">
    <title> Wedding Karunia & Putri - @yield('title')</title>
    <link href="{{ asset('template') }}/assets/css/themify-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="{{ asset('template') }}/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/flaticon.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/animate.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/owl.theme.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/slick.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/slick-theme.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/swiper.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/nice-select.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/owl.transitions.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/css/jquery-ui.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/sass/style.css" rel="stylesheet">
</head>

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="{{ asset('template') }}/assets/images/preloader.svg" alt="">
            </div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- Start header -->
    <header id="header">
        <div class="wpo-site-header wpo-header-style-1" id="sticky-header">
            <nav class="navigation navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-3 d-lg-none d-block">
                            <div class="mobail-menu">
                                <button type="button" class="navbar-toggler open-btn">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar first-angle"></span>
                                    <span class="icon-bar middle-angle"></span>
                                    <span class="icon-bar last-angle"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-6 d-lg-block d-none">
                        </div>
                        <div class="col-md-6 col-6 d-lg-none dl-block">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="index.html"><img src="{{ asset('template') }}/assets/images/logo.svg"
                                                                               alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-1 col-1">
                            <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                <button class="menu-close"><i class="ti-close"></i></button>
                                <ul class="nav navbar-nav mb-2 mb-lg-0">
                                    <li class="menu-item-has-children">
                                        <a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Main Home</a></li>
                                            <li><a href="index-2.html">Wedding Planner</a></li>
                                            <li><a class="active" href="index-3.html">Announcement Home</a></li>
                                            <li><a href="index-4.html">Wedding Home</a></li>
                                            <li><a href="index-5.html">Asian / Indian Wedding Announcement</a></li>
                                            <li><a href="index-6.html">Asian / Indian Wedding Planner</a></li>
                                            <li><a href="index-7.html">Muslim Wedding</a></li>
                                            <li><a href="index-8.html">Shop Home</a></li>
                                            <li><a href="index-9.html">Wedding Invitation</a></li>
                                        </ul>
                                    </li>
                                    <li class="active-border"><a href="">Story</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                    <li><a href="#rsvp">RSVP</a></li>
                                    <li><a href="#event">Event</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                </ul>

                            </div><!-- end of nav-collapse -->
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </div>
    </header>
    <!-- end of header -->

    @yield('content')

    <!-- wpo-site-footer start -->
    <div class="wpo-site-footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-image">
                        <a class="logo" href="{{ route('/') }}"><img src="{{ asset('template') }}/assets/images/logo.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copyright">
                        <p>© Copyright {{ date('Y')  }} | <a href="{{ route('/') }}">LoveLove</a> | All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-site-footer end -->
</div>
<!-- end of page-wrapper -->

<!-- All JavaScript files
================================================== -->
<script src="{{ asset('template') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('template') }}/assets/js/bootstrap.bundle.min.js"></script>
<!-- Plugins for this template -->
<script src="{{ asset('template') }}/assets/js/modernizr.custom.js"></script>
<script src="{{ asset('template') }}/assets/js/jquery.dlmenu.js"></script>
<script src="{{ asset('template') }}/assets/js/jquery-plugin-collection.js"></script>
<!-- Custom script for this template -->
<script src="{{ asset('template') }}/assets/js/script.js"></script>
</body>

</html>
