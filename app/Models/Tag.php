<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        "tag",
    ];

    protected $hidden = [
        "pivot"
    ];

    public function posts(): BelongsToMany {
        return $this->belongsToMany(Post::class);
    }
}
