@extends('layouts.app')
@section('title', 'Todo List')

@section('content')
<div class="flex items-center justify-center bg-white shadow-lg rounded-lg p-6">
    <div class=" px-3 py-2 h-100 w-full">
        <div class="mb-4">
            <h1 class="text-md">Add a task</h1>
            <form method="POST" action="/todos">
                @csrf
                <input type="text" name="title" class="border px-2 py-1 rounded mr-2" placeholder="Task title">
                <button class="bg-blue-500 text-white px-3 py-1.5 rounded cursor-pointer">Save</button>
            </form>
        </div>


        <div class="border-t pt-4">
            <div>
                <h2 class="text-lg mb-4">Tasks List</h2>
                <ul>
                    @if ($todos->isEmpty())
                    <li class="text-gray-500">No tasks available.</li>
                    @endif
                    @foreach ($todos as $todo)
                    <li class="mb-2 flex items-center bg-neutral-200 p-2 rounded">
                        <form method="POST" action="/todos/{{ $todo->id }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="completed" value="1">
                            <button type="submit"
                                class="cursor-pointer flex items-center {{ $todo->completed ? 'text-green-500' : 'text-gray-400' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                </svg>
                            </button>
                        </form>
                        <span class="ml-2 {{ $todo->completed ? ' text-gray-500' : '' }}">
                            {{ $todo->title }}
                        </span>
                        <form method="POST" action="/todos/{{ $todo->id }}" class="ml-4">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 p-1 text-white rounded cursor-pointer items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-5  text-white rounded cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg></button>

                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
    </body>
</div>@endsection