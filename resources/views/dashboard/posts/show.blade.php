@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <h2 class="mb-2">{{ $post->title }}</h2>
        <small class="text-muted">
          <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my posts</a>
          <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
          <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger border-0" onclick="return confirm('Are u sure?')"><span data-feather="x-circle"></span> Delete</button>
                </form>
        </small>
        <img src="https://source.unsplash.com/800x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
        <article class="my-3">{!! $post->body !!}</article>
        </div>  
    </div>
</div> 
@endsection