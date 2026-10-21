@extends('layouts.app')
@section('content')

@php $about = \App\Models\AboutSetting::first(); @endphp

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
                <li>About US</li>
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
                        {{-- Image 1 - choose2.jpg --}}
                        <img class="style-2 img-custom-anim-left" src="{{ $about && $about->image1 ? asset('storage/'.$about->image1) : asset('assets/img/choose/choose2.jpg') }}" alt="choose-image">

                        {{-- Image 2 - choose1.png --}}
                        <img class="img-custom-anim-bottom" src="{{ $about && $about->image2 ? asset('storage/'.$about->image2) : asset('assets/img/choose/choose1.png') }}" alt="choose-image">

                        {{-- Image 3 - choose3.png --}}
                        <div class="img-3">
                            <img class="img-custom-anim-right" src="{{ $about && $about->image3 ? asset('storage/'.$about->image3) : asset('assets/img/choose/choose3.png') }}" alt="choose-image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-us-content">
                        <div class="section-title text-left">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Why Choose Us</span>
                            <h2 class="char-animation">{!! $about->title ?? 'Where Every <span>Little Step </span> <br> Leads to Big Discoveries' !!}</h2>
                        </div>
                        <p class="mt-3 mt-md-0 fadeInUp" data-wow-delay=".5s">
                            {{ $about->description ?? 'Dolor sit amet, consectetur adipiscing elit. Nibh ullamcorper felis arcu elementum.' }}
                        </p>

                        <div class="icon-items wow fadeInUp" data-wow-delay=".6s">
                            <div class="icon"><img src="{{ asset('assets/img/choose/bricks-1.svg') }}" alt="svg-image"></div>
                            <div class="content">
                                <h3 class="mb-2">{{ $about->mission_title ?? 'Our Mission' }}</h3>
                                <p>{{ $about->mission_desc ?? 'Kindergarten is an early childhood educational environment where most young children engage in foundational.' }}</p>
                            </div>
                        </div>

                        <div class="icon-items wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon"><img src="{{ asset('assets/img/choose/bricks-1.svg') }}" alt="svg-image"></div>
                            <div class="content">
                                <h3 class="mb-2">{{ $about->vision_title ?? 'Our Vision' }}</h3>
                                <p>{{ $about->vision_desc ?? 'Kindergarten is an early childhood educational environment where most young children engage in foundational.' }}</p>
                            </div>
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






@endsection