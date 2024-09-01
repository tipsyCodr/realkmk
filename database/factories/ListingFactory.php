<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'listing_uid' => strtoupper(substr($this->faker->numberBetween(100000000000000, 999999999999999), 0, 15)),
            'ad_title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 0, 100000.99),
            'category_type_id' => $this->faker->numberBetween(1, 2),
            'category_id' => $this->faker->numberBetween(1, 2),
            'user_id' => 1,
            'photos' => $this->faker->imageUrl,
            'location' => $this->faker->city,
            'bedrooms' => $this->faker->optional()->numberBetween(1, 5),
            'bathrooms' => $this->faker->optional()->numberBetween(1, 5),
            'furnishing' => $this->faker->optional()->randomElement(['Furnished', 'Semi-Furnished', 'Unfurnished']),
            'construction_status' => $this->faker->optional()->randomElement(['Ready to Move', 'Under Construction']),
            'listed_by' => $this->faker->optional()->randomElement(['Owner', 'Agent', 'Builder']),
            'facing' => $this->faker->optional()->randomElement(['East', 'West', 'North', 'South']),
            'project_name' => $this->faker->optional()->company,
            'super_builtup_area' => $this->faker->optional()->numberBetween(100, 1000),
            'carpet_area' => $this->faker->optional()->numberBetween(100, 1000),
            'maintainance' => $this->faker->optional()->numberBetween(1, 1000),
            'total_floors' => $this->faker->optional()->numberBetween(1, 10),
            'floor_no' => $this->faker->optional()->numberBetween(1, 10),
            'car_parking' => $this->faker->optional()->numberBetween(1, 10),
            'salary_period' => $this->faker->optional()->randomElement(['Monthly', 'Yearly']),
            'salary' => $this->faker->optional()->numberBetween(1000, 100000),
            'position_type' => $this->faker->optional()->randomElement(['Full-time', 'Part-time', 'Contract']),
            'salary_min_range' => $this->faker->optional()->numberBetween(1000, 100000),
            'salary_max_range' => $this->faker->optional()->numberBetween(1000, 100000),
            'premium' => $this->faker->optional()->numberBetween(1, 10),
            'views' => $this->faker->numberBetween(1, 1000),
            'slug' => $this->faker->unique()->slug,
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
