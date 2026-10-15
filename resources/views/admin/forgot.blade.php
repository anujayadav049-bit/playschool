<!DOCTYPE html>
<html>
<head>
    <title>Forget Password - Little Steps</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body{font-family:'Poppins',sans-serif; background:#FFF8E7;}
        .card{border-radius:25px; border:none; box-shadow:0 10px 30px rgba(0,0,0,0.1); overflow:hidden;}
        .card-header{background:#4D96FF; color:white; text-align:center; padding:25px; font-family:'Fredoka';}
        .form-control{border-radius:15px; padding:12px 18px; border:2px solid #FFE082;}
        .btn-school{background:#FF6B6B; border:none; border-radius:15px; padding:12px; font-weight:600; font-family:'Fredoka'; font-size:18px;}
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="m-0">🔐 Forget Password</h4>
                    <p class="m-0 small">Only Password will be changed</p>
                </div>
                <div class="card-body p-4 bg-white">
                    @if($errors->any())
                        <div class="alert alert-danger" style="border-radius:15px;">{{ $errors->first() }}</div>
                    @endif
                    <form method="POST" action="{{ route('admin.forgot.handle') }}">
                        @csrf
                        <div class="mb-3">
                            <label>Admin Email (For Verification)</label>
                            <input type="email" name="email" class="form-control" required placeholder="Enter your Admin Email">
                        </div>
                        <div class="mb-3">
                            <label>New Password</label>
                            <input type="password" name="password" class="form-control" required placeholder="New Password">
                        </div>
                        <div class="mb-4">
                            <label>Confirm New Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required placeholder="Confirm Password">
                        </div>
                        <button class="btn btn-school text-white w-100">Update Password</button>
                        <div class="text-center mt-3">
                            <a href="{{ route('admin.login') }}" style="text-decoration:none;">← Back to Login</a>
                            <span class="mx-2">|</span>
                            <a href="/" style="text-decoration:none; color:#6BCB77;">← Back to Home</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>