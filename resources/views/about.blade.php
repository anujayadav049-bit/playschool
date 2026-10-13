@extends('layouts.app')
@section('content')

<!-- Breadcrumb Section start -->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.png') }}');">
    <div class="sun-shape"><img src="{{ asset('assets/img/sun.png') }}" alt="shape-image"></div>
    <div class="cloud-shape float-bob-x"><img src="{{ asset('assets/img/cloud.png') }}" alt="shape-image"></div>
    <div class="perashute-shape float-bob-y"><img src="{{ asset('assets/img/perasute.png') }}" alt="shape-image"></div>
    <div class="tree-shape"><img src="{{ asset('assets/img/tree.png') }}" alt="shape-image"></div>
    <div class="bottom-shape"><img src="{{ asset('assets/img/breadcrumb-shape.png') }}" alt="img"></div>
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li> About US</li>
            </ul>
            <h1 class="char-animation">About US</h1>
        </div>
    </div>
</div>

<!-- Choose Section Start -->
<section class="choose-us-section section-padding fix">
    <div class="perasute-shape float-bob-y"><img src="{{ asset('assets/img/choose/perasute.png') }}" alt="shape-img"></div>
    <div class="butterfly-shape float-bob-y"><img src="{{ asset('assets/img/choose/butarfly.png') }}" alt="shape-img"></div>
    <div class="zikzak-shape float-bob-x"><img src="{{ asset('assets/img/choose/zikzak.png') }}" alt="shape-img"></div>
    <div class="coun-shape float-bob-y"><img src="{{ asset('assets/img/choose/coun-shape.png') }}" alt="shape-img"></div>
    <div class="container">
        <div class="choose-us-wrapper">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="choose-img-box">
                        <img class="style-2 img-custom-anim-left" src="{{ asset('assets/img/choose/choose2.jpg') }}" alt="choose-image">
                        <img class="img-custom-anim-bottom" src="{{ asset('assets/img/choose/choose1.png') }}" alt="choose-image">
                        <div class="img-3"><img class="img-custom-anim-right" src="{{ asset('assets/img/choose/choose3.png') }}" alt="choose-image"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-us-content">
                        <div class="section-title text-left">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Why Choose Us</span>
                            <h2 class="char-animation">Where Every <span>Little Step </span> <br> Leads to Big Discoveries</h2>
                        </div>
                        <p class="mt-3 mt-md-0 fadeInUp" data-wow-delay=".5s">Dolor sit amet, consectetur adipiscing elit. Nibh ullamcorper felis arcu elementum. Viverra lectus nullam sagittis nunc imperdiet.</p>
                        <div class="icon-items wow fadeInUp" data-wow-delay=".6s">
                            <div class="icon"><img src="{{ asset('assets/img/choose/bricks-1.svg') }}" alt="svg-image"></div>
                            <div class="content"><h3 class="mb-2">Early Learning</h3><p>Kindergarten is an early childhood educational environment where most young children engage in foundational.</p></div>
                        </div>
                        <div class="progress-wrap wow fadeInUp" data-wow-delay=".7s">
                            <div class="pro-items"><div class="pro-head"><h4 class="title">Creativity</h4><span class="point">90%</span></div><div class="ber-box"><div class="progress"><div class="progress-value"></div></div></div></div>
                            <div class="pro-items"><div class="pro-head"><h4 class="title">Experiences</h4><span class="point">70%</span></div><div class="ber-box style-2"><div class="progress progress-2"><div class="progress-value style-two"></div></div></div></div>
                        </div>
                        <div class="choose-button wow fadeInUp" data-wow-delay=".9s"><a href="{{ url('/contact') }}" class="theme-btn">Start Your Learning <i class="icon-arrow-icon"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Program Section Start -->
