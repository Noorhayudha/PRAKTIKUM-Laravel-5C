<?php

namespace Database\Seeders;

use App\Models\Pemasok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemasokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');
        Pemasok::insert([
        [
                'nama_pemasok' => 'CV Sinar Kadap',
                'nama_kontak' => 'Bimo',
                'nomor_hp' => '08000000000',
                'alamat' => 'Banjarbaru',
                'created_at' => $now, 'updated_at' => $now
        ],
        [
                'nama_pemasok' => 'CV Nubwo',
                'nama_kontak' => 'Royan',
                'nomor_hp' => '08100000001',
                'alamat' => 'Banjarmasin',
                'created_at' => $now, 'updated_at' => $now
        ],
        ]);
    }
}
