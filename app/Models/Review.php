<?php

namespace App\Models;

use Database\Factories\ReviewFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Review extends Model
{
    use HasFactory, Notifiable;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function newFactory(): Factory|ReviewFactory
    {
        return ReviewFactory::new();
    }
}
