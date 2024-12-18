@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Task Details</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $task->title }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $task->description }}</p>
            <p><strong>Long Description:</strong> {{ $task->long_description }}</p>
        </div>
        <div class="card-footer d-flex gap-2">
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection