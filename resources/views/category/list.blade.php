@extends('layouts.admin')

@section('mainContent')
    <h1>Categories</h1>
    <a href="{{ url('/categories/create') }}">Add new category</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td><a href='{{ url("categories/".$category->id."/edit" ) }}'>edit</a></td>
                <td><a >delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection