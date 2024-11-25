@extends('blog.master')

@section('content')
    <x-blog.post.index :posts='$posts'>
        Post List
        @slot('footer')
            <footer>
                This is the footer
            </footer>
        @endslot

        @slot('footer','This is the footer')

    </x-blog>
@endsection
