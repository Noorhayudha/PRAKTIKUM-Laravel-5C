<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');
        Barang::insert([
        [
                'nama_barang' => 'Kursi',
                'merk' => 'Secretlab',
                'tipe' => 'Kursi Gaming',
                'satuan' => 'Unit',
                'created_at' => $now, 'updated_at' => $now
        ],
        [
                'nama_barang' => 'Kipas Angin',
                'merk' => 'Maspion',
                'tipe' => 'Kipas Angin dinding',
                'satuan' => 'Unit',
                'created_at' => $now, 'updated_at' => $now
        ],
        ]); 
    }
}
