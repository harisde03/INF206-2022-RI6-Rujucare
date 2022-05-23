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
        $nama_publik = $this->faker->name;
        $url_publik   = str_replace(' ', '-', strtolower($nama_publik));
        $email_publik = str_replace(' ', '_', strtolower($nama_publik)) . '@gmail.com';

        return [
            'namaPublik' => $nama_publik,
            'emailPublik' => $email_publik,
            'teleponPublik' => $this->faker->phoneNumber,
            'deskripsiPublik' => $this->faker->text,
            'alamatPublik' => $this->faker->address,
            'tingkatPublik' => $this->faker->randomElement(['Tingkat 1', 'Tingkat 2', 'Tingkat 3']),
            'faskesPicture' => $this->faker->imageUrl(1280, 720, 'building'),
            'urlFaskes' => $url_publik,
        ];
    }
}
