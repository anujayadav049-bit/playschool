@extends('admin.layout')
@section('content')
<div class="container mt-4">
  <h3>All Custom Pages</h3>
  <a href="{{ route('admin.custom-pages.create') }}" class="btn btn-success mb-3">+ Add New Page</a>
  <table class="table table-bordered">
    <tr><th>Title</th><th>Slug</th><th>Action</th></tr>
    @foreach($pages as $page)
    <tr>
      <td>{{ $page->title }}</td>
      <td>/page/{{ $page->slug }}</td>
      <td>
        <a href="{{ route('admin.custom-pages.edit', $page->id) }}" class="btn btn-sm btn-primary">Edit</a>
        <a href="{{ route('admin.custom-pages.delete', $page->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</a>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection