<?php

namespace Database\Factories;

use App\Models\Faskes;
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
        $id_pengirim = $this->faker->numberBetween(1, Faskes::count());
        $id_penerima = $this->faker->numberBetween(1, Faskes::count());

        while ($id_pengirim == $id_penerima) {
            $id_penerima = $this->faker->numberBetween(1, Faskes::count());
        }

        return [
            'id_faskes_pengirim' => $id_pengirim,
            'id_faskes_penerima' => $id_penerima,

            'nomorBpjs' => $this->faker->numberBetween(1000000000000, 9999999999999),
            'deskripsiPesanMasuk' => $this->faker->text,
            'persetujuanPesanMasuk' => $this->faker->numberBetween(0, 2),
            'gambarPesanMasuk' => $this->faker->imageUrl(720, 960, 'letters'),
        ];
    }
}
