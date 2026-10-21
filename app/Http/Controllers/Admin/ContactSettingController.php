<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactSetting;

class ContactSettingController extends Controller
{
    public function index(){
        $setting = ContactSetting::first() ?? new ContactSetting();
        return view('admin.contact-settings', compact('setting'));
    }
    public function update(Request $request){
        $setting = ContactSetting::firstOrCreate([]);
        $setting->update($request->only(['address','phone','email','map_link']));
        return back()->with('success','Contact Updated');
    }
}