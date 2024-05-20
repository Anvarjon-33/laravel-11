@extends('layouts.main')
@section('html-content')
    <div class='p-2 m-2'>
        <livewire:create-user-room></livewire:create-user-room>
        <livewire:info-message id="{{\Illuminate\Support\Facades\Auth::id()}}"></livewire:info-message>
    </div>

@endsection
