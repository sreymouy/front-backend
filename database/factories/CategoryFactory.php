<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "cname" => $this->faker->words(1,true),
            "cdesc" => $this->faker->sentence(2,true),
            "cimg" => $this->faker->randomElement(['c1.jpg', 'c2.jpg']),
        ];
    }
}
