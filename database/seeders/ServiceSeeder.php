<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Usaha;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usahas = Usaha::all();

        foreach ($usahas as $usaha) {
            $standardServices = [
                [
                    'service_name' => 'Jasa Konsultasi',
                    'price' => 500000,
                    'description' => 'Konsultasi bisnis untuk meningkatkan efisiensi operasional.',
                ],
                [
                    'service_name' => 'Jasa Mekanik',
                    'price' => 750000,
                    'description' => 'Perbaikan dan pemeliharaan kendaraan.',
                ],
                [
                    'service_name' => 'Jasa Desain Grafis',
                    'price' => 1000000,
                    'description' => 'Desain logo, brosur, dan materi pemasaran lainnya.',
                ],
                [
                    'service_name' => 'Jasa Pemasaran',
                    'price' => 1200000,
                    'description' => 'Strategi dan implementasi pemasaran digital.',
                ],
                [
                    'service_name' => 'Jasa IT Support',
                    'price' => 800000,
                    'description' => 'Dukungan teknis dan pemeliharaan sistem IT.',
                ],
            ];

            foreach ($standardServices as $service) {
                Service::create([
                    'usaha_id' => $usaha->id,
                    'service_name' => $service['service_name'],
                    'price' => $service['price'],
                    'description' => $service['description'],
                ]);
            }
        }
    }
}
