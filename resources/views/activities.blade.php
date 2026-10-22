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
<!-- Activities Section Start - DYNAMIC WITH ADMIN IMAGE -->
<section class="program-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">Our Fun Activities</span>
            <h2 class="char-animation">Learning Through <span>Play & Fun</span></h2>
        </div>
        <div class="row g-4">
            @php
              $defaultIcons = ['book.png','phone.png','boy.png','camical-book.png','book.png','camical-book.png','boy.png','phone.png'];
            @endphp

            @foreach($activities as $i => $activity)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".{{ ($i%4+1)*2 }}s">
                <div class="program-box-item {{ $i%2==0 ? 'style-2' : '' }}">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-'.(($i%4)+1).'.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-'.(($i%4)+1).'.png') }}" alt=""></div>
                    <div class="program-bg {{ $i%4==0 ? '' : 'bg-'.(($i%4)+1) }}"></div>

                    <div class="program-icon">
                        @if($activity->image)
                            <img src="{{ asset('storage/'.$activity->image) }}" alt="{{ $activity->title }}" style="width:65px;height:65px;object-fit:cover;border-radius:50%;">
                        @else
                            <img src="{{ asset('assets/img/program/'.$defaultIcons[$i % 8]) }}" alt="">
                        @endif
                    </div>

                    <div class="program-content">
                        <h3>{{ $activity->title }}</h3>
                        <span>{{ $activity->category }}</span>
                        <p>{{ $activity->description }}</p>
                        <a href="#" class="link-btn">Learn More <i class="icon-arrow-icon"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Activities Section End -->
 @endsection