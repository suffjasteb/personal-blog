@extends('layouts.app')

@section('content')
<img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" style="max-height: 200px; object-fit: cover;" alt="{{ $post->title }}">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ url()->previous() }}">Back</a>
@endsection