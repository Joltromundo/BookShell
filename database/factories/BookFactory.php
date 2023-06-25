<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        /**
         * Creating fake data to seed the database 
        */
        return [
            'title' => fake()->realText(25, 2),
            'synopsis' => fake()->realText(200, 2),
            'author' => fake()->name(),
            'category' => fake()->jobTitle(),
            'pages' => fake()->numberBetween(100, 400),
            'release' => fake()->date()
        ];
    }
}
