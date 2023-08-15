@extends('layouts.main')

@section('container')
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form class="mt-5">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
            <h1>Sign Up</h1>
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="email">Email address</label>
          </div>
          
          
          <div class="form-outline mb-4">
            <input type="text" id="name" class="form-control form-control-lg"
              placeholder="Enter your name" />
            <label class="form-label" for="name">Name</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="password">Password</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-dark btn-lg w-100"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0 text-center">Already have an account? <a href="/login"
                class="link-danger">Login</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
@endsection