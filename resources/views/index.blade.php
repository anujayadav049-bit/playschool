@extends('layouts.app')

@section('content')

<!-- Hero Section Start -->
<section class="hero-section-2 fix">
    <div class="bg-shape"><img src="{{ asset('assets/img/hero/hero-slider-shape.png') }}" alt=""></div>
    <div class="hero-array-button">
        <div class="array-prev">
            <svg width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.8398 29.6567C23.626 27.917 22.1748 26.036 21.0942 24.5148C20.2646 23.3457 19.2767 22.2974 18.1587 21.4C17.3819 20.8208 16.6367 20.2005 15.9262 19.5416C22.2698 19.6164 36.1529 19.9809 42.6806 20.298C46.7941 20.5949 47.5066 19.0773 47.585 17.9943C47.4187 15.6905 46.496 13.4426 43.7671 13.1243C39.4708 12.622 35.672 12.4332 31.2283 12.3346C26.457 12.2278 19.8853 12.1019 15.4666 11.8406C17.0911 10.703 19.5267 9.40151 21.2308 8.39332C22.1071 7.87439 24.8443 6.74033 25.4179 5.01726C25.938 3.45451 25.0711 -0.167363 23.0346 0.00601177C20.1062 0.257762 15.4797 3.36189 12.6107 4.72395C8.68721 6.73557 4.34571 8.43726 1.16796 11.5639C0.295151 12.6054 -0.403103 14.148 0.267834 15.4126C1.21783 17.2058 5.89302 21.305 7.33821 22.5032C10.1835 24.8628 13.5571 28.0322 16.6684 30.5117C19.0196 32.3868 22.1463 31.1909 22.8398 29.6567Z" fill="white"/></svg>
        </div>
        <div class="array-next">
            <svg width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.7451 29.6567C23.959 27.917 25.4101 26.036 26.4907 24.5148C27.3203 23.3457 28.3083 22.2974 29.4262 21.4C30.2031 20.8208 30.9483 20.2005 31.6588 19.5416C25.3151 19.6164 11.4321 19.9809 4.90438 20.298C0.790875 20.5949 0.078375 19.0773 0 17.9943C0.16625 15.6905 1.08894 13.4426 3.81781 13.1243C8.11419 12.622 11.913 12.4332 16.3566 12.3346C21.128 12.2278 27.6996 12.1019 32.1183 11.8406C30.4938 10.703 28.0583 9.40151 26.3542 8.39332C25.4778 7.87439 22.7406 6.74033 22.1671 5.01726C21.6469 3.45451 22.5138 -0.167363 24.5504 0.00601177C27.4788 0.257762 32.1053 3.36189 34.9743 4.72395C38.8978 6.73557 43.2392 8.43726 46.417 11.5639C47.2898 12.6054 47.9881 14.148 47.3171 15.4126C46.3671 17.2058 41.6919 21.305 40.2467 22.5032C37.4015 24.8628 34.0278 28.0322 30.9166 30.5117C28.5653 32.3868 25.4386 31.1909 24.7451 29.6567Z" fill="white"/></svg>
        </div>
    </div>
   <div class="swiper banner-active">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-2">
                        <div class="hero-bg bg-cover" style="background-image: url('{{ asset('assets/img/hero/hero-slider-1.jpg') }}');"></div>
                        <div class="vec-1"><img src="{{ asset('assets/img/hero/vec.png') }}" alt="img"></div>
                        <div class="vec-2"><img src="{{ asset('assets/img/hero/vec-2.png') }}" alt="img"></div>
                        <div class="vec-3"><img src="{{ asset('assets/img/hero/vec-3.png') }}" alt="img"></div>
                        <div class="container">
                            <div class="hero-content">
                                <div class="shape-1"><img src="{{ asset('assets/img/hero/shape1.png') }}" alt="img"></div>
                                <div class="shape-2"><img src="{{ asset('assets/img/hero/shape2.png') }}" alt="img"></div>
                                <div class="shape-3"><img src="{{ asset('assets/img/hero/shape3.png') }}" alt="img"></div>
                                <div class="content"><div class="icon"><img src="{{ asset('assets/img/hero/icon1.png') }}" alt=""></div><h1>Where Learning Feels Like Play</h1></div>
                                <div class="hero-button"><a href="{{ url('/admissions') }}" class="theme-btn">Online Admission <i class="icon-arrow-icon"></i></a></div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-2">
                        <div class="hero-bg bg-cover" style="background-image: url('{{ asset('assets/img/hero/hero-slider-2.jpg') }}');"></div>
                        <div class="vec-1"><img src="{{ asset('assets/img/hero/vec.png') }}" alt="img"></div>
                        <div class="vec-2"><img src="{{ asset('assets/img/hero/vec-2.png') }}" alt="img"></div>
                        <div class="vec-3"><img src="{{ asset('assets/img/hero/vec-3.png') }}" alt="img"></div>
                        <div class="container">
                            <div class="hero-content">
                                <div class="shape-1"><img src="{{ asset('assets/img/hero/shape1.png') }}" alt="img"></div>
                                <div class="shape-2"><img src="{{ asset('assets/img/hero/shape2.png') }}" alt="img"></div>
                                <div class="shape-3"><img src="{{ asset('assets/img/hero/shape3.png') }}" alt="img"></div>
                                <div class="content"><div class="icon"><img src="{{ asset('assets/img/hero/icon1.png') }}" alt=""></div><h1>Where Learning Feels Like Play</h1></div>
                                <div class="hero-button"><a href="{{ url('/admissions') }}" class="theme-btn">Online Admission <i class="icon-arrow-icon"></i></a></div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
   </div>
   <div class="text-circle-box">
        <img src="{{ asset('assets/img/hero/circle.png') }}" alt="img">
        <div class="circle-text"><img src="{{ asset('assets/img/hero/text-circle.png') }}" alt="img"></div>
        <a class="video-popup" href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"><i class="fas fa-play"></i></a>
    </div>
