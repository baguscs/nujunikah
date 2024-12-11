<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Vendor::create([
                'nama' => 'Vendor Vanue' . $i,
                'kategori' => Vendor::CATEGORI_VANUE,
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            Vendor::create([
                'nama' => 'Vendor Catering' . $i,
                'kategori' => Vendor::CATEGORI_CATERING,
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            Vendor::create([
                'nama' => 'Vendor Photo and Video' . $i,
                'kategori' => Vendor::CATEGORI_PHOTO_AND_VIDEO,
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            Vendor::create([
                'nama' => 'Vendor Entertainment' . $i,
                'kategori' => Vendor::CATEGORI_ENTERTAINMENT,
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            Vendor::create([
                'nama' => 'Vendor Decoration' . $i,
                'kategori' => Vendor::CATEGORI_DECORATION,
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            Vendor::create([
                'nama' => 'Vendor MUA' . $i,
                'kategori' => Vendor::CATEGORI_MUA,
            ]);
        }
    }
}
