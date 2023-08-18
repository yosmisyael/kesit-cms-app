@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Your Posts</h1>
  </div>
  <div class="table-responsive">
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <a href="/dashboard/post/create" class="btn btn-primary mb-3 fw-bolder"><i class="bi bi-plus"></i> Create New Post</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td class="d-flex gap-2">
                  <a href="/dashboard/post/{{ $post->slug }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
                  <a href="/dashboard/post/{{ $post->id }}" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                  <form class="d-inline" action="/dashboard/post/{{ $post->slug }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><i class="bi bi-trash-fill"></i></button>
                  </form>
                </td> 
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection