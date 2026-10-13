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
                <li> Our Programs</li>
            </ul>
            <h1 class="char-animation">Our Programs</h1>
        </div>
    </div>
</div>

<!-- classes Section start -->
<section class="classes-section breadcrumb-classes section-padding fix">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".5s">
                <div class="classes-box-item mt-0 box-shadow">
                    <div class="classes-image"><img src="{{ asset('assets/img/classes/classes1.jpg') }}" alt="classes-image"><div class="date-box"><span><i class="far fa-calendar-alt"></i> Jan 16, 2024</span></div></div>
                    <div class="classes-content"><div class="location"><span><i class="fa-solid fa-location-dot"></i> 6391 Elgin St. Celina, USA</span></div><h2><a href="{{ url('/program-details') }}">Last Day of School end of Year Picnic</a></h2><div class="classes-rate"><a href="{{ url('/program-details') }}" class="border-btn">Get Ticket<i class="icon-arrow-icon"></i></a><div class="rate"><p>(10 Review)</p><ul><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul></div></div></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="classes-box-item mt-0 box-shadow active">
                    <div class="classes-image"><img src="{{ asset('assets/img/classes/classes2.png') }}" alt="classes-image"><div class="date-box"><span><i class="far fa-calendar-alt"></i> Jan 16, 2024</span></div></div>
                    <div class="classes-content"><div class="location"><span><i class="fa-solid fa-location-dot"></i> 6391 Elgin St. Celina, USA</span></div><h2><a href="{{ url('/program-details') }}">Spring Garden Exploration Week for Children</a></h2><div class="classes-rate"><a href="{{ url('/program-details') }}" class="border-btn active">Get Ticket<i class="icon-arrow-icon"></i></a><div class="rate"><p>(10 Review)</p><ul><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul></div></div></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                <div class="classes-box-item mt-0 box-shadow">
                    <div class="classes-image"><img src="{{ asset('assets/img/classes/classes3.jpg') }}" alt="classes-image"><div class="date-box"><span><i class="far fa-calendar-alt"></i> Jan 16, 2024</span></div></div>
                    <div class="classes-content"><div class="location"><span><i class="fa-solid fa-location-dot"></i> 6391 Elgin St. Celina, USA</span></div><h2><a href="{{ url('/program-details') }}">Color Day Creative Festival With Creative Design</a></h2><div class="classes-rate"><a href="{{ url('/program-details') }}" class="border-btn">Get Ticket<i class="icon-arrow-icon"></i></a><div class="rate"><p>(10 Review)</p><ul><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul></div></div></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".7s">
                <div class="classes-box-item mt-0 box-shadow">
                    <div class="classes-image"><img src="{{ asset('assets/img/classes/classes01.jpg') }}" alt="classes-image"><div class="date-box"><span><i class="far fa-calendar-alt"></i> Jan 16, 2024</span></div></div>
                    <div class="classes-content"><div class="location"><span><i class="fa-solid fa-location-dot"></i> 6391 Elgin St. Celina, USA</span></div><h2><a href="{{ url('/program-details') }}">Last Day of School end of Year Picnic</a></h2><div class="classes-rate"><a href="{{ url('/program-details') }}" class="border-btn">Get Ticket<i class="icon-arrow-icon"></i></a><div class="rate"><p>(10 Review)</p><ul><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul></div></div></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="classes-box-item mt-0 box-shadow">
                    <div class="classes-image"><img src="{{ asset('assets/img/classes/classes02.jpg') }}" alt="classes-image"><div class="date-box"><span><i class="far fa-calendar-alt"></i> Jan 16, 2024</span></div></div>
                    <div class="classes-content"><div class="location"><span><i class="fa-solid fa-location-dot"></i> 6391 Elgin St. Celina, USA</span></div><h2><a href="{{ url('/program-details') }}">Last Day of School end of Year Picnic</a></h2><div class="classes-rate"><a href="{{ url('/program-details') }}" class="border-btn">Get Ticket<i class="icon-arrow-icon"></i></a><div class="rate"><p>(10 Review)</p><ul><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul></div></div></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay=".7s">
                <div class="classes-box-item mt-0 box-shadow">
                    <div class="classes-image"><img src="{{ asset('assets/img/classes/classes03.jpg') }}" alt="classes-image"><div class="date-box"><span><i class="far fa-calendar-alt"></i> Jan 16, 2024</span></div></div>
                    <div class="classes-content"><div class="location"><span><i class="fa-solid fa-location-dot"></i> 6391 Elgin St. Celina, USA</span></div><h2><a href="{{ url('/program-details') }}">Color Day Creative Festival With Creative Design</a></h2><div class="classes-rate"><a href="{{ url('/program-details') }}" class="border-btn">Get Ticket<i class="icon-arrow-icon"></i></a><div class="rate"><p>(10 Review)</p><ul><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul></div></div></div>
                </div>
            </div>
        </div>
        <div class="pagination-wrap"><a href="#" class="wow fadeInUp" data-wow-delay=".2s">01</a><a href="#" class="wow fadeInUp" data-wow-delay=".4s">02</a><span class="wow fadeInUp" data-wow-delay=".6s"><i class="fas fa-arrow-right"></i></span></div>
    </div>
</section>
 @endsection