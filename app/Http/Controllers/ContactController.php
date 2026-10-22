<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactInquiry;
use App\Models\ContactSetting;

class ContactController extends Controller
{
    public function index(){
        $contact = ContactSetting::first();
        return view('contact', compact('contact'));
    }

    public function send(Request $request){
        $request->validate([
            'name'=>'required','email'=>'required|email','message'=>'required'
        ]);
        ContactInquiry::create($request->only('name','email','phone','department','message'));
        return back()->with('success','Message Sent Successfully!');
    }

    public function adminList(){
        $inquiries = ContactInquiry::latest()->get();
        return view('admin.contact-inquiries', compact('inquiries'));
    }

    public function adminDelete($id){
        ContactInquiry::findOrFail($id)->delete();
        return back()->with('success','Inquiry Deleted!');
    }
}