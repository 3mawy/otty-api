<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CatPost>
 */
class CatPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lat' => $this->faker->latitude,
            'long' => $this->faker->longitude,
            'notes' => $this->faker->realText,
        ];
    }
}
