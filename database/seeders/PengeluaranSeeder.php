<?php

namespace Database\Seeders;

use App\Models\Pengeluaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengeluaran::create([
            'jumlah' => 200000,
            'keterangan' => 'Denda Leting gak ikut duta',
            'tgl_pengeluaran' => "2023/02/01",
        ]);
        Pengeluaran::create([
            'jumlah' => 100000,
            'keterangan' => 'Acara',
            'tgl_pengeluaran' => "2023/10/01",
        ]);
        Pengeluaran::create([
            'jumlah' => 50000,
            'keterangan' => 'Terpakai buat acara',
            'tgl_pengeluaran' => "2023/01/25",
        ]);
    }
}
