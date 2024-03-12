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

        // 
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 2,
                'barang_kode' => 'THF001',
                'barang_nama' => 'Pocari Seared',
                'harga_beli' => 10000,
                'harga_jual' => 12000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'THF002',
                'barang_nama' => 'Aqua 600ml',
                'harga_beli' => 3000,
                'harga_jual' => 5000
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'THF003',
                'barang_nama' => 'HP Deskjet 2135',
                'harga_beli' => 450000,
                'harga_jual' => 500000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'barang_kode' => 'THF004',
                'barang_nama' => 'Kaos Oblong',
                'harga_beli' => 40000,
                'harga_jual' => 50000
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'barang_kode' => 'THF005',
                'barang_nama' => 'Baterai AA',
                'harga_beli' => 8000,
                'harga_jual' => 10000
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'THF006',
                'barang_nama' => 'Mie Instan',
                'harga_beli' => 2500,
                'harga_jual' => 3000
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'THF007',
                'barang_nama' => 'Teh Botol',
                'harga_beli' => 3000,
                'harga_jual' => 5000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'THF008',
                'barang_nama' => 'Mouse Logitech',
                'harga_beli' => 80000,
                'harga_jual' => 100000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'THF009',
                'barang_nama' => 'Kemeja Lengan Panjang',
                'harga_beli' => 70000,
                'harga_jual' => 80000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'THF010',
                'barang_nama' => 'Kabel Data',
                'harga_beli' => 15000,
                'harga_jual' => 20000
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
