<?php

namespace App\Livewire;

use App\Events\Debugger;
use App\Models\User;
use App\Models\UserJoinedRooms;
use App\Models\UserRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class InfoMessage extends Component
{
    #[Locked]
    public User $user;

    public Collection|null $rooms = null;

    public Collection|null $joined_rooms = null;

    public function render(): \Illuminate\View\View
    {
        return view('livewire.info-message');
    }

    public function mount(Request $request): void
    {
        if (Auth::user()) {
            $this->user = $request->user();
            $this->joined_rooms = $this->user->joined_rooms;
            $this->rooms = UserRoom::all()->where('user_id', '!=', $this->user->id)->diff($this->joined_rooms);
            $this->dispatch('rooms_for_join', $this->rooms);
        }
    }

    public function join_to_room(string $room): void
    {
        $room_id = UserRoom::all()->where('name', $room)->first()->id;
        UserJoinedRooms::create([
            'user_id' => $this->user->id,
            'room_id' => $room_id,
        ]);
    }
}
