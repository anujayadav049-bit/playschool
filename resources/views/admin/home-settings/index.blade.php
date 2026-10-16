<!DOCTYPE html>
<html>
<head>
    <title>Home Settings - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f1f5f9; padding:20px;">
<div class="container">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
            <h4 class="mb-0 fw-bold">🏠 Home Page Settings</h4>
            <div>
                <a href="{{ url('/') }}" target="_blank" class="btn btn-sm btn-outline-primary">View Home Page</a>
                <a href="{{ url('/admin/dashboard') }}" class="btn btn-sm btn-dark">Back</a>
            </div>
        </div>
        <div class="card-body p-4">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            <form action="{{ route('admin.home.settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- ===== 0. HEADER SECTION (NEW ADDED) ===== -->
                <h5 class="fw-bold border-bottom pb-2 mb-3 text-danger">0. Header Section - Logo & Menu</h5>
                <div class="row" style="background:#fff8f0; padding:15px; border-radius:8px; border:1px solid #FF6B00; margin-bottom:25px;">
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">Header Logo</label>
                        <input type="file" name="header_logo" class="form-control">
                        @if(!empty($setting->header_logo))
                            <img src="{{ asset('storage/'.$setting->header_logo) }}" style="height:40px; margin-top:8px; background:white; padding:3px; border-radius:5px; border:1px solid #ddd;">
                        @endif
                    </div>
                    <div class="col-md-2 mb-3"><label class="form-label fw-semibold">About Menu</label><input type="text" name="menu_about" class="form-control" value="{{ $setting->menu_about ?? 'About Us' }}"></div>
                    <div class="col-md-2 mb-3"><label class="form-label fw-semibold">Activities Menu</label><input type="text" name="menu_activities" class="form-control" value="{{ $setting->menu_activities ?? 'Activities' }}"></div>
                    <div class="col-md-2 mb-3"><label class="form-label fw-semibold">Admission Menu</label><input type="text" name="menu_admissions" class="form-control" value="{{ $setting->menu_admissions ?? 'Admission' }}"></div>
                    <div class="col-md-2 mb-3"><label class="form-label fw-semibold">Gallery Menu</label><input type="text" name="menu_gallery" class="form-control" value="{{ $setting->menu_gallery ?? 'Gallery' }}"></div>
                    <div class="col-md-2 mb-3"><label class="form-label fw-semibold">Contact Menu</label><input type="text" name="menu_contact" class="form-control" value="{{ $setting->menu_contact ?? 'Contact Us' }}"></div>
                    <div class="col-md-2 mb-3"><label class="form-label fw-semibold">Program Menu</label><input type="text" name="menu_program" class="form-control" value="{{ $setting->menu_program ?? '' }}" placeholder="Optional"></div>

                    <div class="col-md-3 mb-3"><label class="form-label fw-semibold">Admission Btn Text</label><input type="text" name="btn_admission_text" class="form-control" value="{{ $setting->btn_admission_text ?? 'Admission Open' }}"></div>
                    <div class="col-md-3 mb-3"><label class="form-label fw-semibold">Admission Btn Color</label><input type="color" name="btn_admission_color" class="form-control" style="height:38px;" value="{{ $setting->btn_admission_color ?? '#FF6B00' }}"></div>
                    <div class="col-md-3 mb-3"><label class="form-label fw-semibold">Admin/Enquiry Btn Text</label><input type="text" name="btn_enquiry_text" class="form-control" value="{{ $setting->btn_enquiry_text ?? 'Admin Login' }}"></div>
                    <div class="col-md-3 mb-3"><label class="form-label fw-semibold">Admin Btn Color</label><input type="color" name="btn_enquiry_color" class="form-control" style="height:38px;" value="{{ $setting->btn_enquiry_color ?? '#1AB69D' }}"></div>
                </div>

                <h5 class="fw-bold border-bottom pb-2 mb-3">1. Banner Section</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Banner Title</label>
                        <input type="text" name="banner_title" class="form-control" value="{{ $setting->banner_title ?? '' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Banner Sub Title</label>
                        <input type="text" name="banner_subtitle" class="form-control" value="{{ $setting->banner_subtitle ?? '' }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label fw-semibold">Banner Image</label>
                        <input type="file" name="banner_image" class="form-control">
                    </div>
                </div>

                <h5 class="fw-bold border-bottom pb-2 mb-3 mt-4">2. About Section</h5>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label fw-semibold">About Title</label>
                        <input type="text" name="about_title" class="form-control" value="{{ $setting->about_title ?? '' }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label fw-semibold">About Description</label>
                        <textarea name="about_description" class="form-control" rows="4">{{ $setting->about_description ?? '' }}</textarea>
                    </div>
                </div>

                <h5 class="fw-bold border-bottom pb-2 mb-3 mt-5 text-primary">3. Footer Settings</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Footer Logo</label>
                        <input type="file" name="footer_logo" class="form-control">
                        @if(!empty($setting->footer_logo))
                            <img src="{{ asset('storage/'.$setting->footer_logo) }}" style="height:40px; margin-top:8px; border:1px solid #ddd; padding:2px;">
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Footer Description</label>
                        <textarea name="footer_description" class="form-control" rows="2">{{ $setting->footer_description ?? '' }}</textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">Address</label>
                        <input type="text" name="footer_address" class="form-control" value="{{ $setting->footer_address ?? '' }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">Phone</label>
                        <input type="text" name="footer_phone" class="form-control" value="{{ $setting->footer_phone ?? '' }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="text" name="footer_email" class="form-control" value="{{ $setting->footer_email ?? '' }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">Facebook Link</label>
                        <input type="text" name="footer_facebook" class="form-control" value="{{ $setting->footer_facebook ?? '' }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">Instagram Link</label>
                        <input type="text" name="footer_instagram" class="form-control" value="{{ $setting->footer_instagram ?? '' }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">Youtube Link</label>
                        <input type="text" name="footer_youtube" class="form-control" value="{{ $setting->footer_youtube ?? '' }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label fw-semibold">Copyright Text</label>
                        <input type="text" name="footer_copyright" class="form-control" value="{{ $setting->footer_copyright ?? '' }}" placeholder="© 2025 Play School">
                    </div>
                </div>

                <button type="submit" class="btn btn-success px-5 py-2 fw-bold mt-3">💾 Save & Update</button>
            </form>

            @if(isset($setting->banner_image) && $setting->banner_image)
            <div style="margin-top:30px; border:1px solid #ddd; padding:15px; border-radius:8px; background:#fff;">
                <small class="text-muted d-block mb-2 fw-bold">Current Banner Image:</small>
                <img src="{{ asset('storage/'.$setting->banner_image) }}" style="height:120px; border-radius:5px;">
                <br>
                <form action="{{ route('admin.home.settings.deleteBanner') }}" method="POST" style="margin-top:10px;">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger">🗑️ Delete Banner</button>
                </form>
            </div>
            @endif

        </div>
    </div>
</div>
</body>
</html>