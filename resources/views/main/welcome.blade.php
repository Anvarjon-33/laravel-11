@extends('layouts.main')
@section('html-content')
    <h1 class="text-9xl">
        {{$ip}}
    </h1>
    @livewire('send-message-broadcasting')
@endsection