</section>

<!-- Work Process -->
<section class="work-process-section">
    <div class="bg-shape d-none d-xxl-block"><img src="{{ asset('assets/img/work-process/big-shape.png') }}" alt="shape-image"></div>
    <div class="flower-shape d-none d-xxl-block"><img src="{{ asset('assets/img/work-process/sunflower.png') }}" alt="shape-image"></div>
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s"><div class="work-process-items"><div class="work-image"><img src="{{ asset('assets/img/work-process/image1.png') }}" alt="image"></div><div class="work-content"><h2>Home-Like Loving Environment</h2><p>A second home for your child where every little one feels loved, cared for and happy.</p></div></div></div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s"><div class="work-process-items"><div class="work-image"><img src="{{ asset('assets/img/work-process/image2.png') }}" alt="image"></div><div class="work-content"><h2> Safety & CCTV Surveillance</h2><p>Your child's safety is our responsibility with full CCTV coverage and trained staff.</p></div></div></div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s"><div class="work-process-items"><div class="work-image"><img src="{{ asset('assets/img/work-process/image3.png') }}" alt="image"></div><div class="work-content"><h2>Experienced & Caring Teachers</h2><p>Qualified and loving female teachers who don't just teach, but nurture like mothers.</p></div></div></div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s"><div class="work-process-items"><div class="work-image"><img src="{{ asset('assets/img/work-process/image4.png') }}" alt="image"></div><div class="work-content"><h2>Learn Through Play</h2><p>No rote learning, only overall development through fun activities, rhymes and stories.</p></div></div></div>
        </div>
    </div>
</section>

