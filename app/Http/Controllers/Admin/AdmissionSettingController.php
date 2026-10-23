<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdmissionSetting;
use App\Models\AdmissionEnquiry;

class AdmissionSettingController extends Controller
{
    // 1. SETTINGS PAGE SHOW
    public function index(){
        $setting = AdmissionSetting::first();
        if(!$setting){
            $setting = AdmissionSetting::create([
                'sub_title' => 'Join Us',
                'title' => 'Admission',
                'title_highlight' => 'Open 2026-27',
                'description' => 'Enroll your child at Mai Great Sanfort, Sector-44, Gurgaon for a joyful learning journey.',
                'step1_title' => 'Step 1: Visit Us',
                'step1_sub' => 'Campus Tour',
                'step1_desc' => 'Visit our school, meet teachers and explore classrooms & activities.',
                'step2_title' => 'Step 2: Fill Form',
                'step2_sub' => 'Registration',
                'step2_desc' => 'Fill admission form with child details and submit required documents.',
                'step3_title' => 'Step 3: Confirm Seat',
                'step3_sub' => 'Welcome',
                'step3_desc' => 'Pay fee and confirm seat. Your child is ready to start fun learning!',
                'age_criteria' => "Play Group: 1.5 to 2.5 Years\nPre-Nursery: 2.5 to 3.5 Years\nNursery: 3.5 to 4.5 Years\nKG: 4.5 to 5.5 Years\nDay Care: 1 Year to 10 Years",
                'documents' => "Birth Certificate (Child)\n2 Passport Size Photos (Child & Parents)\nAadhar Card Copy (Child & Parents)\nAddress Proof\nPrevious School Report (If any)",
            ]);
        }
        return view('admin.admission-settings', compact('setting'));
    }

    // 2. SETTINGS UPDATE (aapka wala fix wala)
    public function update(Request $request){
        $setting = AdmissionSetting::first();
        $ages = [];
        if($request->has('age_criteria')){
            foreach($request->age_criteria as $a){
                $parts = preg_split('/[\r\n,]+/', $a);
                foreach($parts as $p){ if(trim($p)!='') $ages[] = trim($p); }
            }
        }
        $docs = [];
        if($request->has('documents')){
            foreach($request->documents as $d){
                $parts = preg_split('/[\r\n,]+/', $d);
                foreach($parts as $p){ if(trim($p)!='') $docs[] = trim($p); }
            }
        }
        $setting->update([
            'sub_title' => $request->sub_title,
            'title' => $request->title,
            'title_highlight' => $request->title_highlight,
            'description' => $request->description,
            'step1_title' => $request->step1_title,
            'step1_sub' => $request->step1_sub,
            'step1_desc' => $request->step1_desc,
            'step2_title' => $request->step2_title,
            'step2_sub' => $request->step2_sub,
            'step2_desc' => $request->step2_desc,
            'step3_title' => $request->step3_title,
            'step3_sub' => $request->step3_sub,
            'step3_desc' => $request->step3_desc,
            'age_criteria' => implode("\n", $ages),
            'documents' => implode("\n", $docs),
        ]);
        return back()->with('success','Updated!');
    }

    // 3. FRONTEND FORM STORE (Enquiry Save)
    public function store(Request $request){
        $request->validate([
            'child_name' => 'required',
            'parent_name' => 'required',
            'mobile' => 'required',
            'class_name' => 'required'
        ]);
        AdmissionEnquiry::create([
            'child_name' => $request->child_name,
            'parent_name' => $request->parent_name,
            'mobile' => $request->mobile,
            'class_name' => $request->class_name,
            'message' => $request->message,
        ]);
        return back()->with('success','Enquiry Submitted Successfully!');
    }

    // 4. ADMIN ME ENQUIRY LIST SHOW
    public function enquiries(){
        $enquiries = AdmissionEnquiry::latest()->get();
        return view('admin.admissions.enquiries', compact('enquiries'));
    }

    // 5. DELETE ENQUIRY
    public function destroy($id){
        AdmissionEnquiry::findOrFail($id)->delete();
        return back()->with('success','Deleted Successfully');
    }
}