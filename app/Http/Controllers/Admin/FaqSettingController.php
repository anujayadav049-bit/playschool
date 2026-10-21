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
        $request->validate(['question'=>'required','answer'=>'required']);
        Faq::create(['question'=>$request->question,'answer'=>$request->answer]);
        return back()->with('success','FAQ Added');
    }
    public function delete($id){
        Faq::findOrFail($id)->delete();
        return back()->with('success','Deleted');
    }
}