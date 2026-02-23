<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('produks')->insert([
            [
                'nama_produk' => 'Laptop Asus VivoBook',
                'gambar' => 'laptop.jpg',
                'deskripsi' => 'Laptop dengan RAM 8GB dan SSD 512GB',
                'harga' => 7500000,
                'stok' => 10,
            ],
        ]);
    }
}
