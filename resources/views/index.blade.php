@extends('layouts.app')

@section('content')

<!-- Hero Section Start - FINAL DYNAMIC -->
<section class="hero-section-2 fix">
    <div class="bg-shape"><img src="{{ asset('assets/img/hero/hero-slider-shape.png') }}" alt=""></div>
    <div class="hero-array-button">
        <div class="array-prev"><i class="fas fa-chevron-left"></i></div>
        <div class="array-next"><i class="fas fa-chevron-right"></i></div>
    </div>
   <div class="swiper banner-active">
        <div class="swiper-wrapper">
            <!-- SLIDE 1 - DYNAMIC -->
            <div class="swiper-slide">
                <div class="hero-2">
                        <div class="hero-bg bg-cover" style="background-image: url('@if(!empty($homeSetting->banner_image)) {{ asset('storage/'.$homeSetting->banner_image) }} @else {{ asset('assets/img/hero/hero-slider-1.jpg') }} @endif');"></div>
                        <div class="vec-1"><img src="{{ asset('assets/img/hero/vec.png') }}" alt="img"></div>
                        <div class="vec-2"><img src="{{ asset('assets/img/hero/vec-2.png') }}" alt="img"></div>
                        <div class="vec-3"><img src="{{ asset('assets/img/hero/vec-3.png') }}" alt="img"></div>
                        <div class="container">
                            <div class="hero-content">
                                <div class="shape-1"><img src="{{ asset('assets/img/hero/shape1.png') }}" alt="img"></div>
                                <div class="shape-2"><img src="{{ asset('assets/img/hero/shape2.png') }}" alt="img"></div>
                                <div class="shape-3"><img src="{{ asset('assets/img/hero/shape3.png') }}" alt="img"></div>
                                <div class="content">
                                    <div class="icon"><img src="{{ asset('assets/img/hero/icon1.png') }}" alt=""></div>
                                    <h1>{{ $homeSetting->banner_title ?? 'Where Learning Feels Like Play' }}</h1>
                                    @if(!empty($homeSetting->banner_subtitle))
                                        <p style="color:#fff; margin-top:10px; font-size:20px;">{{ $homeSetting->banner_subtitle }}</p>
                                    @endif
                                </div>
                                <div class="hero-button"><a href="{{ url('/admissions') }}" class="theme-btn">Online Admission <i class="icon-arrow-icon"></i></a></div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- SLIDE 2 - SAME DATA -->
            <div class="swiper-slide">
                <div class="hero-2">
                        <div class="hero-bg bg-cover" style="background-image: url('@if(!empty($homeSetting->banner_image)) {{ asset('storage/'.$homeSetting->banner_image) }} @else {{ asset('assets/img/hero/hero-slider-2.jpg') }} @endif');"></div>
                        <div class="vec-1"><img src="{{ asset('assets/img/hero/vec.png') }}" alt="img"></div>
                        <div class="vec-2"><img src="{{ asset('assets/img/hero/vec-2.png') }}" alt="img"></div>
                        <div class="vec-3"><img src="{{ asset('assets/img/hero/vec-3.png') }}" alt="img"></div>
                        <div class="container">
                            <div class="hero-content">
                                <div class="shape-1"><img src="{{ asset('assets/img/hero/shape1.png') }}" alt="img"></div>
                                <div class="shape-2"><img src="{{ asset('assets/img/hero/shape2.png') }}" alt="img"></div>
                                <div class="shape-3"><img src="{{ asset('assets/img/hero/shape3.png') }}" alt="img"></div>
                                <div class="content">
                                    <div class="icon"><img src="{{ asset('assets/img/hero/icon1.png') }}" alt=""></div>
                                    <h1>{{ $homeSetting->banner_title ?? 'Where Learning Feels Like Play' }}</h1>
                                    @if(!empty($homeSetting->banner_subtitle))
                                        <p style="color:#fff; margin-top:10px; font-size:20px;">{{ $homeSetting->banner_subtitle }}</p>
                                    @endif
                                </div>
                                <div class="hero-button"><a href="{{ url('/admissions') }}" class="theme-btn">Online Admission <i class="icon-arrow-icon"></i></a></div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
   </div>
