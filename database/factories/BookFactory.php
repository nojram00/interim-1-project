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
        $faker = \Faker\Factory::create('en_US');

        return [
            'title' => ucfirst(implode(' ', $faker->words(3))),
            'author' => $faker->name(),
            'year_published' => $faker->year(),
            'details' => $faker->paragraph(),
        ];
    }
}
