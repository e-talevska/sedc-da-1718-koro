@extends('layouts.admin')

@section('mainContent')
    <h1>Edit category</h1>
    <form method="POST" action="{{ url('/categories') }}">
        @include('category._form', [
            'name' => $category->name,
            'slug' => $category->slug,
        ])
    </form>
@endsection
