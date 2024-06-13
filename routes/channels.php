<?php

use App\Models\User;
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
Broadcast::channel('room.{room}', \App\Broadcasting\UserPresenceRoom::class);

Broadcast::channel('person.{id}', function (User $user, $id) {
    return true;
});
