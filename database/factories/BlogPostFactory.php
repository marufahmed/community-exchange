<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
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
            'name' => $faker->name,
            'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'user_id' => User::factory(),
            'valuation' => $faker->numberBetween($min = 1000, $max = 9000)
        ];
    }
    
}
