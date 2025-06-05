@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Task</h1>

    <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="title" class="block font-medium">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label for="description" class="block font-medium">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full border p-2 rounded">{{ $task->description }}</textarea>
        </div>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection

<div class="flex gap-4">
    <a href="{{ route('tasks.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded">Back to All Tasks</a>
</div>
