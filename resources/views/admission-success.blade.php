<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Success - </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-50 flex items-center justify-center min-h-screen p-4">
<div class="bg-white p-8 rounded-2xl shadow-xl text-center max-w-md w-full">
    
    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto text-4xl">✅</div>
    
    <h2 class="text-2xl font-bold mt-4 text-gray-800">Admission Submitted!</h2>
    <p class="text-gray-500 text-sm mt-2">Thank you for choosing  Play School, Greater Noida</p>
    
    <div class="mt-6 bg-gray-50 p-4 rounded-xl text-left text-sm border">
        <p class="py-1"><b class="text-gray-500 w-20 inline-block">Student:</b> {{ $admission->student_name }}</p>
        <p class="py-1"><b class="text-gray-500 w-20 inline-block">Class:</b> {{ $admission->class_apply }}</p>
        <p class="py-1"><b class="text-gray-500 w-20 inline-block">Mobile:</b> {{ $admission->mobile }}</p>
        <p class="py-1"><b class="text-gray-500 w-20 inline-block">Receipt:</b> #MAK-{{ str_pad($admission->id, 5, '0', STR_PAD_LEFT) }}</p>
    </div>

    <!-- PDF Button -->
    <a href="{{ route('admission.receipt', $admission->id) }}" 
       class="mt-6 bg-orange-500 hover:bg-orange-600 text-white w-full block py-3 rounded-xl font-bold text-center transition">
       📄 Download Receipt PDF
    </a>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/91{{ $admission->mobile }}?text=Hello%20Parent!%20We%20have%20received%20admission%20for%20{{ urlencode($admission->student_name) }}%20at%20Makoons%20Play%20School%20Greater%20Noida.%20Receipt%20No%3A%20MAK-{{ $admission->id }}" 
       target="_blank"
       class="mt-3 bg-green-500 hover:bg-green-600 text-white w-full block py-3 rounded-xl font-bold text-center transition">
       📲 Send on WhatsApp
    </a>
    
    <a href="/" class="mt-6 text-orange-500 text-sm block font-medium">← Back to Home</a>
</div>
</body>
</html>