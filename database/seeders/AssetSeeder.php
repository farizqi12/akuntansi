<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Usaha;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usahas = Usaha::all();

        foreach ($usahas as $usaha) {
            $assets = [
                [
                    'asset_name' => 'Komputer Desktop',
                    'asset_group' => 'group_1',
                    'acquisition_value' => 8000000,
                    'useful_life' => 5,
                    'residual_value' => 1000000,
                ],
                [
                    'asset_name' => 'Printer Laser',
                    'asset_group' => 'group_2',
                    'acquisition_value' => 3000000,
                    'useful_life' => 3,
                    'residual_value' => 500000,
                ],
                [
                    'asset_name' => 'Kendaraan Operasional',
                    'asset_group' => 'building',
                    'acquisition_value' => 150000000,
                    'useful_life' => 10,
                    'residual_value' => 15000000,
                ],
                [
                    'asset_name' => 'Furniture Kantor',
                    'asset_group' => 'other',
                    'acquisition_value' => 12000000,
                    'useful_life' => 8,
                    'residual_value' => 2000000,
                ],
                [
                    'asset_name' => 'Server',
                    'asset_group' => 'group_3',
                    'acquisition_value' => 25000000,
                    'useful_life' => 5,
                    'residual_value' => 3000000,
                ],
            ];

            foreach ($assets as $asset) {
                $depreciation = ($asset['acquisition_value'] - $asset['residual_value']) / $asset['useful_life'];

                Asset::create([
                    'usaha_id' => $usaha->id,
                    'asset_name' => $asset['asset_name'],
                    'asset_group' => $asset['asset_group'],
                    'acquisition_value' => $asset['acquisition_value'],
                    'useful_life' => $asset['useful_life'],
                    'residual_value' => $asset['residual_value'],
                    'depreciation_value' => $depreciation,
                    'book_value' => $asset['acquisition_value'] - $depreciation,
                ]);
            }

            // Buat beberapa asset tambahan tanpa menggunakan factory
            $additionalAssets = [
                [
                    'asset_name' => 'Laptop',
                    'asset_group' => 'group_1',
                    'acquisition_value' => 12000000,
                    'useful_life' => 4,
                    'residual_value' => 2000000,
                ],
                [
                    'asset_name' => 'Scanner',
                    'asset_group' => 'group_2',
                    'acquisition_value' => 2500000,
                    'useful_life' => 3,
                    'residual_value' => 500000,
                ],
                [
                    'asset_name' => 'AC Split',
                    'asset_group' => 'other',
                    'acquisition_value' => 6000000,
                    'useful_life' => 7,
                    'residual_value' => 1000000,
                ],
            ];

            foreach ($additionalAssets as $asset) {
                $depreciation = ($asset['acquisition_value'] - $asset['residual_value']) / $asset['useful_life'];

                Asset::create([
                    'usaha_id' => $usaha->id,
                    'asset_name' => $asset['asset_name'],
                    'asset_group' => $asset['asset_group'],
                    'acquisition_value' => $asset['acquisition_value'],
                    'useful_life' => $asset['useful_life'],
                    'residual_value' => $asset['residual_value'],
                    'depreciation_value' => $depreciation,
                    'book_value' => $asset['acquisition_value'] - $depreciation,
                ]);
            }
        }
    }
}
