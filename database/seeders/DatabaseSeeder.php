<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    protected $faker;
    /**
     * Seed the application's database.
     */
    public function __construct()
    {
        $this->faker = \Faker\Factory::create();
    }
    public function run(): void
    {
        User::factory(10)->create();

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

        CategoryType::factory()->create([
            'name' => 'Data Entry & Back Office',
            'slug' => 'data-entry-and-back-office',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Sales & Marketing',
            'slug' => 'sales-and-marketing',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'BPO & Telecaller',
            'slug' => 'bpo-and-telecaller',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Driver',
            'slug' => 'driver',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Office Assistant',
            'slug' => 'office-assistant',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Delivery & Collection',
            'slug' => 'delivery-and-collection',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Teacher',
            'slug' => 'teacher',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Cook',
            'slug' => 'cook',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Receptionist & Front Office',
            'slug' => 'receptionist-and-front-office',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Operator & Technician',
            'slug' => 'operator-and-technician',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'IT Engineer & Developer',
            'slug' => 'it-engineer-and-developer',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Hotel & Travel Executive',
            'slug' => 'hotel-and-travel-executive',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Accountant',
            'slug' => 'accountant',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Designer',
            'slug' => 'designer',
            'category_id' => 2,
        ]);
        CategoryType::factory()->create([
            'name' => 'Other Jobs',
            'slug' => 'other-jobs',
            'category_id' => 2,
        ]);

        $filenames = [];
        for ($i = 0; $i <= 56; $i++) {
            $filenames[] = $i . '.jpg';
        }

        foreach ($filenames as $filename) {
            Listing::factory()->create([
                'photos' => $filename,
                // 'ad_title' => $this->faker->sentence(3),
                'ad_title' => "House For Sale",
                'description' => Str::random(50),
                'price' => rand(2000000, 10000000),
                'location' => Arr::random(['Durg', 'Bhilai', 'Raipur', 'Delhi', 'Kolkata', 'Mumbai', 'Bengaluru']),
                'bedrooms' => rand(1, 5),
                'bathrooms' => rand(1, 5),
                'furnishing' => Arr::random(['Fully Furnished', 'Semi Furnished', 'Unfurnished']),
                'construction_status' => Arr::random(['New Launch', 'Ready to Move', 'Under Construction']),
                'listed_by' => Arr::random(['Dealer', 'Owner', 'Dealer']),
                'facing' => Arr::random(['East', 'West', 'South', 'North', 'South East', 'South West', 'North East', 'North West']),
                'project_name' => 'Kalp Gaurav',
                'super_builtup_area' => rand(100, 1000),
                'carpet_area' => rand(100, 1000),
                'maintainance' => rand(100, 1000),
                'total_floors' => rand(1, 5),
                'floor_no' => rand(1, 5),
                'car_parking' => rand(1, 5),
                'salary_period' => Str::random(10),
                'salary' => rand(100, 1000),
                'position_type' => Str::random(10),
                'salary_min_range' => rand(100, 1000),
                'salary_max_range' => rand(100, 1000),
                'premium' => rand(1, 5),
                'views' => rand(1, 100),
                'likes' => rand(1, 100),
                'slug' => 'house_for_sale',
                'expires_at' => now()->addDays(rand(1, 30)),
                'status' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        foreach ($filenames as $filename) {
            Listing::factory()->create([
                'photos' => $filename,
                // 'ad_title' => $this->faker->sentence(3),
                'ad_title' => "House For Sale",
                'description' => Str::random(50),
                'price' => rand(2000000, 10000000),
                'location' => Arr::random(['Durg', 'Bhilai', 'Raipur', 'Delhi', 'Kolkata', 'Mumbai', 'Bengaluru']),
                'bedrooms' => rand(1, 5),
                'bathrooms' => rand(1, 5),
                'furnishing' => Arr::random(['Fully Furnished', 'Semi Furnished', 'Unfurnished']),
                'construction_status' => Arr::random(['New Launch', 'Ready to Move', 'Under Construction']),
                'listed_by' => Arr::random(['Dealer', 'Owner', 'Dealer']),
                'facing' => Arr::random(['East', 'West', 'South', 'North', 'South East', 'South West', 'North East', 'North West']),
                'project_name' => 'Kalp Gaurav',
                'super_builtup_area' => rand(100, 1000),
                'carpet_area' => rand(100, 1000),
                'maintainance' => rand(100, 1000),
                'total_floors' => rand(1, 5),
                'floor_no' => rand(1, 5),
                'car_parking' => rand(1, 5),
                'salary_period' => Str::random(10),
                'salary' => rand(100, 1000),
                'position_type' => Str::random(10),
                'salary_min_range' => rand(100, 1000),
                'salary_max_range' => rand(100, 1000),
                'premium' => rand(1, 5),
                'views' => rand(1, 100),
                'likes' => rand(1, 100),
                'slug' => 'house_for_sale',
                'expires_at' => now()->addDays(rand(1, 30)),
                'status' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // 
        Ad::factory(10)->create();
    }
}
