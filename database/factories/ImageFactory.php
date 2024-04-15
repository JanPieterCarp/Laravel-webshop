<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => $this->faker->randomElement([
                'media/examples1.png',
                'media/examples2.png',
                'media/examples3.png',
                'media/examples4.png',
                'media/examples5.png',
                'media/examples6.png',
                'media/examples7.png',
                'media/examples8.png',
                'media/examples9.png',
                'media/examples10.png',
                'media/examples11.png',
                'media/examples12.png',
                'media/examples13.png',
                'media/examples14.png',
                'media/examples15.png',
                'media/examples16.png',
                'media/examples17.png' ])


        ];
    }
}
