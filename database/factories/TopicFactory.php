<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'priority' => rand(1, 500),
            'status' => rand(0, 1),
            'comment_status' => rand(1, 5000),
            'title' => fake()->word(),
            'short_title' => fake()->word(),
            'subtitle' => fake()->word(),
            'header' => fake()->word(),
            'summary' => fake()->sentence(),
            'body' => fake()->text(),
            'email_template' => fake()->word(),
        ];
    }
}
