<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kodebarang' => '8001',
                'namabarang' => 'Anaking',
                'hargabarang' => 20000,
                'deskripsibarang' => 'barang favorite',
                'satuan_id' => 1
            ],
            [
                'kodebarang' => '8001',
                'namabarang' => 'Anaking',
                'hargabarang' => 20000,
                'deskripsibarang' => 'barang favorite',
                'satuan_id' => 2
            ],
            [
                'kodebarang' => '8001',
                'namabarang' => 'Anaking',
                'hargabarang' => 20000,
                'deskripsibarang' => 'barang favorite',
                'satuan_id' => 3
            ],
        ]);
    }
}
