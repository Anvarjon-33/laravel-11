<?php

namespace App\Broadcasting;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserPrivateChannel
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
    public function join(User $user, $id): array|bool
    {
        return Auth::check() && $user->id == $id;
    }
}
