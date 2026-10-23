<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Admission Settings</title><script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-[#FFF8F0]"><div class="flex min-h-screen">
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
            <a href="{{ url('admin/gallery-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🖼️Gallery Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/admission-settings') }}" class="block bg-[#FF5A00] text-white px-3 py-2 rounded-lg text-[12px] mb-1">🎓Admissions Page<span class="float-right text-[10px]">↗</span></a>
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
<h1 class="text-2xl font-bold mb-6">Admission Page Settings</h1>
@if(session('success'))<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">{{ session('success') }}</div>@endif
<form action="{{ route('admin.admission.update') }}" method="POST" class="space-y-6">@csrf
<div class="bg-white p-6 rounded-xl shadow border">
<h2 class="font-bold mb-4">Top Section</h2>
<div class="grid grid-cols-2 gap-4">
<input name="sub_title" value="{{ $setting->sub_title }}" placeholder="Sub Title e.g. Join Us" class="border rounded-lg px-3 py-2 text-[13px]">
<input name="title_highlight" value="{{ $setting->title_highlight }}" placeholder="Highlight e.g. Open 2026-27 / 2027-28" class="border rounded-lg px-3 py-2 text-[13px]">
</div>
<input name="title" value="{{ $setting->title }}" class="w-full border rounded-lg px-3 py-2 text-[13px] mt-3" placeholder="Title e.g. Admission">
<textarea name="description" class="w-full border rounded-lg px-3 py-2 text-[13px] mt-3" rows="2" placeholder="Description">{{ $setting->description }}</textarea>
</div>

<div class="grid grid-cols-3 gap-4">
<div class="bg-white p-6 rounded-xl shadow border"><h3 class="font-bold mb-3">Step 1</h3>
<input name="step1_title" value="{{ $setting->step1_title }}" class="w-full border rounded-lg px-3 py-2 text-[13px] mb-2" placeholder="Step 1 Title">
<input name="step1_sub" value="{{ $setting->step1_sub }}" class="w-full border rounded-lg px-3 py-2 text-[13px] mb-2" placeholder="Sub Title e.g. Campus Tour">
<textarea name="step1_desc" class="w-full border rounded-lg px-3 py-2 text-[13px] mb-2" rows="3" placeholder="Description">{{ $setting->step1_desc }}</textarea>
</div>
<div class="bg-white p-6 rounded-xl shadow border"><h3 class="font-bold mb-3">Step 2</h3>
<input name="step2_title" value="{{ $setting->step2_title }}" class="w-full border rounded-lg px-3 py-2 text-[13px] mb-2" placeholder="Step 2 Title">
<input name="step2_sub" value="{{ $setting->step2_sub }}" class="w-full border rounded-lg px-3 py-2 text-[13px] mb-2" placeholder="Sub Title e.g. Registration">
<textarea name="step2_desc" class="w-full border rounded-lg px-3 py-2 text-[13px] mb-2" rows="3" placeholder="Description">{{ $setting->step2_desc }}</textarea>
</div>
<div class="bg-white p-6 rounded-xl shadow border"><h3 class="font-bold mb-3">Step 3</h3>
<input name="step3_title" value="{{ $setting->step3_title }}" class="w-full border rounded-lg px-3 py-2 text-[13px] mb-2" placeholder="Step 3 Title">
<input name="step3_sub" value="{{ $setting->step3_sub }}" class="w-full border rounded-lg px-3 py-2 text-[13px] mb-2" placeholder="Sub Title e.g. Welcome">
<textarea name="step3_desc" class="w-full border rounded-lg px-3 py-2 text-[13px] mb-2" rows="3" placeholder="Description">{{ $setting->step3_desc }}</textarea>
</div>
</div>

<div class="grid grid-cols-2 gap-4">
<div class="bg-white p-6 rounded-xl shadow border">
<div class="flex justify-between items-center mb-3">
<h3 class="font-bold">🎂 Age Criteria</h3>
<button type="button" onclick="addRow('age-box','age_criteria')" class="bg-[#FF5A00] text-white px-3 py-1 rounded-full text-[11px] font-bold">+ Add</button>
</div>
<div id="age-box" class="space-y-2">
@php $ages = $setting->age_criteria ? preg_split('/[\r\n,]+/', $setting->age_criteria) : ['']; @endphp
@forelse($ages as $age)
@if(trim($age) !== '')
<div class="flex gap-2 items-center">
<input name="age_criteria[]" value="{{ trim($age) }}" class="flex-1 border rounded-lg px-3 py-2 text-[13px]">
<button type="button" onclick="this.parentElement.remove()" class="bg-red-500 text-white px-2 py-1 rounded-lg text-[10px]">✕</button>
</div>
@endif
@empty
<div class="flex gap-2 items-center"><input name="age_criteria[]" class="flex-1 border rounded-lg px-3 py-2 text-[13px]" placeholder="e.g. Play Group: 1.5 to 2.5 Years"><button type="button" onclick="this.parentElement.remove()" class="bg-red-500 text-white px-2 py-1 rounded-lg text-[10px]">✕</button></div>
@endforelse
</div>
</div>

<div class="bg-white p-6 rounded-xl shadow border">
<div class="flex justify-between items-center mb-3">
<h3 class="font-bold">📄 Documents</h3>
<button type="button" onclick="addRow('doc-box','documents')" class="bg-[#FF5A00] text-white px-3 py-1 rounded-full text-[11px] font-bold">+ Add</button>
</div>
<div id="doc-box" class="space-y-2">
@php $docs = $setting->documents ? preg_split('/[\r\n,]+/', $setting->documents) : ['']; @endphp
@forelse($docs as $doc)
@if(trim($doc) !== '')
<div class="flex gap-2 items-center">
<input name="documents[]" value="{{ trim($doc) }}" class="flex-1 border rounded-lg px-3 py-2 text-[13px]">
<button type="button" onclick="this.parentElement.remove()" class="bg-red-500 text-white px-2 py-1 rounded-lg text-[10px]">✕</button>
</div>
@endif
@empty
<div class="flex gap-2 items-center"><input name="documents[]" class="flex-1 border rounded-lg px-3 py-2 text-[13px]" placeholder="e.g. Birth Certificate"><button type="button" onclick="this.parentElement.remove()" class="bg-red-500 text-white px-2 py-1 rounded-lg text-[10px]">✕</button></div>
@endforelse
</div>
</div>
</div>

<button class="bg-[#FF6B2B] text-white px-10 py-3 rounded-full font-bold">Save All Changes</button>
</form></div></div>

<script>
function addRow(boxId, inputName){
  const box = document.getElementById(boxId);
  const div = document.createElement('div');
  div.className = 'flex gap-2 items-center';
  div.innerHTML = `<input name="${inputName}[]" class="flex-1 border rounded-lg px-3 py-2 text-[13px]" placeholder="New Item"><button type="button" onclick="this.parentElement.remove()" class="bg-red-500 text-white px-2 py-1 rounded-lg text-[10px]">✕</button>`;
  box.appendChild(div);
}
</script>

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
</body></html>