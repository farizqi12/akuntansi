<?php

namespace Database\Seeders;

use App\Models\TransactionItem;
use App\Models\Transaction;
use App\Models\Service;
use Illuminate\Database\Seeder;

class TransactionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = Transaction::all();

        foreach ($transactions as $transaction) {
            $services = Service::where('usaha_id', $transaction->usaha_id)->get();

            // Setiap transaksi memiliki 1-3 item
            $itemCount = rand(1, 3);

            for ($i = 0; $i < $itemCount; $i++) {
                $service = $services->random();
                $quantity = rand(1, 5);
                $subtotal = $service->price * $quantity;

                TransactionItem::create([
                    'transaction_id' => $transaction->id,
                    'service_id' => $service->id,
                    'price' => $service->price,
                    'quantity' => $quantity,
                    'unit' => 'pcs',
                    'subtotal' => $subtotal,
                ]);
            }
        }
    }
}
