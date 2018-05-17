@extends('layouts.admin')

@section('mainContent')
    <h1>Categories</h1>
    <ul>
        @foreach($categories as $category)
            <li>
                <p>{{ $category->name }}</p>
                <p>{{ $category->slug }}</p>
            </li>
            @endforeach
    </ul>
@endsection