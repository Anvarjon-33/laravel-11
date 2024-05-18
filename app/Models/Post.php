<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    public $timestamps = true;

    public function images(): HasMany
    {
        return $this->hasMany(Images::class, 'post_id', 'id');
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comments::class, 'commentable');
    }
}
