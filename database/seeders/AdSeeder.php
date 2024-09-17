<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Ad::factory()->create([
            'name' => 'Ad one',
            'title' => 'Ad one title',
            'url' => 'https://example.com',
            'image' => '1.png',
            'position' => 1,
        ]);
        Ad::factory()->create([
            'name' => 'Ad two',
            'title' => 'Ad two title',
            'url' => 'https://example.com',
            'image' => '2.png',
            'position' => 2,
        ]);
        Ad::factory()->create([
            'name' => 'Ad three',
            'title' => 'Ad three title',
            'url' => 'https://example.com',
            'image' => '3.png',
            'position' => 3,
        ]);
        Ad::factory()->create([
            'name' => 'Ad four',
            'title' => 'Ad four title',
            'url' => 'https://example.com',
            'image' => '4.png',
            'position' => 4,
        ]);
        Ad::factory()->create([
            'name' => 'Ad five',
            'title' => 'Ad five title',
            'url' => 'https://example.com',
            'image' => '5.png',
            'position' => 5,
        ]);
        Ad::factory()->create([
            'name' => 'Ad six',
            'title' => 'Ad six title',
            'url' => 'https://example.com',
            'image' => '6.png',
            'position' => 6,
        ]);
        Ad::factory()->create([
            'name' => 'Ad seven',
            'title' => 'Ad seven title',
            'url' => 'https://example.com',
            'image' => '7.png',
            'position' => 7,
        ]);
        Ad::factory()->create([
            'name' => 'Ad eight',
            'title' => 'Ad eight title',
            'url' => 'https://example.com',
            'image' => '8.png',
            'position' => 8,
        ]);
        // Ad::factory(10)->create();
    }
}
