<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use App\Models\Resource;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserCourseController extends Controller
{
    public function index(Request $request): View|Application|Factory
    {
        $user = $request->user();
        $cursos = $user->courses()->with(['modules' => function($query) {
            $query->orderBy('position');
        }])->get();

        // Agregar el progreso a cada curso
        $cursosConProgreso = $cursos->map(function ($curso) use ($user) {
            $progreso = $user->getCourseProgress($curso);
            $curso->progress_percentage = $progreso['percentage'];
            $curso->completed_modules = $progreso['completed_modules'];
            $curso->total_modules = $progreso['total_modules'];
            return $curso;
        });

        return view('my-courses')->with('cursos', $cursosConProgreso);
    }

    public function show(Request $request, Course $course): View|Application|Factory
    {
        // 1. Carga explícitamente las relaciones de los módulos, sus videos y recursos
        $course->load(['modules.videos', 'resources']);

        // 2. Obtiene la colección de módulos del curso, ordenados por posición
        $modules = $course->modules()->withCount('videos')->with('videos')->orderBy('position')->get();

        // 3. Obtiene los recursos del curso
        $resources = $course->resources; // O también puedes usar: $course->resources()->get()

        // 4. Obtiene el progreso del usuario para todos los módulos de este curso.
        $user = request()->user();
        $progress = $user->moduleProgress()->whereIn('module_id', $modules->pluck('id'))->get();

        // 5. Transforma la colección de módulos para agregar los atributos dinámicos
        $modulesWithProgress = $modules->map(function ($module) use ($user, $progress) {
            $moduleProgress = $progress->firstWhere('module_id', $module->id);

            $module->is_unlocked = $user->isModuleUnlocked($module);
            $module->is_completed = $moduleProgress ? $moduleProgress->completed : false;
            $module->open = false; // Estado inicial para que Alpine pueda hacer el toggle

            // Asegúrate de que la relación 'videos' esté presente
            return $module;
        });

        // 6. Prepara los datos de progreso para la vista
        $progressData = [
            'percentage' => $modulesWithProgress->every('is_completed') ? 100 : round(($modulesWithProgress->where('is_completed')->count() / $modulesWithProgress->count()) * 100),
            'completed_modules' => $modulesWithProgress->where('is_completed')->count(),
            'total_modules' => $modulesWithProgress->count(),
        ];

        // 7. Pasa los datos a la vista
        return view('courses.status', [
            'course' => $course,
            'modules' => $modulesWithProgress,
            'progress' => $progressData,
            'resources' => $resources,
        ]);
    }

    public function completeModule(Request $request, Module $module): JsonResponse
    {
        $user = $request->user();

        // Verificar que el usuario tenga acceso al curso
        if (!$user->courses()->where('course_id', $module->course_id)->exists()) {
            return response()->json(['error' => 'No tienes acceso a este curso'], 403);
        }

        // Verificar que el módulo esté desbloqueado
        if (!$user->isModuleUnlocked($module)) {
            return response()->json(['error' => 'Este módulo aún no está disponible'], 403);
        }

        // Completar el módulo
        $user->completeModule($module);

        // Obtener progreso actualizado
        $course = Course::find($module->course_id);
        $progress = $user->getCourseProgress($course);

        return response()->json([
            'message' => 'Módulo completado exitosamente',
            'progress' => $progress,
            'next_module_unlocked' => $module->getNextModule() ? $user->isModuleUnlocked($module->getNextModule()) : false
        ]);
    }
}
