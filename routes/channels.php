<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('message', \App\Broadcasting\PrivateChannel::class);

Broadcast::channel('update.logo.{id}', \App\Broadcasting\UpdateLogo::class);

Broadcast::channel('testing.channel.{id}', function ($user, $id) {
    \App\Events\Debugger::dispatch([
        '__id' => $id,
        '__user' => $user,
    ]);
    return (int) $user->id === (int) $id;
});