@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
        <form>
            <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
            <div class="form-floating">
            <input type="name" class="form-control" id="name" placeholder="name" name="name">
            <label for="name">Name</label>
            </div>
            <div class="form-floating">
            <input type="username" class="form-control" id="username" placeholder="username" name="username">
            <label for="username">Username</label>
            </div>
            <div class="form-floating">
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
            <label for="email">Email address</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-dark mt-4" type="submit">Login</button>
        </form>
        <small class="d-block mt-2 text-center">Not registered? <a href="/register">Register now!</a></small>
        </main>
    </div>
</div>
@endsection