<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GallerySettingController extends Controller
{
    public function index(Request $request)
    {
        $galleries = Gallery::latest()->get();
        $editGallery = null;
        if($request->has('edit')){
            $editGallery = Gallery::find($request->edit);
        }
        return view('admin.gallery-settings', compact('galleries','editGallery'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120'
        ]);

        $data = [
            'title' => $request->title,
            'category' => $request->category,
            'video_url' => $request->video_url,
        ];

        if($request->hasFile('image')){
            $path = $request->file('image')->store('galleries', 'public');
            $data['image'] = $path;
        }

        if($request->id){
            $gallery = Gallery::find($request->id);
            if($request->hasFile('image') && $gallery->image && !str_starts_with($gallery->image, 'assets/')){
                Storage::disk('public')->delete($gallery->image);
            }
            $gallery->update($data);
        } else {
            // agar image nahi hai to bhi save hone do
            if(!isset($data['image'])){
                $data['image'] = 'assets/img/gallery/gallery1.jpg';
            }
            Gallery::create($data);
        }

        return redirect()->route('admin.gallery.index')->with('success','Saved');
    }

    public function delete($id)
    {
        $g = Gallery::find($id);
        if($g){
            if($g->image && !str_starts_with($g->image, 'assets/')){
                Storage::disk('public')->delete($g->image);
            }
            $g->delete();
        }
        return back();
    }
}