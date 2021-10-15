@extends('layouts.main')

@section('container')
    <article class="mb-5">
            <h2>
                {{ $post->title }}
            </h2>

            {!! $post->body !!}
        </article>

<a href="/blog">Back to blog</a>
@endsection