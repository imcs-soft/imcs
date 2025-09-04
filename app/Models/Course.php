<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Course extends Model
{
    use HasFactory, Notifiable;

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class);
    }

    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function resources(): BelongsToMany
    {
        return $this->belongsToMany(Resource::class);
    }

    public function getFirstModule(): ?Module
    {
        return $this->modules()->orderBy('position')->first();
    }

    public function getNextUnlockedModule(User $user): ?Module
    {
        $modules = $this->modules()->orderBy('position')->get();

        foreach ($modules as $module) {
            if ($user->isModuleUnlocked($module) &&
                !$user->moduleProgress()->where('module_id', $module->id)->where('completed', true)->exists()) {
                return $module;
            }
        }

        return null;
    }
}
