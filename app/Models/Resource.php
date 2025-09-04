<?php

namespace App\Models;

use Database\Factories\ResourceFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Resource extends Model
{
    use HasFactory, Notifiable;

    public function instructor(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    protected static function newFactory(): Factory|ResourceFactory
    {
        return ResourceFactory::new();
    }
}
