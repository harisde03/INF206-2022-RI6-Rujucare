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
            'rujukanTersedia' => mt_rand(1,100),
            'KamarTersedia'=> mt_rand(1,100),
            'kredensial_id'=> mt_rand(1,2)
        ];
    }
}
