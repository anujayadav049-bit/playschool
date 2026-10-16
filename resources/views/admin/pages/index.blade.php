<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ ucfirst($slug) }} Settings</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF8F0] p-6">

<div class="max-w-4xl mx-auto">
    <a href="{{ url('/admin/dashboard') }}" class="text-[12px] font-bold border px-3 py-1 rounded-full bg-white">← Back to Dashboard</a>

    <h1 class="text-2xl font-extrabold mt-4 capitalize">⚙️ {{ $slug }} Page Settings</h1>
    <p class="text-[12px] text-gray-500 mb-4">Ye data <b>{{ $slug }}</b> page ke liye save hoga. Table: <code>page_settings</code></p>

    @if(session('success'))
        <div class="bg-green-100 border border-green-200 text-green-700 px-4 py-2 rounded-xl text-[13px] mb-4">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.pages.store', $slug) }}" method="POST" enctype="multipart/form-data" class="bg-white border-2 border-orange-100 rounded-2xl p-6 space-y-4">
        @csrf

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="text-[11px] font-extrabold uppercase text-gray-400">Banner Title</label>
                <input type="text" name="banner_title" value="{{ $setting->banner_title?? ucfirst($slug) }}" class="w-full border-2 rounded-xl px-3 py-2 text-[13px] font-semibold">
            </div>
            <div>
                <label class="text-[11px] font-extrabold uppercase text-gray-400">Banner Subtitle (Home / {{ ucfirst($slug) }})</label>
                <input type="text" name="banner_subtitle" value="{{ $setting->banner_subtitle?? 'Home / '.ucfirst($slug) }}" class="w-full border-2 rounded-xl px-3 py-2 text-[13px]">
            </div>
        </div>

        <div>
            <label class="text-[11px] font-extrabold uppercase text-gray-400">Main Title</label>
            <input type="text" name="title" value="{{ $setting->title?? '' }}" placeholder="Ex: About Our Play School" class="w-full border-2 rounded-xl px-3 py-2 text-[13px] font-bold">
        </div>

        <div>
            <label class="text-[11px] font-extrabold uppercase text-gray-400">Main Description</label>
            <textarea name="description" rows="5" class="w-full border-2 rounded-xl px-3 py-2 text-[13px]" placeholder="Full content here...">{{ $setting->description?? '' }}</textarea>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="text-[11px] font-extrabold uppercase text-gray-400">Main Image</label>
                <input type="file" name="image" class="w-full border-2 rounded-xl px-3 py-2 text-[12px]">
                @if($setting && $setting->image)
                    <img src="{{ asset('storage/'.$setting->image) }}" class="h-20 mt-2 rounded-xl border">
                @endif
            </div>
            <div>
                <label class="text-[11px] font-extrabold uppercase text-gray-400">Second Image (Optional)</label>
                <input type="file" name="image2" class="w-full border-2 rounded-xl px-3 py-2 text-[12px]">
                @if($setting && $setting->image2)
                    <img src="{{ asset('storage/'.$setting->image2) }}" class="h-20 mt-2 rounded-xl border">
                @endif
            </div>
        </div>

        <div class="border-t-2 border-orange-50 pt-4">
            <p class="text-[11px] font-extrabold uppercase text-orange-600 mb-2">Extra Sections (Mission / Vision ke liye)</p>
            <div class="grid grid-cols-2 gap-4">
                <input type="text" name="mission_title" value="{{ $setting->extra_json['mission_title']?? '' }}" placeholder="Mission Title" class="border rounded-xl px-3 py-2 text-[12px]">
                <input type="text" name="vision_title" value="{{ $setting->extra_json['vision_title']?? '' }}" placeholder="Vision Title" class="border rounded-xl px-3 py-2 text-[12px]">
            </div>
            <div class="grid grid-cols-2 gap-4 mt-2">
                <textarea name="mission_desc" placeholder="Mission Description" rows="3" class="border rounded-xl px-3 py-2 text-[12px]">{{ $setting->extra_json['mission_desc']?? '' }}</textarea>
                <textarea name="vision_desc" placeholder="Vision Description" rows="3" class="border rounded-xl px-3 py-2 text-[12px]">{{ $setting->extra_json['vision_desc']?? '' }}</textarea>
            </div>
        </div>

        <button type="submit" class="w-full bg-[#FF5A00] text-white py-3 rounded-full font-extrabold text-[13px]">Save & Update {{ ucfirst($slug) }} Page</button>
    </form>
</div>

</body>
</html>