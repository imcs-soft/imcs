<?php

namespace Database\Factories;

use App\Enums\CourseModality;
use App\Models\Course;
use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

            $t = mt_rand(4, 15);
            for ($i = 1; $i < $t; $i++) {
                $title = $this->faker->text(mt_rand(15, 50));
                $moduleId = DB::table('modules')->insertGetId([
                    "title" => $title,
                    "slug" => Str::slug($title),
                    "description" => $this->faker->text(mt_rand(50, 150)),
                    "course_id" => $course->id,
                    "position" => $i,
                ]);

                $tt = mt_rand(1, 10);
                for ($j = 1; $j < $tt; $j++) {
                    DB::table('videos')->insertGetId([
                        "title" => $this->faker->text(50),
                        "description" => $this->faker->paragraph(),
                        "video_url" => 'https://www.w3schools.com/html/mov_bbb.mp4',
                        "position" => $j,
                        "module_id" => $moduleId,
                    ]);
                }
            }

            $rt = mt_rand(1, 4);
            for ($j = 1; $j < $rt; $j++) {
                DB::table('course_resource')->insertGetId([
                    'course_id' => $course->id,
                    'resource_id' => mt_rand(1, Resource::all()->count()),
                ]);
            }
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
