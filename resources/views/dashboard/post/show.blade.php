@extends('dashboard.master')

@section('title')
    Dashboard - Show
@endsection
@section('content')
    <h1>Show</h1>
    <p>
        {{ $post->id }}
    </p>
    <p>
        {{ $post->title }}
    </p>
    <p>
        {{ $post->posted }}
    </p>
    <p>
        {{ $post->category->title }}
    </p>
    <p>
        <img src="/uploads/posts/{{ $post->image }}"> 
        {{ $post->image }}
    </p>
@endsection
