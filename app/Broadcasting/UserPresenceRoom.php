<?php

namespace App\Broadcasting;

use App\Events\Debugger;
use App\Models\User;
use App\Models\UserRoom;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class UserPresenceRoom
{
    /**
     * Create a new channel instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     */
    public function join(User $user, $room)
    {
        if ($user->CanJoinRoom($room)) {
            return [
                'id' => $user->id,
                'name' => $user->name
            ];
        }
    }
}
