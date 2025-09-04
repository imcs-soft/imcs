<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Module extends Model
{
    use HasFactory, Notifiable;

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }

    public function userProgress(): HasMany
    {
        return $this->hasMany(UserModuleProgress::class);
    }

    public function isCompletedByUser(User $user): bool
    {
        return $this->userProgress()
            ->where('user_id', $user->id)
            ->where('completed', true)
            ->exists();
    }

    public function getNextModule(): ?Module
    {
        return Module::where('course_id', $this->course_id)
            ->where('position', '>', $this->position)
            ->orderBy('position')
            ->first();
    }

    public function getPreviousModule(): ?Module
    {
        return Module::where('course_id', $this->course_id)
            ->where('position', '<', $this->position)
            ->orderBy('position', 'desc')
            ->first();
    }
}
