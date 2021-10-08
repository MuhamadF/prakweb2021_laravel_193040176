@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $nama }}</h3>
    <img src="img/{{ $gambar }}" alt="{{ $nama }}" width="250">
@endsection