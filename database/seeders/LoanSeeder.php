<?php

namespace Database\Seeders;

use App\Models\Loan;
use App\Models\Usaha;
use App\Models\Account;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usahas = Usaha::all();

        foreach ($usahas as $usaha) {
            $accounts = Account::where('usaha_id', $usaha->id)->get();

            $loans = [
                [
                    'lender_name' => 'Bank BCA',
                    'type' => 'Pinjaman Modal Kerja',
                    'address' => 'Jl. Sudirman No. 123, Jakarta',
                    'phone_number' => '021-1234567',
                    'email' => 'bca@example.com',
                    'balance' => 500000000,
                ],
                [
                    'lender_name' => 'Bank Mandiri',
                    'type' => 'Kredit Investasi',
                    'address' => 'Jl. Gatot Subroto No. 45, Jakarta',
                    'phone_number' => '021-7654321',
                    'email' => 'mandiri@example.com',
                    'balance' => 750000000,
                ],
                [
                    'lender_name' => 'Bank BRI',
                    'type' => 'Kredit Usaha Rakyat',
                    'address' => 'Jl. Jend. Sudirman No. 67, Jakarta',
                    'phone_number' => '021-9876543',
                    'email' => 'bri@example.com',
                    'balance' => 300000000,
                ],
            ];

            foreach ($loans as $loan) {
                $account = $accounts->random();

                Loan::create([
                    'usaha_id' => $usaha->id,
                    'lender_name' => $loan['lender_name'],
                    'type' => $loan['type'],
                    'address' => $loan['address'],
                    'phone_number' => $loan['phone_number'],
                    'email' => $loan['email'],
                    'balance' => $loan['balance'],
                    'account_id' => $account->id,
                ]);
            }
        }
    }
}
