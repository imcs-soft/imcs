<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Module;
use App\Models\Resource;
use App\Models\Review;
use App\Models\User;
use App\Models\Video;
use Database\Factories\UserCourseFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Instructor::factory(10)->create();
        Resource::factory(10)->create();
        Course::factory(10)->create();
        //::factory(10)->create();
        //Video::factory(10)->create();
        Review::factory(10)->create();
        Certificate::factory(10)->create();
    }
}
