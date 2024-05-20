<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class UserRoom extends Model
{
    use HasFactory;

    /**
     * @var int|mixed
     */
    protected $table = 'user_rooms';
    protected $primaryKey = 'string';
    public $fillable = [
        'user_id',
        'name'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public static function booted()
    {
        parent::booted(); // TODO: Change the autogenerated stub
        static::creating(function ($userRoom) {
            $userRoom->id = Str::uuid();
        });

    }
}
