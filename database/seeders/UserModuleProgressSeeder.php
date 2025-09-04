<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use App\Models\UserModuleProgress;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserModuleProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Obtener el usuario con ID 1
        $user = User::find(1);

        if (!$user) {
            $this->command->info('Usuario con ID 1 no encontrado. Abortando seeder.');
            return;
        }

        // 2. Obtener todos los cursos a los que el usuario está inscrito
        $enrolledCourses = $user->courses()->with('modules')->get();

        if ($enrolledCourses->isEmpty()) {
            $this->command->info('El usuario no está inscrito en ningún curso. Abortando seeder.');
            return;
        }

        $this->command->info("Creando progreso para el usuario {$user->id}...");

        // 3. Recorrer cada curso inscrito
        foreach ($enrolledCourses as $course) {
            $this->command->info("  -> Procesando curso: {$course->title} ({$course->id})");

            // 4. Recorrer cada módulo del curso
            foreach ($course->modules as $module) {
                // 5. Crear el registro de progreso, o actualizarlo si ya existe
                UserModuleProgress::updateOrCreate(
                    [
                        'user_id' => $user->id,
                        'module_id' => $module->id,
                    ],
                    [
                        'completed' => false, // Asigna 'true' o 'false' aleatoriamente
                        'completed_at' => null, // Opcional: puedes dejarlo nulo o agregar una fecha
                    ]
                );
            }
        }

        $this->command->info('Seeder de UserModuleProgress ejecutado exitosamente.');
    }
}
