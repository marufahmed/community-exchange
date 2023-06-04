<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\BlogPost;

class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'user_id' => User::factory()->create()->id,
            'valuation' => $this->faker->numberBetween($min = 1000, $max = 9000),
        ];
    }
}
