<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pesan>
 */
class PesanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pesanMasuk_id'=>mt_rand(1,2),
            'pesanKeluar_id' =>mt_rand(1,2),
            'faskes_id' =>mt_rand(1,2)

        ];
    }
}
