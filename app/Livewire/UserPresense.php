<?php

namespace App\Livewire;

use App\Broadcasting\UserPresenceRoom;
use App\Events\UserChatRoom;
use Illuminate\Http\Request;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class UserPresense extends Component
{
    #[Locked]
    public int $id;
    #[Locked]
    public string $room_name;

    public string $message;

    public function mount(Request $request): void
    {
        $this->id = $request->user()->id;
        $this->message = '';
        $this->room_name = 'vivo';
        UserChatRoom::dispatch($this->room_name);
    }

    public function render()
    {
        return view('livewire.user-presense');
    }

    #[On('echo-presence:room.{room_name},UserChatRoom')]
    public function join_room($message)
    {
        $this->message = 'Joined to the Room';
    }

    #[On('echo-presence:room.{room_name},here')]
    public function here_users($users)
    {
        dd($users);
    }

//    #[On('echo-private:person.{id},UserSec')]
//    public function User_PR($message)
//    {
//        $this->message = $message['message'];
//    }

//    #[On('echo:pub,Debugger')]
//    public function debug($message): void
//    {
//        dd($message);
//    }
}
