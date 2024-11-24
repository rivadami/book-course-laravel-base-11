@extends('dashboard.master')

@section('title')
    Dashboard - Create
@endsection
@section('content')
    <h1>Create</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.store') }}" method="post">

        @csrf

        @include('dashboard.post._form')
        
    </form>
@endsection
