<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $radnom = rand(1, 10);

        return [
            'status' => rand(0, 1),
            'title' => fake()->word(),
            'htmlTitle' => fake()->word(),
            'subtitle' => fake()->word(),
            'header' => fake()->word(),
            'summary' => fake()->sentence(),
            'body' => fake()->text(),
            'vimeo_video' => fake()->url(),
            'vimeo_duration' => rand(1, 2000),
            'links' => fake()->url(),
            'bold' => rand(0, 1),
            'published_at' => fake()->unixTime(new DateTime("+$radnom weeks")),
        ];
    }
}
