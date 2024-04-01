<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class MessageRoom extends Model
{
    use BroadcastsEvents, Notifiable;

    public $timestamps = true;

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = 'user_message_rooms';
    protected $fillable = [
        'user_id',
        'name'
    ];

    public function user_name(): HasOne
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function user_joined(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_in_room', 'room_id', 'user_id');
    }
}