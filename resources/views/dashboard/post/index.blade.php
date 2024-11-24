@extends('dashboard.master')

@section('title')
    Dashboard - Index
@endsection
@section('content')
    <h1>Index</h1>
    <a class="btn" href="{{ route('post.create') }}">Create</a>
    <table class="table">
        <thead>
            <th>
                ID
            </th>
            <th>
                Title
            </th>
            <th>
                Posted
            </th>
            <th>
                Category
            </th>
            <th>
                Actions
            </th>
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
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection
