<?php

namespace Database\Factories;

use App\Enums\ResourceType;
use App\Models\Instructor;
use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
{
    protected $model = Resource::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(mt_rand(15, 50)),
            'url_path' => 'https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf#toolbar=0&navpanes=0',
            'file_type' => ResourceType::PDF,
        ];
    }
}
