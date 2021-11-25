@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <h2 class="mb-2">{{ $post->title }}</h2>
        <small class="text-muted">
          <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my posts</a>
          <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
          <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
        </small>
        <img src="https://source.unsplash.com/800x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
        <article class="my-3">{!! $post->body !!}</article>
        <a href="/blog" class="d-block mt-3 btn btn-primary my-5">Back to blog</a>
        </div>  
    </div>
</div> 
@endsection