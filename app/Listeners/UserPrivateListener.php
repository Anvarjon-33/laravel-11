<?php

namespace App\Listeners;

use App\Events\Debugger;
use App\Events\JoinToChannel;

class UserPrivateListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(JoinToChannel $event): void
    {
        Debugger::dispatch($event);
    }
}
