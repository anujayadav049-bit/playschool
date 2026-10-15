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
            <p class="text-orange-100 text-sm">ID #{{ $admission->id }} | Class: {{ $admission->class_apply }} | Date: {{ \Carbon\Carbon::parse($admission->created_at)->format('d M Y') }}</p>
        </div>

        <form action="{{ route('admin.update', $admission->id) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
            @csrf

            <h3 class="font-bold text-sm">Student Details</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Student Name</label><input type="text" name="student_name" value="{{ old('student_name', $admission->student_name) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Class</label><input type="text" name="class_apply" value="{{ old('class_apply', $admission->class_apply) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">DOB</label><input type="date" name="dob" value="{{ old('dob', $admission->dob) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Gender</label><select name="gender" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"><option value="Male" {{ $admission->gender=='Male'?'selected':'' }}>Male</option><option value="Female" {{ $admission->gender=='Female'?'selected':'' }}>Female</option></select></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Aadhaar No</label><input type="text" name="aadhaar_no" value="{{ old('aadhaar_no', $admission->aadhaar_no?? $admission->aadhaar_number) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50" placeholder="12 Digit"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Admission Date</label><input type="date" name="admission_date" value="{{ old('admission_date', $admission->admission_date?? \Carbon\Carbon::parse($admission->created_at)->format('Y-m-d')) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
            </div>

            <h3 class="font-bold text-sm">Parents Details</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Father Name</label><input type="text" name="father_name" value="{{ old('father_name', $admission->father_name?? $admission->parent_name) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Mother Name</label><input type="text" name="mother_name" value="{{ old('mother_name', $admission->mother_name) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Mobile</label><input type="text" name="mobile" value="{{ old('mobile', $admission->mobile) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div class="md:col-span-3"><label class="text-[11px] font-bold text-gray-500 uppercase">Email</label><input type="email" name="email" value="{{ old('email', $admission->email) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
            </div>

            <h3 class="font-bold text-sm">Address</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="md:col-span-3"><label class="text-[11px] font-bold text-gray-500 uppercase">Address</label><input type="text" name="address" value="{{ old('address', $admission->address) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">City</label><input type="text" name="city" value="{{ old('city', $admission->city) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">State</label><input type="text" name="state" value="{{ old('state', $admission->state) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
                <div><label class="text-[11px] font-bold text-gray-500 uppercase">Pincode</label><input type="text" name="pincode" value="{{ old('pincode', $admission->pincode) }}" class="w-full border rounded-lg p-2.5 mt-1 text-sm bg-gray-50"></div>
            </div>

            <h3 class="font-bold text-sm">Student Photo</h3>
            <div class="bg-gray-50 border rounded-xl p-4 flex items-center gap-4">
                @if($admission->photo)
                <img src="{{ asset('storage/'.$admission->photo) }}" class="w-20 h-20 rounded-xl object-cover border">
                <div>
                    <div class="text-xs font-bold text-green-600">✓ Current Photo Uploaded</div>
                    <a href="{{ asset('storage/'.$admission->photo) }}" target="_blank" class="text-[11px] text-blue-600 underline">View Full Photo</a>
                </div>
                @else
                <div class="text-xs text-gray-500">No photo uploaded</div>
                @endif
                <div class="ml-auto">
                    <label class="text-[11px] font-bold text-gray-500 uppercase block mb-1">Change Photo</label>
                    <input type="file" name="photo" accept=".jpg,.jpeg,.png" class="text-xs">
                </div>
            </div>

            <h3 class="font-bold text-sm">Documents</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-gray-50 border rounded-xl p-4">
                    <label class="text-[11px] font-bold text-gray-500 uppercase">Birth Certificate</label>
                    @if($admission->birth_certificate)
                    <div class="mt-2"><a href="{{ asset('storage/'.$admission->birth_certificate) }}" target="_blank" class="text-xs bg-green-100 text-green-700 px-3 py-1.5 rounded-full font-bold">✓ View Current File</a></div>
                    @else
                    <div class="mt-2 text-[11px] text-gray-400">No file uploaded</div>
                    @endif
                    <input type="file" name="birth_certificate" accept=".pdf,.jpg,.jpeg,.png" class="w-full text-xs mt-3">
                </div>
                <div class="bg-gray-50 border rounded-xl p-4">
                    <label class="text-[11px] font-bold text-gray-500 uppercase">Aadhaar Card</label>
                    @if($admission->aadhaar_card)
                    <div class="mt-2"><a href="{{ asset('storage/'.$admission->aadhaar_card) }}" target="_blank" class="text-xs bg-green-100 text-green-700 px-3 py-1.5 rounded-full font-bold">✓ View Current File</a></div>
                    @else
                    <div class="mt-2 text-[11px] text-gray-400">No file uploaded</div>
                    @endif
                    <input type="file" name="aadhaar_card" accept=".pdf,.jpg,.jpeg,.png" class="w-full text-xs mt-3">
                </div>
                <div class="bg-gray-50 border rounded-xl p-4">
                    <label class="text-[11px] font-bold text-gray-500 uppercase">TC / Other</label>
                    @if($admission->tc)
                    <div class="mt-2"><a href="{{ asset('storage/'.$admission->tc) }}" target="_blank" class="text-xs bg-green-100 text-green-700 px-3 py-1.5 rounded-full font-bold">✓ View Current File</a></div>
                    @else
                    <div class="mt-2 text-[11px] text-gray-400">No file uploaded</div>
                    @endif
                    <input type="file" name="tc" accept=".pdf,.jpg,.jpeg,.png" class="w-full text-xs mt-3">
                </div>
            </div>
            <p class="text-[11px] text-gray-400 -mt-4">Nayi file select karoge to purani wali auto replace ho jayegi, warna purani hi rahegi.</p>

            <button type="submit" class="w-full bg-orange-500 text-white py-4 rounded-xl font-bold text-sm">Update Admission</button>
        </form>
    </div>
</div>
</body>
</html>