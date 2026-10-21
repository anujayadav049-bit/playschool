<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About Page </title>
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
            <a href="{{ url('admin/home-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🏠Home Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/about-settings') }}" class="block bg-[#FF5A00] text-white border px-3 py-2 rounded-lg text-[12px] mb-1">👨‍👩‍👧‍👦About Page<span class="float-right text-[10px]">↗</span></a>
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

  <!-- RIGHT SIDE - CONTENT -->
  <div class="flex-1 ml-[270px] p-6">
    <h1 class="text-xl font-extrabold mb-4">About Page </h1>

    @if(session('success'))
      <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-2 rounded-xl mb-4 text-[12px]">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data" class="bg-white border-2 border-orange-100 rounded-2xl p-6 space-y-5">
      @csrf

      <div>
        <label class="text-[10px] font-bold uppercase text-gray-500">Title</label>
        <input type="text" name="title" value="{{ $setting->title ?? '' }}" class="w-full border-2 border-orange-100 rounded-xl px-4 py-2 text-[13px] mt-1">
      </div>

      <div>
        <label class="text-[10px] font-bold uppercase text-gray-500">Description</label>
        <textarea name="description" rows="3" class="w-full border-2 border-orange-100 rounded-xl px-4 py-2 text-[13px] mt-1">{{ $setting->description ?? '' }}</textarea>
      </div>

      <div class="grid grid-cols-3 gap-4">
        <div class="bg-orange-50 border-2 border-dashed border-orange-200 p-3 rounded-xl">
          <label class="text-[11px] font-bold">Image 1 (choose2.jpg)</label>
          <input type="file" name="image1" class="w-full text-[11px] mt-2">
          @if(!empty($setting->image1)) <img src="{{ asset('storage/'.$setting->image1) }}" class="w-full h-24 object-cover rounded-lg mt-2 border"> @endif
        </div>
        <div class="bg-orange-50 border-2 border-dashed border-orange-200 p-3 rounded-xl">
          <label class="text-[11px] font-bold">Image 2 (choose1.png)</label>
          <input type="file" name="image2" class="w-full text-[11px] mt-2">
          @if(!empty($setting->image2)) <img src="{{ asset('storage/'.$setting->image2) }}" class="w-full h-24 object-contain rounded-lg mt-2 border bg-white"> @endif
        </div>
        <div class="bg-orange-50 border-2 border-dashed border-orange-200 p-3 rounded-xl">
          <label class="text-[11px] font-bold">Image 3 (choose3.png)</label>
          <input type="file" name="image3" class="w-full text-[11px] mt-2">
          @if(!empty($setting->image3)) <img src="{{ asset('storage/'.$setting->image3) }}" class="w-full h-24 object-cover rounded-lg mt-2 border"> @endif
        </div>
      </div>

      <div class="grid grid-cols-2 gap-4 pt-4 border-t-2 border-orange-100">
        <div><label class="text-[10px] font-bold">Mission Title</label><input type="text" name="mission_title" value="{{ $setting->mission_title ?? '' }}" class="w-full border rounded-xl px-3 py-2 text-[13px] mt-1"></div>
        <div><label class="text-[10px] font-bold">Vision Title</label><input type="text" name="vision_title" value="{{ $setting->vision_title ?? '' }}" class="w-full border rounded-xl px-3 py-2 text-[13px] mt-1"></div>
        <div><label class="text-[10px] font-bold">Mission Desc</label><textarea name="mission_desc" class="w-full border rounded-xl px-3 py-2 text-[12px] mt-1">{{ $setting->mission_desc ?? '' }}</textarea></div>
        <div><label class="text-[10px] font-bold">Vision Desc</label><textarea name="vision_desc" class="w-full border rounded-xl px-3 py-2 text-[12px] mt-1">{{ $setting->vision_desc ?? '' }}</textarea></div>
      </div>


      
      <button class="w-full bg-[#FF5A00] text-white py-3 rounded-full font-bold text-[13px] mt-4">Update About Page</button>
    </form>
  </div>
</div>

</body>
</html>