@extends('dashboard.master')

@section('title')
    Dashboard - Create
@endsection
@section('content')
    <h1>Create</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.store') }}" method="post">

        @csrf

        @include('dashboard.category._form')
        
    </form>
@endsection
