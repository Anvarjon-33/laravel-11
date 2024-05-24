<?php

namespace App\Broadcasting;

use App\Events\Debugger;
use App\Models\User;
use App\Models\UserRoom;

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
    public function join(User $user, $room_name): array|bool
    {
        return UserRoom::where('name', $room_name)->first()->members->map(fn($el) => [
            'name' => $el->name
        ]);
    }
}
