@extends('layouts.app')

@section('content')
<a href="/" class="btn btn-secondary mt-2">Go back</a>
<h1>{{ $todo->title }}</h1>
<div class="badge badge-danger">
    {{ $todo->due }}
</div>
<hr>
<p>{{ $todo->content }}</p>
<div class="d-flex justify-content-between align-items-center mt-2">
    <a href="{{ route('todo.edit', $todo) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('todo.delete', $todo) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" clas="btn btn-danger">Delete</button>
    </form>
</div>
@endsection