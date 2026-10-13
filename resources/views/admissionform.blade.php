@extends('layouts.app')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
*{font-family:'Nunito', sans-serif;}
.admission-page{background:#FFF7F0;}
.top-bar{background:linear-gradient(90deg, #6754E9); padding:20px 0 70px 0; color:white; text-align:center; font-weight:700;}
.form-wrapper{max-width:960px; margin:-45px auto 40px; background:white; border-radius:28px; box-shadow:0 20px 80px rgba(0,0,0,0.08); overflow:hidden; border:1px solid #FFE5D6; position:relative; z-index:2;}
.form-head{padding:35px 40px 20px; text-align:center; border-bottom:1px solid #FFF0E8;}
.form-head h2{font-weight:800; font-size:28px; color:#2B2B2B; margin-bottom:6px;}
.form-head p{color:#888; font-size:14px;}
.progress-steps{display:flex; justify-content:center; gap:12px; margin-top:20px;}
.step{width:34px; height:34px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:13px;}
.step.active{background:#FF6B35; color:white;}
.form-body{padding:30px 40px 40px;}
.section-box{background:#FFFBF9; border:1px solid #FFE8DB; border-radius:18px; padding:22px; margin-bottom:22px;}
.section-title{font-weight:800; font-size:14px; letter-spacing:0.5px; color:#FF6B35; text-transform:uppercase; margin-bottom:16px; display:flex; align-items:center; gap:8px;}
.form-label{font-weight:700; font-size:12px; color:#444; margin-bottom:6px; text-transform:uppercase;}
.form-control,.form-select{height:50px; border-radius:12px; border:1px solid #EEE; background:#fff; font-size:14px; font-weight:600;}
.form-control:focus,.form-select:focus{border-color:#FF6B35; box-shadow:0 0 0 4px rgba(255,107,53,0.12);}
.upload-box{border:2px dashed #FFD1B8; background:#FFFBF8; border-radius:14px; padding:16px; text-align:center; cursor:pointer;}
.upload-box:hover{border-color:#FF6B35; background:#FFF2EB;}
.btn-submit{width:100%; height:56px; background:linear-gradient(90deg, #FF6B35, #FF8C5A); border:none; border-radius:14px; color:white; font-weight:800; font-size:16px; box-shadow:0 8px 20px rgba(255,107,53,0.3);}
@media(max-width:768px){.form-body{padding:20px;}}
</style>

<div class="admission-page">
<div class="top-bar">
  <div class="container" style="display:flex; justify-content:space-between; align-items:center;">
    <a href="{{ url('/') }}" style="background:rgba(255,255,255,0.2); color:white; padding:6px 14px; border-radius:20px; text-decoration:none; font-size:13px; font-weight:700; border:1px solid rgba(255,255,255,0.3);">← Back to Home</a>
    <div><strong>Play School</strong> • Greater Noida</div>
    <div style="width:110px;"></div>
  </div>
</div>

<div class="container">
<div class="form-wrapper">
  <div class="form-head">
    <div style="width:64px; height:64px; background:linear-gradient(135deg,#FF6B35,#FFB088); border-radius:18px; display:inline-flex; align-items:center; justify-content:center; color:white; font-size:26px;"><i class="fa-solid fa-graduation-cap"></i></div>
    <h2 class="mt-3">School Admission Form</h2>
    <p>Fill the details below - Our counsellor will call you in 30 minutes</p>
    <div class="progress-steps"><div class="step active">1</div><div style="width:40px; height:2px; background:#FFE0CC; margin-top:16px;"></div><div class="step active">2</div><div style="width:40px; height:2px; background:#FFE0CC; margin-top:16px;"></div><div class="step active">3</div></div>
  </div>

  <div class="form-body">
    @if(session('success'))
<div style="background:#E8FFF0; border:1px solid #2ECC71; color:#1A8A4A; padding:12px; border-radius:10px; text-align:center; margin-bottom:15px; font-weight:600;">
{{ session('success') }}
</div>
@endif
  <form action="{{ route('admission.submit') }}" method="POST" enctype="multipart/form-data">
@csrf
    
    <div class="section-box">
      <div class="section-title"><i class="fa-solid fa-child"></i> Student Details</div>
      <div class="row g-3">
        <div class="col-md-7">
          <label class="form-label">Student Full Name *</label>
          <input type="text" name="student_name" class="form-control" placeholder="Enter child name" required></div>
        <div class="col-md-5">
          <label class="form-label">Date of Birth *</label>
          <input type="date" name="dob" class="form-control" required></div>
        <div class="col-md-4">
          <label class="form-label">Gender *</label>
          <select name="gender" class="form-select" required><option value="">Select Gender</option>
          <option>Male</option><option>Female</option></select></div>
        <div class="col-md-4">
          <label class="form-label">Class Applying For *</label>
          <select name="class_apply" class="form-select" required><option value="">Select Class</option>
          <option>Play Group (1.5-2.5)</option><option>Pre-Nursery</option>
          <option>Nursery (3.5-4.5)</option><option>KG (4.5-5.5)</option>
          <option>Day Care</option></select></div>



        <div class="col-md-4">
          <label class="form-label">Aadhaar No. (12 Digit)</label>
          <input type="text" name="aadhaar_no" class="form-control" placeholder="XXXX XXXX XXXX"></div>
        <div class="col-md-6">
          <label class="form-label">Previous School (If any)</label>
          <input type="text" name="previous_school" class="form-control" placeholder="School name"></div>
        <div class="col-md-6">
          <label class="form-label">Student Photo *</label>
          <input type="file" name="photo" class="form-control" accept="image/*"></div>
      </div>
    </div>

    <div class="section-box" style="background:#F8F9FF; border-color:#E0E3FF;">
      <div class="section-title" style="color:#5B6CFF;"><i class="fa-solid fa-users"></i> Parents Details</div>
      <div class="row g-3">
        <div class="col-md-6"><label class="form-label">Father's Name *</label><input type="text" name="father_name" class="form-control" required></div>
        <div class="col-md-6"><label class="form-label">Mother's Name *</label><input type="text" name="mother_name" class="form-control" required></div>
        <div class="col-md-6"><label class="form-label">Mobile Number *</label><input type="tel" name="mobile" class="form-control" required></div>
        <div class="col-md-6"><label class="form-label">Email ID *</label><input type="email" name="email" class="form-control" required></div>
      </div>
    </div>

    <div class="section-box">
      <div class="section-title"><i class="fa-solid fa-location-dot"></i> Permanent Address</div>
      <div class="row g-3">
        <div class="col-12"><label class="form-label">Full Address *</label><input type="text" name="address" class="form-control" required></div>
        <div class="col-md-4"><label class="form-label">City *</label><input type="text" name="city" class="form-control" value="Greater Noida" required></div>
        <div class="col-md-4"><label class="form-label">State *</label><select name="state" class="form-select"><option>Haryana</option><option>Delhi</option><option>Uttar Pradesh</option><option>Rajasthan</option></select></div>
        <div class="col-md-4"><label class="form-label">PIN Code *</label><input type="text" name="pincode" class="form-control" required></div>
      </div>
    </div>

    <div class="section-box" style="background:#F6FFF8; border-color:#C8F0D0;">
      <div class="section-title" style="color:#27AE60;"><i class="fa-solid fa-cloud-arrow-up"></i> Documents Upload</div>
      <div class="row g-3">
        <div class="col-md-4"><label class="form-label">Birth Certificate *</label><div class="upload-box"><i class="fa-solid fa-file-pdf"></i><div style="font-size:12px; font-weight:700; margin-top:6px;">Choose File</div><input type="file" name="birth_certificate" hidden></div></div>
        <div class="col-md-4"><label class="form-label">Aadhaar Card *</label><div class="upload-box"><i class="fa-solid fa-id-card"></i><div style="font-size:12px; font-weight:700; margin-top:6px;">Choose File</div><input type="file" name="aadhaar_card" hidden></div></div>
        <div class="col-md-4"><label class="form-label">Transfer Cert. / Other</label><div class="upload-box"><i class="fa-solid fa-file-lines"></i><div style="font-size:12px; font-weight:700; margin-top:6px;">Choose File</div><input type="file" name="tc" hidden></div></div>
      </div>
      <p style="font-size:11px; color:#888; margin-top:10px;">Accepted: PDF, JPG, PNG - Max 5MB each</p>
    </div>

    <div class="form-check mt-3"><input class="form-check-input" type="checkbox" required id="check"><label class="form-check-label" for="check" style="font-size:13px; font-weight:600;">I declare all information is correct & agree to school terms.</label></div>

    <button type="submit" class="btn-submit mt-4">Submit Application <i class="fa-solid fa-paper-plane ms-2"></i></button>
    <p class="text-center mt-3" style="font-size:12px; color:#999;"><i class="fa-solid fa-lock"></i> 100% Safe & Secure • You will get confirmation on WhatsApp</p>
  </form>
  </div>
</div>
</div>
</div>

<script>
document.querySelectorAll('.upload-box').forEach(box=>{
  let input = box.querySelector('input');
  box.addEventListener('click', ()=> input.click());
  input.addEventListener('change', function(){
    if(this.files[0]){
      let nameDiv = document.createElement('div');
      nameDiv.style.cssText = 'font-size:12px; font-weight:700; margin-top:6px; color:#27AE60;';
      nameDiv.innerHTML = '<i class="fa-solid fa-check" style="color:#27AE60"></i> ' + this.files[0].name.substring(0,20);
      // purana text hatao, input ko rehne do
      box.querySelectorAll('div, i').forEach(el=>{ if(!el.contains(input)) el.remove(); });
      // agar pehle se naam hai to hatao
      let old = box.querySelector('.file-name'); if(old) old.remove();
      nameDiv.classList.add('file-name');
      box.appendChild(nameDiv);
    }
  });
});
</script>

@endsection