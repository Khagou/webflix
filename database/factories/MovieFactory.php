<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'synopsys' => $this->faker->words(300),
            'duration' => $this->rand(100, 200),
            'cover' => $this->faker->imageUrl(),
            'released_at' => $this->faker->dateTime()
        ];
    }
}
