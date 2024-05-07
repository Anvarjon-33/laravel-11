<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Queue\SerializesModels;

class ForPrivate implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels, Notifiable;

    /**
     * Create a new event instance.
     */
    public function __construct(public string $message, public string $channel)
    {
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array

    {
        return [
            new PrivateChannel($this->channel)
        ];
    }

    public function broadcastAs(): string
    {
        return 'pr';
    }
    public function broadcastWith(): array
    {
        return [
            'message' => $this->message
        ];
    }
}
