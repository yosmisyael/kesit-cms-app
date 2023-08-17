@extends('layouts.main')

@section('container')
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="POST" action="/register" class="mt-5">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
            <h1>Sign Up</h1>
          </div>

          @csrf
          
          <!-- Email input -->
          <div class="form-outline form-floating mb-4">
            <input type="email" id="email" name="email" class="form-control form-control-lg @error('email')
              is-invalid
            @enderror"
              placeholder="Enter a valid email address" required value="{{ old('email') }}" />
            <label class="form-label" for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <!-- Name input -->
          <div class="form-outline form-floating mb-4">
            <input type="text" id="name" name="name" class="form-control form-control-lg @error('name')
              is-invalid
            @enderror"
              placeholder="Enter your name" required required value="{{ old('name') }}" />
            <label class="form-label" for="name">Name</label>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <!-- Username input -->
          <div class="form-outline form-floating mb-4">
            <input type="text" id="username" name="username" class="form-control form-control-lg @error('username')
              is-invalid
            @enderror"
              placeholder="Create your username" required value="{{ old('username') }}" />
            <label class="form-label" for="username">Username</label>
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline form-floating mb-3">
            <input type="password" id="password" name="password" class="form-control form-control-lg @error('password')
              is-invalid
            @enderror"
              placeholder="Enter password" required />
            <label class="form-label" for="password">Password</label>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-dark btn-lg w-100"
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