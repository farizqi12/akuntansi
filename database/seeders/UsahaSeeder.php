<?php

namespace Database\Seeders;

use App\Models\Usaha;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Usaha::create([
                'user_id' => $user->id,
                'name' => 'Usaha ' . $user->name,
                'jenis' => 'jasa',
                'logo' => 'logo.png',
                'deskripsi_usaha' => 'Deskripsi usaha milik ' . $user->name,
                'alamat' => 'Jl. Contoh No. 123',
                'contact' => '08123456789',
            ]);
        }

        // Buat beberapa usaha tambahan tanpa menggunakan factory
        Usaha::create([
            'user_id' => $users->first()->id,
            'name' => 'Usaha Tambahan 1',
            'jenis' => 'dagang',
            'logo' => 'logo2.png',
            'deskripsi_usaha' => 'Usaha tambahan pertama',
            'alamat' => 'Jl. Tambahan No. 1',
            'contact' => '08234567890',
        ]);

        Usaha::create([
            'user_id' => $users->first()->id,
            'name' => 'Usaha Tambahan 2',
            'jenis' => 'manufaktur',
            'logo' => 'logo3.png',
            'deskripsi_usaha' => 'Usaha tambahan kedua',
            'alamat' => 'Jl. Tambahan No. 2',
            'contact' => '08345678901',
        ]);
    }
}
