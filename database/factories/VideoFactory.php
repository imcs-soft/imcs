<?php

namespace Database\Factories;

use App\Models\Module;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{

    protected $video_position = 0;

    protected $model = Video::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->text(50),
            "description" => $this->faker->paragraph(),
            "video_url" => $this->faker->url(),
            "position" => $this->video_position++,
            "module_id" => $this->faker->numberBetween(1, Module::all()->count()),
        ];
    }
}
