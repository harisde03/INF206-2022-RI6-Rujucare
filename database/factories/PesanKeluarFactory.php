<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PesanKeluar>
 */
class PesanKeluarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'faskes_id'=> mt_rand(1,2),
            'noBPJS'=>$this->faker->nik(),
            'deskripsi' =>$this->faker->paragraph(),
            'tujuanFaskes' =>$this->faker->sentence(mt_rand(2,4)),
        ];
    }
}
