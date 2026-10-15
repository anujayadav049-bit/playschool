@php
 $d = isset($data)? $data : (isset($admission)? $admission : null);
 function fileUrl($p){ return $p? asset('storage/'.$p) : '#'; }
@endphp
<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<style> body{font-family:'Poppins',sans-serif; background:#fff8f2} </style>
</head>
<body class="p-4 md:p-6">
<div class="max-w-5xl mx-auto">
    <a href="{{ route('admin.admissions') }}" class="inline-flex items-center bg-white border px-4 py-2 rounded-xl text-sm mb-4 shadow-sm"><i class="fa-solid fa-arrow-left mr-2"></i>Back</a>

    <div class="bg-white rounded-[20px] border shadow-sm overflow-hidden">
        <!-- HEADER -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-500 p-5 flex items-center gap-4">
            <img src="{{ fileUrl($d->photo) }}" class="w-16 h-16 rounded-xl object-cover border-2 border-white bg-white" onerror="this.src='https://ui-avatars.com/api/?name={{ $d->student_name }}'">
            <div class="flex-1">
                <div class="flex items-center gap-2">
                    <h1 class="text-white text-xl font-bold">{{ $d->student_name }}</h1>
                    @if(($d->status??'Pending') == 'Approved')
                        <span class="bg-white text-green-600 text-[10px] px-2.5 py-1 rounded-full font-bold">✓ APPROVED</span>
                    @elseif(($d->status??'Pending') == 'Rejected')
                        <span class="bg-white text-red-600 text-[10px] px-2.5 py-1 rounded-full font-bold">✕ REJECTED</span>
                    @else
                        <span class="bg-yellow-300 text-yellow-800 text-[10px] px-2.5 py-1 rounded-full font-bold">⏳ PENDING</span>
                    @endif
                </div>
                <p class="text-orange-100 text-sm">Class: {{ $d->class_apply }} | ID #{{ $d->id }}</p>
            </div>
            <a href="{{ fileUrl($d->photo) }}" target="_blank" class="bg-white/20 text-white text-[11px] px-3 py-1.5 rounded-full font-bold border border-white/30">View Photo</a>
        </div>

        <div class="p-6">

            <!-- STATUS ACTION BAR -->
            <div class="bg-gray-50 border rounded-xl p-3 flex items-center justify-between mb-6">
                <span class="text-[11px] font-bold text-gray-500 uppercase"><i class="fa-solid fa-bolt mr-1 text-orange-500"></i> Quick Status Update</span>
                <form action="{{ route('admin.status', $d->id) }}" method="POST" class="flex gap-2">
                    @csrf
                    <button name="status" value="Approved" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-xs font-bold"><i class="fa-solid fa-check mr-1"></i> Approve</button>
                    <button name="status" value="Rejected" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-xs font-bold"><i class="fa-solid fa-xmark mr-1"></i> Reject</button>
                    <button name="status" value="Pending" class="bg-white border hover:bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-xs font-bold">Pending</button>
                </form>
            </div>

            <!-- 1. STUDENT DETAILS -->
            <h3 class="text-[13px] font-bold text-gray-800 mb-3 flex items-center gap-2"><i class="fa-solid fa-user text-orange-500"></i> Student Details</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-6 text-[13px]">
                <div class="border rounded-lg p-3 bg-gray-50/50"><span class="text-[10px] text-gray-400 font-bold uppercase block">Student Name</span><b>{{ $d->student_name }}</b></div>
                <div class="border rounded-lg p-3 bg-gray-50/50"><span class="text-[10px] text-gray-400 font-bold uppercase block">Class Apply For</span><b class="text-blue-600">{{ $d->class_apply }}</b></div>
                <div class="border rounded-lg p-3 bg-gray-50/50"><span class="text-[10px] text-gray-400 font-bold uppercase block">Date of Birth</span><b>{{ $d->dob?? $d->date_of_birth?? 'N/A' }}</b></div>
                <div class="border rounded-lg p-3 bg-gray-50/50"><span class="text-[10px] text-gray-400 font-bold uppercase block">Gender</span><b>{{ $d->gender }}</b></div>
                <div class="border rounded-lg p-3 bg-gray-50/50"><span class="text-[10px] text-gray-400 font-bold uppercase block">Aadhaar Number</span><b>{{ $d->aadhaar_number?? $d->aadhaar_no?? 'N/A' }}</b></div>
                <div class="border rounded-lg p-3 bg-gray-50/50"><span class="text-[10px] text-gray-400 font-bold uppercase block">Previous School</span><b>{{ $d->previous_school?? 'N/A' }}</b></div>
            </div>

            <!-- 2. PARENTS DETAILS -->
            <h3 class="text-[13px] font-bold text-gray-800 mb-3 flex items-center gap-2"><i class="fa-solid fa-users text-blue-500"></i> Parents Details</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-6 text-[13px]">
                <div class="border rounded-lg p-3 bg-blue-50/30"><span class="text-[10px] text-blue-400 font-bold uppercase block">Father Name</span><b>{{ $d->father_name?? $d->father?? 'N/A' }}</b></div>
                <div class="border rounded-lg p-3 bg-pink-50/50"><span class="text-[10px] text-pink-400 font-bold uppercase block">Mother Name</span><b>{{ $d->mother_name?? $d->mother?? 'N/A' }}</b></div>
                <div class="border rounded-lg p-3 bg-green-50/50"><span class="text-[10px] text-green-600 font-bold uppercase block">Mobile Number</span><b><i class="fa-solid fa-phone text-green-500 mr-1"></i>{{ $d->mobile?? $d->parent_mobile }}</b></div>
                <div class="border rounded-lg p-3 bg-gray-50/50 md:col-span-3"><span class="text-[10px] text-gray-400 font-bold uppercase block">Parents Email ID</span><b>{{ $d->parent_email?? $d->father_email?? $d->email }}</b></div>
            </div>

            <!-- 3. ADDRESS DETAILS -->
            <h3 class="text-[13px] font-bold text-gray-800 mb-3 flex items-center gap-2"><i class="fa-solid fa-location-dot text-green-600"></i> Address Details</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-6 text-[13px]">
                <div class="border rounded-lg p-3 bg-gray-50/50 md:col-span-3"><span class="text-[10px] text-gray-400 font-bold uppercase block">Full Address</span><b>{{ $d->address }}</b></div>
                <div class="border rounded-lg p-3 bg-gray-50/50"><span class="text-[10px] text-gray-400 font-bold uppercase block">City</span><b>{{ $d->city }}</b></div>
                <div class="border rounded-lg p-3 bg-gray-50/50"><span class="text-[10px] text-gray-400 font-bold uppercase block">State</span><b>{{ $d->state }}</b></div>
                <div class="border rounded-lg p-3 bg-gray-50/50"><span class="text-[10px] text-gray-400 font-bold uppercase block">Pincode</span><b>{{ $d->pincode }}</b></div>
                <div class="border rounded-lg p-3 bg-gray-50/50"><span class="text-[10px] text-gray-400 font-bold uppercase block">Admission Date</span><b>{{ $d->created_at->format('d M Y') }}</b></div>
            </div>

            <!-- 4. DOCUMENTS -->
            <h3 class="text-[13px] font-bold text-gray-800 mb-3 flex items-center gap-2"><i class="fa-solid fa-folder text-purple-600"></i> Documents</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div class="border rounded-xl p-4 bg-blue-50/50 text-center">
                    <p class="text-[11px] font-bold text-blue-700 mb-3">BIRTH CERTIFICATE</p>
                    <a href="{{ fileUrl($d->birth_certificate) }}" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white block text-center py-2.5 rounded-lg text-xs font-bold"><i class="fa-solid fa-eye mr-1"></i> View / Download</a>
                </div>
                <div class="border rounded-xl p-4 bg-green-50/50 text-center">
                    <p class="text-[11px] font-bold text-green-700 mb-3">AADHAAR CARD</p>
                    <a href="{{ fileUrl($d->aadhaar_card) }}" target="_blank" class="bg-green-600 hover:bg-green-700 text-white block text-center py-2.5 rounded-lg text-xs font-bold"><i class="fa-solid fa-eye mr-1"></i> View / Download</a>
                </div>
                <div class="border rounded-xl p-4 bg-purple-50/50 text-center">
                    <p class="text-[11px] font-bold text-purple-700 mb-3">TC / OTHER DOCUMENT</p>
                    <a href="{{ fileUrl($d->tc) }}" target="_blank" class="bg-purple-600 hover:bg-purple-700 text-white block text-center py-2.5 rounded-lg text-xs font-bold"><i class="fa-solid fa-eye mr-1"></i> View / Download</a>
                </div>
            </div>

            <div class="flex gap-3 mt-6">
                <a href="{{ route('admin.edit',$d->id) }}" class="flex-1 bg-amber-400 text-center py-3 rounded-xl font-bold text-sm">Edit</a>
                <a href="https://wa.me/91{{ $d->mobile }}" target="_blank" class="flex-1 bg-green-500 text-white text-center py-3 rounded-xl font-bold text-sm">WhatsApp</a>
                <a href="{{ route('admin.delete',$d->id) }}" onclick="return confirm('Delete?')" class="flex-1 bg-red-500 text-white text-center py-3 rounded-xl font-bold text-sm">Delete</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>