@extends('dashboard.master')

@section('title')
    Dashboard - Show
@endsection
@section('content')
    <h1>Show</h1>
    <p>
        {{ $category->id }}
    </p>
    <p>
        {{ $category->title }}
    </p>
    <p>
        {{ $category->slug }}
    </p>
@endsection
