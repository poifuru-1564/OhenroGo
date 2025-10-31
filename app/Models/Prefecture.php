<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    //
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);

    }
}
