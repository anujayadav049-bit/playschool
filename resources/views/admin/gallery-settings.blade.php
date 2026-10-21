<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Gallery Settings</title><script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-[#FFF8F0]">
<div class="flex">
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
            <a href="{{ url('admin/about-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">👨‍👩‍👧‍👦About Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/program-settings') }}" class="block bg-white  px-3 py-2 rounded-lg text-[12px] mb-1">📚Program Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/activity-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🎨Activities Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/gallery-settings') }}" class="block bg-[#FF5A00] text-white border px-3 py-2 rounded-lg text-[12px] mb-1">🖼️Gallery Page<span class="float-right text-[10px]">↗</span></a>
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
<div class="ml-[270px] flex-1 p-8">
<h1 class="text-2xl font-bold mb-6">Gallery Settings</h1>

<div class="bg-white p-6 rounded-xl shadow border mb-8">
<form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{ $editGallery->id ?? '' }}">
<div class="grid grid-cols-2 gap-4">
<div><label class="font-semibold text-sm">Title</label><input type="text" name="title" value="{{ $editGallery->title ?? '' }}" class="w-full border rounded px-3 py-2 mt-1"></div>
<div><label class="font-semibold text-sm">Category (PHOTO / VIDEO / FESTIVAL)</label><input type="text" name="category" value="{{ $editGallery->category ?? 'PHOTO' }}" class="w-full border rounded px-3 py-2 mt-1" required></div>
</div>
<div class="mt-3"><label class="font-semibold text-sm">YouTube Link (sirf VIDEO ke liye)</label><input type="text" name="video_url" value="{{ $editGallery->video_url ?? '' }}" class="w-full border rounded px-3 py-2 mt-1"></div>
<div class="mt-3"><label class="font-semibold text-sm">Image</label><input type="file" name="image" class="w-full mt-1"></div>
<button class="bg-[#FF6B2B] text-white px-6 py-2 rounded font-bold mt-4">{{ isset($editGallery) ? 'Update' : 'Add Image' }}</button>
@if(isset($editGallery)) <a href="{{ route('admin.gallery.index') }}" class="ml-3 underline text-sm">Cancel</a> @endif
</form>
</div>

<h2 class="font-bold mb-4">All Images ({{ $galleries->count() }})</h2>
<div class="grid grid-cols-4 gap-4">
@foreach($galleries as $g)
@php $img = $g->image; $finalImg = \Illuminate\Support\Str::startsWith($img, 'assets/') ? asset($img) : asset('storage/'.$img); @endphp
<div class="bg-white rounded-xl shadow border overflow-hidden">
<img src="{{ $finalImg }}" class="w-full h-[140px] object-cover bg-gray-100" onerror="this.src='https://via.placeholder.com/300x140?text=No+Image'">
<div class="p-3"><p class="font-bold text-xs">{{ $g->title }} - {{ $g->category }}</p>
<div class="flex gap-2 mt-2"><a href="?edit={{ $g->id }}" class="flex-1 bg-black text-white text-xs py-2 rounded-lg text-center">Edit</a><a href="{{ route('admin.gallery.delete', $g->id) }}" onclick="return confirm('Delete?')" class="flex-1 bg-red-100 text-red-600 text-xs py-2 rounded-lg text-center">Delete</a></div>
</div></div>
@endforeach
</div>
</div></div>
</body></html>