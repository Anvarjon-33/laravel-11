<div class="flex justify-between gap-7">
    <div>
        @if(!is_null($users))
            @foreach($users as $user)
                <div class="max-w-xs w-full bg-success rounded-xl phone-2 m-4 p-5">
                    <h1 class="text-white">User: <span class="text-green-200 mb-4">{{$user->name}}</span></h1>
                    @if($user->rooms->isEmpty())
                        <span class="text-warning">no Rooms of User </span>
                    @else
                        @foreach($user->rooms as $rooms)
                            <button
                                    class="btn btn-warning btn-xs" wire:click="join_to_room('{{$rooms->name}}')"
                            >{{$rooms->name}}</button>
                        @endforeach
                    @endif
                </div>
            @endforeach
        @endif
    </div>

    <div class="bg-red-50 flex-1 p-3 rounded-badge">
        @if(!is_null($here_users))
            @foreach($here_users as $user)
                @foreach($user as $_user)
                    {{$_user['name']}}
                @endforeach
            @endforeach
        @endif
    </div>

</div>
