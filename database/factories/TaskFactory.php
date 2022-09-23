<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasks>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'priority' => rand(0, 100),
            'title' => $title = fake()->sentence(),
            'slug' => Str::slug(rand(0, 200) . "-" . $title),
            'done' => false,
            
            'user_id' => rand(1, 5),
            'client_id' => rand(1, 100),
            'state_id' => rand(1, 6),
        ];
    }
}
