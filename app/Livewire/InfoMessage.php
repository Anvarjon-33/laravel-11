<?php

namespace App\Livewire;

use App\Events\Debugger;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class InfoMessage extends Component
{
    #[Locked]
    public int $id;

    public string $info = 'waiting for Channel ...';
    public ?array $rooms = null;
    public string $pr = '--------------------------------------';

    public function mount($id): void
    {
        $this->id = $id;
        if (Auth::check()) {
            $this->rooms = User::find($this->id)->rooms;
            session()->flash('user_rooms', $this->rooms);
        }
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.info-message');
    }

    #[On("echo:pub,Debugger")]
    public function notifier($payload): void
    {
        $this->info = $payload['message'];
        $this->dispatch('notifier');
    }

    public function new_room($payload): void
    {
        dd($payload);
    }

    #[On('echo-private:person.{id},UserSec')]
    public function private_data($payload): void
    {
        $this->pr = $payload['message'];
    }
}
