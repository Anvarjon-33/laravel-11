<?php

namespace App\Listeners;

use App\Events\Debugger;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DebuggerListener implements ShouldQueue
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
    public function handle(Debugger $event): void
    {
        echo PHP_EOL.$event->message.PHP_EOL;
    }
}