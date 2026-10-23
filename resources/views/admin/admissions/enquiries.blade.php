<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admission Enquiries</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-[#FFFBF7]">
<div class="flex min-h-screen">
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

<div class="ml-[270px] flex-1 p-8">
<h2 class="font-bold text-[20px] text-[#1A233A]">Admission Enquiries</h2>
<p class="text-[13px] text-gray-500 mb-6">Total {{ $enquiries->count() }} messages received from admission form</p>

<div class="bg-white rounded-2xl border border-orange-100 shadow-sm p-2 overflow-x-auto">
<table class="w-full text-[13px]">
<thead>
<tr class="text-[11px] text-gray-500 uppercase">
<th class="p-4 text-left font-semibold">#</th>
<th class="p-4 text-left font-semibold">Child Name</th>
<th class="p-4 text-left font-semibold">Parent Name</th>
<th class="p-4 text-left font-semibold">Mobile</th>
<th class="p-4 text-left font-semibold">Class</th>
<th class="p-4 text-left font-semibold">Message</th>
<th class="p-4 text-left font-semibold">Date</th>
<th class="p-4 text-left font-semibold">Action</th>
</tr>
</thead>
<tbody>
@forelse($enquiries as $i => $row)
<tr class="border-t border-orange-50 hover:bg-orange-50/30">
<td class="p-4">{{ $i+1 }}</td>
<td class="p-4 font-semibold">{{ $row->child_name }}</td>
<td class="p-4">{{ $row->parent_name }}</td>
<td class="p-4 font-bold text-[#FF5A00]">{{ $row->mobile }}</td>
<td class="p-4">{{ $row->class_name }}</td>
<td class="p-4 max-w-[150px] truncate">{{ $row->message }}</td>
<td class="p-4 text-[11px]">{{ $row->created_at->format('d M Y, h:i A') }}</td>
<td class="p-4 flex gap-2">
<button onclick="openView('{{ $row->child_name }}','{{ $row->parent_name }}','{{ $row->mobile }}','{{ $row->class_name }}','{{ addslashes($row->message) }}','{{ $row->created_at->format('d M Y, h:i A') }}')" class="bg-blue-500 text-white px-4 py-1.5 rounded-full text-[11px] font-semibold">View</button>
<form action="{{ route('admin.admission.delete',$row->id) }}" method="POST" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="bg-red-500 text-white px-4 py-1.5 rounded-full text-[11px] font-semibold">Delete</button></form>
</td>
</tr>
@empty
<tr><td colspan="8" class="p-10 text-center text-gray-400">No Admission Enquiries</td></tr>
@endforelse
</tbody>
</table>
</div>
</div>
</div>

<div id="viewModal" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50 p-4">
<div class="bg-white rounded-2xl w-full max-w-[480px] overflow-hidden shadow-2xl">
<div class="bg-[#FF6B2B] p-5 text-white relative">
<div class="flex items-center gap-3">
<div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-[#FF6B2B] font-bold text-[14px]">{{ substr($enquiries->first()->child_name ?? 'R',0,1) }}</div>
<div>
<div id="m_child" class="font-bold text-[15px]"></div>
<div id="m_date" class="text-[11px] opacity-90"></div>
</div>
</div>
<button onclick="closeView()" class="absolute top-4 right-4 w-7 h-7 bg-white/20 rounded-full flex items-center justify-center"><i class="fa fa-times text-[12px]"></i></button>
</div>

<div class="p-6">
<div class="grid grid-cols-2 gap-6 mb-5">
<div>
<div class="text-[10px] text-gray-400 uppercase font-bold tracking-wider mb-1">CHILD NAME</div>
<div id="m_child2" class="text-[13px] font-medium"></div>
<div class="text-[10px] text-gray-400 uppercase font-bold tracking-wider mt-4 mb-1">PARENT NAME</div>
<div id="m_parent" class="text-[13px] font-medium"></div>
</div>
<div>
<div class="text-[10px] text-gray-400 uppercase font-bold tracking-wider mb-1">MOBILE</div>
<div id="m_mobile" class="text-[13px] font-bold"></div>
<div class="mt-4">
<span id="m_class" class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-[11px] font-bold"></span>
</div>
</div>
</div>
<div>
<div class="text-[10px] text-gray-400 uppercase font-bold tracking-wider mb-2">CLASS</div>
<div id="m_class2" class="text-[13px] mb-4"></div>
</div>
<div>
<div class="text-[10px] text-gray-400 uppercase font-bold tracking-wider mb-2">MESSAGE</div>
<div class="border-l-2 border-orange-200 pl-3 py-1">
<div id="m_msg" class="text-[13px] text-gray-700"></div>
</div>
</div>
<div class="flex gap-3 mt-8">
<a id="m_call" href="" class="flex-1 bg-[#FF6B2B] text-white py-2.5 rounded-full text-center text-[13px] font-semibold"><i class="fa fa-phone mr-1"></i> Call Parent</a>
<button onclick="closeView()" class="flex-1 bg-gray-100 py-2.5 rounded-full text-[13px] font-semibold">Close</button>
</div>
</div>
</div>
</div>

<script>
function openView(child,parent,mobile,cls,msg,date){
 document.getElementById('m_child').innerText=child;
 document.getElementById('m_child2').innerText=child;
 document.getElementById('m_parent').innerText=parent;
 document.getElementById('m_mobile').innerText=mobile;
 document.getElementById('m_class').innerText=cls;
 document.getElementById('m_class2').innerText=cls;
 document.getElementById('m_msg').innerText=msg || 'No message';
 document.getElementById('m_date').innerText=date;
 document.getElementById('m_call').href='tel:'+mobile;
 document.getElementById('viewModal').classList.remove('hidden');
 document.getElementById('viewModal').classList.add('flex');
}
function closeView(){
 document.getElementById('viewModal').classList.add('hidden');
 document.getElementById('viewModal').classList.remove('flex');
}
</script>
</body>
</html>