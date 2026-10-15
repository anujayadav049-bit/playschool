<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>All Forms - Admin</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF8F0]">

<div class="flex min-h-screen">

  <!-- LEFT SIDEBAR -->
  <div class="w-[270px] bg-white border-r-2 border-orange-100 p-4 fixed h-screen">
    <div class="mb-6">
      <img src="{{ asset('assets/img/logo/logo1.webp') }}" style="height:40px">
      <p class="text-[10px] font-bold tracking-widest text-gray-400 mt-2">ADMIN PANEL</p>
    </div>
    <div class="space-y-2">
      <a href="/admin/dashboard" class="block bg-white border px-4 py-3 rounded-xl font-semibold text-[13px]">📊 Dashboard</a>
      <a href="/admin/form-builder/create" class="block bg-white border px-4 py-3 rounded-xl font-semibold text-[13px]">➕ Create Form</a>
      <div class="block bg-[#FF5A00] text-white px-4 py-3 rounded-xl font-bold text-[13px]">📝 All Forms</div>
    </div>
    <div class="absolute bottom-4 left-4 right-4 space-y-2">
      <a href="{{ url('/') }}" class="block text-center bg-white border-2 py-2 rounded-full text-[12px] font-bold">← Back to Home</a>
      <a href="{{ url('/admin/logout') }}" class="block text-center bg-red-500 text-white py-2 rounded-full text-[12px] font-bold">Logout</a>
    </div>
  </div>

  <!-- RIGHT CONTENT -->
  <div class="flex-1 ml-[270px] p-6">
    <div class="max-w-4xl mx-auto">

      @if(session('success'))
      <div class="bg-green-50 border-2 border-green-200 text-green-700 px-4 py-2.5 rounded-xl text-[12px] font-bold mb-4 flex justify-between">
        <span>✅ {{ session('success') }}</span>
        <button onclick="this.parentElement.remove()">×</button>
      </div>
      @endif

      <div class="flex justify-between items-center mb-4">
        <h1 class="text-[18px] font-extrabold">All Forms <span class="text-[#FF5A00]">({{ $forms->count() }})</span></h1>
        <a href="/admin/form-builder/create" class="bg-[#FF5A00] text-white px-4 py-2 rounded-full text-[11px] font-bold">+ New</a>
      </div>

      <!-- Filter in one thin line -->
      <div class="bg-white border border-orange-100 rounded-xl p-2 flex gap-2 mb-4">
        <input type="text" id="searchBox" placeholder="Search..." class="flex-1 bg-[#FFF8F0] border border-orange-50 rounded-lg px-3 py-2 text-[11px] outline-none focus:border-[#FF5A00]">
        <select id="formFilter" class="w-[180px] bg-[#FFF8F0] border border-orange-50 rounded-lg px-3 py-2 text-[11px] font-bold outline-none">
            <option value="">All Forms</option>
            @foreach($forms as $f)
            <option value="{{ strtolower($f->name) }}">{{ $f->name }}</option>
            @endforeach
        </select>
      </div>

      <!-- THIN STRIPS LIST -->
      <div class="space-y-2" id="formsGrid">
        @forelse($forms as $form)
        <div class="bg-white border border-orange-100 rounded-xl px-4 py-3 flex items-center justify-between hover:shadow-sm hover:border-orange-200 transition" data-name="{{ strtolower($form->name) }} {{ strtolower($form->slug) }}">

            <div class="flex items-center gap-3 flex-1 min-w-0">
                <div class="w-8 h-8 bg-[#FFF0E6] rounded-lg flex items-center justify-center shrink-0">
                    <span class="text-[12px]">📝</span>
                </div>
                <div class="min-w-0 flex-1">
                    <div class="flex items-center gap-2">
                        <h3 class="font-bold text-[13px] truncate">{{ $form->name }}</h3>
                        <span class="bg-green-50 text-green-600 border border-green-100 text-[9px] font-bold px-2 py-0.5 rounded-full shrink-0">{{ $form->submissions_count }}</span>
                    </div>
                    <p class="text-[10px] text-gray-400 truncate">/form/{{ $form->slug }}</p>
                </div>
            </div>

            <!-- Small Icon Buttons -->
            <div class="flex items-center gap-1.5 shrink-0 ml-3">
                <a href="{{ url('/form/'.$form->slug) }}" target="_blank" title="View" class="w-7 h-7 bg-gray-50 hover:bg-gray-100 border rounded-lg flex items-center justify-center text-[12px]">👁️</a>
                <a href="{{ route('form-builder.submissions', $form->id) }}" title="Data" class="w-7 h-7 bg-orange-50 hover:bg-orange-100 border border-orange-100 rounded-lg flex items-center justify-center text-[12px]">📊</a>
                <a href="{{ route('form-builder.edit', $form->id) }}" title="Edit" class="w-7 h-7 bg-blue-50 hover:bg-blue-100 border border-blue-100 rounded-lg flex items-center justify-center text-[12px]">✏️</a>
                <form action="{{ route('form-builder.destroy', $form->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="inline">
                    @csrf @method('DELETE')
                    <button title="Delete" class="w-7 h-7 bg-red-50 hover:bg-red-100 border border-red-100 rounded-lg flex items-center justify-center text-[11px]">🗑️</button>
                </form>
            </div>

        </div>
        @empty
        <div class="bg-white border-2 border-orange-100 rounded-2xl p-8 text-center text-sm">No forms yet</div>
        @endforelse
      </div>

    </div>
  </div>
</div>

<script>
function filterCards(q){
    q=q.toLowerCase();
    document.querySelectorAll('#formsGrid > div').forEach(c=>{
        c.style.display=c.dataset.name.includes(q)?'':'none';
    });
}
document.getElementById('searchBox')?.addEventListener('input', e=> filterCards(e.target.value));
document.getElementById('formFilter')?.addEventListener('change', e=> filterCards(e.target.value));
</script>
</body>
</html>