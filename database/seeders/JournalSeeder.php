<?php

namespace Database\Seeders;

use App\Models\Journal;
use App\Models\Usaha;
use App\Models\User;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usahas = Usaha::all();
        $users = User::all();

        foreach ($usahas as $usaha) {
            $accounts = Account::where('usaha_id', $usaha->id)->get();
            $transactions = Transaction::where('usaha_id', $usaha->id)->get();

            for ($i = 1; $i <= 20; $i++) {
                $account = $accounts->random();
                $user = $users->random();
                $transaction = $transactions->random();

                $debitAmount = rand(0, 1) ? rand(100000, 5000000) : 0;
                $creditAmount = $debitAmount > 0 ? 0 : rand(100000, 5000000);

                Journal::create([
                    'usaha_id' => $usaha->id,
                    'journal_number' => 'JRNL' . str_pad($i, 6, '0', STR_PAD_LEFT),
                    'transaction_id' => $transaction->id,
                    'account_id' => $account->id,
                    'journal_date' => now()->subDays(rand(1, 30)),
                    'debit_amount' => $debitAmount,
                    'credit_amount' => $creditAmount,
                    'description' => 'Jurnal contoh ' . $i,
                    'is_posted' => true,
                    'created_by' => $user->id,
                    'updated_by' => $user->id,
                ]);
            }
        }
    }
}
