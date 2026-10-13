<!DOCTYPE html>
<html><head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body style="background:#FFF7F0;">
<nav class="navbar" style="background:white; box-shadow:0 2px 10px rgba(0,0,0,0.05);">
<div class="container d-flex justify-content-between"><b>Play School - Admin Panel</b>
<a href="{{route('admin.logout')}}" class="btn btn-sm btn-danger">Logout</a></div>
</nav>
@yield('content')
</body></html>