<section class="program-section section-padding pt-0 fix">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="program-box-item style-2">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-1.png') }}" alt="icon-image"></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-1.png') }}" alt="icon-image"></div>
                    <div class="program-bg"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/book.png') }}" alt="icon-image"></div>
                    <div class="program-content"><h3>Toddler</h3><span>(1,5 – 3 years)</span><p>Dolor sit amet, adipiscing elit. Nibh ullamcorper felis arcu elementum.</p><a href="{{ url('/program') }}" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="program-box-item">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-2.png') }}" alt="icon-image"></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-2.png') }}" alt="icon-image"></div>
                    <div class="program-bg bg-2"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/phone.png') }}" alt="icon-image"></div>
                    <div class="program-content"><h3>Preschool</h3><span>(2 – 3 years)</span><p>Dolor sit amet, adipiscing elit. Nibh ullamcorper felis arcu elementum.</p><a href="{{ url('/program') }}" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="program-box-item style-2">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-3.png') }}" alt="icon-image"></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-3.png') }}" alt="icon-image"></div>
                    <div class="program-bg bg-3"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/boy.png') }}" alt="icon-image"></div>
                    <div class="program-content"><h3>Kindergarten</h3><span>(3 – 4 years)</span><p>Dolor sit amet, adipiscing elit. Nibh ullamcorper felis arcu elementum.</p><a href="{{ url('/program') }}" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="program-box-item">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-4.png') }}" alt="icon-image"></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-4.png') }}" alt="icon-image"></div>
                    <div class="program-bg bg-4"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/camical-book.png') }}" alt="icon-image"></div>
                    <div class="program-content"><h3>Pre-K Program</h3><span>(4 – 5 years)</span><p>Dolor sit amet, adipiscing elit. Nibh ullamcorper felis arcu elementum.</p><a href="{{ url('/program') }}" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brand Section Start -->
<div class="brand-section section-padding fix">
    <div class="container">
        <div class="swiper brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><div class="brand-image image-2"><img src="{{ asset('assets/img/brand/brand-01.png') }}" alt="img"></div></div>
                <div class="swiper-slide"><div class="brand-image image-2"><img src="{{ asset('assets/img/brand/brand-02.png') }}" alt="img"></div></div>
                <div class="swiper-slide"><div class="brand-image image-2"><img src="{{ asset('assets/img/brand/brand-03.png') }}" alt="img"></div></div>
                <div class="swiper-slide"><div class="brand-image image-2"><img src="{{ asset('assets/img/brand/brand-04.png') }}" alt="img"></div></div>
                <div class="swiper-slide"><div class="brand-image image-2"><img src="{{ asset('assets/img/brand/brand-05.png') }}" alt="img"></div></div>
                <div class="swiper-slide"><div class="brand-image image-2"><img src="{{ asset('assets/img/brand/brand-06.png') }}" alt="img"></div></div>
            </div>
        </div>
    </div>
</div>

<!-- Team Section Start -->
<div class="team-section-two section-padding pt-0 fix">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-6"><div class="section-title"><span class="sub-title wow fadeInUp">Our Teacher</span><h2 class="char-animation">Most <span>Dedicated Staff</span> <br> for Your Child</h2><p class="mt-3 wow fadeInUp" data-wow-delay=".3s">Dolor sit amet, consectetur adipiscing elit. Nibh ullamcorper felis arcu <br> elementum. Viverra lectus nullam sagittis nunc imperdiet.</p></div></div>
            @php $teams = [['team4.jpg','Sarah William'],['team5.jpg','Olivia Brown'],['team6.jpg','James Miller'],['team7.jpg','Sophia Williams'],['team8.jpg','Emily Johnson'],['team9.jpg','Daniel Carter']]; @endphp
            @foreach($teams as $team)
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="team-box">
                    <div class="team-image"><img src="{{ asset('assets/img/team/'.$team[0]) }}" alt="team-image"></div>
                    <div class="social-profile"><ul class="social-icon"><li><a href="#"><i class="fab fa-facebook-f"></i></a></li><li><a href="#"><i class="fab fa-instagram"></i></a></li><li><a href="#"><i class="fab fa-linkedin-in"></i></a></li><li><a href="#"><i class="fab fa-twitter"></i></a></li></ul><a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a></div>
                    <div class="team-content"><h3><a href="{{ url('/team') }}">{{ $team[1] }}</a></h3><p>Online Teacher</p></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Testimonial Section Start -->
