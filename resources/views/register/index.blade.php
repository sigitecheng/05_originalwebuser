@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">

        <main class="form-registration w-100 m-auto">

            <h4 class="h3 mb-3 fw-normal text-center"> {{ $title }}</h4>

            <form action="/register" method="post">
                @csrf

                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
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

                <button class="w-100 btn btn-lg btn-primary mt-3 " type="submit">Login</button>
                <small class="d-block text-center mt-2">Already register? <a href="/login">Login Now!</a> </small>
                <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
            </form>
        </main>
    </div>
</div>
@endsection