<!-- Brand -->
<div class="brand-section fix">
    <div class="container">
        <div class="swiper brand-slider">
            <div class="swiper-wrapper"> 
                <div class="swiper-slide"><div class="brand-image"><img src="{{ asset('assets/img/brand/brand-01.png') }}" alt="img"></div></div>
                <div class="swiper-slide"><div class="brand-image"><img src="{{ asset('assets/img/brand/brand-02.png') }}" alt="img"></div></div>
                <div class="swiper-slide"><div class="brand-image"><img src="{{ asset('assets/img/brand/brand-03.png') }}" alt="img"></div></div>
                <div class="swiper-slide"><div class="brand-image"><img src="{{ asset('assets/img/brand/brand-04.png') }}" alt="img"></div></div>
                <div class="swiper-slide"><div class="brand-image"><img src="{{ asset('assets/img/brand/brand-05.png') }}" alt="img"></div></div>
                <div class="swiper-slide"><div class="brand-image"><img src="{{ asset('assets/img/brand/brand-06.png') }}" alt="img"></div></div>
            </div>
        </div> 
    </div>                 
</div> 

<!-- About Section -->
<section class="about-section-two section-padding fix">
    <div class="love-shape float-bob-x"><img src="{{ asset('assets/img/about/love.png') }}" alt="shape-img"></div>
    <div class="container">
        <div class="about-wrapper-2">
            <div class="row g-4">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-image-two">
                        <img src="{{ asset('assets/img/about/about-2.png') }}" alt="about-image" class="wow zoomIn" data-wow-delay=".4s">
                        <div class="img-two img-custom-anim-bottom"><img src="{{ asset('assets/img/about/about-3.png') }}" alt="about-image"></div>
                        <div class="perasute-shape"><img src="{{ asset('assets/img/about/perasute.png') }}" alt="shape-image"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-two">
                        <div class="section-title"><span class="sub-title wow fadeInUp" data-wow-delay=".3s">About Us</span><h2 class="char-animation">Safe, Fun & <span>Educational</span> – A Second Home For Your Child</h2></div>
                        <p class="wow fadeInUp mt-3 mt-md-0" data-wow-delay=".3s">At Play School Day Care and Play School, Greater Noida, we provide a secure, hygienic and joyful environment where children from 1.5 years onwards learn, play and grow with confidence. Trusted by working parents.</p>
                        <div class="icon-box-items">
                            <div class="icon-item wow fadeInUp" data-wow-delay=".5s"><div class="icon"><img src="{{ asset('assets/img/about/icon1.svg') }}" alt="icon-image"></div><div class="content"><h3 class="mb-2">Early Learning Program</h3><p>Play-based learning with phonics, numbers, rhymes, storytelling and sensory activities to build strong foundation for big school.</p></div></div>
                            <div class="icon-item wow fadeInUp" data-wow-delay=".7s"><div class="icon style-2"><img src="{{ asset('assets/img/about/icon2.svg') }}" alt="icon-image"></div><div class="content"><h4 class="mb-2">Loving & Trained Staff</h4><p>Our caring female teachers and didis are trained in child care, hygiene and safety, giving mother-like love to every child.</p></div></div>
                        </div>
                        <div class="about-two-button wow fadeInUp" data-wow-delay=".8s">
                            <a href="{{ url('/about') }}" class="theme-btn">Admission Open <i class="icon-arrow-icon"></i></a>
                            <div class="wave-area"><div class="promo-video"><div class="waves-block"><div class="waves wave-1"></div><div class="waves wave-2"></div><div class="waves wave-3"></div></div><a class="video-popup" href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"><i class="fas fa-play"></i></a></div><p class="video-text">Watch Our School</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Learning Section Start -->
