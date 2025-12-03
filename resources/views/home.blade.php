@extends('layouts.main')

@section('content')
<section class="mb-3 p-2">
    <h1 class="text-2xl">Alpine test</h1>

    <div x-data="testing">
        <p x-text="message" class="mt-4 text-lg"></p>
    </div>
</section>
@endsection