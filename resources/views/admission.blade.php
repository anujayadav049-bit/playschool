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
                <li> Admissions</li>
            </ul>
            <h1 class="char-animation">Admissions</h1>
        </div>
    </div>
</div>
<!-- Breadcrumb Section end -->

<!-- Admission Section Start -->
<section class="program-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">Join Us</span>
            <h2 class="char-animation">Admission <span>Open 2026-27</span></h2>
            <p class="mt-3">Enroll your child at Mai Great Sanfort, Sector-44, Gurgaon for a joyful learning journey.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="program-box-item style-2">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-1.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-1.png') }}" alt=""></div>
                    <div class="program-bg"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/book.png') }}" alt=""></div>
                    <div class="program-content"><h3>Step 1: Visit Us</h3><span>Campus Tour</span><p>Visit our school, meet teachers and explore classrooms & activities.</p><a href="{{ url('/contact') }}" class="link-btn">Get Direction <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="program-box-item">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-2.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-2.png') }}" alt=""></div>
                    <div class="program-bg bg-2"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/phone.png') }}" alt=""></div>
                    <div class="program-content"><h3>Step 2: Fill Form</h3><span>Registration</span><p>Fill admission form with child details and submit required documents.</p><a href="#admission-form" class="link-btn">Fill Form <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="program-box-item style-2">
                    <div class="top-bar"><img src="{{ asset('assets/img/program/top-3.png') }}" alt=""></div>
                    <div class="bottom-bar"><img src="{{ asset('assets/img/program/bottom-3.png') }}" alt=""></div>
                    <div class="program-bg bg-3"></div>
                    <div class="program-icon"><img src="{{ asset('assets/img/program/boy.png') }}" alt=""></div>
                    <div class="program-content"><h3>Step 3: Confirm Seat</h3><span>Welcome</span><p>Pay fee and confirm seat. Your child is ready to start fun learning!</p><a href="{{ url('/contact') }}" class="link-btn">Contact Us <i class="icon-arrow-icon"></i></a></div>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-5">
            <div class="col-lg-6"><div class="p-4" style="background:#FFF8F5; border-radius:20px; border:1px solid #ffe2d4;"><h4>🎂 Age Criteria</h4><ul class="mt-3" style="list-style:none; padding:0;"><li class="mb-2">✅ Play Group: 1.5 to 2.5 Years</li><li class="mb-2">✅ Pre-Nursery: 2.5 to 3.5 Years</li><li class="mb-2">✅ Nursery: 3.5 to 4.5 Years</li><li class="mb-2">✅ KG: 4.5 to 5.5 Years</li><li class="mb-2">✅ Day Care: 1 Year to 10 Years</li></ul></div></div>
            <div class="col-lg-6"><div class="p-4" style="background:#F5F5FF; border-radius:20px; border:1px solid #ddd6ff;"><h4>📄 Documents Required</h4><ul class="mt-3" style="list-style:none; padding:0;"><li class="mb-2">✅ Birth Certificate (Child)</li><li class="mb-2">✅ 2 Passport Size Photos (Child & Parents)</li><li class="mb-2">✅ Aadhar Card Copy (Child & Parents)</li><li class="mb-2">✅ Address Proof</li><li class="mb-2">✅ Previous School Report (If any)</li></ul></div></div>
        </div>
        <div id="admission-form" class="mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="p-4 p-md-5" style="background:white; box-shadow:0 10px 40px rgba(0,0,0,0.08); border-radius:25px;">
                        <h3 class="text-center mb-4">Admission Enquiry Form</h3>
                        <div class="row g-3">
                            <div class="col-md-6"><input type="text" placeholder="Child Name" class="form-control" style="height:50px; border-radius:12px;"></div>
                            <div class="col-md-6"><input type="text" placeholder="Parent Name" class="form-control" style="height:50px; border-radius:12px;"></div>
                            <div class="col-md-6"><input type="tel" placeholder="Mobile Number" class="form-control" style="height:50px; border-radius:12px;"></div>
                            <div class="col-md-6"><select class="form-control" style="height:50px; border-radius:12px;"><option>Select Class</option><option>Play Group</option><option>Pre-Nursery</option><option>Nursery</option><option>KG</option><option>Day Care</option></select></div>
                            <div class="col-12"><textarea placeholder="Message" class="form-control" style="border-radius:12px;" rows="3"></textarea></div>
                            <div class="col-12 text-center"><button class="theme-btn mt-2">Submit Application <i class="icon-arrow-icon"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Admission Section End -->
 @endsection