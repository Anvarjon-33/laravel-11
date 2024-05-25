<div class="flex justify-between gap-7">
    @foreach($here_users as $users)
        <div class="bg-gray-50 rounded-full p-3">
            {{$users['name']}}
            @if(isset($users['owner']) && $users['owner'])
                <div class="text-xs text-success p-0 m-0">owner</div>
            @endif
        </div>
    @endforeach

    <div class="bg-red-50 flex-1 p-3 rounded-badge">
        <button class="btn btn-success relative" wire:click="join_to_room('vivo')">Click for
            join
        </button>
    </div>
</div>
