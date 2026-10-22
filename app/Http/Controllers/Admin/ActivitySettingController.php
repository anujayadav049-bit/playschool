<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class ActivitySettingController extends Controller
{
    public function index(){
  $activities = Activity::latest()->get();
  return view('admin.activity-settings', compact('activities'));
}
public function edit($id){
  $editActivity = Activity::findOrFail($id);
  $activities = Activity::latest()->get();
  return view('admin.activity-settings', compact('activities','editActivity'));
}
public function update(Request $request, $id){
  $act = Activity::findOrFail($id);
  $act->title = $request->title;
  $act->category = $request->category;
  $act->description = $request->description;
  if($request->hasFile('image')){
    $act->image = $request->file('image')->store('activities','public');
  }
  $act->save();
  return redirect('admin/activity-settings')->with('success','Activity Updated!');
}
}