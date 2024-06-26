<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class UserRoom extends Model
{
    use HasFactory;

    /**
     * @var int|mixed
     */
    protected $table = 'user_rooms';

    public $keyType = 'string';

    public $fillable = [
        'user_id',
        'name',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_joined_rooms', 'room_id', 'user_id');
    }

    public static function booted()
    {
        parent::booted(); // TODO: Change the autogenerated stub
        static::creating(function ($userRoom) {
            $userRoom->id = Str::uuid();
        });

    }
}
