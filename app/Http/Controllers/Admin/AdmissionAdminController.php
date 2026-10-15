<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdmissionAdminController extends Controller
{
    public function dashboard()
    {
        $total = Admission::count();
        $pending = Admission::where('status','Pending')->count();
        $approved = Admission::where('status','Approved')->count();
        $rejected = Admission::where('status','Rejected')->count();
        
        return view('admin.dashboard', compact('total','pending','approved','rejected'));
    }

    public function index()
    {
        $data = Admission::latest()->get();
        return view('admin.admissions.index', compact('data'));
    }

    public function show($id)
    {
        $admission = Admission::findOrFail($id);
        return view('admin.admissions.show', compact('admission'));
    }

    public function edit($id)
    {
        $admission = Admission::findOrFail($id);
        return view('admin.admissions.edit', compact('admission'));
    }

    public function update(Request $request, $id)
    {
        $admission = Admission::findOrFail($id);
        
        $data = $request->except(['_token', 'photo', 'birth_certificate', 'aadhaar_card', 'tc', 'admission_date', 'aadhaar_no', 'aadhaar_number']);

        $data['student_name'] = $request->student_name;
        $data['class_apply'] = $request->class_apply;
        $data['dob'] = $request->dob;
        $data['gender'] = $request->gender;
        $data['father_name'] = $request->father_name;
        $data['mother_name'] = $request->mother_name;
        $data['mobile'] = $request->mobile;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['state'] = $request->state;
        $data['pincode'] = $request->pincode;

        $aadhaarValue = $request->aadhaar_no ?? $request->aadhaar_number;
        if($aadhaarValue){
            $data['aadhaar_no'] = $aadhaarValue;
            $data['aadhaar_number'] = $aadhaarValue;
        }

        if($request->admission_date){
            $data['created_at'] = $request->admission_date;
            $data['admission_date'] = $request->admission_date;
        }

        foreach(['photo','birth_certificate','aadhaar_card','tc'] as $fileField){
            if($request->hasFile($fileField)){
                if($admission->$fileField && Storage::disk('public')->exists($admission->$fileField)){
                    Storage::disk('public')->delete($admission->$fileField);
                }
                $data[$fileField] = $request->file($fileField)->store('admissions','public');
            }
        }

        $admission->update($data);

        return redirect()->route('admin.show', $id)->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        $admission = Admission::findOrFail($id);
        foreach(['photo','birth_certificate','aadhaar_card','tc'] as $f){
            if($admission->$f){
                Storage::disk('public')->delete($admission->$f);
            }
        }
        $admission->delete();
        return back()->with('success','Deleted');
    }

    public function updateStatus(Request $request, $id){
        $admission = Admission::findOrFail($id);
        $admission->status = $request->status;
        $admission->save();
        return back()->with('success','Status updated to '.$request->status);
    }
}