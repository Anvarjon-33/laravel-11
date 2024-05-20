@props(['items', 'first_slot'])

<div>
    The First row
    <hr>
    {{$slot}}
    <hr>
    The Second row
    <hr>
    {{$compSlot('Methos is run')}}
    @if( !$first_slot->isEmpty() )
        {{$first_slot}}
    @endif
</div>
