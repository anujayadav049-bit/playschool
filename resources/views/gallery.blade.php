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

<!-- Gallery Section Start - FIXED -->
<section class="program-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">Our Memories</span>
            <h2 class="char-animation">Our Happy <span>Gallery</span></h2>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <a href="{{ asset('assets/img/classes/classes1.jpg') }}" class="popup-image">
                    <div style="position:relative; border-radius:25px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1); background:#f5f5f5;">
                        <img src="{{ asset('assets/img/classes/classes1.jpg') }}" alt="gallery" style="width:100%; height:300px; object-fit:cover; display:block;">
                        <div style="position:absolute; bottom:0; left:0; right:0; background:linear-gradient(transparent, rgba(0,0,0,0.8)); padding:20px;"><h6 class="text-white mb-0">Indoor Play</h6></div>
                        <div style="position:absolute; top:15px; left:15px; background:#FF6B35; color:white; padding:5px 14px; border-radius:20px; font-size:11px; font-weight:bold;">PHOTO</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <a href="{{ asset('assets/img/classes/classes2.png') }}" class="popup-image">
                    <div style="position:relative; border-radius:25px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1); background:#f5f5f5;">
                        <img src="{{ asset('assets/img/classes/classes2.png') }}" alt="gallery" style="width:100%; height:300px; object-fit:cover; display:block;">
                        <div style="position:absolute; bottom:0; left:0; right:0; background:linear-gradient(transparent, rgba(0,0,0,0.8)); padding:20px;"><h6 class="text-white mb-0">Art & Craft</h6></div>
                        <div style="position:absolute; top:15px; left:15px; background:#FFA500; color:white; padding:5px 14px; border-radius:20px; font-size:11px; font-weight:bold;">FESTIVAL</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <a href="{{ asset('assets/img/classes/classes3.jpg') }}" class="popup-image">
                    <div style="position:relative; border-radius:25px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1); background:#f5f5f5;">
                        <img src="{{ asset('assets/img/classes/classes3.jpg') }}" alt="gallery" style="width:100%; height:300px; object-fit:cover; display:block;">
                        <div style="position:absolute; bottom:0; left:0; right:0; background:linear-gradient(transparent, rgba(0,0,0,0.8)); padding:20px;"><h6 class="text-white mb-0">Learning Time</h6></div>
                        <div style="position:absolute; top:15px; left:15px; background:#FF6B35; color:white; padding:5px 14px; border-radius:20px; font-size:11px; font-weight:bold;">PHOTO</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <a href="https://www.youtube.com/watch?v=9xwazD5SyVg" class="popup-video">
                    <div style="position:relative; border-radius:25px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1); background:#f5f5f5;">
                        <img src="{{ asset('assets/img/classes/classes01.jpg') }}" alt="video thumb" style="width:100%; height:300px; object-fit:cover; display:block;">
                        <div style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:60px; height:60px; background:white; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:20px; box-shadow:0 5px 20px rgba(0,0,0,0.4);">▶</div>
                        <div style="position:absolute; top:15px; left:15px; background:#FF0000; color:white; padding:5px 14px; border-radius:20px; font-size:11px; font-weight:bold;">VIDEO</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <a href="{{ asset('assets/img/classes/classes02.jpg') }}" class="popup-image">
                    <div style="position:relative; border-radius:25px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1); background:#f5f5f5;">
                        <img src="{{ asset('assets/img/classes/classes02.jpg') }}" alt="gallery" style="width:100%; height:300px; object-fit:cover; display:block;">
                        <div style="position:absolute; top:15px; left:15px; background:#FF6B35; color:white; padding:5px 14px; border-radius:20px; font-size:11px; font-weight:bold;">PHOTO</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <a href="https://www.youtube.com/watch?v=9xwazD5SyVg" class="popup-video">
                    <div style="position:relative; border-radius:25px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1); background:#f5f5f5;">
                        <img src="{{ asset('assets/img/classes/classes03.jpg') }}" alt="video" style="width:100%; height:300px; object-fit:cover; display:block;">
                        <div style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:60px; height:60px; background:white; border-radius:50%; display:flex; align-items:center; justify-content:center;">▶</div>
                        <div style="position:absolute; top:15px; left:15px; background:#FF0000; color:white; padding:5px 14px; border-radius:20px; font-size:11px; font-weight:bold;">VIDEO</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <a href="{{ asset('assets/img/classes/classes01.jpg') }}" class="popup-image">
                    <div style="position:relative; border-radius:25px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1); background:#f5f5f5;">
                        <img src="{{ asset('assets/img/classes/classes01.jpg') }}" alt="gallery" style="width:100%; height:300px; object-fit:cover; display:block;">
                        <div style="position:absolute; top:15px; left:15px; background:#FFA500; color:white; padding:5px 14px; border-radius:20px; font-size:11px; font-weight:bold;">CELEBRATION</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <a href="{{ asset('assets/img/classes/classes02.jpg') }}" class="popup-image">
                    <div style="position:relative; border-radius:25px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.1); background:#f5f5f5;">
                        <img src="{{ asset('assets/img/classes/classes02.jpg') }}" alt="gallery" style="width:100%; height:300px; object-fit:cover; display:block;">
                        <div style="position:absolute; top:15px; left:15px; background:#FF6B35; color:white; padding:5px 14px; border-radius:20px; font-size:11px; font-weight:bold;">PHOTO</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Section End - FIXED -->
 @endsection