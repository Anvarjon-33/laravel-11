<?php

namespace App\Broadcasting;

use App\Events\Debugger;
use App\Models\User;

class UserRoomChannel
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
    public function join(User $user, $room): array|bool
    {
        return [
            $user->id,
            ...['other_users']
        ];
    }
}
