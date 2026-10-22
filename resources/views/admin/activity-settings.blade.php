<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Activity Settings</title><script src="https://cdn.tailwindcss.com"></script></head>
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
            <a href="{{ url('admin/about-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">👨‍👩‍👧‍👦About Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/program-settings') }}" class="block bg-white  px-3 py-2 rounded-lg text-[12px] mb-1">📚Program Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/activity-settings') }}" class="block bg-[#FF5A00] text-white border px-3 py-2 rounded-lg text-[12px] mb-1">🎨Activities Page<span class="float-right text-[10px]">↗</span></a>
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

<div class="ml-[270px] flex-1 p-8">
<h1 class="text-2xl font-bold mb-6">Activity Page Settings <span class="text-sm font-normal text-gray-500">({{ $activities->count() }}/8 Cards)</span></h1>

@if(session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">{{ session('success') }}</div>
@endif

<!-- TOP FORM - GALLERY Jaisa -->
<div class="bg-white p-6 rounded-xl shadow border">
<form action="{{ isset($editActivity) ? url('admin/activity-settings/update/'.$editActivity->id) : route('admin.activity.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="grid grid-cols-2 gap-4">
  <div class="mb-4"><label class="block font-semibold mb-1">Activity Title *</label><input type="text" name="title" value="{{ $editActivity->title ?? '' }}" class="w-full border rounded px-3 py-2" required></div>
  <div class="mb-4"><label class="block font-semibold mb-1">Category *</label><input type="text" name="category" value="{{ $editActivity->category ?? '' }}" class="w-full border rounded px-3 py-2" required></div>
</div>
<div class="mb-4"><label class="block font-semibold mb-1">Description</label><textarea name="description" class="w-full border rounded px-3 py-2" rows="3">{{ $editActivity->description ?? '' }}</textarea></div>
<div class="mb-4"><label class="block font-semibold mb-1">Activity Image {{ isset($editActivity) ? '(change karna ho to select karo)' : '*' }}</label><input type="file" name="image" class="w-full border rounded px-3 py-2" {{ isset($editActivity) ? '' : 'required' }}>
@if(isset($editActivity) && $editActivity->image)
<p class="mt-2"><img src="{{ asset('storage/'.$editActivity->image) }}" class="w-20 h-20 object-cover rounded border"></p>
@endif
</div>

<button type="submit" class="bg-[#FF6B2B] text-white px-6 py-2 rounded font-bold">{{ isset($editActivity) ? 'Update' : 'Save Activity' }}</button>
@if(isset($editActivity))
<a href="{{ url('admin/activity-settings') }}" class="ml-2 px-6 py-2 bg-gray-200 rounded font-bold">Cancel</a>
@endif
</form>
</div>

<!-- LIST - GALLERY Jaisa Edit/Delete -->
<div class="bg-white p-6 rounded-xl shadow border mt-8">
<h2 class="text-lg font-bold mb-4">Added Activities</h2>
<div class="grid grid-cols-4 gap-4">
@foreach($activities as $act)
<div class="border rounded-xl p-3 text-center bg-[#FFFBF5]">
<div class="w-full h-24 mb-2 bg-white rounded-lg border overflow-hidden flex items-center justify-center">
@if($act->image)
<img src="{{ asset('storage/'.$act->image) }}" class="w-full h-full object-cover">
@else
<span class="text-3xl">🎨</span>
@endif
</div>
<h3 class="font-bold text-[12px]">{{ $act->title }}</h3>
<p class="text-[11px] text-gray-500">{{ $act->category }}</p>
<div class="flex justify-center gap-2 mt-3">
  <a href="{{ url('admin/activity-settings/edit/'.$act->id) }}" class="bg-gray-800 text-white text-[11px] px-4 py-1 rounded">Edit</a>
  <a href="{{ url('admin/activity-settings/delete/'.$act->id) }}" onclick="return confirm('Delete?')" class="bg-red-100 text-red-600 text-[11px] px-4 py-1 rounded">Delete</a>
</div>
</div>
@endforeach
</div>
</div>

</div>
</div>
</body></html>