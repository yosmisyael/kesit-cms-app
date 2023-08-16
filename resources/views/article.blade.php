@extends('layouts.main')

@section('container')
  <main>
    <section class="pt-0">
      <div class="container position-relative" data-sticky-container="">
        <div class="row">
          <h1>{{ $data->title }}</h1>
          <p class="fst-italic">by {{ $data->author->name }}, {{ $data->created_at }}</p>
          <!-- Main Content -->
          <div class="col-lg-9 mb-5">
            <p>{!! $data->body !!}</p>
    
          <!-- Images -->
          <div class="row g-2 my-5">
            <div class="col-md-4">
              <a href="assets/images/blog/3by4/01.jpg" data-glightbox="" data-gallery="image-popup">
                <img class="rounded" src="assets/images/blog/3by4/01.jpg" alt="Image">
                </a>
            </div>
            <div class="col-md-4">
              <a href="assets/images/blog/3by4/02.jpg" data-glightbox="" data-gallery="image-popup">
                <img class="rounded" src="assets/images/blog/3by4/02.jpg" alt="Image">
                </a>
            </div>
            <div class="col-md-4">
              <a href="assets/images/blog/3by4/03.jpg" data-glightbox="" data-gallery="image-popup">
                <img class="rounded" src="assets/images/blog/3by4/03.jpg" alt="Image">
                </a>
            </div>
            <div class="col-md-4">
              <a href="assets/images/blog/3by4/04.jpg" data-glightbox="" data-gallery="image-popup">
                <img class="rounded" src="assets/images/blog/3by4/04.jpg" alt="Image">
                </a>
            </div>
            <div class="col-md-4">
              <a href="assets/images/blog/3by4/05.jpg" data-glightbox="" data-gallery="image-popup">
                <img class="rounded" src="assets/images/blog/3by4/05.jpg" alt="Image">
                </a>
            </div>
            <div class="col-md-4">
              <a href="assets/images/blog/3by4/06.jpg" data-glightbox="" data-gallery="image-popup">
                <img class="rounded" src="assets/images/blog/3by4/06.jpg" alt="Image">
                </a>
            </div>
          </div>
          
          <!-- Author info -->
          <div class="d-flex p-2 p-md-4 my-3 bg-primary bg-opacity-10 rounded">
            <!-- Avatar -->
            <a href="#">
              <div class="avatar avatar-xxl me-2 me-md-4">
                <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
              </div>
            </a>
            <!-- Info -->
            <div>
              <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                  <h4 class="m-0"><a href="/article?author={{ $data->author->username }}" class="text-decoration-none">{{ $data->author->name }}</a></h4>
                  <small>skillful journalist</small>
                </div>
                <a href="#" class="btn btn-xs btn-primary-soft">View Articles</a>
              </div>
              <p class="my-2">Louis Ferguson is a senior editor for the blogzine and also reports on breaking news based in London. He has written about government, criminal justice, and the role of money in politics since 2015.</p>
              <!-- Social icons -->
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link ps-0 pe-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>					
            </div>
          </div>

          <a href="/article" class="text-decoration-none"> back to article list </a>
        </div>
      </div>
    </section>
  </main>
@endsection