<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style> body{font-family:'Poppins',sans-serif; background:#FFF8F2} input,select{outline:none} </style>
</head>
<body class="p-4 md:p-6">
<div class="max-w-5xl mx-auto">
    <a href="{{ route('admin.show', $admission->id) }}" class="bg-white border px-4 py-2 rounded-xl text-sm mb-4 inline-block shadow-sm">← Back to Details</a>

    <div class="bg-white rounded-[20px] border shadow-sm overflow-hidden">
        <div class="bg-orange-500 p-6 text-white">
            <h1 class="text-xl font-bold">Edit Admission - {{ $admission->student_name }}</h1>
            <p class="text-orange-100 text-sm">ID #{{ $admission->id }} | Class: {{ $admission->class_apply }}</p>
        </div>

        <form action="{{ route('admin.update', $admission->id) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
            @csrf
            <h3 class="font-bold text-sm">Student Details</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Student Name</label><input type="text" name="student_name" value="{{ $admission->student_name }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Class</label><input type="text" name="class_apply" value="{{ $admission->class_apply }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">DOB</label><input type="date" name="dob" value="{{ $admission->dob }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Gender</label><select name="gender" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"><option value="Male" {{ $admission->gender=='Male'?'selected':'' }}>Male</option><option value="Female" {{ $admission->gender=='Female'?'selected':'' }}>Female</option></select></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Aadhaar No</label><input type="text" name="aadhaar_number" value="{{ $admission->aadhaar_number }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
            </div>

            <h3 class="font-bold text-sm">Parents Details</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Father Name</label><input type="text" name="father_name" value="{{ $admission->father_name?? $admission->parent_name }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Mother Name</label><input type="text" name="mother_name" value="{{ $admission->mother_name }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Mobile</label><input type="text" name="mobile" value="{{ $admission->mobile }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div class="md:col-span-3"><label class="text-[11px] font-bold text-gray-500 uppercase">Email</label><input type="email" name="email" value="{{ $admission->email }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
            </div>

            <h3 class="font-bold text-sm">Address</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="md:col-span-3"><label class="text-[11px] font-bold text-gray-500 uppercase">Address</label><input type="text" name="address" value="{{ $admission->address }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">City</label><input type="text" name="city" value="{{ $admission->city }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">State</label><input type="text" name="state" value="{{ $admission->state }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Pincode</label><input type="text" name="pincode" value="{{ $admission->pincode }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
            </div>

            <button type="submit" class="w-full bg-orange-500 text-white py-4 rounded-xl font-bold text-sm">Update Admission</button>
        </form>
    </div>
</div>
</body>
</html>