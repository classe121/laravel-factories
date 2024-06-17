<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Game;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categories = ['adventure', 'horror', 'platform', 'survival'];

        foreach ($categories as $category) {
            Category::factory()->has(Game::factory()->lowPrice()->count(rand(1, 3)))->create([
                'name' => $category
            ]);
        }
    }
}
