<?php

use App\Models\User;
use App\Models\UserRoom;
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
Broadcast::channel('room.{room_name}', function ($user, $room_name) {
    return UserRoom::where('name', $room_name)->first()->members->map(fn($el) => [
        'name' => $el->name, 'id' => $el->id
    ]);
});

Broadcast::channel('person.{id}', function (User $user, $id) {
    return true;
});
