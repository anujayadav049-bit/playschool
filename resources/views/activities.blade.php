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
                <li> Activities</li>
            </ul>
            <h1 class="char-animation">Activities</h1>
        </div>
    </div>
</div>
<!-- Breadcrumb Section end -->

<!-- Activities Section Start - ADDED CONTENT -->
<section class="program-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">Our Fun Activities</span>
            <h2 class="char-animation">Learning Through <span>Play & Fun</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="program-box-item style-2">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-1.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-1.png') }}" alt=""></div>
                    <div class="program-bg"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/book.png') }}" alt=""></div>
                    <div class="program-content"><h3>Drawing & Art</h3><span>Creative Fun</span><p>Coloring, craft and creative art to boost imagination in kids.</p><a href="#" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="program-box-item">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-2.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-2.png') }}" alt=""></div>
                    <div class="program-bg bg-2"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/phone.png') }}" alt=""></div>
                    <div class="program-content"><h3>Music & Dance</h3><span>Rhyme Time</span><p>Daily rhymes, music, dance and singing for joyful learning.</p><a href="#" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="program-box-item style-2">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-3.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-3.png') }}" alt=""></div>
                    <div class="program-bg bg-3"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/boy.png') }}" alt=""></div>
                    <div class="program-content"><h3>Sports & Games</h3><span>Physical Play</span><p>Outdoor games, sports and physical activities for health.</p><a href="#" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="program-box-item">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-4.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-4.png') }}" alt=""></div>
                    <div class="program-bg bg-4"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/camical-book.png') }}" alt=""></div>
                    <div class="program-content"><h3>Story Telling</h3><span>Imagination</span><p>Interactive moral stories to improve language and values.</p><a href="#" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="program-box-item">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-2.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-2.png') }}" alt=""></div>
                    <div class="program-bg bg-2"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/book.png') }}" alt=""></div>
                    <div class="program-content"><h3>Puzzle & Blocks</h3><span>Brain Games</span><p>Building blocks, puzzles for brain development and logic.</p><a href="#" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="program-box-item style-2">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-1.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-1.png') }}" alt=""></div>
                    <div class="program-bg"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/camical-book.png') }}" alt=""></div>
                    <div class="program-content"><h3>Science Fun</h3><span>Curiosity</span><p>Simple safe experiments to create curiosity in little minds.</p><a href="#" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="program-box-item">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-3.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-3.png') }}" alt=""></div>
                    <div class="program-bg bg-3"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/boy.png') }}" alt=""></div>
                    <div class="program-content"><h3>Yoga & Meditation</h3><span>Healthy Mind</span><p>Simple yoga and meditation for focus and calmness.</p><a href="#" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="program-box-item style-2">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-4.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-4.png') }}" alt=""></div>
                    <div class="program-bg bg-4"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/phone.png') }}" alt=""></div>
                    <div class="program-content"><h3>Festival Celebration</h3><span>Culture</span><p>All festivals celebrated to teach culture and togetherness.</p><a href="#" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Activities Section End -->
 @endsection