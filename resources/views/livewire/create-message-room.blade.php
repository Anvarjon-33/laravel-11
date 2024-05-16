<div x-data>
    <form class="bg-amber-100 p-3 rounded-3xl" @submit.prevent>
        <input class="input input-bordered me-2" wire:model="room">
        <button class="btn btn-success btn-sm" wire:click="create_chat_room">Create Chat Romm</button>
    </form>

    <hr class="p-1 bg-red-100 m-3">
    <h1>
        Join the Groups
    </h1>
    @if(count($user_group)>0)
        @foreach($user_group as $group)
            <button class="btn btn-primary btn-sm" wire:click="join_to_channel('{{$group}}')">{{$group}}</button>
        @endforeach
    @endif
</div>
