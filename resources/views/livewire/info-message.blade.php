<div>
    <div class="bg-red-100 p-3 m-3 text-3xl rounded-box">
        User can join Rooms:
        <hr class="bg-success-50">

        @if(!is_null($joined_rooms) && $joined_rooms->count()>0)
            You joined:
            <div class="bg-success placeholder-accent/20 m-2">
                @foreach($joined_rooms as $room)
                    <span class="badge badge-warning">{{$room->name}}</span>
                @endforeach
            </div>
        @endif

        @if(!is_null($rooms) && $rooms->count()>0)
            @foreach($rooms as $room)
                <button
                        wire:click="join_to_room('{{$room->name}}')" class="btn btn-success btn-xs"
                >{{$room->name}}</button>
            @endforeach
        @else
            <div class="text-red-500">no Available Rooms</div>
        @endif
    </div>
</div>
