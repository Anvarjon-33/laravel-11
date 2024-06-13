<?php

namespace App\Listeners;

use App\Events\ChangeSession;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ChangeSessionListener
{
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
    public function handle(ChangeSession $event): void
    {
        session()->put('test', $event->text);
    }
}
