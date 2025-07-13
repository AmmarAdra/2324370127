<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Project;
use App\Models\Invoice;
use App\Models\BantuanKlien; // <-- Diperbarui dari SupportTicket
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Membuat user utama yang bisa Anda gunakan untuk login
        $mainUser = User::factory()->create([
            'name' => 'Klien Utama',
            'email' => 'klien@contoh.com',
            'password' => Hash::make('password'),
        ]);

        // 2. Membuat 7 layanan spesifik Anda
        $servicesData = [
            ['name' => 'Pengembangan Web', 'description' => 'Layanan pembuatan website profesional.'],
            ['name' => 'Maintenance Website', 'description' => 'Layanan perawatan rutin website.'],
            ['name' => 'Desain UI/UX', 'description' => 'Layanan desain antarmuka dan pengalaman pengguna.'],
            ['name' => 'Optimasi SEO', 'description' => 'Layanan untuk meningkatkan peringkat di Google.'],
            ['name' => 'Infrastruktur Cloud', 'description' => 'Layanan hosting dan server cloud.'],
            ['name' => 'Toko Online', 'description' => 'Layanan pembuatan E-Commerce.'],
            ['name' => 'Digital Marketing', 'description' => 'Layanan pemasaran digital terpadu.'],
        ];

        foreach ($servicesData as $service) {
            Service::create($service);
        }

        // 3. Membuat beberapa data contoh untuk user utama
        // Ambil ID layanan secara acak untuk user utama
        $randomServices = Service::inRandomOrder()->limit(2)->get();

        $project1 = Project::factory()->create([
            'user_id' => $mainUser->id,
            'service_id' => $randomServices[0]->id,
            'project_name' => 'Proyek Website ' . $mainUser->name,
        ]);
        Invoice::factory()->create(['project_id' => $project1->id]);

        $project2 = Project::factory()->create([
            'user_id' => $mainUser->id,
            'service_id' => $randomServices[1]->id,
            'project_name' => 'Proyek SEO Bulanan',
        ]);
        Invoice::factory()->create(['project_id' => $project2->id]);

        // Membuat tiket bantuan untuk user utama menggunakan factory yang baru
        BantuanKlien::factory()->create(['user_id' => $mainUser->id]);


        // 4. Membuat 5 user acak lainnya, lengkap dengan proyek, invoice, dan tiket
        User::factory(5)
            ->has(
                Project::factory()
                    ->count(2) // Setiap user punya 2 proyek
                    ->state(function (array $attributes, User $user) {
                        return ['service_id' => Service::inRandomOrder()->first()->id];
                    })
                    ->has(Invoice::factory()->count(1)) // Setiap proyek punya 1 invoice
            )
            ->has(BantuanKlien::factory()->count(1)) // <-- Diperbarui menggunakan BantuanKlienFactory
            ->create();
    }
}