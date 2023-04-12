<?php

namespace Database\Factories;

use App\Models\Kamera;
use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penyewaan>
 */
class PenyewaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create('id_ID');
        $tgl_sewa = $faker->dateTimeBetween('-1 month', 'now');
        $tgl_kembali = $faker->dateTimeBetween($tgl_sewa, 'now');

        return [
            'kamera_id' => Kamera::factory(),
            'pelanggan_id' => Pelanggan::factory(),
            'tanggal_sewa' => $tgl_sewa,
            'tanggal_kembali' => $tgl_kembali,
            'harga_sewa' => $faker->numberBetween(50000, 500000),
        ];
    }
}
