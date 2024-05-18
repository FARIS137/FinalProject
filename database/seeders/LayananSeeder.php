<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Isi data ke dalam tabel
        Layanan::create([
            'jenis_layanan' => 'Layanan 1',
            'harga' => 100000,
            'deskripsi' => 'Deskripsi layanan 1',
        ]);

        Layanan::create([
            'jenis_layanan' => 'Layanan 2',
            'harga' => 200000,
            'deskripsi' => 'Deskripsi layanan 2',
        ]);
    }
}
