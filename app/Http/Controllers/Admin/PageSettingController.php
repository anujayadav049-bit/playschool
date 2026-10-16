<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageSetting;
use Illuminate\Support\Facades\Storage;

class PageSettingController extends Controller
{
    public function index($slug)
    {
        $setting = PageSetting::where('page_slug', $slug)->first();
        return view('admin.pages.index', compact('setting','slug'));
    }

    public function store(Request $request, $slug)
    {
        $data = $request->except('_token');
        $data['page_slug'] = $slug;

        // image upload
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('pages','public');
        }
        if($request->hasFile('image2')){
            $data['image2'] = $request->file('image2')->store('pages','public');
        }

        // extra fields ko json me save
        $extra = [
            'mission_title' => $request->mission_title,
            'mission_desc' => $request->mission_desc,
            'vision_title' => $request->vision_title,
            'vision_desc' => $request->vision_desc,
            'extra_title1' => $request->extra_title1,
            'extra_desc1' => $request->extra_desc1,
        ];
        $data['extra_json'] = $extra;

        PageSetting::updateOrCreate(
            ['page_slug' => $slug],
            $data
        );

        return back()->with('success', ucfirst($slug).' Page Updated Successfully!');
    }
}