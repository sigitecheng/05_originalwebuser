@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('loginError') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <main class="form-signin w-100 m-auto">
            <form target="_blank" action="/login" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">{{ $title }}</h1>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{ old('email') }}" autofocus required>
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mt-2">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> -->

                <button class="w-100 btn btn-lg btn-primary mt-4 " type="submit">Login</button>
                <small class="d-block text-center mt-2">Not registered? <a href="/register">Register Now!</a> </small>
                <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
            </form>
        </main>
    </div>
</div>
@endsection