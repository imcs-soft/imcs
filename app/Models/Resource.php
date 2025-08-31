<?php

namespace App\Models;

use Database\Factories\ResourceFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Resource extends Model
{
    use HasFactory, Notifiable;

    public function instructor(): BelongsTo {
        return $this->belongsTo(Instructor::class);
    }

    protected static function newFactory(): Factory|ResourceFactory
    {
        return ResourceFactory::new();
    }
}
