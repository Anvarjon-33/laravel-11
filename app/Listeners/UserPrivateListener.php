<?php

namespace App\Listeners;

use App\Events\Debugger;
use App\Events\JoinToChannel;
use App\Models\MessageRoom;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
