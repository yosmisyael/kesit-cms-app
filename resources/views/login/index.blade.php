@extends('layouts.main')

@section('container')
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('loginError') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form method="POST" action="/login">
          @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-dark btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-dark btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-dark btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline form-floating mb-4">
            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg @error('email')
              is-invalid
            @enderror"
              placeholder="Enter a valid email address" required autofocus value="{{ old('email') }}" />
            <label class="form-label" for="form3Example3">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline form-floating mb-3">
            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg @error('password')
              is-invalid
            @enderror"
              placeholder="Enter password" required />
            <label class="form-label" for="form3Example4">Password</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-dark btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
@endsection