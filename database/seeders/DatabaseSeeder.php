<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Usaha;
use App\Models\Account;
use App\Models\Service;
use App\Models\Customer;
use App\Models\Asset;
use App\Models\Transaction;
use App\Models\Journal;
use App\Models\Credit;
use App\Models\Receivable;
use App\Models\Loan;
use App\Models\LoanTransaction;
use App\Models\TransactionItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            UsahaSeeder::class,
            AccountSeeder::class,
            ServiceSeeder::class,
            CustomerSeeder::class,
            AssetSeeder::class,
            TransactionSeeder::class,
            JournalSeeder::class,
            CreditSeeder::class,
            ReceivableSeeder::class,
            LoanSeeder::class,
            LoanTransactionSeeder::class,
            TransactionItemSeeder::class,
        ]);
    }
}
