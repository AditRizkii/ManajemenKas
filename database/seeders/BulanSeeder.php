<?php

namespace Database\Seeders;

use App\Models\Bulan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BulanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bulan::create([
            'nama' => "Januari",
            'tahun' => "2023",
            'pembayaran_perminggu' => 5000,
            'total' => 0,
        ]);

        Bulan::create([
            'nama' => "Februari",
            'tahun' => "2023",
            'pembayaran_perminggu' => 5000,
            'total' => 0,
        ]);
    }
}
