<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserWithChatRoom extends User
{
    protected $table = 'users';

    public function ChatRooms(): HasMany
    {
        return $this->hasMany('user_message_rooms', 'user_id');
    }
}
