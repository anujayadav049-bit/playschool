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
                <li> Gallery</li>
            </ul>
            <h1 class="char-animation">Gallery</h1>
        </div>
    </div>
</div>
<!-- Breadcrumb Section end -->
<section class="program-section section-padding fix">
<div class="container">
<div class="section-title text-center">
<span class="sub-title">Our Memories</span>
<h2>Our Happy <span>Gallery</span></h2>
</div>
<div style="display:flex; flex-wrap:wrap; gap:20px; margin-top:30px;">
@foreach($galleries as $g)
@php $img = $g->image; $final = \Illuminate\Support\Str::startsWith($img, 'assets/') ? asset($img) : asset('storage/'.$img); $isVideo = $g->category == 'VIDEO'; @endphp
<div style="width:calc(25% - 15px); min-width:260px; flex:1 1 260px;">
<a href="{{ $isVideo && $g->video_url ? $g->video_url : $final }}" class="{{ $isVideo ? 'popup-video' : 'popup-image' }}">
<div style="position:relative; border-radius:25px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1); height:300px;">
<img src="{{ $final }}" style="width:100%; height:100%; object-fit:cover; display:block;">
<div style="position:absolute; bottom:0; left:0; right:0; background:linear-gradient(transparent, rgba(0,0,0,0.8)); padding:15px;"><h6 style="color:white; margin:0;">{{ $g->title }}</h6></div>
@if($isVideo)<div style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:60px; height:60px; background:white; border-radius:50%; display:flex; align-items:center; justify-content:center;">▶</div>@endif
</div></a></div>
@endforeach
</div>
</div>
</section>
<!-- Gallery Section End - FIXED -->
 @endsection