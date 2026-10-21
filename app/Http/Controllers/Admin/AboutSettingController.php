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


    
    // Teacher Add
    public function storeTeacher(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|max:2048'
        ]);

        $data = [
            'name' => $request->name,
            'designation' => $request->designation ?? 'Online Teacher',
        ];

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('teachers','public');
        }

        Teacher::create($data);
        return back()->with('success','Teacher Added Successfully!');
    }

    // Teacher Delete
    public function deleteTeacher($id){
        $teacher = Teacher::findOrFail($id);
        // Image delete from storage (optional)
        // if($teacher->image) Storage::disk('public')->delete($teacher->image);
        $teacher->delete();
        return back()->with('success','Teacher Deleted!');
    }
}