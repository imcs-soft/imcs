<?php

namespace App\Models;

use Database\Factories\InstructorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Instructor extends Model
{
    use HasFactory, Notifiable;

    protected static function newFactory()
    {
        return InstructorFactory::new();
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function resources(): HasMany
    {
        return $this->hasMany(Resource::class);
    }
}
