<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice_pesanan>
 */
class Invoice_PesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => mt_rand(1, 8),
            'jenisbarang_id' => mt_rand(1, 8),
            'hargasatuan_id' => mt_rand(1, 12),
            'jumlahpesanan' => $this->faker->numberBetween(1, 10),
            'totalharga' => $this->faker->randomFloat(2, 10000, 100000),
            'alamatkirim' => $this->faker->address,
            'no_whatsapp' => $this->faker->regexify('/^\+?[0-9]+$/'),
            'image' => $this->faker->imageUrl(640, 480, 'cats'),
            'statuspekerjaan_id' =>  mt_rand(1, 3),
            'statusbayar_id' => mt_rand(1, 3),
        ];
    }
}
