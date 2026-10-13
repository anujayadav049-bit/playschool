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

<!-- Faq Section Start -->
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
                            <li class="accordion block active-block wow fadeInUp"><div class="acc-btn active">1. What age group do you accept?<div class="icon far fa-plus-circle"></div></div><div class="acc-content current"><div class="content"><div class="text">We accept children from 1.5 years to 6 years - Play Group, Pre-Nursery, Nursery, KG and Day Care up to 10 years.</div></div></div></li>
                            <li class="accordion block wow fadeInUp" data-wow-delay=".2s"><div class="acc-btn">2. What are your school hours?<div class="icon far fa-plus-circle"></div></div><div class="acc-content"><div class="content"><div class="text">School hours are 9:00 AM to 12:30 PM, with Day Care available from 8:30 AM to 6:30 PM. Saturday & Sunday closed.</div></div></div></li>
                            <li class="accordion block wow fadeInUp" data-wow-delay=".4s"><div class="acc-btn">3. Do you provide meals and snacks?<div class="icon far fa-plus-circle"></div></div><div class="acc-content"><div class="content"><div class="text">Yes, we provide healthy and hygienic meals for Day Care children. For regular students, parents send tiffin.</div></div></div></li>
                            <li class="accordion block wow fadeInUp" data-wow-delay=".6s"><div class="acc-btn">4. Is your staff certified and trained?<div class="icon far fa-plus-circle"></div></div><div class="acc-content"><div class="content"><div class="text">Yes, all our teachers are NTT trained, experienced, and background verified for child safety.</div></div></div></li>
                            <li class="accordion block wow fadeInUp" data-wow-delay=".8s"><div class="acc-btn">5. What's your class size and ratio?<div class="icon far fa-plus-circle"></div></div><div class="acc-content"><div class="content"><div class="text">We maintain small class size 15:1 ratio to give individual attention to every child.</div></div></div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                        <p class="wow fadeInUp mt-3 mt-md-0 text-center text-lg-start" data-wow-delay=".3s">Have more questions? Contact us directly.</p>
                        <div class="contact-info contact-info-two wow fadeInLeft" data-wow-delay=".3s"><div class="icon"><img src="{{ asset('assets/img/contact/phone.svg') }}" alt="icon-image"></div><div class="content"><span>Call Us</span><h3><a href="tel:+919999999999">+91 99999 99999</a></h3></div></div>
                        <div class="contact-info contact-info-two wow fadeInLeft" data-wow-delay=".5s"><div class="icon"><img src="{{ asset('assets/img/contact/share.svg') }}" alt="icon-image"></div><div class="content"><span>Send Email</span><h3><a href="mailto:maigreatsanfort@gmail.com">maigreatsanfort@gmail.com</a></h3></div></div>
                        <div class="contact-info contact-info-two wow fadeInLeft" data-wow-delay=".7s"><div class="icon"><img src="{{ asset('assets/img/contact/location01.svg') }}" alt="icon-image"></div><div class="content"><span>Location</span><h3>Greater Noida, UP <br> 201310, India</h3></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 @endsection