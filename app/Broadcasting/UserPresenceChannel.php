<?php

namespace App\Broadcasting;

use App\Models\User;

class UserPresenceChannel
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
    public function join(User $user, string $room_id): array|bool
    {
        if ($user->canJoinRoom($room_id)) {
            return [
                'id' => $user->id, 'name' => $user->name

            ];
        }
        return false;
    }
}
