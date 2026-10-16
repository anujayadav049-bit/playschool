<!DOCTYPE html>
<html lang="en">
<head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="modinatheme">
        <meta name="description" content="Play School">
        <!-- ======== Page title ============ -->
        <title>Play School</title>
        <!--<< Favicon >>-->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!--<< Font Awesome.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <!--<< Odometer.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
        <!--<< Icomon.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/icomon.css') }}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  

    </head>
    <body>

       <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="P" class="letters-loading">P</span>
                    <span data-text-preloader="L" class="letters-loading">L</span>
                    <span data-text-preloader="A" class="letters-loading">A</span>
                    <span data-text-preloader="Y" class="letters-loading">Y</span>
                    <span data-text-preloader="S" class="letters-loading">S</span>
                    <span data-text-preloader="C" class="letters-loading">C</span>
                    <span data-text-preloader="H" class="letters-loading">H</span>
                    <span data-text-preloader="O" class="letters-loading">O</span>
                    <span data-text-preloader="O" class="letters-loading">O</span>
                    <span data-text-preloader="L" class="letters-loading">L</span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left"><div class="bg"></div></div>
                    <div class="col-3 loader-section section-left"><div class="bg"></div></div>
                    <div class="col-3 loader-section section-right"><div class="bg"></div></div>
                    <div class="col-3 loader-section section-right"><div class="bg"></div></div>
                </div>
            </div>
        </div>

        <!-- Back To Top Start -->
        <button id="back-top" class="back-to-top"><i class="far fa-arrow-up"></i></button>

        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                               <a href="{{ url('/') }}" class="header-logo">
                               <img src="{{ asset('assets/img/logo/logo1.webp') }}" alt="Play School" style="height: 52px; width: auto; max-width: 220px; background: white; padding: 5px 10px; border-radius: 8px; object-fit: contain;">
                                 </a>
                            </div>
                            <div class="offcanvas__close"><button><i class="fas fa-times"></i></button></div>
                        </div>
                        <h3 class="offcanvas-title">Hello There!</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="mobile-menu fix mt-3"></div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-youtube"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="offcanvas__contact">
                            <h3>Contact Us</h3>
                            <ul class="contact-list">
                                <li><div class="icon"><i class="far fa-phone-alt"></i></div><div class="content"><p>Call Us</p><h4><a href="tel:+919999999999">+91- 9999999999</a></h4></div></li>
                                <li><div class="icon"><i class="fal fa-envelope"></i></div><div class="content"><p>Send Email</p><h4><a href="mailto:nixinfosoft@gmail.com">nixinfosoft@gmail.com</a></h4></div></li>
                                <li><div class="icon"><i class="fal fa-map-marker-alt"></i></div><div class="content"><p>Location</p><h4>Plot No.117 Sector-44, Gurgaon, Haryana 122003</h4></div></li>
                            </ul>
                        </div>
                       <a href="{{ url('/contact') }}" class="theme-btn">Start Learning <i class="icon-arrow-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>
@php
    $hs = $homeSetting ?? \App\Models\HomeSetting::first();
