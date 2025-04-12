<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'nama_produk' => 'Bakso Urat',
            'harga' => 18000,
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Bakso Tenes',
            'harga' => 18000,
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Bakso Biasa',
            'harga' => 14000,
        ]);
    }
}
