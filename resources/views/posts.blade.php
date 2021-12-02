@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">{{$title}}</h1>
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <form action="/blog">
            @if(request('category'))
                <input type="hidden" name="category" value="{{request('category')}}">
            @endif
            @if(request('author'))
                <input type="hidden" name="author" value="{{request('author')}}">
            @endif
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari.." name="search" value="{{request('search')}}">
                <button class="btn btn-outline-dark" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>


    @if ($posts->count())
        <div class="card mb-3">
            @if($posts[0]->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="{{$posts[0]->category->name}}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
                <small class="text-muted">
                <p>By 
                    <a href="/blog?author={{$posts[0]->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}}</a> in 
                    <a href="/blog?category={{ $posts[0]->category->slug}}" class="text-decoration-none">{{$posts[0]->category->name}}</a>
                    {{$posts[0]->created_at->diffForHumans()}}
                </p>
                </small>
                <p class="card-text">{{$posts[0]->excerpt}}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-dark">Read more..</a>
            </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
            <div class="col-md-4 mb-4">
            <div class="card">
                <div class="position-absolute bg-dark px-3 py-2"><a href="/blog?category={{ $post->category->slug}}" class="text-decoration-none text-white">{{$post->category->name}}</a></div>
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{$post->category->name}}">
                @else
                    <img src="https://source.unsplash.com/512x512?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                @endif
                <div class="card-body">
                <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{$post->title}}</a></h5>
                <small class="text-muted">
                        <p>By 
                            <a href="/blog?author={{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a>
                            {{$posts[0]->created_at->diffForHumans()}}
                        </p>
                </small>
                <p class="card-text">{{$post->excerpt}}</p>
                <a href="/posts/{{ $post->slug }}" class="btn btn-dark">Read more..</a>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
        <img src="img/hello-is-it-me-youre-looking-for.jpg" alt="hello" width="40%" style="display:block; margin: auto;">
        <p class="text-center fs-3">POST NOT FOUND</p>
    @endif
    <div class="d-flex justify-content-center">{{$posts->links()}}</div>
@endsection
