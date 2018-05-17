{{ csrf_field() }}
<div class="form-group">
  <label for="name">Name</label>
  <input type="text" name='name' value='{{ $name }}' class="form-control" id="name" placeholder="Enter name">
  @if ($errors->has('name'))
    @foreach($errors->get('name') as $error)
        <small class="form-text text-muted">{{ $error }}</small>
    @endforeach
  @endif
</div>
<div class="form-group">
  <label for="slug">Slug</label>
  <input type="text" name='slug' value="{{ $slug }}" class="form-control" id="slug" placeholder="Enter slug">
  @if ($errors->has('slug'))
    @foreach($errors->get('slug') as $error)
        <small class="form-text text-muted">{{ $error }}</small>
    @endforeach
  @endif
</div>
<button type="submit" class="btn btn-primary">Submit</button>