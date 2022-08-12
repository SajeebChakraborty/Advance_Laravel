<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//import recipe model
use App\Models\Recipe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //get a random recipe from the database
        $recipe = Recipe::inRandomOrder()->first();
        return [
            'recipe_id' => $recipe->id,
            'rating' => $this->faker->numberBetween(1, 5),
            'description'=> $this->faker->text,
        ];
    }
}
