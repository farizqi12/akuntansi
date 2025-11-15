<?php

namespace Database\Seeders;

use App\Models\Credit;
use App\Models\Usaha;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class CreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usahas = Usaha::all();

        foreach ($usahas as $usaha) {
            $customers = Customer::where('usaha_id', $usaha->id)->get();
            $transactions = Transaction::where('usaha_id', $usaha->id)->where('status', 'credit')->get();

            foreach ($transactions as $transaction) {
                $customer = $customers->random();
                $totalAmount = $transaction->amount;
                $downPayment = rand(0, $totalAmount * 0.3);
                $remainingAmount = $totalAmount - $downPayment;

                Credit::create([
                    'usaha_id' => $usaha->id,
                    'customer_id' => $customer->id,
                    'transaction_id' => $transaction->id,
                    'transaction_date' => $transaction->transaction_date,
                    'total_amount' => $totalAmount,
                    'down_payment' => $downPayment,
                    'remaining_amount' => $remainingAmount,
                    'status' => $remainingAmount > 0 ? 'unpaid' : 'paid',
                    'notes' => 'Kredit untuk transaksi ' . $transaction->transaction_number,
                ]);
            }
        }
    }
}
