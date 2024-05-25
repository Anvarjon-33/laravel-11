<div class="flex justify-between gap-7">
    <div>
        @foreach($here_users as $users)
            {{$users['name']}}
            @if(isset($users['owner']))
                <span class="text-xs text-success">owner</span>
            @endif
            <hr>
        @endforeach
    </div>

    <div class="bg-red-50 flex-1 p-3 rounded-badge">
        <button class="btn btn-success" wire:click="join_to_room('vivo')">Click for join
        </button>
    </div>

</div>
