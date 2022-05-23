<?php

namespace Database\Factories;

use App\Models\Faskes;
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
            'id_kredensial' => $this->faker->numberBetween(1, Faskes::count()),

            'namaSpesialis' => $this->faker->name,
            'kemampuanSpesialis' => $this->faker->text,
            'profilePicture' => $this->faker->imageUrl(400, 400, 'people'),
        ];
    }
}