<section class="testimonial-section-three section-padding fix">
    <div class="client-one"><img src="{{ asset('assets/img/testimonial/client4.png') }}" alt="client-image"></div>
    <div class="client-two"><img src="{{ asset('assets/img/testimonial/client5.png') }}" alt="client-image"></div>
    <div class="client-three"><img src="{{ asset('assets/img/testimonial/client6.png') }}" alt="client-image"></div>
    <div class="client-four"><img src="{{ asset('assets/img/testimonial/client7.png') }}" alt="client-image"></div>
    <div class="container">
        <div class="section-title text-center"><span class="sub-title wow fadeInUp">Our Testimonials</span><h2 class="char-animation text-white">Read &amp; <span>Student’s Parent</span> <br> Testimonials</h2></div>
        <div class="testimonial-wrapper-3">
            <div class="swiper testimonial-slider-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="testimonial-box-area-3"><div class="testimonial-box-3"><div class="client-img"><img src="{{ asset('assets/img/testimonial/client3.png') }}" alt="client-image"></div><div class="testimonial-content-3"><ul class="icon"><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul><p>"Enrolling my daughter at this kindergarten was the best decision we made. From day one, the staff made her feel welcomed, safe, and excited to learn. I’ve seen her vocabulary grow.”</p></div><div class="koma-icon"><img src="{{ asset('assets/img/testimonial/koma4.png') }}" alt="icon-image"></div></div><div class="client-name"><h3>Sarah Taylor</h3><p>Parent of 4-year-old Hana</p></div></div></div>
                    <div class="swiper-slide"><div class="testimonial-box-area-3"><div class="testimonial-box-3"><div class="client-img"><img src="{{ asset('assets/img/testimonial/client2.png') }}" alt="client-image"></div><div class="testimonial-content-3"><ul class="icon"><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul><p>"Enrolling my daughter at this kindergarten was the best decision we made. From day one, the staff made her feel welcomed, safe, and excited to learn. I’ve seen her vocabulary grow.”</p></div><div class="koma-icon"><img src="{{ asset('assets/img/testimonial/koma4.png') }}" alt="icon-image"></div></div><div class="client-name"><h3>Emily Johnson</h3><p>Parent of 4-year-old Hana</p></div></div></div>
                    <div class="swiper-slide"><div class="testimonial-box-area-3"><div class="testimonial-box-3"><div class="client-img"><img src="{{ asset('assets/img/testimonial/client4.png') }}" alt="client-image"></div><div class="testimonial-content-3"><ul class="icon"><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul><p>"Enrolling my daughter at this kindergarten was the best decision we made. From day one, the staff made her feel welcomed, safe, and excited to learn. I’ve seen her vocabulary grow.”</p></div><div class="koma-icon"><img src="{{ asset('assets/img/testimonial/koma4.png') }}" alt="icon-image"></div></div><div class="client-name"><h3>Daniel Carter</h3><p>Parent of 4-year-old Hana</p></div></div></div>
                </div>
            </div>
            <div class="array-button testimonial-array"><button class="array-prev"><i class="fal fa-arrow-left"></i></button><button class="array-next"><i class="fal fa-arrow-right"></i></button></div>
        </div>
    </div>
</section>

<!-- Conference Section Start -->
<div class="conference-section">
    <div class="container">
        <div class="conference-wrapper zoom-effect-style">
            <div class="row g-4 align-items-center">
                <div class="col-xl-4 col-lg-5"><div class="conference-image img-custom-anim-left"><img src="{{ asset('assets/img/confarence/image.jpg') }}" alt="image"></div></div>
                <div class="col-xl-8 col-lg-7"><div class="section-title mb-0"><span class="sub-title title-two wow fadeInUp">Our Conference</span><h2 class="char-animation text-white">Why would <span> baby school </span> <br> ever be banned worldwide?</h2></div></div>
            </div>
            <div class="thumb-icon-box"><div class="thumb-icon"><img src="{{ asset('assets/img/confarence/shape.png') }}" alt="shape-img"><div class="text"><h3>Book a <br> Visit</h3></div></div></div>
        </div>
    </div>
