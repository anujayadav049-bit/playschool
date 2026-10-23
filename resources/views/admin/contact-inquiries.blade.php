<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Inquiries</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF8F0]">
<div class="flex min-h-screen">

<!-- LEFT SIDE - SAME AS CONTACT-SETTINGS -->
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
            <a href="{{ url('admin/program-settings') }}" class="block bg-white px-3 py-2 rounded-lg text-[12px] mb-1">📚Program Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/activity-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🎨Activities Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/gallery-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] mb-1">🖼️Gallery Page<span class="float-right text-[10px]">↗</span></a>
            <a href="{{ url('admin/admission-settings') }}" class="block bg-white px-3 py-2 rounded-lg text-[12px] mb-1">🎓Admissions Page<span class="float-right text-[10px]">↗</span></a>
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
<h1 class="text-2xl font-bold mb-1">Contact Inquiries</h1>
<p class="text-[13px] text-gray-500 mb-6">Total {{ $inquiries->count() }} messages received from contact form</p>

@if(session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">{{ session('success') }}</div>
@endif

<div class="bg-white p-6 rounded-xl shadow border">
<div class="overflow-x-auto">
<table class="w-full border-collapse">
  <thead>
    <tr class="bg-[#FFF8F0] text-left">
      <th class="border p-3 text-[12px]">#</th>
      <th class="border p-3 text-[12px]">Name</th>
      <th class="border p-3 text-[12px]">Contact Info</th>
      <th class="border p-3 text-[12px]">Dept</th>
      <th class="border p-3 text-[12px]">Message</th>
      <th class="border p-3 text-[12px]">Date</th>
      <th class="border p-3 text-[12px]">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse($inquiries as $q)
    <tr class="hover:bg-orange-50">
      <td class="border p-3 text-[13px]">{{ $loop->iteration }}</td>
      <td class="border p-3 text-[13px] font-bold">{{ $q->name }}</td>
      <td class="border p-3 text-[12px]">{{ $q->email }}<br><span class="text-gray-500">{{ $q->phone }}</span></td>
      <td class="border p-3 text-[12px]">{{ $q->department }}</td>
      <td class="border p-3 text-[12px] max-w-[250px] truncate">{{ Str::limit($q->message, 60) }}</td>
      <td class="border p-3 text-[11px]">{{ $q->created_at->format('d M Y, h:i A') }}</td>
      <td class="border p-3">
        <div class="flex gap-2">
          <button onclick="document.getElementById('view-{{ $q->id }}').classList.remove('hidden')" class="bg-blue-500 text-white px-3 py-1 rounded-full text-[11px] font-bold">View</button>
          <form action="{{ route('admin.contact-inquiries.delete', $q->id) }}" method="POST" onsubmit="return confirm('Delete this inquiry?')">
            @csrf @method('DELETE')
            <button class="bg-red-500 text-white px-3 py-1 rounded-full text-[11px] font-bold">Delete</button>
          </form>
        </div>

        <!-- View Popup - Same Style -->
        <!-- NEW BEAUTIFUL VIEW POPUP -->
<div id="view-{{ $q->id }}" class="hidden fixed inset-0 bg-black/60 backdrop-blur-sm z-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-[20px] max-w-[520px] w-full shadow-2xl overflow-hidden border-2 border-orange-100">
    <!-- Header -->
    <div class="bg-gradient-to-r from-[#FF5A00] to-[#FF8A3D] p-5 text-white flex justify-between items-center">
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 bg-white text-[#FF5A00] rounded-full flex items-center justify-center font-extrabold text-[16px]">
          {{ strtoupper(substr($q->name,0,1)) }}
        </div>
        <div>
          <h3 class="font-bold text-[16px] leading-none">{{ $q->name }}</h3>
          <p class="text-[11px] opacity-90 mt-1">{{ $q->created_at->format('d M Y, h:i A') }}</p>
        </div>
      </div>
      <button onclick="document.getElementById('view-{{ $q->id }}').classList.add('hidden')" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30">✕</button>
    </div>

    <!-- Body -->
    <div class="p-6 space-y-4">
      <div class="grid grid-cols-2 gap-3">
        <div class="bg-[#FFF8F0] border border-orange-100 p-3 rounded-xl">
          <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Email</p>
          <p class="text-[13px] font-semibold mt-1 break-all">{{ $q->email }}</p>
        </div>
        <div class="bg-[#FFF8F0] border border-orange-100 p-3 rounded-xl">
          <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Phone</p>
          <p class="text-[13px] font-semibold mt-1">{{ $q->phone ?? 'Not provided' }}</p>
        </div>
      </div>

      <div class="bg-white border-2 border-gray-100 p-3 rounded-xl flex justify-between items-center">
        <div>
          <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Department</p>
          <p class="text-[13px] font-bold mt-1 text-[#FF5A00]">{{ $q->department ?? 'General' }}</p>
        </div>
        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-[10px] font-bold">NEW</span>
      </div>

      <div>
        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2">Message</p>
        <div class="bg-[#FFF8F0] border-l-4 border-[#FF5A00] p-4 rounded-xl text-[13px] leading-6 text-gray-700">
          {{ $q->message }}
        </div>
      </div>

      <div class="flex gap-3 pt-2">
        <a href="mailto:{{ $q->email }}" class="flex-1 bg-[#FF5A00] text-white text-center py-3 rounded-full font-bold text-[13px] hover:bg-[#E05400]">📧 Reply via Email</a>
        <button onclick="document.getElementById('view-{{ $q->id }}').classList.add('hidden')" class="flex-1 bg-white border-2 border-gray-200 py-3 rounded-full font-bold text-[13px]">Close</button>
      </div>
    </div>
  </div>
</div>

      </td>
    </tr>
    @empty
    <tr><td colspan="7" class="text-center p-6 text-gray-400">No inquiries yet</td></tr>
    @endforelse
  </tbody>
</table>
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