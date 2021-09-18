@extends('layouts.app')

@section('content')
<h1>Edit Todo</h1>
<form action="{{ route('todo.update', $todo) }}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ $todo->title }}" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" name="content" id="content" value="{{ $todo->content }}" placeholder="Enter content">
    </div>
    <div class="form-group">
        <label for="due">Due</label>
        <input type="text" class="form-control" name="due" id="due" value="{{ $todo->due }}" placeholder="Enter due">
    </div>
    @method('put')
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection