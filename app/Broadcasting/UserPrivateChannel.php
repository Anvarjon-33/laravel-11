<?php

namespace App\Broadcasting;

use App\Events\Debugger;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserPrivateChannel
{
    /**
     * Create a new channel instance.
     */
    public function __construct()
    {
        Debugger::dispatch([
            '$user, $id'
        ]);
    }

    /**
     * Authenticate the user's access to the channel.
     */
    public function join(User $user, int $id): array|bool
    {
        return $user->id == $id;
    }
}
