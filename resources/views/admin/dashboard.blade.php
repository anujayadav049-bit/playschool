<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF8F0]">

<div class="flex min-h-screen">

  <!-- LEFT SIDE - SIDER MENU -->
  <div class="w-[270px] bg-white border-r-2 border-orange-100 p-4 fixed h-screen overflow-y-auto">
    <div class="mb-6">
      <img src="{{ asset('assets/img/logo/logo1.webp') }}" style="height:40px">
    </div>

    <div class="space-y-2">
      <div class="bg-[#FF5A00] text-white px-4 py-3 rounded-xl font-bold text-[13px] flex gap-3">
        📊 Dashboard
      </div>

      <a href="{{ url('/admin/form-builder/create') }}" class="block bg-orange-50 border-2 border-orange-200 px-4 py-3 rounded-xl font-bold text-[13px] text-orange-700">
        ➕ Create Form
      </a>

      <a href="{{ url('/admin/form-builder') }}" class="block bg-white border px-4 py-3 rounded-xl font-semibold text-[13px]">
        📝 All Forms <span class="float-right text-[11px] bg-gray-100 px-2 py-1 rounded-full">{{ \App\Models\Form::count() }}</span>
      </a>

      <a href="{{ url('/admin/admissions') }}" class="block bg-white border px-4 py-3 rounded-xl font-semibold text-[13px] mt-3">
        🎓 Total Admission <span class="float-right font-extrabold text-lg">4</span>
      </a>

      <a href="{{ url('/admin/admissions?status=pending') }}" class="block bg-white border px-4 py-3 rounded-xl font-semibold text-[13px]">
        👁️ Pending Review <span class="float-right font-extrabold text-lg">1</span>
      </a>

      <!-- ===== ALL WEBSITE PAGES - FIXED ===== -->
      <div class="pt-3 mt-3 border-t-2 border-orange-100">
        <p class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest px-2 mb-2">📄 All Website Pages</p>
        <a href="{{ url('admin/home-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] font-medium hover:bg-orange-50">🏠 Home Page Settings<span class="float-right text-[10px]">↗</span></a>
        <a href="{{ url('admin/about-settings') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] font-medium hover:bg-orange-50">👨‍👩‍👧‍👦 About Us <span class="float-right text-[10px]">↗</span></a>
        <a href="{{ url('admin/pages/program') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] font-medium hover:bg-orange-50 mt-1">📚 Program <span class="float-right text-[10px]">↗</span></a>
        <a href="{{ url('admin/pages/activities') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] font-medium hover:bg-orange-50 mt-1">🎨 Activities <span class="float-right text-[10px]">↗</span></a>
        <a href="{{ url('admin/pages/gallery') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] font-medium hover:bg-orange-50 mt-1">🖼️ Gallery <span class="float-right text-[10px]">↗</span></a>
        <a href="{{ url('admin/pages/admissions') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] font-medium hover:bg-orange-50 mt-1">🎓 Admissions <span class="float-right text-[10px]">↗</span></a>
        <a href="{{ url('admin/pages/contact') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] font-medium hover:bg-orange-50 mt-1">📞 Contact Us <span class="float-right text-[10px]">↗</span></a>
        <a href="{{ url('admin/pages/faq') }}" class="block bg-white border px-3 py-2 rounded-lg text-[12px] font-medium hover:bg-orange-50 mt-1">❓ FAQ <span class="float-right text-[10px]">↗</span></a>
      </div>
      <!-- ===== END PAGES ===== -->

    </div>

    <div class="mt-8 space-y-2">
      <a href="{{ url('/') }}" class="block text-center bg-white border-2 py-2 rounded-full text-[12px] font-bold">← Back to Home</a>
      <a href="{{ url('/admin/logout') }}" class="block text-center bg-red-500 text-white py-2 rounded-full text-[12px] font-bold">Logout</a>
    </div>
  </div>

  <!-- RIGHT SIDE - PATLI PATTI WALA CONTENT -->
  <div class="flex-1 ml-[270px] p-6">

    <h1 class="text-xl font-extrabold mb-4">ADMIN PANEL</h1>

    <div class="space-y-3">

      <div class="bg-white border-2 border-orange-100 rounded-xl px-5 py-4 flex justify-between items-center">
        <div class="flex gap-3 items-center">
          <div class="w-9 h-9 bg-orange-100 rounded-full flex items-center justify-center">📚</div>
          <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase">Total Admissions</p>
            <p class="font-bold text-[13px]">4 Admissions</p>
          </div>
        </div>
        <a href="/admin/admissions" class="bg-[#FF5A00] text-white px-4 py-1.5 rounded-full text-[11px] font-bold">View All →</a>
      </div>

      <div class="bg-white border rounded-xl px-5 py-4 flex justify-between items-center">
        <div class="flex gap-3 items-center">
          <div class="w-9 h-9 bg-blue-100 rounded-full flex items-center justify-center">👁️</div>
          <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase">Pending Review</p>
            <p class="font-bold text-[13px]">1 Pending</p>
          </div>
        </div>
        <span class="bg-blue-50 text-blue-600 border border-blue-100 px-3 py-1 rounded-full text-[10px] font-bold">1 pending</span>
      </div>

      <div class="bg-white border rounded-xl px-5 py-4 flex justify-between items-center">
        <div class="flex gap-3 items-center">
          <div class="w-9 h-9 bg-yellow-100 rounded-full flex items-center justify-center">⭐</div>
          <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase">Play School</p>
            <p class="font-bold text-[13px]">Approved: 1 | Rejected: 1</p>
          </div>
        </div>
        <a href="/" class="bg-white border-2 border-orange-200 text-orange-600 px-4 py-1.5 rounded-full text-[11px] font-bold">Visit Website</a>
      </div>

      <div class="bg-[#FF5A00] rounded-xl px-5 py-4 flex justify-between items-center">
        <div class="flex gap-3 items-center">
          <div class="w-9 h-9 bg-white rounded-full flex items-center justify-center text-orange-600">➕</div>
          <div>
            <p class="text-[10px] font-bold text-orange-100 uppercase">Quick Action</p>
            <p class="font-bold text-white text-[13px]">New Form Create Karo</p>
          </div>
        </div>
        <a href="/admin/form-builder/create" class="bg-white text-[#FF5A00] px-4 py-1.5 rounded-full text-[11px] font-bold">Create Now</a>
      </div>

    </div>

  </div>

</div>

</body>
</html>