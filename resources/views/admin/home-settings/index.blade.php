<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home Settings</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF8F0]">
<div class="flex min-h-screen">
  <!-- LEFT SIDE - SAME AS HOME-SETTINGS -->
  <div class="w-[270px] bg-white border-r-2 border-orange-100 p-4 fixed h-screen overflow-y-auto">
    <div class="mb-6">
      <img src="{{ asset('assets/img/logo/logo1.webp') }}" style="height:40px">
    </div>
      <a href="{{ url('/admin/dashboard') }}" class="block bg-white border px-4 py-3 rounded-xl font-semibold text-[13px]">📊 Dashboard</a>
    <div class="space-y-2">
     <div class="pt-3 mt-3 border-t-2 border-orange-100">
        <p class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest px-2 mb-2">📄 All Website Pages</p>
            <a href="{{ url('admin/home-settings') }}" class="block bg-[#FF5A00] text-white border px-3 py-2 rounded-lg text-[12px] mb-1">🏠Home Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/about-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">👨‍👩‍👧‍👦About Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/program-settings') }}" class="block bg-white  px-3 py-2 rounded-lg text-[12px] mb-1">📚Program Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/activity-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🎨Activities Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/gallery-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🖼️Gallery Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/admissions-settings') }}" class="block bg-white  px-3 py-2 rounded-lg text-[12px] mb-1">🎓Admissions Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/contact-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">📞 Contact Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/faq-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">❓FAQ Page<span class="float-right text-[10px]">↗</span></a>
        </div>
    </div>
    <div class="mt-8 space-y-2">
      <a href="{{ url('/') }}" class="block text-center bg-white border-2 py-2 rounded-full text-[12px] font-bold">← Back to Home</a>
      <a href="{{ url('/admin/logout') }}" class="block text-center bg-red-500 text-white py-2 rounded-full text-[12px] font-bold">Logout</a>
    </div>
  </div>

  <div class="flex-1 ml-[270px] p-6">
    <h1 class="text-xl font-extrabold mb-4">Home Page </h1>
    @if(session('success'))
        <div class="bg-green-100 border text-green-700 px-4 py-2 rounded-xl text-[13px] mb-4">{{ session('success') }}</div>
    @endif

    <div class="bg-white border-2 border-orange-100 rounded-2xl p-6">
        <form action="{{ url('admin/home-settings') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- 0. HEADER - SABSE UPAR -->
            <h3 class="text-[13px] font-extrabold text-red-600 border-b pb-2 mb-3">0. Header Section - Logo & Menu</h3>
            <div class="grid grid-cols-4 gap-3 bg-orange-50 p-4 rounded-xl border border-orange-200 mb-6">
                <div><label class="text-[11px] font-bold">Header Logo</label><input type="file" name="header_logo" class="w-full mt-1 border rounded-lg p-2 text-[11px] bg-white"></div>
                <div><label class="text-[11px] font-bold">About Menu</label><input type="text" name="menu_about" value="{{ $setting->menu_about ?? 'About Us' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
                <div><label class="text-[11px] font-bold">Activities Menu</label><input type="text" name="menu_activities" value="{{ $setting->menu_activities ?? 'Activities' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
                <div><label class="text-[11px] font-bold">Admission Menu</label><input type="text" name="menu_admissions" value="{{ $setting->menu_admissions ?? 'Admission' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
                <div><label class="text-[11px] font-bold">Gallery Menu</label><input type="text" name="menu_gallery" value="{{ $setting->menu_gallery ?? 'Gallery' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
                <div><label class="text-[11px] font-bold">Contact Menu</label><input type="text" name="menu_contact" value="{{ $setting->menu_contact ?? 'Contact Us' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
                <div><label class="text-[11px] font-bold">Program Menu</label><input type="text" name="menu_program" value="{{ $setting->menu_program ?? 'Program' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
                <div><label class="text-[11px] font-bold">Admission Btn Text</label><input type="text" name="btn_admission_text" value="{{ $setting->btn_admission_text ?? 'Admission Open' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
            </div>

            <!-- 1. BANNER -->
            <h3 class="text-[13px] font-extrabold border-b pb-2 mb-3">1. Banner / Hero Section</h3>
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div><label class="text-[11px] font-bold">Banner Title</label><input type="text" name="banner_title" value="{{ $setting->banner_title ?? '' }}" class="w-full mt-1 border rounded-lg p-2 text-[13px]"></div>
                <div><label class="text-[11px] font-bold">Banner Sub Title</label><input type="text" name="banner_subtitle" value="{{ $setting->banner_subtitle ?? '' }}" class="w-full mt-1 border rounded-lg p-2 text-[13px]"></div>
                <div class="col-span-2"><label class="text-[11px] font-bold">Banner Image</label><input type="file" name="banner_image" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
            </div>

            <!-- 2. WORK PROCESS -->
            <h3 class="text-[13px] font-extrabold text-blue-600 border-b pb-2 mb-3">2. Work Process - 4 Boxes</h3>
            <div class="space-y-3 bg-blue-50 p-4 rounded-xl border border-blue-200 mb-6">
                @for($i=1; $i<=4; $i++)
                <div class="grid grid-cols-3 gap-3 bg-white p-3 rounded-xl border">
                    <div><label class="text-[10px] font-bold">Box {{ $i }} Image</label><input type="file" name="home_work{{ $i }}_image" class="w-full border rounded-lg p-1 text-[10px]"></div>
                    <div><label class="text-[10px] font-bold">Box {{ $i }} Title</label><input type="text" name="home_work{{ $i }}_title" value="{{ $setting->{'home_work'.$i.'_title'} ?? '' }}" placeholder="Title {{ $i }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
                    <div><label class="text-[10px] font-bold">Box {{ $i }} Desc</label><input type="text" name="home_work{{ $i }}_desc" value="{{ $setting->{'home_work'.$i.'_desc'} ?? '' }}" placeholder="Desc {{ $i }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
                </div>
                @endfor
            </div>

            <!-- 3. BRAND LOGOS -->
            <h3 class="text-[13px] font-extrabold text-gray-600 border-b pb-2 mb-3">3. Brand Logos - 6 Logos</h3>
            <div class="grid grid-cols-3 gap-3 bg-gray-50 p-4 rounded-xl border mb-6">
                @for($i=1; $i<=6; $i++)
                <div class="bg-white p-2 rounded-lg border">
                    <label class="text-[10px] font-bold">Brand {{ $i }}</label>
                    <input type="file" name="home_brand{{ $i }}_image" class="w-full border rounded-lg p-1 text-[10px] mt-1">
                </div>
                @endfor
            </div>

