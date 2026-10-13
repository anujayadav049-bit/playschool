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
                <li> Contact Us</li>
            </ul>
            <h1 class="char-animation">Contact Us</h1>
        </div>
    </div>
</div>

<!-- Contact Section Start -->
<section class="contact-section-inner section-padding">
    <div class="container">
        <div class="contact-wrapper mt-0 mb-0 contact-wrapper-two">
            <div class="row g-4 align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="contact-from contact-from-two">
                        <h2 class="text-white mb-3">Send Your Message</h2>
                        <form action="#" class="contFrm contFrm-two" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s"><span>Name</span><input type="text" name="name" placeholder="Your Name" class="inptFld"></div>
                                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".4s"><span>Your Email</span><input type="email" name="email" placeholder="Email Address" class="inptFld"></div>
                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".5s"><span>Phone</span><input type="tel" name="phone" placeholder="Phone Number" class="inptFld"></div>
                                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".5s"><span>Department</span><input type="text" name="sub" placeholder="Your department" class="inptFld"></div>
                                <div class="col-sm-12 wow fadeInUp" data-wow-delay=".6s"><span>Your message</span><textarea class="inptFld inptFld-2 mb-0" name="message" placeholder="Your Message..."></textarea></div>            
                            </div>
                        </form>
                        <div class="contact-button wow fadeInUp" data-wow-delay=".7s"><button type="submit" class="theme-btn">Send Your Message<i class="icon-arrow-icon"></i></button></div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-info-items">
                        <div class="section-title text-center text-lg-start"><span class="sub-title wow fadeInUp">Get In Touch</span><h2 class="char-animation">Contact <span>Us For Help</span></h2></div>
                        <p class="wow fadeInUp mt-3 mt-md-0 text-center text-lg-start" data-wow-delay=".3s">Visit Play School, Greater Noida for admissions and enquiries.</p>
                        <div class="contact-info contact-info-two wow fadeInLeft" data-wow-delay=".3s">
                            <div class="icon"><img src="{{ asset('assets/img/contact/phone.svg') }}" alt="icon-image"></div>
                            <div class="content"><span>Call Us</span><h3><a href="tel:+919999999999">+91 99999 99999</a></h3></div>
                        </div>
                        <div class="contact-info contact-info-two wow fadeInLeft" data-wow-delay=".5s">
                            <div class="icon"><img src="{{ asset('assets/img/contact/share.svg') }}" alt="icon-image"></div>
                            <div class="content"><span>Send Email</span><h3><a href="mailto:playschool@gmail.com">playschool@gmail.com</a></h3></div>
                        </div>
                        <div class="contact-info contact-info-two wow fadeInLeft" data-wow-delay=".7s">
                            <div class="icon"><img src="{{ asset('assets/img/contact/location01.svg') }}" alt="icon-image"></div>
                            <div class="content"><span>Location</span><h3>Greater Noida, UP <br> 201310, India</h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  
<!-- Map Section Start -->
<div class="map-section">
    <div class="map-items">
        <div class="googpemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
 @endsection