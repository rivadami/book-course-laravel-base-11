@extends('blog.master')

@section('content')
{{-- <div class="card card-white">
    <h1>
        {{ $post->title }}
    </h1>
    <p>
        {{ $post->category->title }}
    </p>
    <p>
        {{ $post->content }}
    </p>
</div> --}}

<x-blog.show :post="$post"></x-blog.show>

<x-blog.post.show :post='$post' title='Titulo'></x-blog.post.show>

<x-card title='Titulo'></x-card>

@endsection