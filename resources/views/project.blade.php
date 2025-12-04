@extends('layouts.main')

@section('content')
<section x-data="projectData">
    <!-- modal wrapper (overlay) -->
    <div 
        x-show="modalShow"
        class="fixed inset-0 flex items-center justify-center bg-black/40"
    >
        <div
            x-on:click.outside="modalShow = false"
            x-on:keydown.escape.window="modalShow = false"
            class="bg-emerald-200 p-4 rounded flex justify-between items-center w-64 shadow-xl"
        >
            <p>modal text</p>
            <button x-on:click="modalShow = false" class="border border-2 rounded p-1">x</button>
        </div>
    </div>

    <!-- content -->
    <div class="p-1">
        <button x-on:click="modalShow = !modalShow" class="bg-blue-500 text-white px-4 py-2 rounded mt-auto">
            Toggle Modal
        </button>
    </div>
</section>
@endsection
