<?php

namespace Database\Seeders;

use App\Models\Receivable;
use App\Models\Usaha;
use App\Models\Credit;
use Illuminate\Database\Seeder;

class ReceivableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usahas = Usaha::all();

        foreach ($usahas as $usaha) {
            $credits = Credit::where('usaha_id', $usaha->id)->get();

            foreach ($credits as $credit) {
                if ($credit->status === 'unpaid' && rand(0, 1)) {
                    $paymentAmount = rand($credit->remaining_amount * 0.1, $credit->remaining_amount * 0.5);

                    Receivable::create([
                        'usaha_id' => $usaha->id,
                        'credit_id' => $credit->id,
                        'payment_date' => now()->subDays(rand(1, 15)),
                        'payment_amount' => $paymentAmount,
                        'payment_method' => ['Transfer Bank', 'Tunai', 'Kartu Kredit'][array_rand(['Transfer Bank', 'Tunai', 'Kartu Kredit'])],
                        'notes' => 'Pembayaran piutang untuk kredit ' . $credit->id,
                    ]);
                }
            }
        }
    }
}
