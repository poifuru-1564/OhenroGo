<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    //
    public function prefecture(): HasOne
    {
        return $this->hasOne(Prefecture::class);
    }

    public function temple(): HasOne
    {
        return $this->hasOne(Temple::class);
    }

    public function topic(): HasOne
    {
        return $this->hasOne(Topic::class);
    }

    public function status(): HasOne
    {
        return $this->hasOne(Status::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
