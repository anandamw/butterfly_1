<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from keenitsolutions.com/products/html/educavo/index10.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 May 2025 12:29:48 GMT -->

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Educavo - Education HTML Template</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="{{ asset('educavo') }}/apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('educavo') }}/assets/images/fav.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/assets/css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/assets/css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/assets/css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/assets/css/off-canvas.css">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/assets/fonts/linea-fonts.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/assets/fonts/flaticon.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('educavo') }}/assets/css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('educavo') }}/assets/css/responsive.css">
    <!--[if lt IE 9]>
            <script src="{{ asset('educavo') }}/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="{{ asset('educavo') }}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="defult-home">

    <!--Preloader area start here-->
    <div id="loader" class="loader orange-color">
        <div class="loader-container">
            <div class='loader-icon'>
                <img src="{{ asset('educavo') }}/assets/images/pre-logo1.png" alt="">
            </div>
        </div>
    </div>
    <!--Preloader area End here-->

    <!-- Main content Start -->
    <div class="main-content">
        <!--Full width header Start-->
        <div class="full-width-header home8-style4 home9">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Menu Start -->
                <!-- Topbar Area Start -->
                <div class="topbar-area home9-topbar">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-7">
                                <ul class="topbar-contact">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a
                                            href="{{ asset('educavo') }}/mailto:support@rstheme.com">support@rstheme.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-location"></i>
                                        374 William S Canning Blvd, MA 2721, USA
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5 text-right">
                                <ul class="topbar-right">
                                    <li class="login-register">
                                        <i class="fa fa-sign-in"></i>
                                        <a href="{{ asset('educavo') }}/login.html">Login</a>/<a
                                            href="{{ asset('educavo') }}/register.html">Register</a>
                                    </li>
                                    <li class="btn-part">
                                        <a class="apply-btn" href="{{ asset('educavo') }}/#">Apply Now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-2">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part">
                                        <a href="{{ asset('educavo') }}/index.html">
                                            <img class="normal-logo"
                                                src="{{ asset('educavo') }}/assets/images/logo-yellow.png"
                                                alt="">
                                            <img class="sticky-logo"
                                                src="{{ asset('educavo') }}/assets/images/logo-yellow2.png"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @include('page.layouts.navigasi')
                            <div class="col-lg-2 text-right">
                                <div class="expand-btn-inner">
                                    <ul>

                                        <li>
                                            <a class="hidden-xs rs-search" data-target=".search-modal"
                                                data-toggle="modal" href="{{ asset('educavo') }}/#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                        <li class="user-icon cart-inner no-border mini-cart-active">
                                            <a href="{{ asset('educavo') }}/#"><i class="fa fa-shopping-bag"></i></a>
                                            <div class="woocommerce-mini-cart text-left">
                                                <div class="cart-bottom-part">
                                                    <ul class="cart-icon-product-list">
                                                        <li class="display-flex">
                                                            <div class="icon-cart">
                                                                <a href="{{ asset('educavo') }}/#"><i
                                                                        class="fa fa-times"></i></a>
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="{{ asset('educavo') }}/cart.html">Law
                                                                    Book</a><br>
                                                                <span class="quantity">1 × $30.00</span>
                                                            </div>
                                                            <div class="product-image">
                                                                <a href="{{ asset('educavo') }}/cart.html"><img
                                                                        src="assets/images/shop/1.jpg"
                                                                        alt="Product Image"></a>
                                                            </div>
                                                        </li>
                                                        <li class="display-flex">
                                                            <div class="icon-cart">
                                                                <a href="{{ asset('educavo') }}/#"><i
                                                                        class="fa fa-times"></i></a>
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="{{ asset('educavo') }}/cart.html">Spirit
                                                                    Level</a><br>
                                                                <span class="quantity">1 × $30.00</span>
                                                            </div>
                                                            <div class="product-image">
                                                                <a href="{{ asset('educavo') }}/cart.html"><img
                                                                        src="assets/images/shop/2.jpg"
                                                                        alt="Product Image"></a>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                    <div class="total-price text-center">
                                                        <span class="subtotal">Subtotal:</span>
                                                        <span class="current-price">$85.00</span>
                                                    </div>

                                                    <div class="cart-btn text-center">
                                                        <a class="crt-btn btn1"
                                                            href="{{ asset('educavo') }}/cart.html">View Cart</a>
                                                        <a class="crt-btn btn2"
                                                            href="{{ asset('educavo') }}/checkout.html">Check Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <a id="nav-expander" class="nav-expander style6">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <div id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-logo">
                        <a href="{{ asset('educavo') }}/index.html"><img
                                src="{{ asset('educavo') }}assets/images/logo-yellow2.png" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo by
                            the charms of pleasure of the moment data com so blinded by desire.</p>
                    </div>
                    <div class="offcanvas-gallery">
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('educavo') }}/assets/images/gallery/1.jpg"><img
                                    src="assets/images/gallery/1.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('educavo') }}/assets/images/gallery/2.jpg"><img
                                    src="assets/images/gallery/2.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('educavo') }}/assets/images/gallery/3.jpg"><img
                                    src="assets/images/gallery/3.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('educavo') }}/assets/images/gallery/4.jpg"><img
                                    src="assets/images/gallery/4.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('educavo') }}/assets/images/gallery/5.jpg"><img
                                    src="assets/images/gallery/5.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ asset('educavo') }}/assets/images/gallery/6.jpg"><img
                                    src="assets/images/gallery/6.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="map-img">
                        <img src="{{ asset('educavo') }}/assets/images/map.jpg" alt="">
                    </div>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="{{ asset('educavo') }}/#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ asset('educavo') }}/#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ asset('educavo') }}/#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="{{ asset('educavo') }}/#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

        <!-- Banner Section Start -->
        <div id="rs-banner" class="rs-banner style8">
            <div class="container">
                <div class="banner-content">
                    <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                        World Leading University</div>
                    <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Educavo
                        University In Canada</h1>
                    <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                        <a class="readon yellow-btn" href="{{ asset('educavo') }}/#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!-- Features Section start -->
        <div id="rs-features" class="rs-features style2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="rs-iconbox-area">
                            <div class="icon-area">
                                <img src="{{ asset('educavo') }}/assets/images/features/style2/1.png" alt="">
                            </div>
                            <div class="text-area">
                                <h3 class="icon-title">Future Students</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="rs-iconbox-area">
                            <div class="icon-area">
                                <img src="{{ asset('educavo') }}/assets/images/features/style2/2.png" alt="">
                            </div>
                            <div class="text-area">
                                <h3 class="icon-title">World Students</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-mb-30">
                        <div class="rs-iconbox-area">
                            <div class="icon-area">
                                <img src="{{ asset('educavo') }}/assets/images/features/style2/3.png" alt="">
                            </div>
                            <div class="text-area">
                                <h3 class="icon-title">Current Students</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-iconbox-area">
                            <div class="icon-area">
                                <img src="{{ asset('educavo') }}/assets/images/features/style2/4.png" alt="">
                            </div>
                            <div class="text-area">
                                <h3 class="icon-title">Alumni & Donors</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Section End -->

        <!-- About Section Start -->
        <div class="rs-about style9 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 md-mb-40">
                        <div class="img-part js-tilt">
                            <img src="{{ asset('educavo') }}/assets/images/about/home9/about.png" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-100 md-pl-15 col-md-12">
                        <div class="content">
                            <div class="sub-title mb-20">
                                About Us
                            </div>
                            <h2 class="sl-title mb-40 md-mb-20">We are leading discovery and innovation since 1905</h2>
                            <p class="desc mb-50">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, eius to mod tempor incidi dunt
                                ut labore et dolore magna aliqua. Ut enims ad minim veniam.Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, eius to mod tempor incidi dunt ut labore et dolore magna
                                aliqua. Ut enims ad minim veniam.Lorem sum dolor sit amet.
                            </p>
                        </div>
                        <div class="btn-part">
                            <a class="readon yellow-btn" href="{{ asset('educavo') }}/#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Categories Section Start -->
        <div id="rs-categories" class="rs-categories home9-style event-bg pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title3 text-center mb-45">
                    <div class="sub-title yellow-color">Choose Your Path</div>
                    <h2 class="title black-color">Study With Us</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 md-mb-40">
                        <div class="categories-items">
                            <div class="images-part">
                                <a href="{{ asset('educavo') }}/#"><img
                                        src="{{ asset('educavo') }}assets/images/categories/home9/1.jpg"
                                        alt=""></a>
                            </div>
                            <div class="image-content">
                                <div class="effect-icon">
                                    <i class="fa fa-paperclip"></i>
                                </div>
                                <div class="title">
                                    <a href="{{ asset('educavo') }}/#">Undergraduate Programs</a>
                                </div>
                                <div class="description">
                                    <p>Arts, business, health, science and more, begin your journey with a program
                                        educavo.</p>
                                </div>
                                <div class="button-bottom">
                                    <div class="button-effect">
                                        <a href="{{ asset('educavo') }}/#">Join Program</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mb-40">
                        <div class="categories-items">
                            <div class="images-part">
                                <a href="{{ asset('educavo') }}/#"><img
                                        src="{{ asset('educavo') }}assets/images/categories/home9/2.jpg"
                                        alt=""></a>
                            </div>
                            <div class="image-content">
                                <div class="effect-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="title">
                                    <a href="{{ asset('educavo') }}/#">Graduate Programs</a>
                                </div>
                                <div class="description">
                                    <p>Arts, business, health, science and more, begin your journey with a program
                                        educavo.</p>
                                </div>
                                <div class="button-bottom">
                                    <div class="button-effect">
                                        <a href="{{ asset('educavo') }}/#">Join Program</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories-items">
                            <div class="images-part">
                                <a href="{{ asset('educavo') }}/#"><img
                                        src="{{ asset('educavo') }}assets/images/categories/home9/3.jpg"
                                        alt=""></a>
                            </div>
                            <div class="image-content">
                                <div class="effect-icon">
                                    <i class="fa fa-laptop"></i>
                                </div>
                                <div class="title">
                                    <a href="{{ asset('educavo') }}/#">Online Courses</a>
                                </div>
                                <div class="description">
                                    <p>Arts, business, health, science and more, begin your journey with a program
                                        educavo.</p>
                                </div>
                                <div class="button-bottom">
                                    <div class="button-effect">
                                        <a href="{{ asset('educavo') }}/#">Join Program</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Section End -->

        <!-- Video Section Start -->
        <div class="rs-video-home9">
            <div class="img-part media-icon yellow-color">
                <a class="popup-videos" href="{{ asset('educavo') }}/https://www.youtube.com/watch?v=atMUy_bPoQI">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
        <!-- Video Section Start -->

        <!-- CTA Section Start -->
        <div class="rs-cta home9-style">
            <div class="partition-bg-wrap">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-6"></div>
                        <div class="col-lg-6 pl-90 md-pl-15">
                            <div class="sec-title3 mb-40">
                                <div class="sub-title big">Campus Safety</div>
                                <h2 class="title white-color pr-70">COVID-19 information and updates</h2>
                                <div class="desc white-color mb-40">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, eius to mod tempor incidi
                                    dunt ut labore et dolore magna aliqua. Ut enims ad minim veniam.Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit, eius to mod tempor incidi dunt ut labore et
                                    dolore magna aliqua. Ut enims ad minim veniam.Lorem sum dolor sit amet.
                                </div>
                                <div class="btn-part">
                                    <a class="readon yellow-btn transparent3"
                                        href="{{ asset('educavo') }}/#">Covid-19 Updates</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Section End -->


        <!-- Testimonial Section Start -->
        <div class="rs-testimonial home9-style pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 sm-mb-40">
                        <div class="image-part js-tilt">
                            <img src="{{ asset('educavo') }}/assets/images/testimonial/style9/1.png" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-65 md-pl-15 col-md-6">
                        <div class="img-part mb-30">
                            <img src="{{ asset('educavo') }}/assets/images/testimonial/style9/2.png" alt="images">
                        </div>
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30"
                            data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000"
                            data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false"
                            data-md-device="1" data-md-device-nav="false" data-md-device-dots="true"
                            data-center-mode="false" data-ipad-device2="1" data-ipad-device-nav2="false"
                            data-ipad-device-dots2="true" data-ipad-device="1" data-ipad-device-nav="false"
                            data-ipad-device-dots="true" data-mobile-device="1" data-mobile-device-nav="false"
                            data-mobile-device-dots="false">
                            <div class="testi-item">
                                <div class="item-content">
                                    <p>Education is the passport to the future for tomorrow belongs to those who pre
                                        pare for it today. Sed ut perspiciatis unde omnis iste natus error sit vo
                                        luptatem. Education is the passport to the future for tomorrow belongs</p>
                                    <div class="testi-information">
                                        <div class="name">Mahadi Mansura</div>
                                        <span class="designation"> CSE Student</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->

        <!-- Blog Section Start -->
        <div id="rs-blog" class="rs-blog home9-style event2-bg pt-94 pb-100 md-pt-64 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 pr-75 md-pr-15 md-mb-50">
                        <div class="sec-title3 mb-50 md-mb-30">
                            <div class="sub-title yellow-color">News</div>
                            <h2 class="title black-color">Latest News</h2>
                        </div>
                        <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp"
                            data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="col-md-6">
                                <div class="image-part">
                                    <a href="{{ asset('educavo') }}/#"><img
                                            src="{{ asset('educavo') }}assets/images/blog/1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-calendar-check-o"></i>August 28, 2020</li>
                                    </ul>
                                    <h3 class="title"><a href="{{ asset('educavo') }}/#">Pandemic drives millions
                                            from Latin America’s</a></h3>
                                    <p class="txt">We denounce with righteous indige nation and...</p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp"
                            data-wow-delay="400ms" data-wow-duration="2000ms">
                            <div class="col-md-6">
                                <div class="image-part">
                                    <a href="{{ asset('educavo') }}/#"><img
                                            src="{{ asset('educavo') }}assets/images/blog/2.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-calendar-check-o"></i>August 28, 2020</li>
                                    </ul>
                                    <h3 class="title"><a href="{{ asset('educavo') }}/#">This is a great source of
                                            content for anyone…</a></h3>
                                    <p class="txt">We denounce with righteous indige nation and...</p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center no-gutter white-bg blog-item wow fadeInUp"
                            data-wow-delay="500ms" data-wow-duration="2000ms">
                            <div class="col-md-6">
                                <div class="image-part">
                                    <a href="{{ asset('educavo') }}/#"><img
                                            src="{{ asset('educavo') }}assets/images/blog/3.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-calendar-check-o"></i>August 19, 2020</li>
                                    </ul>
                                    <h3 class="title"><a href="{{ asset('educavo') }}/#">Shutdown of schools
                                            extended to Aug 31</a></h3>
                                    <p class="txt">We denounce with righteous indige nation and...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 lg-pl-0">
                        <div class="sec-title3 mb-50 md-mb-30">
                            <div class="sub-title yellow-color">Events</div>
                            <h2 class="title black-color">Latest Events</h2>
                        </div>
                        <div class="events-short-top mb-30 wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration="2000ms">
                            <div class="date-part">
                                <span class="month">June</span>
                                <div class="date">20</div>
                            </div>
                            <div class="content-part">
                                <div class="categorie">
                                    <a href="{{ asset('educavo') }}/#">Recipes</a>
                                </div>
                                <h3 class="title"><a href="{{ asset('educavo') }}/#">Spicy Quince And Cranberry
                                        Chutney</a></h3>
                                <p class="txt">Educavo Events Description Lorem ipsum dolor sit amet,
                                    consectetuer...</p>
                            </div>
                        </div>
                        <div class="events-short-top mb-30 wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration="2000ms">
                            <div class="date-part">
                                <span class="month">June</span>
                                <div class="date">20</div>
                            </div>
                            <div class="content-part">
                                <div class="categorie">
                                    <a href="{{ asset('educavo') }}/#">Recipes</a>
                                </div>
                                <h3 class="title"><a href="{{ asset('educavo') }}/#">Persimmon, Pomegranate, And
                                        Massaged Kale Salad</a></h3>
                                <p class="txt">Educavo Events Description Lorem ipsum dolor sit amet,
                                    consectetuer...</p>
                            </div>
                        </div>
                        <div class="events-short-top wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <div class="date-part">
                                <span class="month">June</span>
                                <div class="date">20</div>
                            </div>
                            <div class="content-part">
                                <div class="categorie">
                                    <a href="{{ asset('educavo') }}/#">Recipes</a>
                                </div>
                                <h3 class="title"><a href="{{ asset('educavo') }}/#">Essential Fall Fruits That
                                        Aren’t Apples</a></h3>
                                <p class="txt">Educavo Events Description Lorem ipsum dolor sit amet,
                                    consectetuer...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Newsletter section start -->
        <div class="rs-newsletter style1 event2-bg yellow-color mb--90 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <div class="content-part">
                                <div class="sec-title">
                                    <div class="title-icon md-mb-15">
                                        <img src="{{ asset('educavo') }}/assets/images/newsletter2.png"
                                            alt="images">
                                    </div>
                                    <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <form class="newsletter-form">
                                <input type="email" name="email" placeholder="Enter Your Email" required="">
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter section end -->

    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer home9-style">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                        <h3 class="widget-title">About</h3>
                        <div class="textwidget white-color pr-60 md-pr-15">
                            <p>We denounce with righteous indi gnation and dislike men who are so beguiled and
                                demoralized by the charms of pleasure of your moment, so blinded by desire those who
                                fail weakness.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                        <h3 class="widget-title">Address</h3>
                        <ul class="address-widget">
                            <li>
                                <i class="flaticon-location"></i>
                                <div class="desc">374 William S Canning Blvd, River MA 2721, USA</div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                    <a href="{{ asset('educavo') }}/tel:(+880)155-69569">(+880)155-69569</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="desc">
                                    <a
                                        href="{{ asset('educavo') }}/mailto:support@rstheme.com">support@rstheme.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                        <h3 class="widget-title">Courses</h3>
                        <ul class="site-map">
                            <li><a href="{{ asset('educavo') }}/#">Courses</a></li>
                            <li><a href="{{ asset('educavo') }}/#">Course Two</a></li>
                            <li><a href="{{ asset('educavo') }}/#">Single Course</a></li>
                            <li><a href="{{ asset('educavo') }}/#">Profile</a></li>
                            <li><a href="{{ asset('educavo') }}/#">Login/Register</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                        <h3 class="widget-title">Recent Posts</h3>
                        <div class="recent-post mb-20">
                            <div class="post-img">
                                <img src="{{ asset('educavo') }}/assets/images/footer/1.jpg" alt="">
                            </div>
                            <div class="post-item">
                                <div class="post-desc">
                                    <a href="{{ asset('educavo') }}/#">University while the lovely valley team
                                        work</a>
                                </div>
                                <span class="post-date">
                                    <i class="fa fa-calendar"></i>
                                    September 20, 2020
                                </span>
                            </div>
                        </div>
                        <div class="recent-post mb-20 md-pb-0">
                            <div class="post-img">
                                <img src="{{ asset('educavo') }}/assets/images/footer/2.jpg" alt="">
                            </div>
                            <div class="post-item">
                                <div class="post-desc">
                                    <a href="{{ asset('educavo') }}/#">High school program starting soon 2021</a>
                                </div>
                                <span class="post-date">
                                    <i class="fa fa-calendar-check-o"></i>
                                    September 14, 2020
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-4 md-mb-20">
                        <div class="footer-logo md-text-center">
                            <a href="{{ asset('educavo') }}/index.html"><img
                                    src="{{ asset('educavo') }}assets/images/logo-yellow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mb-20">
                        <div class="copyright text-center md-text-left">
                            <p>&copy; 2020 All Rights Reserved. Developed By <a
                                    href="{{ asset('educavo') }}/http://rstheme.com/">RSTheme</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-right md-text-left">
                        <ul class="footer-social">
                            <li><a href="{{ asset('educavo') }}/#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ asset('educavo') }}/#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ asset('educavo') }}/#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ asset('educavo') }}/#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="{{ asset('educavo') }}/#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="yellow-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="{{ asset('educavo') }}/assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('educavo') }}/assets/js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('educavo') }}/assets/js/bootstrap.min.js"></script>
    <!-- Menu js -->
    <script src="{{ asset('educavo') }}/assets/js/rsmenu-main.js"></script>
    <!-- op nav js -->
    <script src="{{ asset('educavo') }}/assets/js/jquery.nav.js"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('educavo') }}/assets/js/owl.carousel.min.js"></script>
    <!-- Slick js -->
    <script src="{{ asset('educavo') }}/assets/js/slick.min.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('educavo') }}/assets/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="{{ asset('educavo') }}/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- wow js -->
    <script src="{{ asset('educavo') }}/assets/js/wow.min.js"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('educavo') }}/assets/js/skill.bars.jquery.js"></script>
    <script src="{{ asset('educavo') }}/assets/js/jquery.counterup.min.js"></script>
    <!-- counter top js -->
    <script src="{{ asset('educavo') }}/assets/js/waypoints.min.js"></script>
    <!-- video js -->
    <script src="{{ asset('educavo') }}/assets/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('educavo') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- tilt js -->
    <script src="{{ asset('educavo') }}/assets/js/tilt.jquery.min.js"></script>
    <!-- plugins js -->
    <script src="{{ asset('educavo') }}/assets/js/plugins.js"></script>
    <!-- contact form js -->
    <script src="{{ asset('educavo') }}/assets/js/contact.form.js"></script>
    <!-- main js -->
    <script src="{{ asset('educavo') }}/assets/js/main.js"></script>
</body>

<!-- Mirrored from keenitsolutions.com/products/html/educavo/index10.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 May 2025 12:29:52 GMT -->

</html>
