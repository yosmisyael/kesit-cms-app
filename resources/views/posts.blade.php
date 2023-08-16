@extends('layouts.main')

@section('container')
  <div class="container">
    <div class="row mb-2">
      <h2 class="text-center">{{ $title }}</h2>
      <div class="row justify-content-center mb-3 mt-3">
        <div class="col-md-6">
          <form action="/article">
            @if (request('category'))
              <input type="hidden" name='category' value="{{ request('category') }}">
            @endif
            @if (request('author'))
              <input type="hidden" name='author' value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search keyword..." aria-label="Search keyword..." aria-describedby="button-addon2" name="search" value="{{ request('search') }}">
              <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
          </form>
        </div>
      </div>
      @if ($data->count())
        @foreach ($data as $post)
        <!-- Card -->
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis"><a href="/article?category={{ $post->category->slug }}" class="text-decoration-none text-primary">{{ $post->category->name }}</a></strong>
                <h3 class="mb-0">{{ $post->title }}</h3>
                <div class="mb-1 text-body-secondary">{{ $post->created_at }}</div>
                <p class="mb-auto">{{ $post->excerpt }}</p>
                <a href="/article/{{ $post->slug }}" class="icon-link gap-1 icon-link-hover stretched-link text-decoration-none">
                  Continue reading
                  <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                </a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <p class="text-center fs-4">No article found</p>
      @endif
      <div class="d-flex justify-content-center">
        {{ $data->links() }}
      </div>
    </div>
  </div>
@endsection