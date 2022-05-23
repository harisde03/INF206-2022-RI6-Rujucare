<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kredensial>
 */
class KredensialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'namaPublik'=>$this->faker->sentence(mt_rand(2,4)),
            'emailPublik'=>$this->faker->unique()->safeEmail(),
            'alamatPublik' =>$this->faker->paragraph(),
            'deskripsiPublik' => $this-> faker->paragraph(),
            'faskes_id' => mt_rand(1,2),
        ];
    }
}
