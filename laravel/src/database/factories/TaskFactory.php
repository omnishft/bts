<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           "title" => fake()->sentence(1, true),
           "description" => fake()->sentence(4, true),
           "long_description" => fake()->sentence(10, true),
           "completed" => fake()->boolean,
        ];
    }
}
