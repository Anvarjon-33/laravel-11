<?php

namespace App\Listeners;

use App\Events\CreateUserLogo;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateUserLogoListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CreateUserLogo $event): void
    {
        $user = User::find($event->id);
        $user->logo = $event->logo;
        $user->save();
        echo 'Listener is End';
    }
}
