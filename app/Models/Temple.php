<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temple extends Model
{
    //
    public function post(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
