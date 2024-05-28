<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\UserRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateUserRoom extends Component
{
    #[Locked]
    public User|null $user;

    #[Validate('required|between:3,10|unique:user_rooms,name')]
    public string $room = '';

    public Collection|null $my_rooms = null;

    public function mount(Request $request): void
    {
        if (Auth::check()) {
            $this->user = $request->user();
            if (Auth::user()->rooms->count() > 0) {
                $this->my_rooms = $this->user->rooms->map(fn($room) => $room->only(['name']))->flatten();
            }
        }
    }

    public function render(): View
    {
        return view('livewire.create-user-room');
    }

    public function create_room(): void
    {
        $this->validate();
        $this->setUserRoom();
    }

    public function setUserRoom(): void
    {
        UserRoom::create([
            'user_id' => $this->user->id,
            'name' => $this->room,
        ]);
        session()->flash('status', 'Room created successfully!');
        $this->my_rooms->push($this->room);
        $this->reset(['room']);
    }
}
