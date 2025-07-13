<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\BantuanKlien;
use Illuminate\Database\Eloquent\Factories\Factory;

class BantuanKlienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BantuanKlien::class; // <-- Tunjuk ke model yang benar

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'subject' => 'Masalah: ' . $this->faker->sentence(4),
            'message' => $this->faker->paragraph(3),
            'status' => $this->faker->randomElement(['Terbuka', 'Ditutup']),
        ];
    }
}