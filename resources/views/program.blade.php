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
            @forelse($programs as $program)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="classes-box-item mt-0 box-shadow">
                    <div class="classes-image">
                        @if($program->image)
                            <img src="{{ asset('storage/'.$program->image) }}" alt="{{ $program->title }}">
                        @else
                            <img src="{{ asset('assets/img/classes/classes1.jpg') }}" alt="classes-image">
                        @endif
                        <div class="date-box">
                            <span><i class="far fa-calendar-alt"></i> {{ $program->created_at->format('M d, Y') }}</span>
                        </div>
                    </div>
                    <div class="classes-content">
                        <div class="location">
                            <span><i class="fa-solid fa-location-dot"></i> {{ $program->age_group ?? '2-6 Years' }}</span>
                        </div>
                        <h2><a href="{{ url('/program-details/'.$program->id) }}">{{ $program->title }}</a></h2>
                        <p style="font-size:13px; color:#666;">{{ Str::limit($program->description, 80) }}</p>
                        <div class="classes-rate">
                            <a href="{{ url('/program-details/'.$program->id) }}" class="border-btn">Get Ticket<i class="icon-arrow-icon"></i></a>
                            <div class="rate"><p>(10 Review)</p><ul><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li></ul></div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center"><p>No Programs Added Yet. Please add from Admin Panel.</p></div>
            @endforelse
        </div>
    </div>
</section>
 @endsection