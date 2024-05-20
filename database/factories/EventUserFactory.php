<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventUser>
 */
class EventUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'event_id' => rand(1, 100),
            'paid' => rand(0, 1),
            'expiration' => fake()->date(),
            'payment_method' => rand(0, 1),
            'comment' => fake()->sentence(),
        ];
    }
}
