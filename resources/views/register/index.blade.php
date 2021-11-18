@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
            <form action="/register" method="post">
            @csrf
            <div class="form-floating">
            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required value="{{old('name')}}">
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
           {{$message}}
            </div>
            @enderror
            </div>
            <div class="form-floating">
            <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" name="username" required value="{{old('username')}}">
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">
           {{$message}}
            </div>
            @enderror
            </div>
            <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{old('email')}}">
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
           {{$message}}
            </div>
            @enderror
            </div>
            <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required value="{{old('password')}}">
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
           {{$message}}
            </div>
            @enderror
            </div>
            <button class="w-100 btn btn-lg btn-dark mt-4" type="submit">Login</button>
        </form>
        </main>
    </div>
</div>
@endsection