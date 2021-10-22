@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>
    <div class="container">
        <div class="row">
        @foreach ($category as $category)
            <div class="col-md-4">
                <a href="/categories/{{$category->slug}}">
                <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/512x512?{{$category->name}}" alt="{{$category->name}}" class="card-img">
                    <div class="card-img-overlay flex-fill align-items-center p-0">
                        <h5 class="card-title text-center p-3 fs-3" style="background: rgba(0,0,0,0.7);">
                            <a href="/categories/{{ $category->slug }}" class="text-decoration-none text-white">{{ $category->name }}</a>
                        </h5>
                    </div>
                </div>
                </a>
            </div>
        @endforeach
        </div>
    </div>

@endsection
