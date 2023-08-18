@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
</div>
<div class="row">
    <div class="col-lg-8 mb-3">
        <form action="/dashboard/post/{{ $post->slug }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label fw-bolder">Title</label>
                <input type="text" class="form-control @error('title')
                is-invalid
                @enderror" id="title" name="title" required value="{{ old('title', $post->title) }}" autofocus>
                @error('title') 
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label fw-bolder">Slug</label>
                <input type="text" class="form-control @error('slug')
                is-invalid
                @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label fw-bolder">Category</label>
                <select id="category" class="form-select" aria-label="Default select example" name="category_id">        
                    @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>                        
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>                        
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label fw-bolder">Body</label>
                @error('body')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button class="btn btn-primary">Update Post</button>
        </form>
    </div>
</div>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function () {
        fetch('/dashboard/post/createSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    });
</script>
@endsection