<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    body{ font-family: 'DejaVu Sans', sans-serif; margin:0; padding:0; color:#2d2d2d; }
    
    .page-border{ border: 4px solid #FF6A00; padding: 15px; height: 97%; box-sizing: border-box; }
    
    .header{ background: linear-gradient(135deg, #FF6A00, #ff8c32); color:white; padding: 20px 25px; border-radius: 12px; }
    .header h1{ margin:0; font-size:26px; letter-spacing:0.5px; }
    .header p{ margin:5px 0 0 0; font-size:13px; opacity:0.95; }
    .receipt-badge{ background:white; color:#FF6A00; padding: 8px 14px; border-radius: 20px; font-size:12px; font-weight:bold; float:right; margin-top:5px; }
    
    .section-title{ background:#FFF2E8; color:#FF6A00; padding: 8px 15px; border-left: 4px solid #FF6A00; font-weight:700; font-size:13px; margin-top:20px; text-transform:uppercase; }
    
    table{ width:100%; border-collapse:collapse; margin-top:8px; }
    td{ padding: 12px 15px; border: 1px solid #f0e6df; font-size:12.5px; }
    .label{ font-size:9.5px; color:#999; text-transform:uppercase; letter-spacing:0.5px; display:block; margin-bottom:3px; }
    .value{ font-size:13px; font-weight:600; color:#222; }
    
    .thank-box{ background:#FFF8F2; border: 1px dashed #FF6A00; padding: 15px; text-align:center; border-radius: 10px; margin-top:20px; }
    .thank-box h3{ margin:0; color:#FF6A00; font-size:14px; }
    .thank-box p{ margin:5px 0 0 0; font-size:11px; color:#666; }

    .footer{ margin-top:20px; border-top: 2px solid #f0e6df; padding-top:12px; text-align:center; }
    .footer p{ margin:2px; font-size:10px; color:#999; }
    .stamp{ border:2px solid #FF6A00; color:#FF6A00; width:110px; height:110px; border-radius:50%; display:inline-block; text-align:center; line-height:18px; padding-top:35px; box-sizing:border-box; font-weight:bold; transform:rotate(-15deg); opacity:0.8; font-size:11px; }
</style>
</head>
<body>
<div class="page-border">
    
    <div class="header">
        <div class="receipt-badge">RECEIPT #MAK-{{ str_pad($admission->id, 5, '0', STR_PAD_LEFT) }}</div>
        <h1>🎈  Play School</h1>
        <p>Where Learning is Fun | Greater Noida Branch | Admission Acknowledgement Receipt</p>
    </div>

    <div class="section-title">Student Details</div>
    <table>
        <tr>
            <td style="width:50%"><span class="label">Student Full Name</span><span class="value">{{ $admission->student_name }}</span></td>
            <td style="width:25%"><span class="label">Class Applying For</span><span class="value">{{ $admission->class_apply }}</span></td>
            <td style="width:25%"><span class="label">Gender / DOB</span><span class="value">{{ $admission->gender }} / {{ \Carbon\Carbon::parse($admission->dob)->format('d M Y') }}</span></td>
        </tr>
    </table>

    <div class="section-title">Parent Details</div>
    <table>
        <tr>
            <td style="width:50%"><span class="label">Father's Name</span><span class="value">{{ $admission->father_name }}</span></td>
            <td style="width:50%"><span class="label">Mother's Name</span><span class="value">{{ $admission->mother_name }}</span></td>
        </tr>
        <tr>
            <td><span class="label">Mobile No.</span><span class="value">+91-{{ $admission->mobile }}</span></td>
            <td><span class="label">Email ID</span><span class="value">{{ $admission->email }}</span></td>
        </tr>
        <tr>
            <td colspan="2"><span class="label">Residential Address</span><span class="value">{{ $admission->address }}, {{ $admission->city }} - {{ $admission->pincode }}</span></td>
        </tr>
    </table>

    <table style="margin-top:20px;">
        <tr>
            <td style="width:70%; border:none; vertical-align:top;">
                <div class="thank-box">
                    <h3>✓ Admission Form Received Successfully</h3>
                    <p>Our admission team will contact you within 24 hours for next steps. Please keep this receipt for future reference.</p>
                    <p style="margin-top:10px;"><b>Date:</b> {{ $admission->created_at->format('d M Y, h:i A') }} | <b>Status:</b> Pending Review</p>
                </div>
            </td>
            <td style="width:30%; border:none; text-align:center;">
                <div class="stamp">ADMISSION<br>RECEIVED<br>✔ VERIFIED</div>
            </td>
        </tr>
    </table>

    <div class="footer">
        <p><b> Play School - Greater Noida</b> | This is a computer generated receipt, no signature required.</p>
        <p>Address: Your School Address Here | Phone: +91-XXXXXXXXXX | <www class="Nexinfosoft"></www>.com</p>
    </div>

</div>
</body>
</html>