</div>

<!-- News Section Start -->
<div class="news-section-two section-padding fix">
    <div class="perasute-shape float-bob-y"><img src="{{ asset('assets/img/news/perasute.png') }}" alt="shape-image"></div>
    <div class="tubelight-shape"><img src="{{ asset('assets/img/news/tubelight.png') }}" alt="shape-image"></div>
    <div class="container">
        <div class="section-title-area"><div class="section-title"><span class="sub-title wow fadeInUp">Our Blog & News</span><h2 class="char-animation">Read <span>Our Latest</span> News</h2></div><p class="wow fadeInUp" data-wow-delay=".3s">Dolor sit amet, consectetur adipiscing elit. Nibh <br> ullamcorper felis arcu elementum.</p></div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s"><div class="little-blog-items"><div class="blog-image"><img src="{{ asset('assets/img/news/little-1.jpg') }}" alt="blog-image"></div><div class="blog-content"><p>APR 3, 2026 /<span>Children</span></p><h3><a href="{{ url('/news') }}" class="underline">What to emphasize when you are designing</a></h3></div></div></div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".4s"><div class="little-blog-items color-style-2"><div class="blog-image"><img src="{{ asset('assets/img/news/little-2.jpg') }}" alt="blog-image"></div><div class="blog-content"><p>APR 3, 2026 /<span>Children</span></p><h3><a href="{{ url('/news') }}" class="underline">How to Make Drop-Off Easier for Kids</a></h3></div></div></div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".6s"><div class="little-blog-items color-style-3"><div class="blog-image"><img src="{{ asset('assets/img/news/little-3.jpg') }}" alt="blog-image"></div><div class="blog-content"><p>APR 3, 2026 /<span>Children</span></p><h3><a href="{{ url('/news') }}" class="underline">The Importance of Social Skills in Preschool</a></h3></div></div></div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s"><div class="news-items-tow"><div class="news-image-tow"><img src="{{ asset('assets/img/news/news6.jpg') }}" alt="news-image"></div><div class="post"><span class="">Learning</span></div><div class="news-content-two"><div class="thumb-icon-box"><div class="thumb-icon"><img src="{{ asset('assets/img/news/circle1.png') }}" alt="shape-image"></div><div class="date"><h3>28</h3><span>jan</span></div></div><div class="author-name"><span><i class="far fa-user"></i> John Smith</span></div><h3><a href="{{ url('/news') }}" class="underline">The Importance of Play in Early Childhood Education</a></h3><p>Dolor sit amet, consectetur adipiscing elit. Nibh ullamcorper as felis arcu as a elementum Dolor sit amet, consectetur adipiscing elit.</p></div></div></div>
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s"><div class="news-items-tow"><div class="news-image-tow"><img src="{{ asset('assets/img/news/news7.jpg') }}" alt="news-image"></div><div class="post"><span class="">Learning</span></div><div class="news-content-two"><div class="thumb-icon-box"><div class="thumb-icon"><img src="{{ asset('assets/img/news/circle1.png') }}" alt="shape-image"></div><div class="date"><h3>28</h3><span>jan</span></div></div><div class="author-name"><span><i class="far fa-user"></i> John Smith</span></div><h3><a href="{{ url('/news') }}" class="underline">Creating a Calm Bedtime Routine for Children</a></h3><p>Dolor sit amet, consectetur adipiscing elit. Nibh ullamcorper as felis arcu as a elementum Dolor sit amet, consectetur adipiscing elit.</p></div></div></div>
        </div>
    </div>
</div>

@endsection