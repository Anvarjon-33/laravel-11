@extends('layouts.main')
@section('html-content')
    <livewire:incr-sess/>

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

<!--<script>
    let res;
    (async () => {
        res = await fetch('https://jsonplaceholder.typicode.com');

        let promise = Promise.resolve(res.text())

        promise.then(resolve => {
            console.log(resolve)
        })

    })()
</script>-->
