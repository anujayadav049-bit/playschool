<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login - Play School</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>body{background:#FFF7F0; display:flex; align-items:center; justify-content:center; height:100vh;}</style>
</head>
<body>
    
<div class="card p-4 shadow" style="width:380px; border-radius:20px;">
    
<h4 class="fw-bold text-center">Admin Login</h4>
@if(session('error'))<div class="alert alert-danger">{{session('error')}}</div>@endif
<form method="POST" action="{{route('admin.doLogin')}}">@csrf
<input type="email" name="email" class="form-control mb-3" placeholder="admin@maigreat.com" required>
<input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
<button class="btn w-100" style="background:#FF6B35; color:white; font-weight:700;">Login</button>
<div style="text-align:center; margin-top:15px;">
    <a href="{{ url('/') }}" style="font-size:13px; color:#666; text-decoration:none; font-weight:500;">
        <i class="fas fa-arrow-left" style="margin-right:4px;"></i> Back to Home
    </a>
</div>
</form></div></body></html>