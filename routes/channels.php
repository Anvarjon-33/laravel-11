<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('user-{id}', \App\Broadcasting\UserPrivateChannel::class);
Broadcast::channel('my_room.{room}', \App\Broadcasting\UserRoomChannel::class);