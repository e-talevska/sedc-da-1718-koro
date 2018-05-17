@extends('layouts.admin')

@section('mainContent')
    <h1>Create category</h1>
    <form method="POST" action="{{ url('/categories') }}">
        @include('category._form', [
            'name' => '',
            'slug' => '',
        ])
    </form>
@endsection
