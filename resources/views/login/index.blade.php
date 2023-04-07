@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">

        <main class="form-signin w-100 m-auto">
            <form>
                <h1 class="h3 mb-3 fw-normal text-center">{{ $title}}</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mt-2">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
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