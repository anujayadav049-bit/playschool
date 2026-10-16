@extends('admin.layout')
@section('content')
<div class="container mt-4">
  <h3>Edit Page</h3>
  <form action="{{ route('admin.custom-pages.update', $page->id) }}" method="POST">
    @csrf
    <div class="mb-3">
      <label>Title</label>
      <input type="text" name="title" class="form-control" value="{{ $page->title }}" required>
    </div>
    <div class="mb-3">
      <label>Content</label>
      <textarea name="content" id="content" rows="10" class="form-control">{{ $page->content }}</textarea>
    </div>
    <button class="btn btn-primary">Update</button>
  </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>ClassicEditor.create(document.querySelector('#content'));</script>
@endsection