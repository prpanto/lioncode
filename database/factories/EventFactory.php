<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $random = rand(1, 10);

        return [
            'user_id' => 1,
            'priority' => rand(1, 500),
            'status' => rand(0, 1),
            'published' => rand(0, 1),
            'release_date_files' => fake()->date(),
            'expiration' => $random,
            'title' => fake()->word(),
            'htmlTitle' => fake()->word(),
            'subtitle' => fake()->word(),
            'header' => fake()->word(),
            'summary' => fake()->sentence(),
            'body' => fake()->text(),
            'hours' => $random,
            'absences_limit' => 0,
            'enroll' => rand(0, 1),
            'index' => rand(0, 1),
            'feed' => rand(0, 1),
            'certificate_title' => fake()->text(),
            'fb_group' => fake()->text(),
            'evaluate_topics' => fake()->text(),
            'evaluate_instructors' => fake()->text(),
            'fb_testimonial' => fake()->word(),
            'view_tpl' => fake()->word(),
            'view_counter' => $random,
            'published_at' => fake()->unixTime(new DateTime("+$random days")),
            'launch_date' => fake()->unixTime(new DateTime("+$random days")),
            'xml_title' => fake()->text(),
            'xml_description' => fake()->text(),
            'xml_short_description' => fake()->text(),
        ];
    }
}
