<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admission;
use Barryvdh\DomPDF\Facade\Pdf;

class AdmissionController extends Controller {
    public function form(){ return view('admissionform'); }

    public function store(Request $request){
        $request->validate([
            'student_name'=>'required','dob'=>'required','gender'=>'required','class_apply'=>'required',
            'father_name'=>'required','mother_name'=>'required','mobile'=>'required','email'=>'required',
            'address'=>'required','city'=>'required','pincode'=>'required',
        ]);

        $data = $request->except(['photo','birth_certificate','aadhaar_card','tc']);

        foreach(['photo','birth_certificate','aadhaar_card','tc'] as $fileField){
            if($request->hasFile($fileField)){
                $data[$fileField] = $request->file($fileField)->store('admissions','public');
            }
        }

        $admission = Admission::create($data);
        return redirect()->route('admission.success', $admission->id);
    }

    public function success($id){
        $admission = Admission::findOrFail($id);
        return view('admission-success', compact('admission'));
    }

    public function downloadReceipt($id){
        $admission = Admission::findOrFail($id);
        $pdf = Pdf::loadView('receipt', compact('admission'));
        return $pdf->download('Makoons-Receipt-'.$admission->student_name.'.pdf');
    }
}