@extends('layouts.main')
@section('html-content')

    <div class="p-3 m-3 bg-red-100">
        <div>
    {{
    __('auth.failed')
}}
            <hr>
            {{
__('first')
}}
            <hr>
            {{
    __('auth.greeting', ['name' => 'John Doe'])
}}
            <hr>
            <div>
                {{
    trans_choice('auth.apple', 6)
}}
            </div>

        </div>
    </div>

    <div class='flex gap-3'>
        <livewire:create-user-room></livewire:create-user-room>
        <livewire:info-message></livewire:info-message>
    </div>

    <div class="p-5 m-4 bg-gray-200 rounded-2xl">
        <livewire:user-presense></livewire:user-presense>
    </div>

    <div class="p-4 m-4 bg-red-100 text-4xl">
        {{session()->get('test')}}
    </div>

@endsection

<script>
    let res;
    (async () => {
        res = await fetch('https://jsonplaceholder.typicode.com');

        let promise = Promise.resolve(res.text())

        promise.then(resolve => {
            console.log(resolve)
        })

    })()
</script>

<template id="tmpl">
    <style> p { font-weight: bold; } </style>
    <p id="message"></p>
</template>

<div id="elem">Click me</div>

<script>
    elem.onclick = function() {
        elem.attachShadow({mode: 'open'});

        elem.shadowRoot.append(tmpl.content.cloneNode(true)); // (*)

        elem.shadowRoot.getElementById('message').innerHTML = "Hello from the shadows!";
    };
</script>

<div id="elem">
    #shadow-root
    <style> p { font-weight: bold; } </style>
    <p id="message">Example message</p>
</div>