</section>
<!-- Work Process - DYNAMIC -->
<section class="work-process-section">
    <div class="bg-shape d-none d-xxl-block"><img src="{{ asset('assets/img/work-process/big-shape.png') }}" alt="shape-image"></div>
    <div class="flower-shape d-none d-xxl-block"><img src="{{ asset('assets/img/work-process/sunflower.png') }}" alt="shape-image"></div>
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="work-process-items">
                    <div class="work-image">
                        @if(!empty($homeSetting->home_work1_image))
                            <img src="{{ asset('storage/'.$homeSetting->home_work1_image) }}" alt="image">
                        @else
                            <img src="{{ asset('assets/img/work-process/image1.png') }}" alt="image">
                        @endif
                    </div>
                    <div class="work-content">
                        <h2>{{ $homeSetting->home_work1_title ?? 'Home-Like Loving Environment' }}</h2>
                        <p>{{ $homeSetting->home_work1_desc ?? 'A second home for your child where every little one feels loved, cared for and happy.' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="work-process-items">
                    <div class="work-image">
                        @if(!empty($homeSetting->home_work2_image))
                            <img src="{{ asset('storage/'.$homeSetting->home_work2_image) }}" alt="image">
                        @else
                            <img src="{{ asset('assets/img/work-process/image2.png') }}" alt="image">
                        @endif
                    </div>
                    <div class="work-content">
                        <h2>{{ $homeSetting->home_work2_title ?? 'Safety & CCTV Surveillance' }}</h2>
                        <p>{{ $homeSetting->home_work2_desc ?? "Your child's safety is our responsibility with full CCTV coverage and trained staff." }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="work-process-items">
                    <div class="work-image">
                        @if(!empty($homeSetting->home_work3_image))
                            <img src="{{ asset('storage/'.$homeSetting->home_work3_image) }}" alt="image">
                        @else
                            <img src="{{ asset('assets/img/work-process/image3.png') }}" alt="image">
                        @endif
                    </div>
                    <div class="work-content">
                        <h2>{{ $homeSetting->home_work3_title ?? 'Experienced & Caring Teachers' }}</h2>
                        <p>{{ $homeSetting->home_work3_desc ?? "Qualified and loving female teachers who don't just teach, but nurture like mothers." }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="work-process-items">
                    <div class="work-image">
                        @if(!empty($homeSetting->home_work4_image))
                            <img src="{{ asset('storage/'.$homeSetting->home_work4_image) }}" alt="image">
                        @else
                            <img src="{{ asset('assets/img/work-process/image4.png') }}" alt="image">
                        @endif
                    </div>
                    <div class="work-content">
                        <h2>{{ $homeSetting->home_work4_title ?? 'Learn Through Play' }}</h2>
                        <p>{{ $homeSetting->home_work4_desc ?? 'No rote learning, only overall development through fun activities, rhymes and stories.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brand - DYNAMIC -->
<div class="brand-section fix">
    <div class="container">
        <div class="swiper brand-slider">
            <div class="swiper-wrapper"> 
                @for($i=1; $i<=6; $i++)
                    @php $bImg = 'home_brand'.$i.'_image'; @endphp
                    <div class="swiper-slide">
                        <div class="brand-image">
                            @if(!empty($homeSetting->$bImg))
                                <img src="{{ asset('storage/'.$homeSetting->$bImg) }}" alt="img">
                            @else
                                <img src="{{ asset('assets/img/brand/brand-0'.$i.'.png') }}" alt="img">
                            @endif
                        </div>
                    </div>
                @endfor
            </div>
        </div> 
    </div>                 
</div>
<!-- About Section - DYNAMIC (SAFE - No Design Break) -->
<section class="about-section-two section-padding fix">
    <div class="love-shape float-bob-x"><img src="{{ asset('assets/img/about/love.png') }}" alt="shape-img"></div>
    <div class="container">
        <div class="about-wrapper-2">
            <div class="row g-4">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-image-two">
                        @php
                            $aboutImg1 = $homeSetting->extra_data['about_image'] ?? $homeSetting->about_image ?? null;
                            $aboutImg2 = $homeSetting->extra_data['about_image2'] ?? $homeSetting->about_image2 ?? null;
                        @endphp
                        <img src="{{ $aboutImg1 ? asset('storage/'.$aboutImg1) : asset('assets/img/about/about-2.png') }}" alt="about-image" class="wow zoomIn" data-wow-delay=".4s">
                        <div class="img-two img-custom-anim-bottom">
                            <img src="{{ $aboutImg2 ? asset('storage/'.$aboutImg2) : asset('assets/img/about/about-3.png') }}" alt="about-image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-two">
                        <div class="section-title">
                            <span class="sub-title wow fadeInUp">About Us</span>
                            <h2 class="char-animation">{{ $homeSetting->extra_data['about_title'] ?? $homeSetting->about_title ?? 'Safe, Fun & Educational – A Second Home For Your Child' }}</h2>
                        </div>
                        <p class="wow fadeInUp mt-3 mt-md-0">
                            {{ $homeSetting->extra_data['about_description'] ?? $homeSetting->about_description ?? 'At Play School Day Care and Play School, Greater Noida, we provide a secure, hygienic and joyful environment where children from 1.5 years onwards learn, play and grow with confidence. Trusted by working parents.' }}
                        </p>
                        <div class="about-two-button wow fadeInUp" data-wow-delay=".8s">
                            <a href="{{ $homeSetting->extra_data['about_button_url'] ?? $homeSetting->about_button_url ?? url('/about') }}" class="theme-btn">
                                {{ $homeSetting->extra_data['about_button_text'] ?? $homeSetting->about_button_text ?? 'Admission Open' }} <i class="icon-arrow-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Learning Section Start -->
<!-- Learning Section Start -->
<section class="learning-section section-padding fix">
    <div class="shadow-shape"><img src="{{ asset('assets/img/learning/shadow.png') }}" alt="shape-image"></div>
    <div class="sky-shape float-bob-y"><img src="{{ asset('assets/img/learning/sky.png') }}" alt="shape-image"></div>
    <div class="rocket-shape float-bob-x"><img src="{{ asset('assets/img/learning/rocket.png') }}" alt="shape-image"></div>
    <div class="container">
        <div class="section-title text-center custom-padding-top">
            <span class="sub-title style-2 wow fadeInUp" data-wow-delay=".3s">{{ $homeSetting->extra_data['learning_subtitle'] ?? 'Our Programs' }}</span>
            <h2 class="char-animation text-white">{!! $homeSetting->extra_data['learning_title'] ?? 'Nurturing <span>Young Minds</span> – with  <br> Love, Care & Learning' !!}</h2>
        </div>
        <div class="row">
            @for($i=1; $i<=3; $i++)
            @php
                $lTitle = $homeSetting->extra_data['learning'.$i.'_title'] ?? null;
                $lDesc = $homeSetting->extra_data['learning'.$i.'_desc'] ?? null;
                $lImg = $homeSetting->extra_data['learning'.$i.'_image'] ?? null;
                $lIcon = $homeSetting->extra_data['learning'.$i.'_icon'] ?? null;
                $lUrl = $homeSetting->extra_data['learning'.$i.'_url'] ?? url('/program');
            @endphp
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".{{ $i }}s">
                <div class="learning-box-items"><div class="learning-bg"></div>
                    <div class="learning-image"><img src="{{ $lImg ? asset('storage/'.$lImg) : asset('assets/img/learning/learning'.$i.'.png') }}" alt="learning-image"></div>
                    <div class="thumb-icon"><img src="{{ asset('assets/img/learning/icon-bg'.$i.'.png') }}" alt="shape-img"><div class="icon"><img src="{{ $lIcon ? asset('storage/'.$lIcon) : asset('assets/img/learning/icon'.$i.'.svg') }}" alt="icon-image"></div></div>
                    <div class="learning-content">
                        <h3><a href="{{ $lUrl }}">{!! $lTitle ?? ($i==1 ? 'Play Group & <br> Day Care' : ($i==2 ? 'Nursery & <br> Creativity Club' : 'KG Preparation & <br> Activity Based Learning')) !!}</a></h3>
                        <p>{{ $lDesc ?? ($i==1 ? 'Safe day care for 1.5 to 3 years with healthy meals, nap time, and joyful play activities for working parents in Greater Noida.' : ($i==2 ? 'Phonics, storytelling, drawing, dance and music to boost confidence, speech and imagination in a fun way.' : 'School readiness program with writing practice, numbers, and problem-solving activities for smooth admission to big school.')) }}</p>
                        <a href="{{ $lUrl }}" class="arrow-icon {{ $i==2 ? 'color-2' : ($i==3 ? 'color-3' : '') }}"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Video Section Start -->
@php
    $videoBg = $homeSetting->extra_data['video_bg_image'] ?? null;
    $videoUrl = $homeSetting->extra_data['video_youtube_url'] ?? 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I';
@endphp
<div class="video-section fix">
    <div class="container">
        <div class="video-wrapper zoom-effect-style">
            <div class="vedio-image">
                <img src="{{ $videoBg ? asset('storage/'.$videoBg) : asset('assets/img/vedio/vedio-bg.jpg') }}" alt="vedio-image">
            </div>
            <div class="vedio-box">
                <div class="wave-area vedio-wave-area">
                    <div class="promo-video">
                        <div class="waves-block">
                            <div class="waves wave-1 vw-style"></div>
                            <div class="waves wave-2 vw-style"></div>
                            <div class="waves wave-3 vw-style"></div>
                        </div>
                        <a class="video-popup style-two" href="{{ $videoUrl }}"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Section Start -->
<section class="counter-section2 counter-section-two section-padding">
    <div class="perashute-shape float-bob-y"><img src="{{ asset('assets/img/counter/perasute.png') }}" alt="shape-img"></div>
    <div class="container"><div class="row g-4">
        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay=".2s"><div class="counter-items counter-items-two"><div class="icon"><img src="{{ asset('assets/img/counter/icon5.svg') }}" alt="icon-image"></div><div class="counter-box"><div class="count"><h3 class="odometer" data-count="15">0</h3><span class="plus">+</span></div><p>Trained Female Teachers</p></div></div></div>
        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay=".4s"><div class="counter-items counter-items-two"><div class="icon"><img src="{{ asset('assets/img/counter/icon6.svg') }}" alt="icon-image"></div><div class="counter-box"><div class="count"><h3 class="odometer" data-count="500">0</h3><span class="plus">+</span></div><p>Happy Parents</p></div></div></div>
        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay=".6s"><div class="counter-items counter-items-two"><div class="icon"><img src="{{ asset('assets/img/counter/icon7.svg') }}" alt="icon-image"></div><div class="counter-box"><div class="count"><h3 class="odometer" data-count="8">0</h3><span class="plus">+</span></div><p>Years Of Trust</p></div></div></div>
        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay=".8s"><div class="counter-items border-none counter-items-two"><div class="icon"><img src="{{ asset('assets/img/counter/icon8.svg') }}" alt="icon-image"></div><div class="counter-box"><div class="count"><h3 class="odometer" data-count="300">0</h3><span class="plus">+</span></div><p>Children Enrolled</p></div></div></div>
    </div></div>
</section>
<!-- Pricing Section Start -->
<section class="pricing-section section-padding fix">
    <div class="snake-shape"><img src="{{ asset('assets/img/pricing/snake.png') }}" alt="shape-image"></div>
    <div class="crown-shape"><img src="{{ asset('assets/img/pricing/crown.png') }}" alt="shape-image"></div>
    <div class="tubelight-shape"><img src="{{ asset('assets/img/pricing/tubelight.png') }}" alt="shape-image"></div>
    <div class="busket-shape float-bob-x"><img src="{{ asset('assets/img/newsletter/busket.png') }}" alt="shape-image"></div>
    <div class="sky-shape"><img src="{{ asset('assets/img/newsletter/sky.png') }}" alt="shape-image"></div>
    <div class="star-shape"><img src="{{ asset('assets/img/newsletter/star.png') }}" alt="shape-image"></div>
    <div class="flower-shape"><img src="{{ asset('assets/img/newsletter/flower.png') }}" alt="shape-image"></div>
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title">{{ $homeSetting->extra_data['pricing_subtitle'] ?? 'Our Fee Plans' }}</span>
            <h2 class="char-animation">{!! $homeSetting->extra_data['pricing_title'] ?? 'Affordable & Transparent <span>Fee Structure</span>' !!}</h2>
        </div>
        <div class="pricing-wrapper">
            @for($i=1; $i<=3; $i++)
            @php
                $pTitle = $homeSetting->extra_data['pricing'.$i.'_title'] ?? null;
                $pDesc = $homeSetting->extra_data['pricing'.$i.'_desc'] ?? null;
                $pPrice = $homeSetting->extra_data['pricing'.$i.'_price'] ?? null;
                $pPer = $homeSetting->extra_data['pricing'.$i.'_per'] ?? '/ Per Month';
                $pFeatures = $homeSetting->extra_data['pricing'.$i.'_features'] ?? null;
                $pUrl = $homeSetting->extra_data['pricing'.$i.'_url'] ?? url('/contact');
                $pBtn = $homeSetting->extra_data['pricing'.$i.'_btn'] ?? 'Enquire Now';
                $featuresArr = $pFeatures ? explode("\n", $pFeatures) : [];
            @endphp
            <div class="pricing-items {{ $i==2 ? 'items-two' : ($i==3 ? 'items-three' : '') }} wow fadeInUp" data-wow-delay=".{{ $i }}s">
                @if($i==2)<span class="top-text">Most Popular</span>@endif
                <div class="pricing-content">
                    <div class="pricing-header">
                        <span>{{ $pTitle ?? ($i==1 ? '🌼 Play Group' : ($i==2 ? '🌟 Day Care + Play School' : '🏅 Nursery & KG Prep')) }}</span>
                        <p>{{ $pDesc ?? ($i==1 ? 'Perfect for toddlers 1.5 to 2.5 years - first step to social learning.' : ($i==2 ? 'Most chosen by working parents in Greater Noida - full care and learning.' : 'For 3 to 6 years - complete preparation for formal school admission.')) }}</p>
                    </div>
                    <div class="pricing-rate"><h2>{{ $pPrice ?? ($i==1 ? '₹3,500' : ($i==2 ? '₹6,500' : '₹4,500')) }} <span>{{ $pPer }}</span></h2></div>
                    <ul class="pricing-list">
                        @if(count($featuresArr) > 0)
                            @foreach($featuresArr as $f)
                                @if(trim($f)!='')<li><i class="fas fa-check"></i> {{ trim($f) }}</li>@endif
                            @endforeach
                        @else
                            @if($i==1)
                                <li><i class="fas fa-check"></i> Half-Day (9 AM – 12:30 PM)</li><li><i class="fas fa-check"></i> Rhymes & Story Time</li><li><i class="fas fa-check"></i> Healthy Snacks Included</li><li><i class="fas fa-check"></i> No Admission Fee</li><li><i class="fas fa-check"></i> CCTV & Safe Campus</li>
                            @elseif($i==2)
                                <li><i class="fas fa-check"></i> Full Day (9 AM – 6 PM)</li><li><i class="fas fa-check"></i> Lunch + Evening Snacks</li><li><i class="fas fa-check"></i> Nap Time & Hygiene Care</li><li><i class="fas fa-check"></i> Activity Based Learning</li><li><i class="fas fa-check"></i> Daily Photo Updates to Parents</li><li><i class="fas fa-check"></i> Weekend Off Available</li>
                            @else
                                <li><i class="fas fa-check"></i> Half-Day (9 AM – 1 PM)</li><li><i class="fas fa-check"></i> Phonics, Numbers & Writing</li><li><i class="fas fa-check"></i> Dance, Drawing & Games</li><li><i class="fas fa-check"></i> School Interview Preparation</li><li><i class="fas fa-check"></i> Annual Day & Events</li>
                            @endif
                        @endif
                    </ul>
                    <div class="pricing-button"><a href="{{ $pUrl }}" class="border-btn {{ $i==2 ? 'style-2 active' : '' }}">{{ $pBtn }}<i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            @endfor
        </div>
        <div class="newsletter-section newsletter-two section-padding pb-0 fix">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-title tittle-bg wow fadeInUp" data-wow-delay=".3s">Get In Touch</span>
                    <h2 class="char-animation text-white">{{ $homeSetting->extra_data['tour_title'] ?? 'Book A Free School Tour' }}</h2>
                </div>
                <div class="signUp-box mt-3 mt-md-0">
                    <form id="signupForm">
                        <div class="input-wrapper input-style wow fadeInLeft" data-wow-delay=".4s">
                            <input type="email" id="emailInput" placeholder="{{ $homeSetting->extra_data['tour_placeholder'] ?? 'Enter your mobile number' }}" required>
                            <i class="far fa-house house-icon"></i>
                        </div>
                        <button type="submit" class="theme-btn wow fadeInRight" data-wow-delay=".4s">Call Me Back <i class="icon-arrow-icon"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Section Start -->
<!-- Feature Section Start -->
@php
    $fPhone = $homeSetting->extra_data['feature_phone'] ?? '+91 99999 99999';
    $fImg = $homeSetting->extra_data['feature_image'] ?? null;
@endphp
<section class="feature-section section-padding fix">
    <div class="sun-shape float-bob-y"><img src="{{ asset('assets/img/feature/sun.png') }}" alt="shape-image"></div>
    <div class="sky-shape"><img src="{{ asset('assets/img/feature/sky.png') }}" alt="shape-image"></div>
    <div class="butterfly-shape float-bob-y"><img src="{{ asset('assets/img/feature/butterfly.png') }}" alt="shape-image"></div>
    <div class="container"><div class="feature-wrapper"><div class="row g-4">
        <div class="col-xl-6 col-lg-6"><div class="feature-content"><div class="section-title"><span class="sub-title wow fadeInUp" data-wow-delay=".3s">{{ $homeSetting->extra_data['feature_subtitle'] ?? 'Why Choose Us' }}</span><h2 class="char-animation">{!! $homeSetting->extra_data['feature_title'] ?? 'Our Passion <span>is Childhood,</span> <br> & We Love To Nurture It' !!}</h2></div><p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".3s">{{ $homeSetting->extra_data['feature_desc'] ?? "At Play School, Greater Noida, we don't just run a day care, we build a safe, clean and happy second home where your child learns good habits, confidence and values." }}</p>
            <div class="row">
                @for($i=1; $i<=6; $i++)
                @php
                    $fText = $homeSetting->extra_data['feature'.$i.'_text'] ?? null;
                    $fIcon = $homeSetting->extra_data['feature'.$i.'_icon'] ?? null;
                @endphp
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".{{ $i }}s"><div class="feature-list {{ $i>1 ? 'color-'.$i : '' }}"><div class="icon"><img src="{{ $fIcon ? asset('storage/'.$fIcon) : asset('assets/img/feature/icon1.png') }}" alt="icon-image"></div><div class="content"><h3>{{ $fText ?? ($i==1 ? 'Caring & Trained Female Staff' : ($i==2 ? 'Full CCTV & Secure Campus' : ($i==3 ? 'Hygienic Food & Clean Washrooms' : ($i==4 ? 'Daily Updates on WhatsApp' : ($i==5 ? 'Play-Based & Activity Learning' : 'Affordable Fee for Working Parents'))))) }}</h3></div></div></div>
                @endfor
            </div>
            <div class="feature-button-area wow fadeInUp" data-wow-delay=".9s"><a href="{{ $homeSetting->extra_data['feature_btn_url'] ?? url('/contact') }}" class="theme-btn">{{ $homeSetting->extra_data['feature_btn_text'] ?? 'Book A Visit' }} <i class="icon-arrow-icon"></i></a><div class="user-group"><img src="{{ asset('assets/img/feature/group-men.png') }}" alt="group-img"><h4>{!! nl2br($homeSetting->extra_data['feature_trusted'] ?? 'Trusted by 500+ <br>Parents in Greater Noida') !!}</h4></div></div>
        </div></div>
        <div class="col-xl-6 col-lg-6"><div class="feature-image"><div class="feature-bg"><img class="img-custom-anim-top" src="{{ $fImg ? asset('storage/'.$fImg) : asset('assets/img/feature/feature1.png') }}" alt="feature-image"></div><a href="tel:{{ preg_replace('/[^0-9+]/','',$fPhone) }}"><i class="fas fa-phone-alt"></i>{{ $fPhone }}</a></div></div>
    </div></div></div>
</section>


<!-- Testimonial Section Start -->
<section class="testimonial-section-2 section-padding pt-0 fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">{{ $homeSetting->extra_data['testi_subtitle'] ?? 'Parents Feedback' }}</span>
            <h2 class="char-animation">{!! $homeSetting->extra_data['testi_title'] ?? 'What <span>Parents Say</span> <br> About Us' !!}</h2>
        </div>
        <div class="testimonial-wrapper-2">
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    @for($i=1; $i<=3; $i++)
                    @php
                        $tName = $homeSetting->extra_data['testi'.$i.'_name'] ?? null;
                        $tRole = $homeSetting->extra_data['testi'.$i.'_role'] ?? null;
                        $tText = $homeSetting->extra_data['testi'.$i.'_text'] ?? null;
                        $tImg = $homeSetting->extra_data['testi'.$i.'_image'] ?? null;
                        $tRating = intval($homeSetting->extra_data['testi'.$i.'_rating'] ?? 5);
                    @endphp
                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".{{ $i*2 }}s">
                        <div class="testimonial-box-items">
                            <div class="testi-item-bg"><img src="{{ asset('assets/img/testimonial/bg-border-'.$i.'.png') }}" alt="shape-image"></div>
                            <div class="testimonial-content">
                                <div class="client-image-2">
                                    <img src="{{ $tImg ? asset('storage/'.$tImg) : asset('assets/img/testimonial/client'.$i.'.png') }}" alt="client-image">
                                    <ul class="icon">
                                        @for($r=1; $r<=5; $r++) <li><i class="fas fa-star {{ $r<=$tRating ? '' : 'text-gray-300' }}"></i></li> @endfor
                                    </ul>
                                </div>
                                <p>“{{ $tText ?? ($i==1 ? 'As working parents, Play School is a blessing. My 2.5 year old daughter loves to go to school daily.' : ($i==2 ? 'Best day care in Greater Noida. CCTV access, daily photos on WhatsApp and hygienic food.' : 'Very affordable fee and loving staff. My daughter was prepared so well for big school interview. Thank you Play School team!')) }}”</p>
                                <div class="client-info-2"><h3>{{ $tName ?? ($i==1 ? 'Priya Sharma' : ($i==2 ? 'Rohit Singh' : 'Neha Gupta')) }}</h3><p>{{ $tRole ?? ($i==1 ? 'Mother of Anaya - Play Group' : ($i==2 ? 'Father of Aarav - Day Care' : 'Mother of Myra - Nursery')) }}</p></div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>

<!-- Gallery -->
@php $galleryImages = []; for($gi=1;$gi<=7;$gi++){ $galleryImages[$gi] = $homeSetting->extra_data['gallery'.$gi.'_image'] ?? null; } @endphp
<div class="gallery-section m-2 mt-0 mb-0 fix">
    <div class="item-bg"><img src="{{ asset('assets/img/gallery/Gallery-bg.png') }}" alt="bg-image"></div>
    <div class="item-bg-2"><img src="{{ asset('assets/img/gallery/Gallery-bg.png') }}" alt="bg-image"></div>
    <div class="gallery-wrapper"><div class="row g-2">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery-image wow flipInY" data-wow-delay=".9s"><a href="{{ $galleryImages[1] ? asset('storage/'.$galleryImages[1]) : asset('assets/img/gallery/gallery-1.jpg') }}" class="img-popup"><img src="{{ $galleryImages[1] ? asset('storage/'.$galleryImages[1]) : asset('assets/img/gallery/gallery-1.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
            <div class="gallery-image mt-2 wow flipInY" data-wow-delay=".9s"><a href="{{ $galleryImages[2] ? asset('storage/'.$galleryImages[2]) : asset('assets/img/gallery/gallery-2.jpg') }}" class="img-popup"><img src="{{ $galleryImages[2] ? asset('storage/'.$galleryImages[2]) : asset('assets/img/gallery/gallery-2.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"><div class="gallery-image image-2 wow flipInY" data-wow-delay=".9s"><a href="{{ $galleryImages[3] ? asset('storage/'.$galleryImages[3]) : asset('assets/img/gallery/gallery-3.jpg') }}" class="img-popup"><img src="{{ $galleryImages[3] ? asset('storage/'.$galleryImages[3]) : asset('assets/img/gallery/gallery-3.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery-image wow flipInY" data-wow-delay=".9s"><a href="{{ $galleryImages[4] ? asset('storage/'.$galleryImages[4]) : asset('assets/img/gallery/gallery-4.jpg') }}" class="img-popup"><img src="{{ $galleryImages[4] ? asset('storage/'.$galleryImages[4]) : asset('assets/img/gallery/gallery-4.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
            <div class="gallery-image mt-2 wow flipInY" data-wow-delay=".9s"><a href="{{ $galleryImages[5] ? asset('storage/'.$galleryImages[5]) : asset('assets/img/gallery/gallery-5.jpg') }}" class="img-popup"><img src="{{ $galleryImages[5] ? asset('storage/'.$galleryImages[5]) : asset('assets/img/gallery/gallery-5.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery-image wow flipInY" data-wow-delay=".9s"><a href="{{ $galleryImages[6] ? asset('storage/'.$galleryImages[6]) : asset('assets/img/gallery/gallery-6.jpg') }}" class="img-popup"><img src="{{ $galleryImages[6] ? asset('storage/'.$galleryImages[6]) : asset('assets/img/gallery/gallery-6.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
            <div class="gallery-image mt-2 wow flipInY" data-wow-delay=".9s"><a href="{{ $galleryImages[7] ? asset('storage/'.$galleryImages[7]) : asset('assets/img/gallery/gallery-7.jpg') }}" class="img-popup"><img src="{{ $galleryImages[7] ? asset('storage/'.$galleryImages[7]) : asset('assets/img/gallery/gallery-7.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
        </div>
    </div></div>
</div>

<!-- News Section -->
<div class="news-section-two section-padding fix">
    <div class="perasute-shape float-bob-y"><img src="{{ asset('assets/img/news/perasute.png') }}" alt="shape-image"></div>
    <div class="tubelight-shape"><img src="{{ asset('assets/img/news/tubelight.png') }}" alt="shape-image"></div>
    <div class="container">
        <div class="section-title text-center"><span class="sub-title wow fadeInUp">{{ $homeSetting->extra_data['news_subtitle'] ?? 'Parenting Tips & Events' }}</span><h2 class="char-animation">{!! $homeSetting->extra_data['news_title'] ?? 'Our Latest <span>Activities</span> & News' !!}</h2></div>
        <div class="row">
            @for($i=1; $i<=2; $i++)
            @php
                $nCat = $homeSetting->extra_data['news'.$i.'_cat'] ?? null;
                $nTitle = $homeSetting->extra_data['news'.$i.'_title'] ?? null;
                $nDesc = $homeSetting->extra_data['news'.$i.'_desc'] ?? null;
                $nImg = $homeSetting->extra_data['news'.$i.'_image'] ?? null;
                $nDay = $homeSetting->extra_data['news'.$i.'_day'] ?? null;
                $nMonth = $homeSetting->extra_data['news'.$i.'_month'] ?? null;
                $nUrl = $homeSetting->extra_data['news'.$i.'_url'] ?? url('/news');
                $nAuthor = $homeSetting->extra_data['news'.$i.'_author'] ?? 'Play School';
            @endphp
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".{{ $i*3 }}s"><div class="news-items-tow"><div class="news-image-tow"><img src="{{ $nImg ? asset('storage/'.$nImg) : asset('assets/img/news/news'.($i+3).'.jpg') }}" alt="news-image"></div><div class="post"><span>{{ $nCat ?? ($i==1 ? 'Activities' : 'Parenting') }}</span></div><div class="news-content-two"><div class="thumb-icon-box"><div class="thumb-icon"><img src="{{ asset('assets/img/news/circle1.png') }}" alt="shape-image"></div><div class="date"><h3>{{ $nDay ?? ($i==1 ? '15' : '05') }}</h3><span>{{ $nMonth ?? ($i==1 ? 'Aug' : 'Sep') }}</span></div></div><div class="author-name"><span><i class="far fa-user"></i> {{ $nAuthor }}</span></div><h3><a href="{{ $nUrl }}" class="underline">{{ $nTitle ?? ($i==1 ? 'Annual Day & Fancy Dress Competition at Play School' : 'How We Make Your Child Ready for Big School Interview') }}</a></h3><p>{{ $nDesc ?? ($i==1 ? 'Our little stars performed with full confidence. Dance, rhymes and fancy dress made the day memorable for parents in Greater Noida.' : 'From phonics to good manners, our activity-based learning helps children speak confidently and clear the formal school admission easily.') }}</p></div></div></div>
            @endfor
        </div>
    </div>
</div>

<div class="learning-section-two fix">
    <div class="container">
        <div class="learning-wrapper text-center zoom-effect-style">
            <div class="flower-shape"><img src="{{ asset('assets/img/learning/flower.png') }}" alt="shape-image"></div>
            <div class="learning-bg"></div>
            <div class="section-title"><span class="sub-title tittle-bg text-white wow fadeInUp">Start Learning</span>
            <h2 class="char-animation text-white">{!! $homeSetting->extra_data['cta_title'] ?? 'Where Every Little <span>Step Leads to</span> <br> Big Discoveries' !!}</h2>
            <div class="learning-button"><a href="{{ $homeSetting->extra_data['cta_btn1_url'] ?? url('/contact') }}" class="theme-btn wow fadeInLeft" data-wow-delay=".4s">{{ $homeSetting->extra_data['cta_btn1_text'] ?? 'Online Admission' }} <i class="icon-arrow-icon"></i></a><a href="{{ $homeSetting->extra_data['cta_btn2_url'] ?? 'tel:12093939093' }}" class="border-btn learn-btn wow fadeInRight" data-wow-delay=".4s"><i class="fas fa-phone-alt"></i> {{ $homeSetting->extra_data['cta_btn2_text'] ?? '(120) 93 939 093' }}</a>
        </div>
    </div>
</div>
</div>
</div>

@endsection