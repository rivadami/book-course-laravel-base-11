@extends('dashboard.master')

@section('title')
    Dashboard - Edit
@endsection
@section('content')
    <h1>Edit</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">

        @method('PATCH')
        
        @include('dashboard.post._form',[ 'task'=>'edit' ])

    </form>
@endsection
