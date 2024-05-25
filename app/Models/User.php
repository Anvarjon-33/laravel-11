<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;

/**
 * @property Collection $joined_rooms
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, BroadcastsEvents;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function joined_rooms(): BelongsToMany
    {
        return $this->belongsToMany(UserRoom::class, 'user_joined_rooms', 'user_id', 'room_id');
    }


    public function rooms(): HasMany
    {
        return $this->hasMany(UserRoom::class);
    }

    public function CanJoinRoom(string $room_name): bool
    {
        return $this->joined_rooms->map(fn($el) => $el->name)->contains($room_name);
    }
}
