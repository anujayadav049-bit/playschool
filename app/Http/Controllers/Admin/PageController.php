<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index($slug){
        $setting = Page::firstOrCreate(['slug'=>$slug]);
        return view('admin.pages.index', compact('setting','slug'));
    }

    public function update(Request $request, $slug){
        $page = Page::firstOrCreate(['slug'=>$slug]);
        $extra = $page->extra_data ?? [];
        
        $extra['banner_title'] = $request->banner_title;
        $extra['banner_subtitle'] = $request->banner_subtitle;
        $extra['mission_title'] = $request->mission_title;
        $extra['mission_desc'] = $request->mission_desc;
        $extra['vision_title'] = $request->vision_title;
        $extra['vision_desc'] = $request->vision_desc;

        if($request->hasFile('image')){
            $page->image = $request->file('image')->store('pages/'.$slug, 'public');
        }
        if($request->hasFile('image2')){
            $extra['image2'] = $request->file('image2')->store('pages/'.$slug, 'public');
        }
        if($request->hasFile('image3')){
            $extra['image3'] = $request->file('image3')->store('pages/'.$slug, 'public');
        }

        $page->title = $request->title;
        $page->description = $request->description;
        $page->extra_data = $extra;
        $page->save();

        return back()->with('success', 'About Page Updated! Image change ho gayi');
    }
}