<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionAdminController extends Controller
{
    public function dashboard()
    {
        $total = Admission::count();
        return view('admin.dashboard', compact('total'));
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
        
        $data = $request->except(['_token']);

        // Photo
        if($request->hasFile('photo')){
            $data['photo'] = $request->file('photo')->store('admissions','public');
        } else {
            unset($data['photo']);
        }
        // Birth Certificate
        if($request->hasFile('birth_certificate')){
            $data['birth_certificate'] = $request->file('birth_certificate')->store('admissions','public');
        } else {
            unset($data['birth_certificate']);
        }
        // Aadhaar Card
        if($request->hasFile('aadhaar_card')){
            $data['aadhaar_card'] = $request->file('aadhaar_card')->store('admissions','public');
        } else {
            unset($data['aadhaar_card']);
        }
        // TC
        if($request->hasFile('tc')){
            $data['tc'] = $request->file('tc')->store('admissions','public');
        } else {
            unset($data['tc']);
        }

        $admission->update($data);

        return redirect()->route('admin.show', $id)->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        Admission::findOrFail($id)->delete();
        return back()->with('success','Deleted');
    }
}