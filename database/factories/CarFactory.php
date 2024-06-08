<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * 
 */
class CarFactory extends Factory
{
    /**
     *
     */
    public function definition(): array
    {
        return [
            'carName' => $this->faker->word(),
            'brandName' => $this->faker->company(),
            'carPrice' => $this->faker->numberBetween(90000, 150000),
        ];
    }
}
