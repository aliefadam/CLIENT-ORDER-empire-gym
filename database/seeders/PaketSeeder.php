<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paket::create([
            "nama" => "Mahasiswa",
            "harga" => 235000,
            "fasilitas" => json_encode([
                "Akses ke semua fasilitas",
                "Booking paket personal trainer",
                "Tips seputar kebugaran",
                "Harga Khusus"
            ]),
        ]);

        Paket::create([
            "nama" => "Umum",
            "harga" => 250000,
            "fasilitas" => json_encode([
                "Akses ke semua fasilitas",
                "Booking paket personal trainer",
                "Tips seputar kebugaran",
                "Harga Khusus"
            ]),
        ]);
    }
}
