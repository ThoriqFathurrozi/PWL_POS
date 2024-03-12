<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //assign data
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'THF-001',
                'penjualan_tanggal' => '2024-03-06',
            ], [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Ani',
                'penjualan_kode' => 'THF-002',
                'penjualan_tanggal' => '2024-03-06',
            ], [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Tiara',
                'penjualan_kode' => 'THF-003',
                'penjualan_tanggal' => '2024-03-06',
            ], [
                'penjualan_id' => 4,
                'user_id' => 2,
                'pembeli' => 'Thor',
                'penjualan_kode' => 'THF-004',
                'penjualan_tanggal' => '2024-03-06',
            ], [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Dono',
                'penjualan_kode' => 'THF-005',
                'penjualan_tanggal' => '2024-03-06',
            ], [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Toni',
                'penjualan_kode' => 'THF-006',
                'penjualan_tanggal' => '2024-03-06',
            ], [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Hana',
                'penjualan_kode' => 'THF-007',
                'penjualan_tanggal' => '2024-03-06',
            ], [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Yasmin',
                'penjualan_kode' => 'THF-008',
                'penjualan_tanggal' => '2024-03-06',
            ], [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Nina',
                'penjualan_kode' => 'THF-009',
                'penjualan_tanggal' => '2024-03-06',
            ], [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Akbar',
                'penjualan_kode' => 'THF-010',
                'penjualan_tanggal' => '2024-03-06',
            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
