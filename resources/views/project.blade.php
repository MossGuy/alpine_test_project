@extends('layouts.main')

@section('content')
<section x-data="projectData">
    <div class="p-2 bg-stone-200 lg:w-1/2 mx-auto text-center">
        <h1 class="text-2xl font-semibold">To Do list</h1>

        <form x-on:submit.prevent="submitTodo()" class="mt-4 flex justify-center gap-2" method="POST">
            <input type="text" x-model="todoText" class="border border-2 rounded p-1">
            <input type="submit" value="Add" 
                class="border rounded p-1 bg-cyan-500 text-white hover:bg-cyan-700 transition duration-100">
        </form>

        <!-- Error messages -->
        <template x-if="errors.length > 0">
            <ul class="mt-2 bg-red-200 text-red-900 p-2 rounded">
                <template x-for="error in errors">
                    <li x-text="error"></li>
                </template>
            </ul>
        </template>
    </div>

    <div>
        <ul class="mt-4 lg:w-1/2 mx-auto">
            <template x-for="todo in todos" :key="todo.id">
                <li class="flex justify-between items-center border-b p-2">
                    <span x-text="todo.text"></span>

                    <!-- Delete button -->
                    <button class="text-red-600 hover:text-red-800"
                            @click="removeTodo(todo.id)">
                        Delete
                    </button>
                </li>
            </template>
        </ul>
    </div>
</section>
@endsection
