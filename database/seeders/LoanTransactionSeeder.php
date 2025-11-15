<?php

namespace Database\Seeders;

use App\Models\LoanTransaction;
use App\Models\Loan;
use App\Models\Journal;
use Illuminate\Database\Seeder;

class LoanTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loans = Loan::all();

        foreach ($loans as $loan) {
            $journals = Journal::where('usaha_id', $loan->usaha_id)->get();

            for ($i = 1; $i <= 5; $i++) {
                $journal = $journals->random();
                $types = ['pembayaran', 'penarikan', 'bunga'];
                $amount = rand(1000000, 10000000);

                LoanTransaction::create([
                    'loan_id' => $loan->id,
                    'journal_id' => $journal->id,
                    'transaction_date' => now()->subDays(rand(1, 60)),
                    'type' => $types[array_rand($types)],
                    'amount' => $amount,
                    'description' => 'Transaksi pinjaman ' . $i . ' untuk ' . $loan->lender_name,
                ]);
            }
        }
    }
}