<section class="learning-section section-padding fix">
    <div class="shadow-shape"><img src="{{ asset('assets/img/learning/shadow.png') }}" alt="shape-image"></div>
    <div class="sky-shape float-bob-y"><img src="{{ asset('assets/img/learning/sky.png') }}" alt="shape-image"></div>
    <div class="rocket-shape float-bob-x"><img src="{{ asset('assets/img/learning/rocket.png') }}" alt="shape-image"></div>
    <div class="container">
        <div class="section-title text-center custom-padding-top">
            <span class="sub-title style-2 wow fadeInUp" data-wow-delay=".3s">Our Programs</span>
            <h2 class="char-animation text-white">Nurturing <span>Young Minds</span> – with  <br> Love, Care & Learning</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".5s">
                <div class="learning-box-items"><div class="learning-bg"></div>
                    <div class="learning-image"><img src="{{ asset('assets/img/learning/learning1.png') }}" alt="learning-image"></div>
                    <div class="thumb-icon"><img src="{{ asset('assets/img/learning/icon-bg1.png') }}" alt="shape-img"><div class="icon"><img src="{{ asset('assets/img/learning/icon1.svg') }}" alt="icon-image"></div></div>
                    <div class="learning-content"><h3><a href="{{ url('/program') }}">Play Group & <br> Day Care</a></h3><p>Safe day care for 1.5 to 3 years with healthy meals, nap time, and joyful play activities for working parents in Greater Noida.</p><a href="{{ url('/program') }}" class="arrow-icon"><i class="fas fa-arrow-right"></i></a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="learning-box-items"><div class="learning-bg"></div>
                    <div class="learning-image"><img src="{{ asset('assets/img/learning/learning2.png') }}" alt="learning-image"></div>
                    <div class="thumb-icon"><img src="{{ asset('assets/img/learning/icon-bg2.png') }}" alt="shape-img"><div class="icon"><img src="{{ asset('assets/img/learning/icon2.svg') }}" alt="icon-image"></div></div>
                    <div class="learning-content"><h3><a href="{{ url('/program') }}">Nursery & <br> Creativity Club</a></h3><p>Phonics, storytelling, drawing, dance and music to boost confidence, speech and imagination in a fun way.</p><a href="{{ url('/program') }}" class="arrow-icon color-2"><i class="fas fa-arrow-right"></i></a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                <div class="learning-box-items"><div class="learning-bg"></div>
                    <div class="learning-image"><img src="{{ asset('assets/img/learning/learning3.png') }}" alt="learning-image"></div>
                    <div class="thumb-icon"><img src="{{ asset('assets/img/learning/icon-bg3.png') }}" alt="shape-img"><div class="icon"><img src="{{ asset('assets/img/learning/icon3.svg') }}" alt="icon-image"></div></div>
                    <div class="learning-content"><h3><a href="{{ url('/program') }}">KG Preparation & <br> Activity Based Learning</a></h3><p>School readiness program with writing practice, numbers, and problem-solving activities for smooth admission to big school.</p><a href="{{ url('/program') }}" class="arrow-icon color-3"><i class="fas fa-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Section Start -->
