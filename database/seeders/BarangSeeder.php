<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kodeBarang' => 'PRD001',
                'namaBarang' => ' Indomie',
                'kategoriBarang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100'
            ],
            [
                'kodeBarang' => 'PRD002',
                'namaBarang' => ' Pocari Sweat',
                'kategoriBarang' => 'Minuman',
                'harga' => '6000',
                'qty' => '50'
            ],
            [
                'kodeBarang' => 'PRD003',
                'namaBarang' => ' Silverqueen',
                'kategoriBarang' => 'Snack',
                'harga' => '12500',
                'qty' => '45'
            ],
            [
                'kodeBarang' => 'PRD004',
                'namaBarang' => 'Buku Tulis',
                'kategoriBarang' => 'ATK',
                'harga' => '2500',
                'qty' => '60'
            ],
            [
                'kodeBarang' => 'PRD005',
                'namaBarang' => 'Bakso',
                'kategoriBarang' => 'Makanan',
                'harga' => '7000',
                'qty' => '20'
            ],
            [
                'kodeBarang' => 'PRD006',
                'namaBarang' => 'Es Teh',
                'kategoriBarang' => 'Minuman',
                'harga' => '4500',
                'qty' => '50'
            ],
            [
                'kodeBarang' => 'PRD007',
                'namaBarang' => 'Milo',
                'kategoriBarang' => 'Minuman',
                'harga' => '5500',
                'qty' => '28'
            ],
            [
                'kodeBarang' => 'PRD008',
                'namaBarang' => 'Susu Hilo',
                'kategoriBarang' => 'Minuman',
                'harga' => '8000',
                'qty' => '70'
            ],
            [
                'kodeBarang' => 'PRD009',
                'namaBarang' => 'Nescaffe',
                'kategoriBarang' => 'Minuman',
                'harga' => '5000',
                'qty' => '82'
            ],
            [
                'kodeBarang' => 'PRD010',
                'namaBarang' => 'Chocolato',
                'kategoriBarang' => 'Snack',
                'harga' => '2000',
                'qty' => '100'
            ],
            [
                'kodeBarang' => 'PRD011',
                'namaBarang' => 'Roma Sarigamdum',
                'kategoriBarang' => 'Snack',
                'harga' => '6500',
                'qty' => '43'
            ],
            [
                'kodeBarang' => 'PRD012',
                'namaBarang' => 'Sari Roti',
                'kategoriBarang' => 'Makanan',
                'harga' => '15000',
                'qty' => '27'
            ],
            [
                'kodeBarang' => 'PRD013',
                'namaBarang' => 'Bulpoint',
                'kategoriBarang' => 'ATK',
                'harga' => '4000',
                'qty' => '20'
            ],
            [
                'kodeBarang' => 'PRD014',
                'namaBarang' => 'Pensil',
                'kategoriBarang' => 'ATK',
                'harga' => '7000',
                'qty' => '20'
            ],
            [
                'kodeBarang' => 'PRD015',
                'namaBarang' => 'Buku Gambar',
                'kategoriBarang' => 'ATK',
                'harga' => '10000',
                'qty' => '40'
            ],
            [
                'kodeBarang' => 'PRD016',
                'namaBarang' => 'Nabati',
                'kategoriBarang' => 'Snack',
                'harga' => '2000',
                'qty' => '24'
            ],
            [
                'kodeBarang' => 'PRD017',
                'namaBarang' => 'Chees Keju',
                'kategoriBarang' => 'Snack',
                'harga' => '2500',
                'qty' => '35'
            ],
            [
                'kodeBarang' => 'PRD018',
                'namaBarang' => 'Lays Kentang',
                'kategoriBarang' => 'Snack',
                'harga' => '4500',
                'qty' => '65'
            ],
            [
                'kodeBarang' => 'PRD019',
                'namaBarang' => 'Mie Sedap',
                'kategoriBarang' => 'Makanan',
                'harga' => '2500',
                'qty' => '100'
            ],
            [
                'kodeBarang' => 'PRD020',
                'namaBarang' => 'Makeroni',
                'kategoriBarang' => 'Snack',
                'harga' => '500',
                'qty' => '86'
            ],            
        ];
        DB::table('barang')->insert($data);
    }
}
