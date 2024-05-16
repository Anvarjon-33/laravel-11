<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserInRoom extends Model
{
    use HasFactory;

    protected $table = 'user_in_rooms';

//    public function users(): HasMany
//    {
//        return $this->hasMany(User::class);
//    }
//
//    public function rooms(): HasMany
//    {
//        return $this->hasMany(MessageRoom::class, 'room_id');
//    }
}