<div class="video-section fix"><div class="container"><div class="video-wrapper zoom-effect-style"><div class="vedio-image"><img src="{{ asset('assets/img/vedio/vedio-bg.jpg') }}" alt="vedio-image"></div><div class="vedio-box"><div class="wave-area vedio-wave-area"><div class="promo-video"><div class="waves-block"><div class="waves wave-1 vw-style"></div><div class="waves wave-2 vw-style"></div><div class="waves wave-3 vw-style"></div></div><a class="video-popup style-two" href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"><i class="fas fa-play"></i></a></div></div></div></div></div></div>

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
        <div class="section-title text-center"><span class="sub-title">Our Fee Plans</span><h2 class="char-animation">Affordable & Transparent <span>Fee Structure</span></h2></div>
        <div class="pricing-wrapper">
            <div class="pricing-items wow fadeInRight" data-wow-delay=".5s"><div class="pricing-content"><div class="pricing-header"><span>🌼 Play Group</span><p>Perfect for toddlers 1.5 to 2.5 years - first step to social learning.</p></div><div class="pricing-rate"><h2>₹3,500 <span>/ Per Month</span></h2></div><ul class="pricing-list"><li><i class="fas fa-check"></i> Half-Day (9 AM – 12:30 PM)</li><li><i class="fas fa-check"></i> Rhymes & Story Time</li><li><i class="fas fa-check"></i> Healthy Snacks Included</li><li><i class="fas fa-check"></i> No Admission Fee</li><li><i class="fas fa-check"></i> CCTV & Safe Campus</li></ul><div class="pricing-button"><a href="{{ url('/contact') }}" class="border-btn">Enquire Now<i class="icon-arrow-icon"></i></a></div></div></div>
            <div class="pricing-items items-two wow fadeInUp" data-wow-delay=".2s"><span class="top-text">Most Popular</span><div class="pricing-content"><div class="pricing-header"><span>🌟 Day Care + Play School</span><p>Most chosen by working parents in Greater Noida - full care and learning.</p></div><div class="pricing-rate"><h2>₹6,500 <span>/ Per Month</span></h2></div><ul class="pricing-list"><li><i class="fas fa-check"></i> Full Day (9 AM – 6 PM)</li><li><i class="fas fa-check"></i> Lunch + Evening Snacks</li><li><i class="fas fa-check"></i> Nap Time & Hygiene Care</li><li><i class="fas fa-check"></i> Activity Based Learning</li><li><i class="fas fa-check"></i> Daily Photo Updates to Parents</li><li><i class="fas fa-check"></i> Weekend Off Available</li></ul><div class="pricing-button"><a href="{{ url('/contact') }}" class="border-btn style-2 active">Enquire Now<i class="icon-arrow-icon"></i></a></div></div></div>
            <div class="pricing-items items-three wow fadeInLeft" data-wow-delay=".5s"><div class="pricing-content"><div class="pricing-header"><span>🏅 Nursery & KG Prep</span><p>For 3 to 6 years - complete preparation for formal school admission.</p></div><div class="pricing-rate"><h2>₹4,500 <span>/ Per Month</span></h2></div><ul class="pricing-list"><li><i class="fas fa-check"></i> Half-Day (9 AM – 1 PM)</li><li><i class="fas fa-check"></i> Phonics, Numbers & Writing</li><li><i class="fas fa-check"></i> Dance, Drawing & Games</li><li><i class="fas fa-check"></i> School Interview Preparation</li><li><i class="fas fa-check"></i> Annual Day & Events</li></ul><div class="pricing-button"><a href="{{ url('/contact') }}" class="border-btn">Enquire Now<i class="icon-arrow-icon"></i></a></div></div></div>
        </div>
        <div class="newsletter-section newsletter-two section-padding pb-0 fix">
                    <div class="container">
                        <div class="section-title text-center">
                            <span class="sub-title tittle-bg wow fadeInUp" data-wow-delay=".3s">Get In Touch</span>
                            <h2 class="char-animation text-white">
                                Book A Free School Tour
                            </h2>
                        </div>
                        <div class="signUp-box mt-3 mt-md-0">
                            <form id="signupForm">
                                <div class="input-wrapper input-style wow fadeInLeft" data-wow-delay=".4s">
                                    <input type="email" id="emailInput" placeholder="Enter your mobile number" required>
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
<section class="feature-section section-padding fix">
    <div class="sun-shape float-bob-y"><img src="{{ asset('assets/img/feature/sun.png') }}" alt="shape-image"></div>
    <div class="sky-shape"><img src="{{ asset('assets/img/feature/sky.png') }}" alt="shape-image"></div>
    <div class="butterfly-shape float-bob-y"><img src="{{ asset('assets/img/feature/butterfly.png') }}" alt="shape-image"></div>
    <div class="container"><div class="feature-wrapper"><div class="row g-4">
        <div class="col-xl-6 col-lg-6"><div class="feature-content"><div class="section-title"><span class="sub-title wow fadeInUp" data-wow-delay=".3s">Why Choose Us</span><h2 class="char-animation">Our Passion <span>is Childhood,</span> <br> & We Love To Nurture It</h2></div><p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".3s">At Play School, Greater Noida, we don't just run a day care, we build a safe, clean and happy second home where your child learns good habits, confidence and values.</p>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s"><div class="feature-list"><div class="icon"><img src="{{ asset('assets/img/feature/icon1.png') }}" alt="icon-image"></div><div class="content"><h3>Caring & Trained Female Staff</h3></div></div></div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s"><div class="feature-list color-2"><div class="icon"><img src="{{ asset('assets/img/feature/icon1.png') }}" alt="icon-image"></div><div class="content"><h3>Full CCTV & Secure Campus</h3></div></div></div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s"><div class="feature-list color-3"><div class="icon"><img src="{{ asset('assets/img/feature/icon1.png') }}" alt="icon-image"></div><div class="content"><h3>Hygienic Food & Clean Washrooms</h3></div></div></div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s"><div class="feature-list color-4"><div class="icon"><img src="{{ asset('assets/img/feature/icon1.png') }}" alt="icon-image"></div><div class="content"><h3>Daily Updates on WhatsApp</h3></div></div></div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s"><div class="feature-list color-5"><div class="icon"><img src="{{ asset('assets/img/feature/icon1.png') }}" alt="icon-image"></div><div class="content"><h3>Play-Based & Activity Learning</h3></div></div></div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s"><div class="feature-list color-6"><div class="icon"><img src="{{ asset('assets/img/feature/icon1.png') }}" alt="icon-image"></div><div class="content"><h3>Affordable Fee for Working Parents</h3></div></div></div>
            </div>
            <div class="feature-button-area wow fadeInUp" data-wow-delay=".9s"><a href="{{ url('/contact') }}" class="theme-btn">Book A Visit <i class="icon-arrow-icon"></i></a><div class="user-group"><img src="{{ asset('assets/img/feature/group-men.png') }}" alt="group-img"><h4>Trusted by 500+ <br>Parents in Greater Noida</h4></div></div>
        </div></div>
        <div class="col-xl-6 col-lg-6"><div class="feature-image"><div class="feature-bg"><img class="img-custom-anim-top" src="{{ asset('assets/img/feature/feature1.png') }}" alt="feature-image"></div><a href="tel:+919999999999"><i class="fas fa-phone-alt"></i>+91 99999 99999</a></div></div>
    </div></div></div>