<!-- 2. About Section -->
<!-- 2. About Section - COMPLETE -->
<h3 class="text-[13px] font-extrabold text-[#FF5A00] border-b pb-2 mb-3">2. About Section - Homepage Wala</h3>
<div class="grid grid-cols-2 gap-3 bg-[#FFF8F0] p-4 rounded-xl border-2 border-orange-100 mb-6">
    <div class="col-span-2">
        <label class="text-[11px] font-bold">About Title</label>
        <input type="text" name="about_title" value="{{ $setting->extra_data['about_title'] ?? $setting->about_title ?? '' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]">
    </div>
    <div class="col-span-2">
        <label class="text-[11px] font-bold">About Description</label>
        <textarea name="about_description" rows="3" class="w-full mt-1 border rounded-lg p-2 text-[12px]">{{ $setting->extra_data['about_description'] ?? '' }}</textarea>
    </div>
    <div>
        <label class="text-[11px] font-bold">About Image 1 (Badi)</label>
        <input type="file" name="about_image" class="w-full mt-1 border rounded-lg p-2 text-[11px] bg-white">
    </div>
    <div>
        <label class="text-[11px] font-bold">About Image 2 (Choti)</label>
        <input type="file" name="about_image2" class="w-full mt-1 border rounded-lg p-2 text-[11px] bg-white">
    </div>
    <div>
        <label class="text-[11px] font-bold">Button Text</label>
        <input type="text" name="about_button_text" value="{{ $setting->extra_data['about_button_text'] ?? 'Admission Open' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]">
    </div>
    <div>
        <label class="text-[11px] font-bold">Button Link</label>
        <input type="text" name="about_button_url" value="{{ $setting->extra_data['about_button_url'] ?? '/about' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]">
    </div>
</div>



