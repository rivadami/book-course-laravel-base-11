@extends('dashboard.master')

@section('title')
    Dashboard - Index
@endsection
@section('content')
    <h1>Index</h1>
    <a href=" {{ route('post.create') }} ">Create</a>
    <table>
        <thead>
            <tr>
                ID
            </tr>
            <tr>
                Title
            </tr>
            <tr>
                Posted
            </tr>
            <tr>
                Category
            </tr>
            <tr>
                Actions
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post->id }}
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->posted }}
                    </td>
                    <td>
                        {{ $post->category->title }}
                    </td>
                    <td>
                        <a href=" {{ route('post.edit', $post->id) }} ">Edit</a>
                        <a href=" {{ route('post.show', $post) }} ">Show</a>
                        <form action="{{ route('post.destroy', $post) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection
