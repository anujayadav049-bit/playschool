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
                        <form action="#" class="contFrm contFrm-two" method="GET">
                            <div class="row">
                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".4s"><span>Name</span><input type="text" name="name" placeholder="Your Name" class="inptFld"></div>
                                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".4s"><span>Your Email</span><input type="email" name="email" placeholder="Email Address" class="inptFld"></div>
                                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".5s"><span>Phone</span><input type="tel" name="phone" placeholder="Phone Number" class="inptFld"></div>
                                <div class="col-sm-6 wow fadeInLeft" data-wow-delay=".5s"><span>Department</span><input type="text" name="sub" placeholder="Your department" class="inptFld"></div>
                                <div class="col-sm-12 wow fadeInUp" data-wow-delay=".6s"><span>Your message</span><textarea class="inptFld inptFld-2 mb-0" name="message" placeholder="Your Message..."></textarea></div>            
                                <div class="col-sm-12"><div class="contact-button wow fadeInUp" data-wow-delay=".7s"><button type="button" class="theme-btn">Send Your Message<i class="icon-arrow-icon"></i></button></div></div>
                            </div>
                        </form>
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
  
@php
  $forms = \App\Models\Form::with('fields')->latest()->get();
@endphp

<style>
.nex-wrap{max-width:850px;margin:30px auto;padding:0 15px;font-family:Poppins,sans-serif}
.nex-top{background:#fff;border:2px solid #FFE1C7;border-radius:16px;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:20px}
.nex-top h3{margin:0;font-size:16px;font-weight:800}
.nex-top select{width:260px;background:#FFF8F0;border:2px solid #FFE1C7;border-radius:30px;padding:10px 16px;font-size:13px;font-weight:700;outline:none}
.nex-card{background:#fff;border:2px solid #FFE1C7;border-radius:24px;padding:28px}
.nex-card h2{text-align:center;font-size:24px;font-weight:800;margin:0 0 6px 0;text-transform:capitalize}
.nex-card .sub{text-align:center;color:#777;font-size:13px;margin-bottom:20px;padding-bottom:18px;border-bottom:2px solid #FFF2E6}
.nex-grid{display:grid;grid-template-columns:1fr 1fr;gap:18px}
.nex-field label{display:block;font-size:11px;font-weight:700;text-transform:uppercase;color:#555;margin-bottom:6px}
.nex-field input, .nex-field select, .nex-field textarea{width:100%!important;background:#FFF8F0!important;border:2px solid #FFE1C7!important;border-radius:12px!important;padding:12px 14px!important;font-size:13px!important;outline:none!important;box-sizing:border-box!important;color:#000!important;-webkit-text-fill-color:#000!important}
.nex-radio-wrap{display:flex;gap:10px;flex-wrap:wrap}
.nex-radio-wrap label{border:2px solid #FFE1C7;background:#FFF8F0;padding:8px 18px;border-radius:30px;font-size:12px;font-weight:700;cursor:pointer;display:flex;align-items:center;gap:6px}
.nex-submit{width:100%;background:#FF5A00;color:#fff;border:0;border-radius:12px;padding:14px;font-size:15px;font-weight:800;margin-top:22px;cursor:pointer}
.nex-hidden{display:none!important}
@media(max-width:600px){.nex-grid{grid-template-columns:1fr}}
</style>

<div class="nex-wrap">
  <div class="nex-top">
    <h3>📋 Select Form to Fill</h3>
    <select id="formSwitcher">
      @foreach($forms as $f)
        <option value="form-{{ $f->id }}">{{ $f->name }}</option>
      @endforeach
    </select>
  </div>

  @foreach($forms as $form)
  <div id="form-{{ $form->id }}" class="form-panel {{ $loop->first? '' : 'nex-hidden' }}">
    <div class="nex-card">
      <h2>{{ $form->name }}</h2>
      <div class="sub">Please fill all required fields *</div>

      @if(session('success'))
        <div style="background:#E8FFF0;border:2px solid #B4F5C5;color:#0a7a2c;padding:12px;border-radius:12px;text-align:center;font-weight:700;margin-bottom:15px;font-size:13px">✅ {{ session('success') }}</div>
      @endif

      <form action="{{ url('/form/'.$form->slug.'/submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="nex-grid">
          @foreach($form->fields->sortBy('sort_order') as $field)
          <div class="nex-field" style="{{ $field->type=='textarea' ? 'grid-column:1 / -1' : '' }}">
            <label>{{ $field->label }} @if($field->is_required)<span style="color:red">*</span>@endif</label>

            @if(in_array($field->type, ['text','number','email']))
              <input type="{{ $field->type }}" name="field_{{ $field->id }}" placeholder="Enter {{ $field->label }}" {{ $field->is_required?'required':'' }}>
            @elseif(in_array($field->type, ['mobile','phone','tel']))
              <input type="tel" name="field_{{ $field->id }}" placeholder="Enter {{ $field->label }}" {{ $field->is_required?'required':'' }}>
            @elseif($field->type=='date')
              <input type="date" name="field_{{ $field->id }}" {{ $field->is_required?'required':'' }}>
            @elseif($field->type=='textarea')
              <textarea name="field_{{ $field->id }}" rows="3" placeholder="Enter {{ $field->label }}" {{ $field->is_required?'required':'' }}></textarea>
            @elseif(in_array($field->type, ['dropdown','select']))
              <select name="field_{{ $field->id }}" {{ $field->is_required?'required':'' }}>
                <option value="">Select {{ $field->label }}</option>
                @foreach(explode(',', $field->options ?? '') as $opt) @if(trim($opt)!='')<option value="{{ trim($opt) }}">{{ trim($opt) }}</option>@endif @endforeach
              </select>
            @elseif($field->type=='radio')
              <div class="nex-radio-wrap">
                @foreach(explode(',', $field->options ?? '') as $opt) @if(trim($opt)!='')
                  <label><input type="radio" name="field_{{ $field->id }}" value="{{ trim($opt) }}" {{ $field->is_required?'required':'' }}> {{ trim($opt) }}</label>
                @endif @endforeach
              </div>
            @elseif($field->type=='checkbox')
              <div class="nex-radio-wrap">
                @foreach(explode(',', $field->options ?? '') as $opt) @if(trim($opt)!='')
                  <label><input type="checkbox" name="field_{{ $field->id }}[]" value="{{ trim($opt) }}"> {{ trim($opt) }}</label>
                @endif @endforeach
              </div>
            @elseif($field->type=='file')
              <input type="file" name="field_{{ $field->id }}" {{ $field->is_required?'required':'' }}>
            @else
              <input type="text" name="field_{{ $field->id }}" placeholder="Enter {{ $field->label }}" {{ $field->is_required?'required':'' }}>
            @endif
          </div>
          @endforeach
        </div>
        <button type="submit" class="nex-submit">Submit {{ $form->name }} →</button>
      </form>
    </div>
  </div>
  @endforeach
</div>

<script>
document.addEventListener('DOMContentLoaded', function(){
  const s = document.getElementById('formSwitcher');
  if(!s) return;
  const switchForm = (id) => {
    document.querySelectorAll('.form-panel').forEach(e=>e.classList.add('nex-hidden'));
    document.getElementById(id)?.classList.remove('nex-hidden');
  };
  s.addEventListener('change', ()=> switchForm(s.value));
  switchForm(s.value);
});
</script>

<!-- Map Section Start -->
<div class="map-section">
    <div class="map-items">
        <div class="googpemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
@endsection