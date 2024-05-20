<div class="card card-compact w-96 bg-base-100 shadow-xl" x-data>
    <div class="card-body">
        <h2 class="card-title">Create A Channel</h2>
        <span x-transition class="text-warning">{{session()->get('status')}}</span>
        <p>Type the Channel name ...</p>

        {{session()->get('rooms')}}

        <form @submit.prevent wire:submit="create_room">
            <input
                    type="text" @if(!Auth::check()) disabled @endif class="input input-bordered w-full"
                    wire:model="room"
            >
            @error('room')
            <div class="text-error">{{$message}}</div>
            @enderror
            <div class="card-actions justify-end mt-5">
                <button
                        type="submit"
                        class="btn btn-primary btn-sm"
                        @if(!Auth::check()) disabled @endif
                >
                    @auth
                        create
                    @endauth
                    @guest
                        you must authorize
                    @endguest
                </button>
            </div>
        </form>
    </div>
</div>
