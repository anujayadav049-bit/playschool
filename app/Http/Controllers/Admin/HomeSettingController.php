<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSetting;
use Illuminate\Support\Facades\Storage;

class HomeSettingController extends Controller
{
    public function index(){
        $setting = HomeSetting::first();
        return view('admin.home-settings.index', compact('setting'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'banner_title' => 'nullable|string|max:255',
            'banner_subtitle' => 'nullable|string|max:255',
            'about_title' => 'nullable|string|max:255',
            'about_description' => 'nullable|string',
            'banner_image' => 'nullable|image|max:2048',
            'footer_description' => 'nullable|string',
            'footer_address' => 'nullable|string',
            'footer_phone' => 'nullable|string',
            'footer_email' => 'nullable|string',
            'footer_facebook' => 'nullable|string',
            'footer_instagram' => 'nullable|string',
            'footer_youtube' => 'nullable|string',
            'footer_copyright' => 'nullable|string',
            'footer_logo' => 'nullable|image|max:2048',
        ]);

        $setting = HomeSetting::first();

        if($request->hasFile('banner_image')){
            if($setting && $setting->banner_image) Storage::disk('public')->delete($setting->banner_image);
            $data['banner_image'] = $request->file('banner_image')->store('home','public');
        }
        if($request->hasFile('footer_logo')){
            if($setting && $setting->footer_logo) Storage::disk('public')->delete($setting->footer_logo);
            $data['footer_logo'] = $request->file('footer_logo')->store('home','public');
        }

        HomeSetting::updateOrCreate(['id' => 1], $data);
        return back()->with('success','Updated Successfully!');
    }

    public function deleteBanner(){
        $setting = HomeSetting::first();
        if($setting && $setting->banner_image){
            Storage::disk('public')->delete($setting->banner_image);
            $setting->update(['banner_image' => null]);
        }
        return back()->with('success','Banner hata diya!');
    }
}