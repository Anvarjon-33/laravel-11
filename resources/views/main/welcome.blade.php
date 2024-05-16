@extends('layouts.main')
@section('html-content')
    <div>
        @livewire('send-message-broadcasting')
    </div>
    <div class="float-right">
        @livewire('create-message-room')
    </div>
@endsection
