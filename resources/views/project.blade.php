@extends('layouts.main')

@section('content')
<section x-data="projectData" class="mb-3 p-2">
    <div class="mb-3">
        <h1>Hacker news API</h1>
        <input x-model.debounce.200="query" type="text" class="border border-2 rounded p-1" placeholder="Searching for...">
        <p x-show="query.length" class="mt-2">
            Your search for
            <span x-text="query"></span>
            returned
            <span x-text="results.length"></span>
            results
        </p>
    </div>
    <div>
        <template x-for="result in results" :key="result.objectID">
            <div class="mb-3 border-b pb-2">
                <h4 x-text="result.title"></h4>
                <a :href="result.url" x-text="result.url" class="text-blue-500 hover:text-purple-500 cursor:pointer"></a>
            </div>
        </template>
    </div>
</section>
@endsection
