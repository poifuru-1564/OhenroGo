<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'photo_path',
        'prefecture_id',
        'temple_id',
        'topic_id', 
        'status_id'
    ];
    
    public function prefecture(): BelongsTo
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function temple(): BelongsTo
    {
        return $this->belongsTo(Temple::class);
    }

    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
