<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text,
            'title' => $this->faker->optional()->title,
            'url' => $this->faker->optional()->url,
            'image' => $this->faker->imageUrl,
            'position' => $this->faker->unique()->numberBetween(1, 10),
        ];
    }
}

