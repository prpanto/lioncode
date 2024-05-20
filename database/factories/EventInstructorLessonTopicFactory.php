<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventInstructorLessonTopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => rand(1, 100),
            'instructor_id' => rand(1, 100),
            'lesson_id' => rand(1, 100),
            'topic_id' => rand(1, 100),
            'data' => fake()->date(),
            'time_starts' => rand(1, 2000),
            'time_ends' => rand(1, 2000),
            'duration' => rand(1, 2000),
            'room' => rand(1, 200),
            'location_url' => fake()->url(),
            'priority' => rand(0, 1000),
            'automate_mail' => rand(0, 1),
            'send_automate_mail' => rand(0, 1),
        ];
    }
}
