<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Storage;

class ActivitySettingController extends Controller
{
    public function index(){
        $activities = Activity::latest()->get();
        return view('admin.activity-settings', compact('activities'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|image'
        ]);

        $path = $request->file('image')->store('activities','public');

        Activity::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $path
        ]);

        return back()->with('success','Activity Added');
    }

    public function delete($id){
        $activity = Activity::findOrFail($id);
        if($activity->image){
            Storage::disk('public')->delete($activity->image);
        }
        $activity->delete();
        return back()->with('success','Deleted');
    }

    // Frontend ke liye
    public function frontend(){
        $activities = Activity::latest()->get();
        return view('activities', compact('activities'));
    }
}