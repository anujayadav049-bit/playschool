<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $form->name }} - Submissions</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<style>body{font-family:'Poppins'}</style>
</head>
<body class="bg-[#FFF8F0]">

<div class="flex min-h-screen">

  <!-- LEFT SIDEBAR - Same as Create Page -->
  <div class="w-[270px] bg-white border-r-2 border-orange-100 p-4 fixed h-screen">
    <div class="mb-6">
      <img src="{{ asset('assets/img/logo/logo1.webp') }}" style="height:40px">
      <p class="text-[10px] font-bold tracking-widest text-gray-400 mt-2">ADMIN PANEL</p>
    </div>
    <div class="space-y-2">
      <a href="/admin/dashboard" class="block bg-white border px-4 py-3 rounded-xl font-semibold text-[13px]">📊 Dashboard</a>
      <a href="/admin/form-builder/create" class="block bg-white border px-4 py-3 rounded-xl font-semibold text-[13px]">➕ Create Form</a>
      <a href="/admin/form-builder" class="block bg-white border px-4 py-3 rounded-xl font-semibold text-[13px]">📝 All Forms</a>
      <div class="block bg-[#FF5A00] text-white px-4 py-3 rounded-xl font-bold text-[13px]">📊 Submissions</div>
    </div>
    <div class="absolute bottom-4 left-4 right-4 space-y-2">
      <a href="{{ url('/') }}" class="block text-center bg-white border-2 py-2 rounded-full text-[12px] font-bold">← Back to Home</a>
      <a href="{{ url('/admin/logout') }}" class="block text-center bg-red-500 text-white py-2 rounded-full text-[12px] font-bold">Logout</a>
    </div>
  </div>

  <!-- RIGHT CONTENT -->
  <div class="flex-1 ml-[270px] p-6">
    <div class="max-w-6xl mx-auto">

      <div class="bg-white border-2 border-orange-100 p-5 rounded-2xl flex justify-between items-center mb-5">
        <div>
          <h1 class="text-[18px] font-extrabold">📊 {{ $form->name }} <span class="text-[#FF5A00]">({{ count($form->submissions) }})</span></h1>
          <p class="text-[11px] text-gray-400 mt-1 font-mono">/form/{{ $form->slug }}</p>
        </div>
        <div class="flex gap-2">
          <a href="/admin/form-builder" class="bg-white border-2 px-4 py-2 rounded-full text-[12px] font-bold">← All Forms</a>
          <a href="{{ url('/form/'.$form->slug) }}" target="_blank" class="bg-[#FF5A00] text-white px-4 py-2 rounded-full text-[12px] font-bold">View Form</a>
        </div>
      </div>

      @if(count($form->submissions) > 0)
      <div class="bg-white border-2 border-orange-100 rounded-2xl overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full text-left">
            <thead class="bg-[#FFF8F0] border-b-2 border-orange-100">
              <tr>
                <th class="p-4 text-[11px] font-bold uppercase text-gray-500">#</th>
                @php
                  $first = $form->submissions->first();
                  $keys = $first? array_keys(is_string($first->data)? json_decode($first->data, true) : $first->data) : [];
                @endphp
                @foreach($keys as $k)
                  <th class="p-4 text-[11px] font-bold uppercase text-gray-500 whitespace-nowrap">{{ $k }}</th>
                @endforeach
                <th class="p-4 text-[11px] font-bold uppercase text-gray-500">Date</th>
              </tr>
            </thead>
            <tbody>
              @foreach($form->submissions as $i => $sub)
              @php $data = is_string($sub->data)? json_decode($sub->data, true) : $sub->data; @endphp
              <tr class="border-b border-orange-50 hover:bg-[#FFF8F0]">
                <td class="p-4 text-[12px] font-bold">{{ $i+1 }}</td>
                @foreach($data as $val)
                  <td class="p-4 text-[12px] whitespace-nowrap">
                    @if(Str::startsWith($val, 'uploads/'))
                      <a href="/{{ $val }}" target="_blank" class="bg-blue-50 text-blue-600 border border-blue-100 px-2 py-1 rounded-full text-[10px] font-bold">View File</a>
                    @else
                      {{ $val }}
                    @endif
                  </td>
                @endforeach
                <td class="p-4 text-[11px] text-gray-400">{{ $sub->created_at->format('d M, h:i A') }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @else
      <div class="bg-white border-2 border-dashed border-orange-200 p-12 text-center rounded-2xl">
        <div class="w-12 h-12 bg-[#FFF8F0] rounded-full flex items-center justify-center mx-auto mb-3 text-xl">📭</div>
        <p class="text-[13px] font-bold text-gray-500">Abhi koi submission nahi hai</p>
        <p class="text-[11px] text-gray-400 mt-1">/form/{{ $form->slug }} pe form fill hote hi yahan dikhega</p>
      </div>
      @endif

    </div>
  </div>
</div>

</body>
</html>