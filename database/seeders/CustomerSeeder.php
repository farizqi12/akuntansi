<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Usaha;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usahas = Usaha::all();

        foreach ($usahas as $usaha) {
            $customers = [
                [
                    'customer_code' => 'CUST001',
                    'customer_name' => 'PT. Pelanggan Pertama',
                    'address' => 'Jl. Merdeka No. 123, Jakarta',
                    'phone_number' => '08123456789',
                    'email' => 'pelanggan1@example.com',
                    'category' => 'corporate',
                ],
                [
                    'customer_code' => 'CUST002',
                    'customer_name' => 'Toko Sembako Maju',
                    'address' => 'Jl. Sudirman No. 45, Bandung',
                    'phone_number' => '08234567890',
                    'email' => 'toko.maju@example.com',
                    'category' => 'retail',
                ],
                [
                    'customer_code' => 'CUST003',
                    'customer_name' => 'CV. Grosir Makmur',
                    'address' => 'Jl. Gatot Subroto No. 67, Surabaya',
                    'phone_number' => '08345678901',
                    'email' => 'grosir.makmur@example.com',
                    'category' => 'wholesale',
                ],
                [
                    'customer_code' => 'CUST004',
                    'customer_name' => 'PT. Sentosa Abadi',
                    'address' => 'Jl. Thamrin No. 89, Medan',
                    'phone_number' => '08456789012',
                    'email' => 'sentosa.abadi@example.com',
                    'category' => 'corporate',
                ],
                [
                    'customer_code' => 'CUST005',
                    'customer_name' => 'UD. Jaya Baru',
                    'address' => 'Jl. Pahlawan No. 12, Semarang',
                    'phone_number' => '08567890123',
                    'email' => 'jaya.baru@example.com',
                    'category' => 'retail',
                ],
            ];

            foreach ($customers as $customer) {
                Customer::create([
                    'usaha_id' => $usaha->id,
                    'customer_code' => $customer['customer_code'],
                    'customer_name' => $customer['customer_name'],
                    'address' => $customer['address'],
                    'phone_number' => $customer['phone_number'],
                    'email' => $customer['email'],
                    'category' => $customer['category'],
                ]);
            }
        }
    }
}
