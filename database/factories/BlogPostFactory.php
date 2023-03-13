<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // More information about faker library can be found here: https://github.com/fzaninotto/Faker#fakerprovideren_usperson
    public function definition(): array
    {
        return [
            'name' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'description' => fake()->realText($maxNbChars = 200, $indexSize = 2),
            'user_id' => \User::factory(),
            'valuation' => fake()->numberBetween($min = 1000, $max = 9000),
        ];
    }
    
}
