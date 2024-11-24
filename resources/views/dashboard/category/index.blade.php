@extends('dashboard.master')

@section('title')
    Dashboard - Index
@endsection
@section('content')
    <h1>Index</h1>
    <a class="btn" href=" {{ route('category.create') }} ">Create</a>
    <table class="table">
        <thead>
            <th>
                ID
            </th>
            <th>
                Title
            </th>
            <th>
                Slug
            </th>
            <th>
                Actions
            </th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $category->id }}
                    </td>
                    <td>
                        {{ $category->title }}
                    </td>
                    <td>
                        {{ $category->slug }}
                    </td>
                    <td>
                        <a href=" {{ route('category.edit', $category) }} ">Edit</a>
                        <a href=" {{ route('category.show', $category) }} ">Show</a>
                        <form action="{{ route('category.destroy', $category) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection
