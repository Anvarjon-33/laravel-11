@extends('layouts.main')
@section('html-content')
    <x-list-items :items="$posts">
        <x-slot:first_slot class="text-sky-300">
            {{$component->compSlot('SLots Method')}}
            The First Slots <br>
            {{$component->item}}
        </x-slot:first_slot>
    </x-list-items>
@endsection
