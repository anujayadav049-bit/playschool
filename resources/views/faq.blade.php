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
                <li>Our FAQ's</li>
            </ul>
            <h1 class="char-animation">Our FAQ's</h1>
        </div>
    </div>
</div>
<section class="faq-section section-padding pb-0 fix">
    <div class="container">
        <div class="faq-wrapper">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="faq-tittle">
                        <div class="section-title">
                            <span class="sub-title wow fadeInUp">Our FAQ's</span>
                            <h2 class="char-animation">Frequently <span>Asked</span> <br> Questions About Play School</h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">Find answers to common questions about admissions, safety, and learning at Play School.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-box-item">
                        <ul class="accordion-box">
                            @forelse($faqs as $index => $faq)
                            <li class="accordion block {{ $index == 0 ? 'active-block' : '' }} wow fadeInUp" data-wow-delay=".{{ $index * 2 }}s">
                                <div class="acc-btn {{ $index == 0 ? 'active' : '' }}">
                                    {{ $index + 1 }}. {{ $faq->question }}
                                    <div class="icon far fa-plus-circle"></div>
                                </div>
                                <div class="acc-content {{ $index == 0 ? 'current' : '' }}">
                                    <div class="content">
                                        <div class="text">{{ $faq->answer }}</div>
                                    </div>
                                </div>
                            </li>
                            @empty
                            <li>No FAQs Added Yet.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 @endsection