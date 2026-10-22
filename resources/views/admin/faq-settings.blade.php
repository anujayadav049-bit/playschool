<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF8F0]">
<div class="flex min-h-screen">

<div class="w-[270px] bg-white border-r-2 border-orange-100 p-4 fixed h-screen overflow-y-auto">
    <div class="mb-6"><img src="{{ asset('assets/img/logo/logo1.webp') }}" style="height:40px"></div>
    <a href="{{ url('/admin/dashboard') }}" class="block bg-white border px-4 py-3 rounded-xl font-semibold text-[13px]">📊 Dashboard</a>
    <div class="space-y-2">
      <div class="pt-3 mt-3 border-t-2 border-orange-100">
        <p class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest px-2 mb-2">📄 All Website Pages</p>
            <a href="{{ url('admin/home-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🏠Home Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/about-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">👨‍👩‍👧‍👦About Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/program-settings') }}" class="block bg-white px-3 py-2 rounded-lg text-[12px] mb-1">📚Program Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/activity-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🎨Activities Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/gallery-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🖼️Gallery Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/admissions-settings') }}" class="block bg-white px-3 py-2 rounded-lg text-[12px] mb-1">🎓Admissions Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/contact-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">📞 Contact Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/contact-inquiries') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">📩 Contact Inquiries<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/faq-settings') }}" class="block bg-[#FF5A00] text-white px-3 py-2 rounded-lg text-[12px] mb-1">❓FAQ Page<span class="float-right text-[10px]">↗</span></a>
        </div>
    </div>
    <div class="mt-8 space-y-2">
      <a href="{{ url('/') }}" class="block text-center bg-white border-2 py-2 rounded-full text-[12px] font-bold">← Back to Home</a>
      <a href="{{ url('/admin/logout') }}" class="block text-center bg-red-500 text-white py-2 rounded-full text-[12px] font-bold">Logout</a>
    </div>
</div>

<div class="ml-[270px] flex-1 p-8">
<h1 class="text-2xl font-bold mb-6">FAQ Page Settings</h1>

@if(session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">{{ session('success') }}</div>
@endif

<!-- ADD FAQ FORM -->
<div class="bg-white p-6 rounded-xl shadow border mb-8">
<h2 class="font-bold mb-4 text-[16px]">+ Add New FAQ</h2>
<form action="{{ route('admin.faq.store') }}" method="POST">@csrf
<div class="mb-4"><label class="block font-semibold mb-1 text-[13px]">Question *</label>
<input type="text" name="question" class="w-full border rounded-lg px-3 py-2 text-[13px]" placeholder="e.g. What is the admission age?" required></div>
<div class="mb-4"><label class="block font-semibold mb-1 text-[13px]">Answer *</label>
<textarea name="answer" class="w-full border rounded-lg px-3 py-2 text-[13px]" rows="3" placeholder="Write answer..." required></textarea></div>
<button type="submit" class="bg-[#FF6B2B] text-white px-8 py-2 rounded-full font-bold text-[13px]">Save FAQ</button>
</form>
</div>

<!-- FAQ LIST -->
<div class="bg-white p-6 rounded-xl shadow border">
<h2 class="font-bold mb-4">All FAQs - {{ $faqs->count() }}</h2>
<div class="space-y-3">
@forelse($faqs as $faq)
<div class="border border-orange-100 bg-[#FFF8F0] p-4 rounded-xl flex justify-between items-start">
  <div>
    <p class="font-bold text-[14px]">Q{{ $loop->iteration }}. {{ $faq->question }}</p>
    <p class="text-[13px] text-gray-600 mt-2 leading-6">{{ $faq->answer }}</p>
  </div>
  <form action="{{ route('admin.faq.delete', $faq->id) }}" method="POST" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')
    <button class="bg-red-500 text-white px-4 py-1 rounded-full text-[11px] font-bold ml-4">Delete</button>
  </form>
</div>
@empty
<p class="text-center text-gray-400 py-6">No FAQs added yet</p>
@endforelse
</div>
</div>

</div></div></body></html>