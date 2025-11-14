<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Temple extends Model
{
    use HasFactory;
    //
    public function post(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function prefecture(): BelongsTo
    {
        return $this->belongsTo(Prefecture::class);
    }
    
}
