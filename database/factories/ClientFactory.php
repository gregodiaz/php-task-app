<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clients>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'business_name' => fake()->name(),
            'owner' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'cuit' => rand(2000000000, 3000000000),
            'franchises' => rand(1, 10),
            'active' => true,
        ];
    }
}
