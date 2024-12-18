@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Tasks</h1>
    <div class="mb-3">
        <a href="{{ route('tasks.create') }}" class="btn btn-success">Add Task</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Long Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->long_description }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this task?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</div>
@endsection