<!-- 3. Learning / Our Programs Section -->
<h3 class="text-[13px] font-extrabold text-blue-600 border-b pb-2 mb-3">3. Our Programs - 3 Boxes</h3>
<div class="space-y-4 bg-blue-50 p-4 rounded-xl border-2 border-blue-100 mb-6">
    @for($i=1; $i<=3; $i++)
    <div class="bg-white p-3 rounded-xl border">
        <h4 class="text-[12px] font-extrabold mb-2 text-blue-700">Program {{ $i }}</h4>
        <div class="grid grid-cols-2 gap-2">
            <div><label class="text-[10px] font-bold">Title {{ $i }}</label><input type="text" name="learning{{$i}}_title" value="{{ $setting->extra_data['learning'.$i.'_title'] ?? '' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div><label class="text-[10px] font-bold">Button Link {{ $i }}</label><input type="text" name="learning{{$i}}_url" value="{{ $setting->extra_data['learning'.$i.'_url'] ?? '/program' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div class="col-span-2"><label class="text-[10px] font-bold">Description {{ $i }}</label><textarea name="learning{{$i}}_desc" rows="2" class="w-full border rounded-lg p-2 text-[12px]">{{ $setting->extra_data['learning'.$i.'_desc'] ?? '' }}</textarea></div>
            <div><label class="text-[10px] font-bold">Main Image {{ $i }}</label><input type="file" name="learning{{$i}}_image" class="w-full border rounded-lg p-1 text-[10px]"></div>
            <div><label class="text-[10px] font-bold">Icon Image {{ $i }}</label><input type="file" name="learning{{$i}}_icon" class="w-full border rounded-lg p-1 text-[10px]"></div>
        </div>
    </div>
    @endfor
    <div class="grid grid-cols-2 gap-3">
        <div><label class="text-[11px] font-bold">Section Sub Title</label><input type="text" name="learning_subtitle" value="{{ $setting->extra_data['learning_subtitle'] ?? 'Our Programs' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        <div><label class="text-[11px] font-bold">Section Main Title</label><input type="text" name="learning_title" value="{{ $setting->extra_data['learning_title'] ?? 'Nurturing Young Minds – with Love, Care & Learning' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
    </div>
</div>

<!-- 4. Video Section -->
<h3 class="text-[13px] font-extrabold text-red-600 border-b pb-2 mb-3">4. Video Section</h3>
<div class="grid grid-cols-2 gap-3 bg-red-50 p-4 rounded-xl border-2 border-red-100 mb-6">
    <div>
        <label class="text-[11px] font-bold">Video Background Image</label>
        <input type="file" name="video_bg_image" class="w-full mt-1 border rounded-lg p-2 text-[11px] bg-white">
    </div>
    <div>
        <label class="text-[11px] font-bold">YouTube Video Link</label>
        <input type="text" name="video_youtube_url" value="{{ $setting->extra_data['video_youtube_url'] ?? 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]" placeholder="https://www.youtube.com/watch?v=...">
    </div>
</div>


<!-- 5. Pricing / Fee Plans Section -->
<h3 class="text-[13px] font-extrabold text-purple-600 border-b pb-2 mb-3">5. Fee Plans - 3 Pricing Boxes</h3>
<div class="space-y-4 bg-purple-50 p-4 rounded-xl border-2 border-purple-100 mb-6">
    @for($i=1; $i<=3; $i++)
    <div class="bg-white p-3 rounded-xl border">
        <h4 class="text-[12px] font-extrabold mb-2 text-purple-700">Plan {{ $i }} {{ $i==2 ? '(Most Popular)' : '' }}</h4>
        <div class="grid grid-cols-3 gap-2">
            <div><label class="text-[10px] font-bold">Icon + Title</label><input type="text" name="pricing{{$i}}_title" value="{{ $setting->extra_data['pricing'.$i.'_title'] ?? '' }}" placeholder="🌼 Play Group" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div><label class="text-[10px] font-bold">Price (₹3500)</label><input type="text" name="pricing{{$i}}_price" value="{{ $setting->extra_data['pricing'.$i.'_price'] ?? '' }}" placeholder="₹3,500" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div><label class="text-[10px] font-bold">Per Month Text</label><input type="text" name="pricing{{$i}}_per" value="{{ $setting->extra_data['pricing'.$i.'_per'] ?? '/ Per Month' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div class="col-span-3"><label class="text-[10px] font-bold">Short Description</label><input type="text" name="pricing{{$i}}_desc" value="{{ $setting->extra_data['pricing'.$i.'_desc'] ?? '' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div class="col-span-3"><label class="text-[10px] font-bold">Features (har line pe ek feature, Enter se)</label><textarea name="pricing{{$i}}_features" rows="4" class="w-full border rounded-lg p-2 text-[11px]" placeholder="Half-Day (9 AM – 12:30 PM)
Rhymes & Story Time
Healthy Snacks Included">{{ $setting->extra_data['pricing'.$i.'_features'] ?? '' }}</textarea></div>
            <div class="col-span-2"><label class="text-[10px] font-bold">Button Link</label><input type="text" name="pricing{{$i}}_url" value="{{ $setting->extra_data['pricing'.$i.'_url'] ?? '/contact' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div><label class="text-[10px] font-bold">Button Text</label><input type="text" name="pricing{{$i}}_btn" value="{{ $setting->extra_data['pricing'.$i.'_btn'] ?? 'Enquire Now' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        </div>
    </div>
    @endfor
    <div class="grid grid-cols-2 gap-2">
        <div><label class="text-[11px] font-bold">Section Sub Title</label><input type="text" name="pricing_subtitle" value="{{ $setting->extra_data['pricing_subtitle'] ?? 'Our Fee Plans' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        <div><label class="text-[11px] font-bold">Section Main Title</label><input type="text" name="pricing_title" value="{{ $setting->extra_data['pricing_title'] ?? 'Affordable & Transparent Fee Structure' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
    </div>
</div>

<!-- 6. Book A Tour Section -->
<h3 class="text-[13px] font-extrabold text-green-600 border-b pb-2 mb-3">6. Book A Tour Form</h3>
<div class="grid grid-cols-2 gap-3 bg-green-50 p-4 rounded-xl border-2 border-green-100 mb-6">
    <div><label class="text-[11px] font-bold">Title</label><input type="text" name="tour_title" value="{{ $setting->extra_data['tour_title'] ?? 'Book A Free School Tour' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
    <div><label class="text-[11px] font-bold">Placeholder</label><input type="text" name="tour_placeholder" value="{{ $setting->extra_data['tour_placeholder'] ?? 'Enter your mobile number' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
</div>


<!-- 7. Why Choose Us / Feature Section -->
<h3 class="text-[13px] font-extrabold text-orange-600 border-b pb-2 mb-3">7. Why Choose Us - 6 Points</h3>
<div class="space-y-3 bg-orange-50 p-4 rounded-xl border-2 border-orange-200 mb-6">
    <div class="grid grid-cols-2 gap-2">
        <div><label class="text-[11px] font-bold">Sub Title</label><input type="text" name="feature_subtitle" value="{{ $setting->extra_data['feature_subtitle'] ?? 'Why Choose Us' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        <div><label class="text-[11px] font-bold">Phone Number</label><input type="text" name="feature_phone" value="{{ $setting->extra_data['feature_phone'] ?? '+91 99999 99999' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        <div class="col-span-2"><label class="text-[11px] font-bold">Main Title</label><input type="text" name="feature_title" value="{{ $setting->extra_data['feature_title'] ?? 'Our Passion is Childhood, & We Love To Nurture It' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        <div class="col-span-2"><label class="text-[11px] font-bold">Description</label><textarea name="feature_desc" rows="2" class="w-full border rounded-lg p-2 text-[12px]">{{ $setting->extra_data['feature_desc'] ?? "At Play School, Greater Noida, we don't just run a day care, we build a safe, clean and happy second home where your child learns good habits, confidence and values." }}</textarea></div>
        <div><label class="text-[11px] font-bold">Button Text</label><input type="text" name="feature_btn_text" value="{{ $setting->extra_data['feature_btn_text'] ?? 'Book A Visit' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        <div><label class="text-[11px] font-bold">Button Link</label><input type="text" name="feature_btn_url" value="{{ $setting->extra_data['feature_btn_url'] ?? '/contact' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        <div><label class="text-[11px] font-bold">Trusted Text</label><input type="text" name="feature_trusted" value="{{ $setting->extra_data['feature_trusted'] ?? 'Trusted by 500+ Parents in Greater Noida' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        <div><label class="text-[11px] font-bold">Right Side Image</label><input type="file" name="feature_image" class="w-full border rounded-lg p-2 text-[11px] bg-white"></div>
    </div>
    <div class="grid grid-cols-3 gap-2">
        @for($i=1; $i<=6; $i++)
        <div class="bg-white p-2 rounded-lg border">
            <label class="text-[10px] font-bold">Point {{ $i }}</label>
            <input type="text" name="feature{{$i}}_text" value="{{ $setting->extra_data['feature'.$i.'_text'] ?? '' }}" placeholder="Point {{ $i }}" class="w-full border rounded-lg p-1 text-[11px] mt-1">
            <label class="text-[10px] font-bold mt-1 block">Icon {{ $i }}</label>
            <input type="file" name="feature{{$i}}_icon" class="w-full border rounded-lg p-1 text-[9px]">
        </div>
        @endfor
    </div>
</div>



<!-- 8. Testimonials / Parents Feedback -->
<h3 class="text-[13px] font-extrabold text-pink-600 border-b pb-2 mb-3">8. Parents Feedback - 3 Testimonials</h3>
<div class="space-y-3 bg-pink-50 p-4 rounded-xl border-2 border-pink-100 mb-6">
    <div class="grid grid-cols-2 gap-2 mb-2">
        <div><label class="text-[11px] font-bold">Sub Title</label><input type="text" name="testi_subtitle" value="{{ $setting->extra_data['testi_subtitle'] ?? 'Parents Feedback' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        <div><label class="text-[11px] font-bold">Main Title</label><input type="text" name="testi_title" value="{{ $setting->extra_data['testi_title'] ?? 'What Parents Say About Us' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
    </div>
    @for($i=1; $i<=3; $i++)
    <div class="bg-white p-3 rounded-xl border">
        <h4 class="text-[11px] font-extrabold mb-2">Review {{ $i }}</h4>
        <div class="grid grid-cols-2 gap-2">
            <div><label class="text-[10px] font-bold">Name</label><input type="text" name="testi{{$i}}_name" value="{{ $setting->extra_data['testi'.$i.'_name'] ?? '' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div><label class="text-[10px] font-bold">Designation</label><input type="text" name="testi{{$i}}_role" value="{{ $setting->extra_data['testi'.$i.'_role'] ?? '' }}" placeholder="Mother of Anaya - Play Group" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div class="col-span-2"><label class="text-[10px] font-bold">Review Text</label><textarea name="testi{{$i}}_text" rows="2" class="w-full border rounded-lg p-2 text-[12px]">{{ $setting->extra_data['testi'.$i.'_text'] ?? '' }}</textarea></div>
            <div><label class="text-[10px] font-bold">Client Photo</label><input type="file" name="testi{{$i}}_image" class="w-full border rounded-lg p-1 text-[10px]"></div>
            <div><label class="text-[10px] font-bold">Rating (1-5)</label><input type="number" min="1" max="5" name="testi{{$i}}_rating" value="{{ $setting->extra_data['testi'.$i.'_rating'] ?? 5 }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        </div>
    </div>
    @endfor
</div>



<!-- 9. Gallery Section - 7 Images -->
<h3 class="text-[13px] font-extrabold text-yellow-600 border-b pb-2 mb-3">9. Gallery Section - 7 Photos</h3>
<div class="grid grid-cols-4 gap-2 bg-yellow-50 p-4 rounded-xl border-2 border-yellow-100 mb-6">
    @for($i=1; $i<=7; $i++)
    <div class="bg-white p-2 rounded-lg border">
        <label class="text-[10px] font-bold">Gallery {{ $i }}</label>
        <input type="file" name="gallery{{$i}}_image" class="w-full border rounded-lg p-1 text-[9px] mt-1">
    </div>
    @endfor
</div>

<!-- 10. FAQ Section -->
<h3 class="text-[13px] font-extrabold text-gray-700 border-b pb-2 mb-3">10. FAQ Section - 5 Questions</h3>
<div class="space-y-3 bg-gray-50 p-4 rounded-xl border-2 border-gray-200 mb-6">
    <div class="grid grid-cols-1 gap-2">
        <div><label class="text-[11px] font-bold">FAQ Main Title</label><input type="text" name="faq_title" value="{{ $setting->extra_data['faq_title'] ?? 'Frequently Asked Questions About Play School' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        <div><label class="text-[11px] font-bold">FAQ Description</label><textarea name="faq_desc" rows="2" class="w-full border rounded-lg p-2 text-[12px]">{{ $setting->extra_data['faq_desc'] ?? 'Everything that parents in Greater Noida ask before admission. Still have a question? Visit us or call us for a free school tour.' }}</textarea></div>
    </div>
    @for($i=1; $i<=5; $i++)
    <div class="bg-white p-3 rounded-xl border">
        <div class="grid grid-cols-1 gap-1">
            <div><label class="text-[10px] font-bold">Question {{ $i }}</label><input type="text" name="faq{{$i}}_q" value="{{ $setting->extra_data['faq'.$i.'_q'] ?? '' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div><label class="text-[10px] font-bold">Answer {{ $i }}</label><textarea name="faq{{$i}}_a" rows="2" class="w-full border rounded-lg p-2 text-[11px]">{{ $setting->extra_data['faq'.$i.'_a'] ?? '' }}</textarea></div>
        </div>
    </div>
    @endfor
</div>
            
<!-- 11. News Section - 2 Blogs -->
<h3 class="text-[13px] font-extrabold text-cyan-600 border-b pb-2 mb-3">11. News & Activities - 2 Blogs</h3>
<div class="space-y-3 bg-cyan-50 p-4 rounded-xl border-2 border-cyan-100 mb-6">
    <div class="grid grid-cols-2 gap-2">
        <div><label class="text-[11px] font-bold">Sub Title</label><input type="text" name="news_subtitle" value="{{ $setting->extra_data['news_subtitle'] ?? 'Parenting Tips & Events' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        <div><label class="text-[11px] font-bold">Main Title</label><input type="text" name="news_title" value="{{ $setting->extra_data['news_title'] ?? 'Our Latest Activities & News' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
    </div>
    @for($i=1; $i<=2; $i++)
    <div class="bg-white p-3 rounded-xl border">
        <h4 class="text-[11px] font-extrabold">News {{ $i }}</h4>
        <div class="grid grid-cols-3 gap-2 mt-1">
            <div><label class="text-[10px] font-bold">Category</label><input type="text" name="news{{$i}}_cat" value="{{ $setting->extra_data['news'.$i.'_cat'] ?? '' }}" placeholder="Activities" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div><label class="text-[10px] font-bold">Date (15)</label><input type="text" name="news{{$i}}_day" value="{{ $setting->extra_data['news'.$i.'_day'] ?? '' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div><label class="text-[10px] font-bold">Month (Aug)</label><input type="text" name="news{{$i}}_month" value="{{ $setting->extra_data['news'.$i.'_month'] ?? '' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div class="col-span-3"><label class="text-[10px] font-bold">Title</label><input type="text" name="news{{$i}}_title" value="{{ $setting->extra_data['news'.$i.'_title'] ?? '' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div class="col-span-3"><label class="text-[10px] font-bold">Short Desc</label><textarea name="news{{$i}}_desc" rows="2" class="w-full border rounded-lg p-2 text-[11px]">{{ $setting->extra_data['news'.$i.'_desc'] ?? '' }}</textarea></div>
            <div><label class="text-[10px] font-bold">Image</label><input type="file" name="news{{$i}}_image" class="w-full border rounded-lg p-1 text-[9px]"></div>
            <div><label class="text-[10px] font-bold">Link</label><input type="text" name="news{{$i}}_url" value="{{ $setting->extra_data['news'.$i.'_url'] ?? '/news' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
            <div><label class="text-[10px] font-bold">Author</label><input type="text" name="news{{$i}}_author" value="{{ $setting->extra_data['news'.$i.'_author'] ?? 'Play School' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
        </div>
    </div>
    @endfor
</div>

<!-- 12. Final CTA Section -->
<h3 class="text-[13px] font-extrabold text-indigo-600 border-b pb-2 mb-3">12. Final CTA - Where Every Little Step</h3>
<div class="grid grid-cols-2 gap-3 bg-indigo-50 p-4 rounded-xl border-2 border-indigo-100 mb-6">
    <div class="col-span-2"><label class="text-[11px] font-bold">Main Title</label><input type="text" name="cta_title" value="{{ $setting->extra_data['cta_title'] ?? 'Where Every Little Step Leads to Big Discoveries' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
    <div><label class="text-[11px] font-bold">Button 1 Text</label><input type="text" name="cta_btn1_text" value="{{ $setting->extra_data['cta_btn1_text'] ?? 'Online Admission' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
    <div><label class="text-[11px] font-bold">Button 1 Link</label><input type="text" name="cta_btn1_url" value="{{ $setting->extra_data['cta_btn1_url'] ?? '/contact' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
    <div><label class="text-[11px] font-bold">Button 2 Text (Phone)</label><input type="text" name="cta_btn2_text" value="{{ $setting->extra_data['cta_btn2_text'] ?? '(120) 93 939 093' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
    <div><label class="text-[11px] font-bold">Button 2 Link (tel:)</label><input type="text" name="cta_btn2_url" value="{{ $setting->extra_data['cta_btn2_url'] ?? 'tel:12093939093' }}" class="w-full border rounded-lg p-2 text-[12px]"></div>
</div>

            <!-- 4. FOOTER - SABSE NICHE -->
            <h3 class="text-[13px] font-extrabold text-[#FF5A00] border-b pb-2 mb-3">4. Footer Section - Sabse Niche</h3>
            <div class="grid grid-cols-3 gap-3 bg-[#FFF8F0] p-4 rounded-xl border-2 border-orange-100 mb-6">
                <div><label class="text-[11px] font-bold">Footer Logo</label><input type="file" name="footer_logo" class="w-full mt-1 border rounded-lg p-2 text-[11px] bg-white"></div>
                <div class="col-span-2"><label class="text-[11px] font-bold">Footer Description</label><input type="text" name="footer_description" value="{{ $setting->footer_description ?? '' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
                <div><label class="text-[11px] font-bold">Address</label><input type="text" name="footer_address" value="{{ $setting->footer_address ?? '' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
                <div><label class="text-[11px] font-bold">Phone</label><input type="text" name="footer_phone" value="{{ $setting->footer_phone ?? '' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
                <div><label class="text-[11px] font-bold">Email</label><input type="text" name="footer_email" value="{{ $setting->footer_email ?? '' }}" class="w-full mt-1 border rounded-lg p-2 text-[12px]"></div>
            </div>

            <button type="submit" class="w-full bg-[#FF5A00] text-white py-3 rounded-full font-extrabold text-[13px]">💾 Save & Update All Sections</button>
        </form>
    </div>
  </div>
</div>

<style>
@media (max-width: 768px) {
  div[class*="w-[270px]"] { left: -270px !important; transition: 0.3s !important; z-index: 1001 !important; }
  div[class*="w-[270px]"].active { left: 0 !important; }
  div[class*="ml-[270px]"] { margin-left: 0 !important; width: 100% !important; padding: 12px !important; }
  #admin-overlay { display: none; }
  #admin-overlay.active { display: block; position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 1000; }
}
</style>

<div id="admin-mobile-bar" class="md:hidden" style="display:none;"></div>
<div id="admin-overlay" onclick="toggleAdminMenu()"></div>

<script>
(function(){
  // Auto find sidebar and content
  var sidebar = document.querySelector('div[class*="w-[270px]"]');
  var content = document.querySelector('div[class*="ml-[270px]"]');
  if(!sidebar) return;
  
  // Mobile bar banao
  var bar = document.getElementById('admin-mobile-bar');
  if(window.innerWidth <= 768){
    bar.style.display = 'flex';
    bar.innerHTML = '<div style="background:white;padding:10px 12px;display:flex;justify-content:space-between;align-items:center;position:sticky;top:0;z-index:999;border-bottom:1px solid #eee;width:100%;position:fixed;top:0;left:0;"><img src="/assets/img/logo/logo1.webp" style="height:28px"><button onclick="toggleAdminMenu()" style="background:#FF5A00;color:white;padding:6px 14px;border-radius:20px;font-size:12px;font-weight:bold;border:0;">☰ Menu</button></div><div style="height:52px"></div>';
    bar.className = '';
  }
  window.toggleAdminMenu = function(){
    sidebar.classList.toggle('active');
    document.getElementById('admin-overlay').classList.toggle('active');
  }
})();
</script>

</body>
</html>