<?php

namespace Database\Seeders;

use App\Models\Transaction;
use App\Models\Usaha;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usahas = Usaha::all();
        $users = User::all();

        foreach ($usahas as $usaha) {
            $customers = Customer::where('usaha_id', $usaha->id)->get();

            for ($i = 1; $i <= 10; $i++) {
                $customer = $customers->random();
                $user = $users->random();
                $transactionTypes = ['sale', 'purchase', 'receipt', 'expense', 'other'];
                $statuses = ['credit', 'cash', 'pending'];

                Transaction::create([
                    'usaha_id' => $usaha->id,
                    'transaction_number' => 'TRX' . str_pad($i, 6, '0', STR_PAD_LEFT),
                    'user_id' => $user->id,
                    'customer_id' => $customer->id,
                    'transaction_date' => now()->subDays(rand(1, 30)),
                    'transaction_type' => $transactionTypes[array_rand($transactionTypes)],
                    'amount' => rand(100000, 5000000),
                    'status' => $statuses[array_rand($statuses)],
                    'description' => 'Transaksi contoh ' . $i,
                    'is_posted' => true,
                    'created_by' => $user->id,
                ]);
            }
        }
    }
}