@endphp
<header id="header-sticky" class="header-1 header-2">
    <div class="container">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="header-left">
                    <a href="{{ url('/') }}" class="header-logo">
                        {{-- DYNAMIC LOGO --}}
                        @if(isset($hs) && $hs->header_logo)
                            <img src="{{ asset('storage/'.$hs->header_logo) }}" alt="Play School" style="height: 52px; width: auto; max-width: 220px; background: white; padding: 5px 10px; border-radius: 8px; object-fit: contain;">
                        @else
                            <img src="{{ asset('assets/img/logo/logo1.webp') }}" alt="Play School" style="height: 52px; width: auto; max-width: 220px; background: white; padding: 5px 10px; border-radius: 8px; object-fit: contain;">
                        @endif
                    </a>
                </div>
                <div class="mean__menu-wrapper">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                           <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">{{ $hs->menu_about ?? 'About Us' }}</a></li>
                                <li><a href="{{ url('/activities') }}">{{ $hs->menu_activities ?? 'Activities' }}</a></li>
                                <li><a href="{{ url('/admissions') }}">{{ $hs->menu_admissions ?? 'Admission' }}</a></li>
                                <li><a href="{{ url('/gallery') }}">{{ $hs->menu_gallery ?? 'Gallery' }}</a></li>
                                <li><a href="{{ url('/contact') }}">{{ $hs->menu_contact ?? 'Contact Us' }}</a></li>

                                {{-- Program menu agar chahiye to --}}
                                @if(!empty($hs->menu_program))
                                    <li><a href="{{ url('/program') }}">{{ $hs->menu_program }}</a></li>
                                @endif

                                {{-- ADMIN SE ADDED PAGES AUTOMATIC YAHAN AAYENGE --}}
                                @if(isset($customPages))
                                    @foreach($customPages as $cpage)
                                        <li><a href="{{ url('/page/'.$cpage->slug) }}">{{ $cpage->title }}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center" style="gap:8px;">

                    {{-- DYNAMIC ADMISSION BUTTON --}}
                    <a href="{{ url('/admissionform') }}" class="theme-btn" style="display:inline-flex !important; align-items:center !important; justify-content:center !important; height:48px; padding:0 20px !important; line-height:1 !important; background: {{ $hs->btn_admission_color ?? '#FF6B00' }} !important;">
                        {{ $hs->btn_admission_text ?? 'Admission Open' }} <i class="icon-arrow-icon" style="margin-left:6px;"></i>
                    </a>

                    @if(session()->has('admin_id'))
                        <a href="{{ route('admin.dashboard') }}" class="theme-btn" style="background:#16a34a !important; display:inline-flex !important; align-items:center !important; justify-content:center !important; height:48px; padding:0 20px !important; line-height:1 !important;">Dashboard <i class="icon-arrow-icon" style="margin-left:6px;"></i></a>
                    @else
                        {{-- DYNAMIC ENQUIRY / ADMIN BUTTON --}}
                        <a href="{{ route('admin.login') }}" class="theme-btn" style="display:inline-flex !important; align-items:center !important; justify-content:center !important; height:48px; padding:0 20px !important; line-height:1 !important; background: {{ $hs->btn_enquiry_color ?? '#1AB69D' }} !important;">
                            {{ $hs->btn_enquiry_text ?? 'Admin Login' }} <i class="fas fa-lock" style="margin-left:6px; font-size:12px;"></i>
                        </a>
                    @endif

                    <div class="header__hamburger my-auto d-xl-none"><div class="sidebar__toggle"><i class="fal fa-bars"></i></div></div>
                </div>
            </div>
        </div>
    </div>
</header>

        
        <!--  -->
        @yield('content')

       <!-- Footer Section Start - DYNAMIC  -->
