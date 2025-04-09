<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SensorData>
 */
class SensorDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'device' => "Client_esp32",
            'temp_air' => fake()->randomFloat(2, 20, 30),
            'humidity' => fake()->randomFloat(2, 30, 50),
            'light' => fake()->randomFloat(2, 100, 200),
            'tds' => fake()->randomFloat(2, 0,100),
            'ph' => fake()->randomFloat(2, 7, 10),
            'temp_water' => fake()->randomFloat(2, 20, 30),
            'created_at' => fake()->dateTimeBetween('-3 months', 'now'),
        ];
    }
}
