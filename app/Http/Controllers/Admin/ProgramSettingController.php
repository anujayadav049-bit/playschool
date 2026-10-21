<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramSettingController extends Controller
{
    public function index(Request $request)
    {
        $programs = Program::latest()->get();
        $editProgram = null;
        if($request->has('edit')){
            $editProgram = Program::find($request->edit);
        }
        return view('admin.program-settings', compact('programs','editProgram'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'age_group' => 'required',
            'description' => 'required',
            'location' => 'nullable',
            'date' => 'nullable',
            'reviews' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('programs','public');
        }

        if($request->id){
            $program = Program::find($request->id);
            if($request->hasFile('image') && $program->image){
                Storage::disk('public')->delete($program->image);
            }
            $program->update($data);
        } else {
            Program::create($data);
        }

        return redirect()->route('admin.program.index')->with('success','Saved');
    }

    public function delete($id)
    {
        $p = Program::findOrFail($id);
        if($p->image) Storage::disk('public')->delete($p->image);
        $p->delete();
        return back()->with('success','Deleted');
    }
}