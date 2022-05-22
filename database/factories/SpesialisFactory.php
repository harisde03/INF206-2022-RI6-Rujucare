<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spesialis>
 */
class SpesialisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'namaSpesialis' => $this->faker->name(),
            'KemampuanSpesialis' => $this->faker->sentence(mt_rand(2,4)),
            'kredensial_id' => mt_rand(1,2)
        ];
    }
}
