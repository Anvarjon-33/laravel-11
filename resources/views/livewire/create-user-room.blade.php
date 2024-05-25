<div class="card card-compact w-96 bg-base-100 shadow-xl" x-data>
    <div class="card-body">
        <h2 class="card-title">My Channels</h2>
        {{--Creating Channels--}}
        @if($my_rooms->isEmpty())
            You have no channel, create It
        @else
            <div class="flex flex-wrap gap-1">
                @foreach($my_rooms as $room)
                    <span class="badge badge-success badge-outline text-xs">{{$room}}</span>
                @endforeach
            </div>
        @endif

        <span x-transition class="text-warning">{{session()->get('status')}}</span>
        <p>Type the Channel name ...</p>

        {{session()->get('rooms')}}

        <script>
            function freq() {
                let e;
                if (e = this.$el.querySelector('.animate-freq-bounce')) {
                    e.style.display = 'none';
                    setTimeout(() => {
                        e.style.display = 'block';
                    }, 0)
                }
            }
        </script>

        <form @submit.prevent="freq" wire:submit="create_room">
            <input
                    type="text" @if(!Auth::check()) disabled @endif class="input input-bordered w-full"
                    wire:model="room"
            >
            @error('room')
            <div class="text-error animate-freq-bounce">{{$message}}</div>
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
