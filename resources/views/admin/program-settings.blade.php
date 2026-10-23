<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Program Settings</title>
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
            <a href="{{ url('admin/about-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">👨‍👩‍👧‍👦About Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/program-settings') }}" class="block bg-[#FF5A00] text-white  px-3 py-2 rounded-lg text-[12px] mb-1">📚Program Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/activity-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🎨Activities Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/gallery-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🖼️Gallery Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/admission-settings') }}" class="block bg-white  px-3 py-2 rounded-lg text-[12px] mb-1">🎓Admissions Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/contact-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">📞 Contact Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/faq-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">❓FAQ Page<span class="float-right text-[10px]">↗</span></a>
        </div>
    </div>
    <div class="mt-8 space-y-2">
      <a href="{{ url('/') }}" class="block text-center bg-white border-2 py-2 rounded-full text-[12px] font-bold">← Back to Home</a>
      <a href="{{ url('/admin/logout') }}" class="block text-center bg-red-500 text-white py-2 rounded-full text-[12px] font-bold">Logout</a>
    </div>
  </div>

    {{-- Main Content --}}
    <div class="ml-[270px] flex-1 p-8">
        <h1 class="text-2xl font-bold mb-6">Program Page Settings</h1>

        <div class="bg-white p-6 rounded-xl shadow border">
            {{-- YAHAN SIRF YE BADLA HAI - EDIT SUPPORT --}}
            <form method="POST" action="{{ route('admin.program.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $editProgram->id ?? '' }}">
                
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Program Title</label>
                    <input type="text" name="title" value="{{ $editProgram->title ?? '' }}" class="w-full border rounded px-3 py-2" placeholder="e.g. Play Group" required>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Age Group</label>
                        <input type="text" name="age_group" value="{{ $editProgram->age_group ?? '' }}" class="w-full border rounded px-3 py-2" placeholder="2-4 Years" required>
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Location</label>
                        <input type="text" name="location" value="{{ $editProgram->location ?? '6391 Elgin St. Celina, USA' }}" class="w-full border rounded px-3 py-2">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Date</label>
                        <input type="date" name="date" value="{{ $editProgram->date ?? '' }}" class="w-full border rounded px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Reviews Count</label>
                        <input type="text" name="reviews" value="{{ $editProgram->reviews ?? '10' }}" class="w-full border rounded px-3 py-2" placeholder="10">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Description</label>
                    <textarea name="description" class="w-full border rounded px-3 py-2" rows="3" required>{{ $editProgram->description ?? '' }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Program Image</label>
                    @if(isset($editProgram) && $editProgram->image)
                        <img src="{{ asset('storage/'.$editProgram->image) }}" class="h-20 mb-2 rounded">
                    @endif
                    <input type="file" name="image" class="w-full">
                </div>
                <button type="submit" class="bg-[#FF6B2B] text-white px-6 py-2 rounded font-bold">
                    {{ isset($editProgram) ? 'Update Program' : 'Add Program / Save' }}
                </button>
                @if(isset($editProgram))
                    <a href="{{ route('admin.program.index') }}" class="ml-3 text-sm underline">Cancel Edit</a>
                @endif
            </form>
        </div>

        {{-- YEH NAYA LIST WALA SECTION HAI - ISSE 6 PROGRAMS DIKHENGE --}}
        <div class="mt-8">
            <h2 class="text-lg font-bold mb-4">All Programs ({{ $programs->count() }}) - Edit karne ke liye Edit dabao</h2>
            <div class="grid grid-cols-3 gap-4">
                @foreach($programs as $p)
                <div class="bg-white rounded-xl shadow border overflow-hidden">
                    @if($p->image)
                        <img src="{{ asset('storage/'.$p->image) }}" class="w-full h-[160px] object-cover">
                    @else
                        <img src="{{ asset('assets/img/classes/classes'.(($loop->index % 6)+1).'.jpg') }}" class="w-full h-[160px] object-cover">
                    @endif
                    <div class="p-3">
                        <p class="font-bold text-[13px] leading-tight">{{ $p->title }}</p>
                        <p class="text-[11px] text-gray-500 mt-1">{{ $p->age_group }} | {{ $p->location ?? 'USA' }}</p>
                        <div class="flex gap-2 mt-3">
                            <a href="{{ route('admin.program.index') }}?edit={{ $p->id }}" class="flex-1 text-center bg-black text-white text-[12px] py-2 rounded-lg">Edit</a>
                            <a href="{{ route('admin.program.delete', $p->id) }}" onclick="return confirm('Delete?')" class="flex-1 text-center bg-red-100 text-red-600 text-[12px] py-2 rounded-lg">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
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