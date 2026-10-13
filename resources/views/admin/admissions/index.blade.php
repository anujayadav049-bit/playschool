<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions - Play School</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style> body{ font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-[#FFF8F2] min-h-screen">

<nav class="bg-white shadow-sm border-b sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center text-white font-bold text-xl">M</div>
            <div><h1 class="font-bold text-gray-800 leading-none">Play School</h1><p class="text-xs text-gray-500">Admissions</p></div>
        </div>
        <div class="flex gap-2">
            <a href="{{ route('admin.dashboard') }}" class="bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium"><i class="fa-solid fa-arrow-left mr-2"></i>Dashboard</a>
            <a href="{{ route('admin.logout') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg text-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="max-w-7xl mx-auto px-6 py-8">
    <div class="bg-white rounded-2xl shadow-sm border p-6 mb-6 flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Student Admissions</h2>
            <p class="text-sm text-gray-500">Total students: <span class="font-bold text-orange-500">{{ count($data) }}</span></p>
        </div>
        <div class="relative w-80">
            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
            <input type="text" id="searchInput" placeholder="Search student..." class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-50 border-b text-left">
                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase">ID</th>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase">Student</th>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase">Class</th>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase">Mobile</th>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase text-center">Action</th>
                </tr>
            </thead>
            <tbody id="admissionTable" class="divide-y">
                @foreach($data as $row)
                <tr class="hover:bg-orange-50/50 transition">
                    <td class="px-6 py-4 font-bold text-sm">#{{ $row->id }}</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-orange-100 rounded-full flex items-center justify-center text-orange-600 font-bold">{{ strtoupper(substr($row->student_name,0,1)) }}</div>
                            <span class="font-semibold text-sm text-gray-800">{{ $row->student_name }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4"><span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold border">{{ $row->class_apply }}</span></td>
                    <td class="px-6 py-4 text-sm font-medium">{{ $row->mobile }}</td>
                    <td class="px-6 py-4">
                        <div class="flex justify-center gap-2">
                            <a href="{{route('admin.show',$row->id)}}" class="w-8 h-8 bg-blue-500 hover:bg-blue-600 text-white rounded-lg flex items-center justify-center text-xs"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{route('admin.edit',$row->id)}}" class="w-8 h-8 bg-amber-400 hover:bg-amber-500 rounded-lg flex items-center justify-center text-xs"><i class="fa-solid fa-pen"></i></a>
                            <a href="{{route('admin.delete',$row->id)}}" class="w-8 h-8 bg-red-500 hover:bg-red-600 text-white rounded-lg flex items-center justify-center text-xs" onclick="return confirm('Delete?')"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
document.getElementById('searchInput').addEventListener('keyup', function() {
    let filter = this.value.toLowerCase();
    document.querySelectorAll('#admissionTable tr').forEach(row => {
        row.style.display = row.innerText.toLowerCase().includes(filter) ? '' : 'none';
    });
});
</script>
</body>
</html>