<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqSettingController extends Controller
{
    public function index(){
        $faqs = Faq::latest()->get();
        return view('admin.faq-settings', compact('faqs'));
    }

    public function store(Request $request){
        $request->validate([
            'question'=>'required',
            'answer'=>'required'
        ]);
        Faq::create($request->only('question','answer'));
        return back()->with('success','FAQ Added Successfully!');
    }

    // delete function - ye naam aapki route se match hai
    public function delete($id){
        Faq::findOrFail($id)->delete();
        return back()->with('success','FAQ Deleted!');
    }

    // destroy alias - agar kahin DELETE method se call ho to
    public function destroy($id){
        return $this->delete($id);
    }

    public function update(Request $request, $id){
        $request->validate([
            'question'=>'required',
            'answer'=>'required'
        ]);
        Faq::findOrFail($id)->update($request->only('question','answer'));
        return back()->with('success','FAQ Updated!');
    }
}