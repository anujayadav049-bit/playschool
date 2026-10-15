<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\FormField;
use App\Models\FormSubmission;
use Illuminate\Support\Str;

class FormBuilderController extends Controller
{
    public function index() {
        $forms = Form::withCount('submissions')->latest()->get();
        return view('admin.form-builder.index', compact('forms'));
    }

    public function create() {
        return view('admin.form-builder.create');
    }

    public function store(Request $request) {
        $request->validate(['name'=>'required','fields'=>'required|array']);
        
        $form = Form::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name).'-'.rand(100,999)
        ]);

        foreach($request->fields as $i => $f){
            if(empty($f['label'])) continue;
            FormField::create([
                'form_id' => $form->id,
                'label' => $f['label'],
                'type' => $f['type'],
                'options' => $f['options'] ?? null,
                'is_required' => isset($f['required']) || isset($f['is_required']) ? 1 : 0,
                'sort_order' => $i
            ]);
        }

       return redirect()->route('form-builder.create')->with('success','Form "'.$form->name.'" created successfully!');
    }



    public function showForm($slug) {
        $slug = trim($slug);
        $form = Form::with('fields')->where('slug',$slug)->first();
        if(!$form){
            $form = Form::with('fields')->where('slug','LIKE','%'.$slug.'%')->firstOrFail();
        }
        return view('form.show', compact('form'));
    }

    public function submitForm(Request $request, $slug) {
        $form = Form::with('fields')->where('slug',trim($slug))->firstOrFail();
        $rules = [];
        foreach($form->fields as $field){
            $key = 'field_'.$field->id;
            if($field->is_required){
                $rules[$key] = $field->type == 'file' ? 'required|file|max:5120' : 'required';
            } else {
                if($field->type == 'file') $rules[$key] = 'nullable|file|max:5120';
            }
        }
        $request->validate($rules);

        $finalData = [];
        foreach($form->fields as $field){
            $key = 'field_'.$field->id;
            $value = $request->input($key);
            if($field->type == 'file' && $request->hasFile($key)){
                $file = $request->file($key);
                $fileName = time().'_'.Str::random(6).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/forms'), $fileName);
                $value = 'uploads/forms/'.$fileName;
            }
            $finalData[$field->label] = $value;
        }
        FormSubmission::create(['form_id'=>$form->id,'data'=>$finalData]);
        return back()->with('success','Thank you! Form submitted successfully');
    }

    public function submissions($id) {
        $form = Form::with('submissions')->findOrFail($id);
        return view('admin.form-builder.submissions', compact('form'));
    }

    public function editForm($id){
        $form = Form::with('fields')->findOrFail($id);
        return view('admin.form-builder.edit', compact('form'));
    }

    public function updateForm(Request $request, $id){
        $request->validate(['name'=>'required','fields'=>'required|array']);
        $form = Form::findOrFail($id);
        $form->update(['name' => $request->name]);

        FormField::where('form_id', $id)->delete();
        foreach($request->fields as $i => $f){
            if(empty($f['label'])) continue;
            FormField::create([
                'form_id' => $id,
                'label' => $f['label'],
                'type' => $f['type'],
                'options' => $f['options'] ?? null,
                'is_required' => isset($f['required']) || isset($f['is_required']) ? 1 : 0,
                'sort_order' => $i
            ]);
        }
        return redirect('/admin/form-builder')->with('success','Form "'.$request->name.'" updated successfully!');
    }

    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        FormSubmission::where('form_id', $id)->delete();
        FormField::where('form_id', $id)->delete();
        $form->delete();
        
        return redirect('/admin/form-builder')->with('success','Form deleted successfully!');
    }
}
