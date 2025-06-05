@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">All Tasks</h1>
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-black px-4 py-2 rounded hover:bg-blue-600">+ New Task</a>
    </div>

    @if ($tasks->isEmpty())
        <p class="text-gray-600">No tasks found. Click “+ New Task” to create one.</p>
    @else
        <ul class="space-y-4">
            @foreach ($tasks as $task)
                <li class="border p-4 rounded shadow">
                    <h2 class="text-lg font-semibold">{{ $task->title }}</h2>
                    <p>{{ $task->description }}</p>
                    <div class="mt-2 space-x-2">
                        <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600 hover:underline">Edit</a>

                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
