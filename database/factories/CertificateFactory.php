<?php

namespace Database\Factories;

use App\Models\Certificate;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certificate>
 */
class CertificateFactory extends Factory
{

    protected $model = Certificate::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url_path' => "pdfUrl='https://aulaginecologia.com/wp-content/uploads/2023/10/PRINCIPIOS-DE-ECOGRAFIA.pdf#toolbar=0&navpanes=0';",
            'user_id' => $this->faker->numberBetween(1, User::all()->count()),
        ];
    }
}
