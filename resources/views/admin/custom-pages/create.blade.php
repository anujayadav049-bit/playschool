@extends('admin.layout')
@section('content')
<div class="container mt-4">
  <h3>Create Custom Page</h3>
  <form id="pageForm" action="{{ route('admin.custom-pages.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label>Page Title</label>
      <input type="text" name="title" class="form-control" required value="Terms & Conditions">
    </div>
    <div class="mb-3">
      <label>Page Content</label>
      <textarea name="content" id="content" rows="10" class="form-control" required>this is play school rules</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save Page</button>
    <a href="{{ route('admin.custom-pages.index') }}" class="btn btn-secondary">Back</a>
  </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
let myEditor;
ClassicEditor.create(document.querySelector('#content')).then(editor => {
    myEditor = editor;
}).catch(error => { console.error(error); });

// Save pe click karte hi content ko textarea me daalo
document.getElementById('pageForm').addEventListener('submit', function(e){
    document.querySelector('#content').value = myEditor.getData();
});
</script>
@endsection