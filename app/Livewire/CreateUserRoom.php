<?php

namespace App\Livewire;

use App\Models\UserRoom;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateUserRoom extends Component
{
    #[Locked]
    public ?int $userId = null;

    #[Validate('required|between:3,10|unique:user_rooms,name')]
    public string $room = '';

    public function mount(): void
    {
        $this->userId = Auth::id();
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
            'user_id' => $this->userId,
            'name' => $this->room,
        ]);
        CreateUserRoom::dispatch($this->userId);
        session()->flash('status', 'Room created successfully!');
        $this->reset(['room']);
    }
}
