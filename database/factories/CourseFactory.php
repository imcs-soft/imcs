<?php

namespace Database\Factories;

use App\Enums\CourseModality;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function configure(): CourseFactory|Factory
    {
        return $this->afterCreating(function (Course $course) {
            DB::table('course_user')->insert([
                'user_id' => 1,
                'course_id' => $course->id
            ]);
        });
    }

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
            "overview" => $this->faker->text(mt_rand(15, 50)),
            "description" => $this->faker->text(mt_rand(15, 50)),
            "instructor_id" => mt_rand(1, 10),
            "modality" => $this->faker->randomElement([CourseModality::ONLINE, CourseModality::PRESENCIAL]),
            "price" => $this->faker->randomFloat(2, 10)

        ];
    }
}
