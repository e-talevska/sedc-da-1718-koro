@extends('layouts.admin')

@section('mainContent')
    <h1>Create category</h1>
    <form method="POST" action="{{ url('/categories') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name='name' class="form-control" id="name" placeholder="Enter name">
          <small class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="slug">Slug</label>
          <input type="text" name='slug' class="form-control" id="slug" placeholder="Enter slug">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
     </form>
@endsection
