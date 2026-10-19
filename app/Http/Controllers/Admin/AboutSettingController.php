<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSetting;

class AboutSettingController extends Controller
{
    public function index(){
        $setting = AboutSetting::firstOrCreate(['id'=>1]);
        return view('admin.about-settings.index', compact('setting'));
    }

    public function update(Request $request){
        $setting = AboutSetting::firstOrCreate(['id'=>1]);
        $data = $request->only(['title','description','mission_title','mission_desc','vision_title','vision_desc']);
        
        if($request->hasFile('image1')) $data['image1'] = $request->file('image1')->store('about','public');
        if($request->hasFile('image2')) $data['image2'] = $request->file('image2')->store('about','public');
        if($request->hasFile('image3')) $data['image3'] = $request->file('image3')->store('about','public');

        $setting->update($data);
        return back()->with('success','About Page Updated!');
    }
}