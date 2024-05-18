<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Images extends Model
{
    use HasFactory;

    protected $table = 'images';
    public $timestamps = true;

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comments::class, 'commentable');
    }
}
