<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSetting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;

class HomeSettingController extends Controller
{
    public function index()
    {
        $setting = HomeSetting::first();
        return view('admin.home-settings.index', compact('setting'));
    }

    public function store(Request $request)
    {
        $setting = HomeSetting::first();
        if (!$setting) {
            $setting = HomeSetting::firstOrCreate(['id' => 1]);
        }

        $extraData = $setting->extra_data ?? [];
        $allColumns = Schema::getColumnListing('home_settings');
        
        // Direct save hone wale columns
        $directData = [];

        // 1. Text fields handle karo
        foreach ($request->except(['_token']) as $key => $value) {
            if ($request->hasFile($key)) {
                continue; // files ko niche handle karenge
            }
            
            // extra_data me hamesha save karo
            $extraData[$key] = $value;
            
            // Agar ye column table me exist karta hai to direct me bhi save karo
            if (in_array($key, $allColumns)) {
                $directData[$key] = $value;
            }
        }

        // 2. Image files handle karo
        foreach ($request->allFiles() as $key => $file) {
            // Purani image delete karo
            $oldImage = null;
            if (isset($extraData[$key])) {
                $oldImage = $extraData[$key];
            } elseif (isset($setting->$key) && $setting->$key) {
                $oldImage = $setting->$key;
            }

            if ($oldImage) {
                Storage::disk('public')->delete($oldImage);
            }

            // Nayi image save karo
            $path = $file->store('home', 'public');
            
            // Dono jagah save - extra_data aur direct
            $extraData[$key] = $path;
            if (in_array($key, $allColumns)) {
                $directData[$key] = $path;
            }
        }

        // 3. Final save
        $directData['extra_data'] = $extraData;

        HomeSetting::updateOrCreate(
            ['id' => 1],
            $directData
        );

        return back()->with('success', 'Home Settings Updated Successfully!');
    }

    public function deleteBanner()
    {
        $setting = HomeSetting::first();
        if ($setting) {
            if ($setting->banner_image) {
                Storage::disk('public')->delete($setting->banner_image);
                $setting->update(['banner_image' => null]);
            }
            // extra_data me se bhi hata do
            if (isset($setting->extra_data['banner_image'])) {
                $extra = $setting->extra_data;
                if(isset($extra['banner_image'])){
                    Storage::disk('public')->delete($extra['banner_image']);
                    unset($extra['banner_image']);
                    $setting->update(['extra_data' => $extra]);
                }
            }
        }
        return back()->with('success', 'Banner Image Deleted!');
    }
}