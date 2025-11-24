@extends('layouts.main')

@section('content')
<section class="mb-3 p-2">
    <h1 class="text-2xl">Alpine test</h1>

    <div x-data="testing">
        <p x-text="message" class="mt-4 text-lg"></p>
    </div>
</section>
<section class="mb-3 p-2">
    <p class="text-blue-700 underline hover:text-cyan-700 transition duration-100"><a href="{{ route('project') }}">Test app</a></p>
</section>
@endsection