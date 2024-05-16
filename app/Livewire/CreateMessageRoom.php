<?php

namespace App\Livewire;

use App\Events\Debugger;
use App\Events\JoinToChannel;
use App\Models\MessageRoom;
use App\Models\UserWithChatRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Component;

class CreateMessageRoom extends Component
{
    public string $room = '';
    public mixed $user_group = [];

    public function mount(Request $request)
    {
        $this->user_group = MessageRoom::all()->filter(function ($el) use ($request) {
            return $el->user_id !== $request->user()->id;
        })->map(fn($el) => $el->name);
    }

    public function render()
    {
        return view('livewire.create-message-room');
    }

    public function create_chat_room()
    {
        if (Auth::check()) {
            $id = Auth::id();
            $messageRoom = new MessageRoom();
            $messageRoom->user_id = $id;
            $messageRoom->name = $this->room;
            $messageRoom->save();
            $this->room = '';
        }
    }

    #[Locked]
    public function join_to_channel($channel, Request $request): void
    {
        JoinToChannel::dispatch($channel, $request->user()->id);
    }
}
