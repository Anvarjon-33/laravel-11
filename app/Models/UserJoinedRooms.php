<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJoinedRooms extends Model
{
    use HasFactory;

    protected $table = 'user_joined_rooms';
    public $fillable = [
        'user_id', 'room_id'
    ];
}