@php $fs = \App\Models\HomeSetting::first(); @endphp
<footer class="footer-section footer-section-three fix">
    <div class="sky-shape"><img src="{{ asset('assets/img/footer/sky2.png') }}" alt="shape-img"></div>
    <div class="emoji-shape"><img src="{{ asset('assets/img/footer/emoji2.png') }}" alt="shape-img"></div>
    <div class="flower-shape"><img src="{{ asset('assets/img/footer/flower.png') }}" alt="shape-img"></div>
    <div class="container">
        <div class="footer-widgets-wrapper footer-widgets-wrapper3s">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget single-footer-widget-3">
                        <div class="widget-head">
                            <a href="{{ url('/') }}">
                                @if(!empty($fs->footer_logo))
                                    <img src="{{ asset('storage/'.$fs->footer_logo) }}" alt="Play School" style="height: 50px; width: auto;">
                                @else
                                    <img src="{{ asset('assets/img/logo/logo1.webp') }}" alt="Play School" style="height: 50px; width: auto;">
                                @endif
                            </a>
                        </div>
                        <div class="widget-content">
                            <p>
                                {{ $fs->footer_description ?? 'Phasellus ultricies aliquam volutpat ullamcorper laoreet neque, a lacinia curabitur lacinia mollis' }}
                            </p>
                            {{-- Extra info jo admin se ayega --}}
                            @if(!empty($fs->footer_address) || !empty($fs->footer_phone))
                            <p style="margin-top:10px; font-size:14px;">
                                @if(!empty($fs->footer_address)) <i class="fas fa-map-marker-alt"></i> {{ $fs->footer_address }} <br> @endif
                                @if(!empty($fs->footer_phone)) <i class="fas fa-phone"></i> {{ $fs->footer_phone }} <br> @endif
                                @if(!empty($fs->footer_email)) <i class="fas fa-envelope"></i> {{ $fs->footer_email }} @endif
                            </p>
                            @endif
                            <ul class="social-icon social-icon-3">
                                @if(!empty($fs->footer_facebook))
                                    <li><a href="{{ $fs->footer_facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                @else
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                
                                @if(!empty($fs->footer_youtube))
                                    <li><a href="{{ $fs->footer_youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                @else
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                @endif
                                
                                @if(!empty($fs->footer_instagram))
                                    <li><a href="{{ $fs->footer_instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                @else
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget single-footer-widget-3">
                        <div class="widget-head"><h3>Quick Links</h3></div>
                        <div class="widget-content">
                            <ul class="list-area list-area-3">
                                <li><a href="{{ url('/program') }}"><i class="fas fa-angle-double-right"></i>Our Programs</a></li>
                                <li><a href="{{ url('/activities') }}"><i class="fas fa-angle-double-right"></i> Activities</a></li>
                                <li><a href="{{ url('/faq') }}"><i class="fas fa-angle-double-right"></i> FAQ’S</a></li>
                                <li><a href="{{ url('/contact') }}"><i class="fas fa-angle-double-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget single-footer-widget-3">
                        <div class="widget-head"><h3>Categories</h3></div>
                        <div class="widget-content">
                            <ul class="list-area list-area-3">
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Music Learning</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Sports, Games</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Science Class</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Drawing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-9 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget single-footer-widget-3">
                        <div class="widget-head"><h3>Our Galleries</h3></div>
                        <div class="widget-footer-gallery">
                            <div class="gallery-wrap">
                                <div class="gallery-thumb"><a href="#"><img src="{{ asset('assets/img/footer/image1.jpg') }}" alt="footer-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><a href="#"><img src="{{ asset('assets/img/footer/image2.jpg') }}" alt="footer-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><a href="#"><img src="{{ asset('assets/img/footer/image3.jpg') }}" alt="footer-image"><i class="fab fa-instagram"></i></a></div>
                            </div>
                            <div class="gallery-wrap">
                                <div class="gallery-thumb"><a href="#"><img src="{{ asset('assets/img/footer/image4.jpg') }}" alt="footer-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><a href="#"><img src="{{ asset('assets/img/footer/image5.jpg') }}" alt="footer-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><a href="#"><img src="{{ asset('assets/img/footer/image6.jpg') }}" alt="footer-image"><i class="fab fa-instagram"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="f-bottom-bg"><img src="{{ asset('assets/img/footer/footer-bg-3.png') }}" alt="footer-image"></div>
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft" data-wow-delay=".4s">
                    {{ $fs->footer_copyright ?? '© All Copyright 2026 by Nexinfosoft' }} 
                    @if(empty($fs->footer_copyright)) <a href="{{ url('/') }}">Nexinfosoft</a> @endif
                </p>
                <ul class="footer-menu wow fadeInRight" data-wow-delay=".4s">
                    <li><a href="{{ url('/contact') }}">Terms & Condition</a></li>
                    <li><a href="{{ url('/contact') }}">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
        <!-- All JS Plugins -->
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
        <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
        <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
        <script src="{{ asset('assets/js/splitType.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>

     