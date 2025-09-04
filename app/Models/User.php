<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class);
    }

    public function moduleProgress(): HasMany
    {
        return $this->hasMany(UserModuleProgress::class);
    }

    public function getCourseProgress(Course $course): array
    {
        $modules = $course->modules()->orderBy('position')->get();
        $totalModules = $modules->count();

        if ($totalModules === 0) {
            return ['percentage' => 0, 'completed_modules' => 0, 'total_modules' => 0];
        }

        $completedModules = $this->moduleProgress()
            ->whereIn('module_id', $modules->pluck('id'))
            ->where('completed', true)
            ->count();

        $percentage = round(($completedModules / $totalModules) * 100, 2);

        return [
            'percentage' => $percentage,
            'completed_modules' => $completedModules,
            'total_modules' => $totalModules
        ];
    }

    public function isModuleUnlocked(Module $module): bool
    {
        // Carga la relación 'course' y 'modules' para evitar N+1 queries.
        $module->loadMissing(['course.modules']);

        // Accede al modelo Course a través de la relación.
        $course = $module->course;

        // Si el módulo no tiene un curso asociado, no puede ser desbloqueado.
        if (!$course) {
            return false;
        }

        // Ordena todos los módulos del curso por su posición.
        $courseModules = $course->modules->sortBy('position');

        // Si este es el primer módulo del curso, siempre está desbloqueado.
        if ($courseModules->first()->id === $module->id) {
            return true;
        }

        // Encuentra el índice del módulo actual en la colección.
        $currentModuleIndex = $courseModules->search(function ($m) use ($module) {
            return $m->id === $module->id;
        });

        // Si el módulo no se encuentra o es el primero (ya cubierto), retorna true para seguridad.
        if ($currentModuleIndex === false || $currentModuleIndex === 0) {
            return true;
        }

        // Obtiene el módulo anterior usando el índice.
        $previousModule = $courseModules->get($currentModuleIndex - 1);

        // Si no hay módulo anterior (que no debería pasar si no es el primero), no está desbloqueado.
        if (!$previousModule) {
            return false;
        }

        // Busca si el usuario ha completado el módulo anterior.
        return $this->moduleProgress()
            ->where('module_id', $previousModule->id)
            ->where('completed', true)
            ->exists();
    }

    public function completeModule(Module $module): void
    {
        $this->moduleProgress()->updateOrCreate(
            ['module_id' => $module->id],
            [
                'completed' => true,
                'completed_at' => now()
            ]
        );
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
