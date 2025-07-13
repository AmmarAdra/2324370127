<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'amount' => $this->faker->numberBetween(500000, 10000000),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'status' => $this->faker->randomElement(['Belum Dibayar', 'Lunas']),
        ];
    }
}