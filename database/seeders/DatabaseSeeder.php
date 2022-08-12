<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //create 10 ingradients
        \App\Models\Ingradient::factory(20)->create();
        //create 10 recipes and assign them to random ingradients
        \App\Models\Recipe::factory(20)->create()->each(function ($recipe) {
            $recipe->ingradients()->attach(
                \App\Models\Ingradient::inRandomOrder()->take(rand(1, 3))->pluck('id')
            );
        });

        //create 100 reviews
        \App\Models\Review::factory(100)->create();

    }
}
