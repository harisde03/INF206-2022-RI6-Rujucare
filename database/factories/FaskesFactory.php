<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faskes>
 */
class FaskesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'namaFaskes'=>$this->faker->sentence(mt_rand(2,4)),
            'urlFaskes'=>$this->faker->sentence(mt_rand(2,4)),
            'email' => $this->faker->unique()->safeEmail(),
            'tingkatFaskes'=> $this->faker->sentence(mt_rand(2,4)),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

        ];
    }
}
