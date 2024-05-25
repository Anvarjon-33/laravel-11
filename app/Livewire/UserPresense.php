<?php

namespace App\Livewire;

use App\Broadcasting\UserPresenceRoom;
use App\Events\Debugger;
use App\Events\UserChatRoom;
use App\Events\UserSec;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class UserPresense extends Component
{
    #[Locked]
    public int $id;

    #[Locked]
    public string $room;

    public string $message;

    public array $here_users = [];
    public Collection $users;

    public function mount(Request $request): void
    {
        $this->id = $request->user()->id;
        $this->message = '';
        $this->room = $_ = Session::get('last_room') ?? '';
    }

    public function render(): View
    {
        return view('livewire.user-presense');
    }

    #[On('echo-presence:room.{room},UserChatRoom')]
    public function _user_char_room($users): void
    {
        $this->here_users = $users;
    }

    #[On('echo-presence:room.{room},here')]
    public function _here_users($users): void
    {
        $this->here_users = $users;
    }

    #[On('echo-presence:room.{room},joining')]
    public function _joining($user): void
    {
        $this->here_users[] = $user;
    }

    #[On('echo-presence:room.{room},leaving')]
    public function _leaving($user): void
    {
        $this->here_users = array_filter($this->here_users, function ($_user) use ($user) {
            return $_user['id'] != $user['id'];
        });
    }

    public function join_to_room(string $room): void
    {
        Session::put('last_room', $room);
        $this->js('window.location.reload()');
    }

}
