@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h2 class="mb-2">{{ $post->title }}</h2>
        <small class="text-muted">
            <p>
                By <a href="/blog?author={{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in 
                <a href="/blog?category={{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a>
            </p>
        </small>
        @if($post[0]->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{$post->category->name}}" class="img-fluid">
        @else
        <img src="https://source.unsplash.com/800x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">
        @endif
        <article class="my-3">{!! $post->body !!}</article>
        <a href="/blog" class="d-block mt-3 btn btn-primary my-5">Back to blog</a>
        </div>  
    </div>
</div>
@endsection