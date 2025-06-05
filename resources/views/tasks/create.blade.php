@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="title" class="block font-medium">Title</label>
            <input type="text" name="title" id="title" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label for="description" class="block font-medium">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full border p-2 rounded"></textarea>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-green-500 text-black px-4 py-2 rounded">Save</button>
            <a href="{{ route('tasks.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded">Back to All Tasks</a>
        </div>
    </form>
@endsection
