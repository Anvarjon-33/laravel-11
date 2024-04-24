<?php

namespace App\Broadcasting;

use App\Events\Debugger;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UpdateLogo
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
    public function join(User $user, $id): bool
    {
        return (int) $user->id === (int) $id;
    }
}
