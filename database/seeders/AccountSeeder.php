<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Usaha;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usahas = Usaha::all();

        foreach ($usahas as $usaha) {
            $standardAccounts = [
                // Aset
                ['1101', 'Kas', 'Asset'],
                ['1102', 'Bank', 'Asset'],
                ['1201', 'Piutang Usaha', 'Asset'],
                ['1202', 'Piutang Karyawan', 'Asset'],
                ['1301', 'Perlengkapan Kantor', 'Asset'],
                ['1401', 'Asuransi Dibayar Dimuka', 'Asset'],
                ['1501', 'Aset Tetap', 'Asset'],
                ['1502', 'Peralatan Kantor', 'Asset'],
                ['1503', 'Akum. Penyusutan Peralatan', 'Asset'],

                // Kewajiban
                ['2101', 'Utang Usaha', 'Liability'],
                ['2201', 'Utang Gaji', 'Liability'],
                ['2301', 'Pendapatan Diterima Dimuka', 'Liability'],
                ['2401', 'PPN Keluaran', 'Liability'],
                ['2501', 'Utang Bank', 'Liability'],

                // Ekuitas
                ['3101', 'Modal', 'Equity'],
                ['3102', 'Modal Pemilik', 'Equity'],
                ['3201', 'Prive', 'Equity'],

                // Pendapatan
                ['4101', 'Pendapatan Jasa', 'Revenue'],
                ['4201', 'Pendapatan Lain-lain', 'Revenue'],
                ['4301', 'Pendapatan Bunga', 'Revenue'],

                // Beban
                ['5101', 'Beban Gaji', 'Expense'],
                ['5201', 'Beban Administrasi dan Umum', 'Expense'],
                ['5301', 'Beban Sewa', 'Expense'],
                ['5401', 'Beban Listrik, Air, dan Telepon', 'Expense'],
                ['5501', 'Beban Penyusutan Peralatan', 'Expense'],
                ['5601', 'Beban Lain-lain', 'Expense'],
            ];

            foreach ($standardAccounts as [$code, $name, $type]) {
                Account::create([
                    'usaha_id' => $usaha->id,
                    'account_code' => $code,
                    'account_name' => $name,
                    'account_type' => $type,
                    'opening_balance' => rand(1000000, 5000000),
                    'balance' => rand(1000000, 5000000),
                    'is_active' => true,
                ]);
            }
        }
    }
}
