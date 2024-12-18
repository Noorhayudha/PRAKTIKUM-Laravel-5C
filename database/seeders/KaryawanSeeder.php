<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');
        Karyawan::insert([
        [
                'nama_karyawan' => 'Noer',
                'nomor_hp' => '082111111111',
                'alamat' => 'Banjarbaru',
                'created_at' => $now, 'updated_at' => $now
        ],
        [
                'nama_karyawan' => 'Sukma',
                'nomor_hp' => '082122222222',
                'alamat' => 'Banjarmasin',
                'created_at' => $now, 'updated_at' => $now
        ],
        ]);
    }
}
