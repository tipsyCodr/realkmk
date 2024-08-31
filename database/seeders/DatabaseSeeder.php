<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Category::factory()->create(['name' => 'Properties', 'slug' => 'properties']);
        Category::factory()->create(['name' => 'Jobs', 'slug' => 'jobs']);

        CategoryType::factory()->create([
            'name' => 'Houses & Apartments For Sale',
            'slug' => 'houses-and-apartments-for-sale',
            'category_id' => 1,
        ]);
        CategoryType::factory()->create([
            'name' => 'Shops & Offices For Sale',
            'slug' => 'shops-and-offices-for-sale',
            'category_id' => 1,
        ]);

        Listing::factory(10)->create();

    }
}
