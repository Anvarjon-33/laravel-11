<?php

namespace App\Broadcasting;

use App\Models\User;

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
        if ($user->rooms->where('name', $room)->count() > 0) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'owner' => true,
            ];
        }
        if ($user->CanJoinRoom($room)) {
            return [
                'id' => $user->id,
                'name' => $user->name,
            ];
        }
    }
}
