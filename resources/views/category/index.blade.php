@extends('layouts.admin')

@section('mainContent')
    <h1>Categories</h1>
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
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection