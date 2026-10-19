<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ ucfirst($slug) }} Settings</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF8F0]">
<div class="flex min-h-screen">

  <div class="w-[270px] bg-white border-r-2 border-orange-100 p-4 fixed h-screen overflow-y-auto">
    <div class="mb-6"><img src="{{ asset('assets/img/logo/logo1.webp') }}" style="height:40px"></div>
    <div class="space-y-2">
      <a href="{{ url('admin/dashboard') }}" class="block bg-white border px-4 py-3 rounded-xl font-bold text-[13px]">📊 Dashboard</a>
      <div class="pt-3 mt-3 border-t-2 border-orange-100">
        <p class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest px-2 mb-2">📄 All Website Pages</p>
        <a href="{{ url('admin/pages/about') }}" class="block {{ $slug=='about' ? 'bg-[#FF5A00] text-white' : 'bg-white border' }} px-3 py-2 rounded-lg text-[12px] font-medium">👨‍👩‍👧‍👦 About Us</a>
        <a href="{{ url('admin/pages/program') }}" class="block {{ $slug=='program' ? 'bg-[#FF5A00] text-white' : 'bg-white border' }} px-3 py-2 rounded-lg text-[12px] font-medium mt-1">📚 Program</a>
        <a href="{{ url('admin/pages/gallery') }}" class="block {{ $slug=='gallery' ? 'bg-[#FF5A00] text-white' : 'bg-white border' }} px-3 py-2 rounded-lg text-[12px] font-medium mt-1">🖼️ Gallery</a>
      </div>
    </div>
    <div class="mt-8 space-y-2">
      <a href="{{ url('/') }}" class="block text-center bg-white border-2 py-2 rounded-full text-[12px] font-bold">← Back to Home</a>
      <a href="{{ url('admin/logout') }}" class="block text-center bg-red-500 text-white py-2 rounded-full text-[12px] font-bold">Logout</a>
    </div>
  </div>

  <div class="flex-1 ml-[270px] p-6">
    <h1 class="text-xl font-extrabold capitalize mb-4">⚙️ {{ $slug }} Page Settings</h1>
    @if(session('success'))
        <div class="bg-green-100 border text-green-700 px-4 py-2 rounded-xl text-[13px] mb-4">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.pages.update', $slug) }}" method="POST" enctype="multipart/form-data" class="bg-white border-2 border-orange-100 rounded-2xl p-6 space-y-4">
        @csrf
        <div class="grid grid-cols-2 gap-4">
            <input type="text" name="banner_title" value="{{ $setting->extra_data['banner_title'] ?? $setting->extra_json['banner_title'] ?? '' }}" class="border-2 rounded-xl px-3 py-2 text-[13px] font-bold" placeholder="Banner Title (ex: About Us)">
            <input type="text" name="banner_subtitle" value="{{ $setting->extra_data['banner_subtitle'] ?? $setting->extra_json['banner_subtitle'] ?? '' }}" class="border-2 rounded-xl px-3 py-2 text-[13px]" placeholder="Banner Subtitle">
        </div>

        <input type="text" name="title" value="{{ $setting->title ?? '' }}" class="w-full border-2 rounded-xl px-3 py-2 text-[13px] font-bold" placeholder="Main Title - Why Choose Us title">
        <textarea name="description" rows="4" class="w-full border-2 rounded-xl px-3 py-2 text-[13px]" placeholder="Description">{{ $setting->description ?? '' }}</textarea>

        <!-- Choose Images - 3 Images -->
<div class="bg-orange-50 border-2 border-dashed border-orange-200 rounded-2xl p-4">
    <p class="text-[12px] font-extrabold text-orange-700 mb-3">🖼️ Choose Us Section - 3 Images (Frontend me 3 images hai)</p>
    <div class="grid grid-cols-3 gap-4">
        <div>
            <label class="text-[11px] font-bold">Image 1 - Top small</label>
            <input type="file" name="image" class="w-full bg-white border-2 rounded-xl px-3 py-2 text-[12px] mt-1">
            @if($setting->image)
                <img src="{{ asset('storage/'.$setting->image) }}" class="h-16 mt-2 rounded-lg border">
            @endif
        </div>
        <div>
            <label class="text-[11px] font-bold">Image 2 - Main Big</label>
            <input type="file" name="image2" class="w-full bg-white border-2 rounded-xl px-3 py-2 text-[12px] mt-1">
            @if(!empty($setting->extra_data['image2']))
                <img src="{{ asset('storage/'.$setting->extra_data['image2']) }}" class="h-16 mt-2 rounded-lg border">
            @endif
        </div>
        <div>
            <label class="text-[11px] font-bold">Image 3 - Bottom round</label>
            <input type="file" name="image3" class="w-full bg-white border-2 rounded-xl px-3 py-2 text-[12px] mt-1">
            @if(!empty($setting->extra_data['image3']))
                <img src="{{ asset('storage/'.$setting->extra_data['image3']) }}" class="h-16 mt-2 rounded-lg border">
            @endif
        </div>
    </div>
</div>
        @if($slug == 'about')
            <div class="bg-yellow-50 border rounded-xl p-4">
                <p class="text-[11px] font-bold text-orange-600 mb-2">Mission / Vision - Only About Page</p>
                <div class="grid grid-cols-2 gap-3">
                    <input type="text" name="mission_title" value="{{ $setting->extra_data['mission_title'] ?? $setting->extra_json['mission_title'] ?? '' }}" placeholder="Mission Title" class="border rounded-xl px-3 py-2 text-[12px]">
                    <input type="text" name="vision_title" value="{{ $setting->extra_data['vision_title'] ?? $setting->extra_json['vision_title'] ?? '' }}" placeholder="Vision Title" class="border rounded-xl px-3 py-2 text-[12px]">
                    <textarea name="mission_desc" placeholder="Mission Desc" class="border rounded-xl px-3 py-2 text-[12px]">{{ $setting->extra_data['mission_desc'] ?? $setting->extra_json['mission_desc'] ?? '' }}</textarea>
                    <textarea name="vision_desc" placeholder="Vision Desc" class="border rounded-xl px-3 py-2 text-[12px]">{{ $setting->extra_data['vision_desc'] ?? $setting->extra_json['vision_desc'] ?? '' }}</textarea>
                </div>
            </div>
        @endif

        <button type="submit" class="w-full bg-[#FF5A00] text-white py-3 rounded-full font-extrabold text-[13px]">Save & Update {{ ucfirst($slug) }} Page</button>
    </form>
  </div>
</div>
</body>
</html>