</section>

<!-- Testimonial Section Start -->
<section class="testimonial-section-2 section-padding pt-0 fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">Parents Feedback</span>
            <h2 class="char-animation">What <span>Parents Say</span> <br> About Us</h2>
        </div>
        <div class="testimonial-wrapper-2">
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="testimonial-box-items">
                            <div class="testi-item-bg"><img src="{{ asset('assets/img/testimonial/bg-border-1.png') }}" alt="shape-image"></div>
                            <div class="testimonial-content">
                                <div class="client-image-2">
                                    <img src="{{ asset('assets/img/testimonial/client1.png') }}" alt="client-image">
                                    <ul class="icon"><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul>
                                </div>
                                <p>“As working parents, Play School is a blessing. My 2.5 year old daughter loves to go to school daily. ”</p>
                                <div class="client-info-2"><h3>Priya Sharma</h3><p>Mother of Anaya - Play Group</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".4s">
                        <div class="testimonial-box-items">
                            <div class="testi-item-bg"><img src="{{ asset('assets/img/testimonial/bg-border-2.png') }}" alt="shape-image"></div>
                            <div class="testimonial-content">
                                <div class="client-image-2">
                                    <img src="{{ asset('assets/img/testimonial/client2.png') }}" alt="client-image">
                                    <ul class="icon"><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul>
                                </div>
                                <p>“Best day care in Greater Noida. CCTV access, daily photos on WhatsApp and hygienic food. ”</p>
                                <div class="client-info-2"><h3>Rohit Singh</h3><p>Father of Aarav - Day Care</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".6s">
                        <div class="testimonial-box-items">
                            <div class="testi-item-bg"><img src="{{ asset('assets/img/testimonial/bg-border-3.png') }}" alt="shape-image"></div>
                            <div class="testimonial-content">
                                <div class="client-image-2">
                                    <img src="{{ asset('assets/img/testimonial/client3.png') }}" alt="client-image">
                                    <ul class="icon"><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul>
                                </div>
                                <p>“Very affordable fee and loving staff. My daughter was prepared so well for big school interview. Thank you Play School team!”</p>
                                <div class="client-info-2"><h3>Neha Gupta</h3><p>Mother of Myra - Nursery</p></div>
                            </div>
                        </div>
                    </div>
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
<div class="gallery-section m-2 mt-0 mb-0 fix">
    <div class="item-bg"><img src="{{ asset('assets/img/gallery/Gallery-bg.png') }}" alt="bg-image"></div>
    <div class="item-bg-2"><img src="{{ asset('assets/img/gallery/Gallery-bg.png') }}" alt="bg-image"></div>
    <div class="gallery-wrapper"><div class="row g-2">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery-image wow flipInY" data-wow-delay=".9s"><a href="{{ asset('assets/img/gallery/gallery-1.jpg') }}" class="img-popup"><img src="{{ asset('assets/img/gallery/gallery-1.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
            <div class="gallery-image mt-2 wow flipInY" data-wow-delay=".9s"><a href="{{ asset('assets/img/gallery/gallery-2.jpg') }}" class="img-popup"><img src="{{ asset('assets/img/gallery/gallery-2.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6"><div class="gallery-image image-2 wow flipInY" data-wow-delay=".9s"><a href="{{ asset('assets/img/gallery/gallery-3.jpg') }}" class="img-popup"><img src="{{ asset('assets/img/gallery/gallery-3.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery-image wow flipInY" data-wow-delay=".9s"><a href="{{ asset('assets/img/gallery/gallery-4.jpg') }}" class="img-popup"><img src="{{ asset('assets/img/gallery/gallery-4.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
            <div class="gallery-image mt-2 wow flipInY" data-wow-delay=".9s"><a href="{{ asset('assets/img/gallery/gallery-5.jpg') }}" class="img-popup"><img src="{{ asset('assets/img/gallery/gallery-5.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="gallery-image wow flipInY" data-wow-delay=".9s"><a href="{{ asset('assets/img/gallery/gallery-6.jpg') }}" class="img-popup"><img src="{{ asset('assets/img/gallery/gallery-6.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
            <div class="gallery-image mt-2 wow flipInY" data-wow-delay=".9s"><a href="{{ asset('assets/img/gallery/gallery-7.jpg') }}" class="img-popup"><img src="{{ asset('assets/img/gallery/gallery-7.jpg') }}" alt="img"><div class="icon"><i class="fal fa-plus"></i></div></a></div>
        </div>
    </div></div>
</div>
 <!-- Faq Section Start -->
        <section class="faq-section section-padding pb-0 fix">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="faq-tittle">
                                <div class="section-title">
                                    <span class="sub-title wow fadeInUp">Our FAQ's</span>
                                    <h2 class="char-animation">
                                        Frequently <span>Asked</span> <br> Questions About Play School
                                    </h2>
                                      <p class="mt-3 wow fadeInUp" data-wow-delay=".5s">Everything that parents in Greater Noida ask before admission. Still have a question? Visit us or call us for a free school tour.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-box-item">
                                <ul class="accordion-box">
                                    <!--Block-->
                                    <li class="accordion block active-block wow fadeInUp">
                                        <div class="acc-btn active">
                                        1. What age group do you accept?
                                            <div class="icon far fa-plus-circle"></div>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">
                                               We accept children from 1.5 years to 6 years. Programs: Play Group (1.5-2.5 yrs), Nursery (2.5-4 yrs), KG Prep (4-6 yrs) and Full Day Day Care facility for working parents.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".2s">
                                        <div class="acc-btn">
                                        2. What are your school and day care timings?
                                            <div class="icon far fa-plus-circle"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                            <div class="text">
                                              Play School: 9:00 AM to 1:00 PM. Day Care: 9:00 AM to 6:30 PM (Monday to Saturday). We also have extended hours and half-day options on request for working parents.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".4s">
                                        <div class="acc-btn">
                                       3. Do you provide meals and is it hygienic?
                                            <div class="icon far fa-plus-circle"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                               Yes, we provide fresh, home-like vegetarian lunch and evening snacks. RO water, clean washrooms, daily sanitization and no junk food. You can also send home food if you prefer.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".6s">
                                        <div class="acc-btn">
                                       4. How is safety and how will I get updates?
                                            <div class="icon far fa-plus-circle"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                               Full CCTV surveillance, female staff only, child-safe furniture, and gated campus. You get daily photos, videos and updates on WhatsApp so you can see what your child did all day.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Block-->
                                    <li class="accordion block wow fadeInUp" data-wow-delay=".8s">
                                        <div class="acc-btn">
                                       5. What is your teacher-child ratio and fees?
                                            <div class="icon far fa-plus-circle"></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                We maintain 1 teacher for every 8-10 children for personal attention. Fee is very affordable starting from Rs. 3500/month. No hidden charges. Come for a free demo class.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- News Section -->
<div class="news-section-two section-padding fix">
    <div class="perasute-shape float-bob-y"><img src="{{ asset('assets/img/news/perasute.png') }}" alt="shape-image"></div>
    <div class="tubelight-shape"><img src="{{ asset('assets/img/news/tubelight.png') }}" alt="shape-image"></div>
    <div class="container">
        <div class="section-title text-center"><span class="sub-title wow fadeInUp">Parenting Tips & Events</span><h2 class="char-animation">Our Latest <span>Activities</span> & News</h2></div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s"><div class="news-items-tow"><div class="news-image-tow"><img src="{{ asset('assets/img/news/news4.jpg') }}" alt="news-image"></div><div class="post"><span>Activities</span></div><div class="news-content-two"><div class="thumb-icon-box"><div class="thumb-icon"><img src="{{ asset('assets/img/news/circle1.png') }}" alt="shape-image"></div><div class="date"><h3>15</h3><span>Aug</span></div></div><div class="author-name"><span><i class="far fa-user"></i> Play School</span></div><h3><a href="{{ url('/news') }}" class="underline">Annual Day & Fancy Dress Competition at Play School</a></h3><p>Our little stars performed with full confidence. Dance, rhymes and fancy dress made the day memorable for parents in Greater Noida.</p></div></div></div>
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s"><div class="news-items-tow"><div class="news-image-tow"><img src="{{ asset('assets/img/news/news5.jpg') }}" alt="news-image"></div><div class="post"><span>Parenting</span></div><div class="news-content-two"><div class="thumb-icon-box"><div class="thumb-icon"><img src="{{ asset('assets/img/news/circle1.png') }}" alt="shape-image"></div><div class="date"><h3>05</h3><span>Sep</span></div></div><div class="author-name"><span><i class="far fa-user"></i> Play School</span></div><h3><a href="{{ url('/news') }}" class="underline">How We Make Your Child Ready for Big School Interview</a></h3><p>From phonics to good manners, our activity-based learning helps children speak confidently and clear the formal school admission easily.</p></div></div></div>
        </div>
    </div>
</div>

<div class="learning-section-two fix">
    <div class="container">
        <div class="learning-wrapper text-center zoom-effect-style">
            <div class="flower-shape"><img src="{{ asset('assets/img/learning/flower.png') }}" alt="shape-image"></div>
            <div class="learning-bg"></div>
            <div class="section-title"><span class="sub-title tittle-bg text-white wow fadeInUp">Start Learning</span>
            <h2 class="char-animation text-white">Where Every Little <span>Step Leads to</span> <br> Big Discoveries</h2>
            <div class="learning-button"><a href="{{ url('/contact') }}" class="theme-btn wow fadeInLeft" data-wow-delay=".4s">Online Admission <i class="icon-arrow-icon"></i></a><a href="tel:12093939093" class="border-btn learn-btn wow fadeInRight" data-wow-delay=".4s"><i class="fas fa-phone-alt"></i> (120) 93 939 093</a>
        </div>
    </div>
</div>
</div>
</div>

@endsection