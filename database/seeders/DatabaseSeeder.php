<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryType;
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
        CategoryType::factory()->create(['name' => 'Properties', 'slug' => 'properties']);
        CategoryType::factory()->create(['name' => 'Jobs', 'slug' => 'jobs']);

        Category::factory(1)->create([
            'name' => 'Houses & Apartments For Sale',
            'slug' => 'houses-and-apartments-for-sale',
            'category_type_id' => 1,
        ]);
        Category::factory(1)->create([
            'name' => 'Shops & Offices For Sale',
            'slug' => 'shops-and-offices-for-sale',
            'category_type_id' => 1,
        ]);

    }
}
