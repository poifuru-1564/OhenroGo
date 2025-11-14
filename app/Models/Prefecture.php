<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prefecture extends Model
{
    //
    public function post(): HasMany
    {
        return $this->hasMany(Post::class);

    }

    public function temple(): HasMany
    {
        return $this->hasMany(Temple::class);
    }
}
