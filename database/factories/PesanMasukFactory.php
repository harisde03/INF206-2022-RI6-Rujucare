<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PesanMasuk>
 */
class PesanMasukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'noBPJS'=>$this->faker->nik(),
            'deskripsi' =>$this->faker->paragraph(),
            'asalFaskes' =>$this->faker->sentence(mt_rand(2,4)),

        ];
    }
}
