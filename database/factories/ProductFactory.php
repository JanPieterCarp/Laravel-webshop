<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Pet', 'Shirt', 'Handoek', 'trui']),
            'description' => $this->faker->paragraph(nbSentences: 2),
            'price' => $this->faker->numberBetween( int1: 5_00, int2: 1000000)
        ];
    }
}
