<?php

use Illuminate\Support\Facades\Broadcast;

/**
 * Example of Broadcasting Channels
 */
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

/**
 * User Private Channel (Only for spesific Users)
 */
Broadcast::channel('user-{id}', \App\Broadcasting\UserPrivateChannel::class);

/**
 * Presense channels for User groups
 */
Broadcast::channel('room-{room}', \App\Broadcasting\UserPrivateChannel::class);
