<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserSession extends Model
{
    protected $table = 'sessions';
    public $keyType = 'string';
    public function userSession(): HasMany {
        return  $this->hasMany(User::class);
    }
    public function last():HasOne{
        return $this->hasOne(User::class)->latestOfMany();
    }
}
