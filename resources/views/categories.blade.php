@extends('layouts.main')

@section('container')
    <h1>Post Categories</h1>
    <br>

    @foreach ($category as $category)
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>

    @endforeach
@endsection
