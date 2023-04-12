<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kamera;
use App\Models\Pelanggan;
use App\Models\Penyewaan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Kamera::factory()->count(10)->create();
        Pelanggan::factory()->count(10)->create();
        Penyewaan::factory()->count(10)->create();
    }
}
