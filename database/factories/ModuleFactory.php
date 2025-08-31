<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    protected $model = Module::class;
    protected $next_position = 0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->text(mt_rand(15, 50));
        return [
            "title" => $title,
            "slug" => Str::slug($title),
            "description" => $this->faker->text(mt_rand(50, 150)),
            "course_id" => $this->faker->numberBetween(1, Course::count()),
            "position" => $this->next_position++,
        ];
    }
}
