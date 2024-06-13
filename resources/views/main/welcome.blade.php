@extends('layouts.main')
@section('html-content')
    <div class='flex gap-3'>
        <livewire:create-user-room></livewire:create-user-room>
        <livewire:info-message></livewire:info-message>
    </div>

    <div class="p-5 m-4 bg-gray-200 rounded-2xl">
        <livewire:user-presense></livewire:user-presense>
    </div>
@endsection

<script>
    localStorage.setItem('any_key', 'Any_Value');
    console.log(
        localStorage.getItem('any_key')
    )
</script>
