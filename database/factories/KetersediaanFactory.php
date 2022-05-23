<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ketersediaan>
 */
class KetersediaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rujukanTersedia' => $this->faker->numberBetween(1, 50),
            'kamarTersedia' => $this->faker->numberBetween(1, 50),
        ];
    }
}
