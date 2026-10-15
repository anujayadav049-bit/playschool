<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Create Form - Admin</title>
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
      <div class="block bg-[#FF5A00] text-white px-4 py-3 rounded-xl font-bold text-[13px]">➕ Create Form</div>
      <a href="/admin/form-builder" class="block bg-white border px-4 py-3 rounded-xl font-semibold text-[13px]">📝 All Forms</a>
    </div>
    <div class="absolute bottom-4 left-4 right-4">
      
    <a href="{{ url('/') }}" class="block text-center bg-white border-2 py-2 rounded-full text-[12px] font-bold">← Back to Home</a>
      <a href="{{ url('/admin/logout') }}" class="block text-center bg-red-500 text-white py-2 rounded-full text-[12px] font-bold">Logout</a>
    </div>
  </div>

  <!-- RIGHT CONTENT -->
  <div class="flex-1 ml-[270px] p-6">
    <div class="max-w-3xl mx-auto">

      @if(session('success'))
      <div class="bg-green-50 border-2 border-green-200 text-green-700 px-5 py-3 rounded-xl text-[13px] font-bold mb-4">✅ {{ session('success') }}</div>
      @endif

      <div class="flex justify-between items-center mb-5">
        <h1 class="text-xl font-extrabold">Create New Form</h1>
        <a href="/admin/form-builder" class="bg-white border-2 px-4 py-2 rounded-full text-[12px] font-bold">All Forms</a>
      </div>

      <form action="{{ route('form-builder.store') }}" method="POST">
        @csrf

        <div class="bg-white border-2 border-orange-100 rounded-2xl p-6 mb-4">
          <label class="text-[11px] font-bold uppercase text-gray-600 mb-1.5 block">Form Name *</label>
          <input type="text" name="name" placeholder="Ex: Admission Form" class="w-full border-2 border-orange-100 rounded-xl px-4 py-3 text-[13px] focus:border-[#FF5A00] outline-none" required>
        </div>

        <div class="bg-white border-2 border-orange-100 rounded-2xl p-6 mb-4">
          <div class="flex justify-between items-center mb-4">
            <h3 class="font-bold text-[11px] tracking-widest uppercase text-gray-500">Form Fields</h3>
            <button type="button" onclick="addField()" class="bg-[#FF5A00] text-white px-4 py-1.5 rounded-full text-[11px] font-bold">+ Add Field</button>
          </div>

          <div id="fields-container" class="space-y-3"></div>
        </div>

        <button type="submit" class="w-full bg-[#FF5A00] text-white py-3.5 rounded-xl font-bold text-[14px]">Save Form →</button>
      </form>
    </div>
  </div>

</div>

<script>
let fieldIndex = 0;
function addField(){
  let id = fieldIndex++;
  let html = `
  <div class="field-row bg-[#FFF8F0] border border-orange-100 rounded-xl p-4" id="field-${id}">
    <div class="flex justify-between items-center mb-3">
      <span class="text-[11px] font-bold text-orange-600">FIELD #${id+1}</span>
      <div class="flex gap-2 items-center">
        <label class="flex gap-1 text-[11px] font-bold"><input type="checkbox" name="fields[${id}][required]" value="1"> Required</label>
        <button type="button" onclick="document.getElementById('field-${id}').remove()" class="bg-red-50 text-red-600 border border-red-200 px-2 py-1 rounded-full text-[10px] font-bold">Delete</button>
      </div>
    </div>

    <div class="grid grid-cols-2 gap-3">
      <div>
        <label class="text-[10px] font-bold uppercase text-gray-500">Field Label *</label>
        <input type="text" name="fields[${id}][label]" placeholder="Ex: Student Name" class="w-full bg-white border-2 border-orange-100 rounded-lg px-3 py-2.5 text-[12px] outline-none focus:border-[#FF5A00]" required>
      </div>
      <div>
        <label class="text-[10px] font-bold uppercase text-gray-500">Field Type</label>
        <select name="fields[${id}][type]" onchange="toggleOptions(${id}, this.value)" class="w-full bg-white border-2 border-orange-100 rounded-lg px-3 py-2.5 text-[12px] outline-none">
          <option value="text">Text</option>
          <option value="number">Number</option>
          <option value="email">Email</option>
          <option value="phone">Phone</option>
          <option value="textarea">Textarea</option>
          <option value="date">Date</option>
          <option value="select">Select</option>
          <option value="radio">Radio</option>
          <option value="checkbox">Checkbox</option>
          <option value="file">File</option>
        </select>
      </div>
    </div>

    <div id="options-${id}" class="hidden mt-3">
      <label class="text-[10px] font-bold uppercase text-gray-500">Options (comma separated)</label>
      <input type="text" name="fields[${id}][options]" placeholder="Ex: Male, Female, Other" class="w-full bg-white border-2 border-orange-200 rounded-lg px-3 py-2.5 text-[12px] mt-1 focus:border-[#FF5A00] outline-none">
      <p class="text-[10px] text-gray-400 mt-1">Example: Class 1, Class 2, Class 3</p>
    </div>
  </div>`;
  document.getElementById('fields-container').insertAdjacentHTML('beforeend', html);
}
function toggleOptions(id, type){
  let box = document.getElementById(`options-${id}`);
  if(['select','radio','checkbox'].includes(type)) box.classList.remove('hidden');
  else box.classList.add('hidden');
}
addField();
</script>

</body>
</html>