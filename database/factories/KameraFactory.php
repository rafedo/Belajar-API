<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kamera>
 */
class KameraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        return [
            'merk' => $faker->word,
        'tipe' => $faker->word,
        'harga_sewa' => $faker->numberBetween(50000, 500000),
        ];
    }
}
