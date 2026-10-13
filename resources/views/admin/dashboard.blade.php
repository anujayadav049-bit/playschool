<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play School - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style> body{ font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-[#FFF8F2] min-h-screen">

<!-- TOP NAVBAR -->
<nav class="bg-white shadow-sm border-b sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center text-white font-bold text-xl">M</div>
            <div>
                <h1 class="font-bold text-gray-800 leading-none">Play School</h1>
                <p class="text-xs text-gray-500">Admin Panel</p>
            </div>
        </div>
        <a href="{{ route('admin.logout') }}" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition"><i class="fa-solid fa-right-from-bracket mr-2"></i>Logout</a>
    </div>
</nav>

<div class="max-w-7xl mx-auto px-6 py-8 grid grid-cols-12 gap-6">

    <!-- SIDEBAR -->
    <div class="col-span-12 md:col-span-3 lg:col-span-2">
        <div class="bg-white rounded-2xl shadow-sm p-4 sticky top-20">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 bg-orange-500 text-white px-4 py-3 rounded-xl font-medium"><i class="fa-solid fa-chart-pie"></i> Dashboard</a>
            <a href="{{ route('admin.admissions') }}" class="flex items-center gap-3 text-gray-600 hover:bg-gray-50 px-4 py-3 rounded-xl font-medium mt-2 transition"><i class="fa-solid fa-graduation-cap"></i> Admissions</a>
            <div class="mt-6 p-4 bg-orange-50 rounded-xl border border-orange-100">
                <p class="text-xs text-orange-600 font-semibold">Total Students</p>
                <p class="text-2xl font-bold text-gray-800 mt-1">{{ $total ?? 0 }}</p>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="col-span-12 md:col-span-9 lg:col-span-10 space-y-6">
        
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Good Afternoon, Principal! 👋</h2>
            <p class="text-gray-500 text-sm mt-1">Here's what's happening in your school today.</p>
        </div>

        <!-- STATS CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 border-l-4 border-l-orange-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Total Admissions</p>
                        <h3 class="text-4xl font-bold text-gray-800 mt-2">{{ $total ?? 0 }}</h3>
                        <p class="text-xs text-green-600 mt-2 font-medium"><i class="fa-solid fa-arrow-up"></i> 12% this month</p>
                    </div>
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center text-orange-500 text-xl"><i class="fa-solid fa-users"></i></div>
                </div>
                <a href="{{ route('admin.admissions') }}" class="mt-5 bg-orange-500 hover:bg-orange-600 text-white w-full block text-center py-2.5 rounded-xl text-sm font-medium transition">View All <i class="fa-solid fa-arrow-right ml-1"></i></a>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 border-l-4 border-l-blue-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Pending Review</p>
                        <h3 class="text-4xl font-bold text-gray-800 mt-2">{{ $total ?? 0 }}</h3>
                        <p class="text-xs text-gray-400 mt-2">Needs attention</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-500 text-xl"><i class="fa-solid fa-clock"></i></div>
                </div>
                <div class="mt-5 bg-gray-100 text-gray-600 w-full block text-center py-2.5 rounded-xl text-sm font-medium">No pending</div>
            </div>

            <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl p-6 shadow-sm text-white">
                <p class="text-sm text-orange-100 font-medium">Play School</p>
                <h3 class="text-lg font-bold mt-2">Play School</h3>
                <p class="text-xs text-orange-100 mt-1">Greater Noida</p>
                <a href="/" target="_blank" class="mt-5 bg-white text-orange-600 w-full block text-center py-2.5 rounded-xl text-sm font-bold transition">Visit Website</a>
            </div>
        </div>

        <!-- RECENT ADMISSIONS TABLE -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-semibold text-gray-800">Recent Admissions</h3>
                <a href="{{ route('admin.admissions') }}" class="text-orange-500 text-sm font-medium">View All</a>
            </div>
            <div class="text-center py-10 text-gray-400">
                <i class="fa-solid fa-folder-open text-4xl mb-3"></i>
                <p class="text-sm">Click on "Admissions" in sidebar to see full list</p>
            </div>
        </div>

    </div>
</div>

</body>
</html>