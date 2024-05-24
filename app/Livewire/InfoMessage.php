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

    public Collection $rooms;

    public Collection $joined_rooms;

    public function render(): \Illuminate\View\View
    {
        return view('livewire.info-message');
    }

    public function mount(Request $request): void
    {
        $this->user = $request->user();
        $this->joined_rooms = $this->user->joined_rooms;
        $this->rooms = UserRoom::all()->where('user_id', '!=', $this->user->id)->diff($this->joined_rooms);
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
