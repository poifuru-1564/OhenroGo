<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
