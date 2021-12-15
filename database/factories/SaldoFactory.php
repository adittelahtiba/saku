<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SaldoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->randomElement(['BCA', 'ShopeePay', 'Cash', 'OVO']),
            'user_id' => $this->faker->randomDigit(),
            'nominal' => $this->faker->numberBetween(5, 100000) . '00',
            'detail' => '',
        ];
    }
}
