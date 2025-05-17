@extends('page.template')
@section('content')
    <!-- Banner Section Start -->
    <div id="rs-banner" class="rs-banner style8">
        <div class="container">
            <div class="banner-content">
                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                    Yayasan Negeri Kupu-Kupu Lestari Indonesia</div>
                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">
                    NEKTAR INDONESIA</h1>
                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                    <a class="readon yellow-btn" href="#">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Features Section start -->
    <div id="rs-features" class="rs-features style2">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-center-mode="false" data-mobile-device="1" data-ipad-device="2" data-ipad-device2="2"
                data-md-device="3">

                <!-- Item 1 -->
                <div class="rs-iconbox-area"
                    style="text-align:center; padding:20px; background:#fff#1c335f; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.08); display:flex; flex-direction:column; align-items:center; justify-content:center;">
                    <div class="icon-area"
                        style="width:100px; height:100px; display:flex; align-items:center; justify-content:center; margin-bottom:15px;">
                        <img src="{{ asset('educavo') }}/assets/images/features/style2/1.png" alt=""
                            style="max-width:100%; max-height:100%; object-fit:contain;">
                    </div>
                    <div class="text-area">
                        <h3 class="icon-title">Penyebarluasan informasi terkait kupu-kupu di media sosial</h3>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="rs-iconbox-area"
                    style="text-align:center; padding:20px; background:#ff#1c335ff; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.08); display:flex; flex-direction:column; align-items:center; justify-content:center;">
                    <div class="icon-area"
                        style="width:100px; height:100px; display:flex; align-items:center; justify-content:center; margin-bottom:15px;">
                        <img src="{{ asset('educavo') }}/assets/images/features/style2/2.png" alt=""
                            style="max-width:100%; max-height:100%; object-fit:contain;">
                    </div>
                    <div class="text-area">
                        <h3 class="icon-title">Ikut serta dalam pameran konservasi</h3>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="rs-iconbox-area"
                    style="text-align:center; padding:20px; background:#f#1c335fff; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.08); display:flex; flex-direction:column; align-items:center; justify-content:center;">
                    <div class="icon-area"
                        style="width:100px; height:100px; display:flex; align-items:center; justify-content:center; margin-bottom:15px;">
                        <img src="{{ asset('educavo') }}/assets/images/features/style2/3.png" alt=""
                            style="max-width:100%; max-height:100%; object-fit:contain;">
                    </div>
                    <div class="text-area">
                        <h3 class="icon-title">Gathering dan Education Camp</h3>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="rs-iconbox-area"
                    style="text-align:center; padding:20px; background:#f#1c335fff; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.08); display:flex; flex-direction:column; align-items:center; justify-content:center;">
                    <div class="icon-area"
                        style="width:100px; height:100px; display:flex; align-items:center; justify-content:center; margin-bottom:15px;">
                        <img src="{{ asset('educavo') }}/assets/images/features/style2/4.png" alt=""
                            style="max-width:100%; max-height:100%; object-fit:contain;">
                    </div>
                    <div class="text-area">
                        <h3 class="icon-title">Workshop atau seminar</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Features Section End -->

    {{-- <div class="rs-partner pb-100 md-pb-80">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="3"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false"
                data-md-device-dots="false">
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('educavo') }}/assets/images/partner/1.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('educavo') }}/assets/images/partner/2.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('educavo') }}/assets/images/partner/3.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('educavo') }}/assets/images/partner/4.png" alt=""></a>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- About Section Start -->
    <div class="rs-about style9 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 md-mb-40">
                    <div class="img-part js-tilt">
                        <img src="{{ asset('educavo') }}/assets/images/GambarHome/About.png" alt="images">
                    </div>
                </div>
                <div class="col-lg-6 pl-100 md-pl-15 col-md-12">
                    <div class="content">
                        <div class="sub-title mb-20">
                            Tentang Kami
                        </div>
                        <h2 class="sl-title mb-40 md-mb-20">Menjaga Kelestarian Ragam Kupu-kupu Indonesia</h2>
                        <p class="desc mb-50">
                            Yayasan Negeri Kupu-Kupu Lestari Indonesia (NEKTAR Indonesia) adalah sebuah
                            organisasi nirlaba yang bergerak di bidang konservasi dan penelitian kupu-kupu di
                            Indonesia. Organisasi ini berdiri secara resmi dan diakui secara legal melalui
                            Keputusan Menteri Hukum Republik Indonesia dengan nomor registrasi AHU-
                            0001809.AH.01.04.
                        </p>
                    </div>
                    <div class="btn-part">
                        <a class="readon yellow-btn" href="#">Selengkapnya</a>
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
                            <a href="#"><img src="{{ asset('educavo') }}/assets/images/categories/home9/1.jpg"
                                    alt=""></a>
                        </div>
                        <div class="image-content">
                            <div class="effect-icon">
                                <i class="fa fa-paperclip"></i>
                            </div>
                            <div class="title">
                                <a href="#">Undergraduate Programs</a>
                            </div>
                            <div class="description">
                                <p>Arts, business, health, science and more, begin your journey with a program
                                    educavo.</p>
                            </div>
                            <div class="button-bottom">
                                <div class="button-effect">
                                    <a href="#">Join Program</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-40">
                    <div class="categories-items">
                        <div class="images-part">
                            <a href="#"><img src="{{ asset('educavo') }}/assets/images/categories/home9/2.jpg"
                                    alt=""></a>
                        </div>
                        <div class="image-content">
                            <div class="effect-icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="title">
                                <a href="#">Graduate Programs</a>
                            </div>
                            <div class="description">
                                <p>Arts, business, health, science and more, begin your journey with a program
                                    educavo.</p>
                            </div>
                            <div class="button-bottom">
                                <div class="button-effect">
                                    <a href="#">Join Program</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories-items">
                        <div class="images-part">
                            <a href="#"><img src="{{ asset('educavo') }}/assets/images/categories/home9/3.jpg"
                                    alt=""></a>
                        </div>
                        <div class="image-content">
                            <div class="effect-icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="title">
                                <a href="#">Online Courses</a>
                            </div>
                            <div class="description">
                                <p>Arts, business, health, science and more, begin your journey with a program
                                    educavo.</p>
                            </div>
                            <div class="button-bottom">
                                <div class="button-effect">
                                    <a href="#">Join Program</a>
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
            <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
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
                                <a class="readon yellow-btn transparent3" href="#">Covid-19 Updates</a>
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
                        data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                        data-dots="true" data-nav="false" data-nav-speed="false" data-md-device="1"
                        data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false"
                        data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true"
                        data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true"
                        data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false">
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
                                <a href="#"><img src="{{ asset('educavo') }}/assets/images/blog/1.jpg"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-calendar-check-o"></i>August 28, 2020</li>
                                </ul>
                                <h3 class="title"><a href="#">Pandemic drives millions from Latin
                                        America’s</a></h3>
                                <p class="txt">We denounce with righteous indige nation and...</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp"
                        data-wow-delay="400ms" data-wow-duration="2000ms">
                        <div class="col-md-6">
                            <div class="image-part">
                                <a href="#"><img src="{{ asset('educavo') }}/assets/images/blog/2.jpg"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-calendar-check-o"></i>August 28, 2020</li>
                                </ul>
                                <h3 class="title"><a href="#">This is a great source of content for
                                        anyone…</a></h3>
                                <p class="txt">We denounce with righteous indige nation and...</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center no-gutter white-bg blog-item wow fadeInUp" data-wow-delay="500ms"
                        data-wow-duration="2000ms">
                        <div class="col-md-6">
                            <div class="image-part">
                                <a href="#"><img src="{{ asset('educavo') }}/assets/images/blog/3.jpg"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-calendar-check-o"></i>August 19, 2020</li>
                                </ul>
                                <h3 class="title"><a href="#">Shutdown of schools extended to Aug 31</a>
                                </h3>
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
                    <div class="events-short-top mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                        <div class="date-part">
                            <span class="month">June</span>
                            <div class="date">20</div>
                        </div>
                        <div class="content-part">
                            <div class="categorie">
                                <a href="#">Recipes</a>
                            </div>
                            <h3 class="title"><a href="#">Spicy Quince And Cranberry Chutney</a></h3>
                            <p class="txt">Educavo Events Description Lorem ipsum dolor sit amet,
                                consectetuer...</p>
                        </div>
                    </div>
                    <div class="events-short-top mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                        <div class="date-part">
                            <span class="month">June</span>
                            <div class="date">20</div>
                        </div>
                        <div class="content-part">
                            <div class="categorie">
                                <a href="#">Recipes</a>
                            </div>
                            <h3 class="title"><a href="#">Persimmon, Pomegranate, And Massaged Kale
                                    Salad</a></h3>
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
                                <a href="#">Recipes</a>
                            </div>
                            <h3 class="title"><a href="#">Essential Fall Fruits That Aren’t Apples</a></h3>
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
                                    <img src="{{ asset('educavo') }}/assets/images/newsletter2.png" alt="images">
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
@endsection
