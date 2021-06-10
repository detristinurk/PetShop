<?php

use Illuminate\Database\Seeder;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produk = new \App\Produk();
        $produk->id_kategori = "1";
        $produk->nama_produk = "Whiskash Dry Food 50gr";
        $produk->merk_produk = "Whiskash";
        $produk->harga_beli = "10000";
        $produk->harga_jual = "15000";
        $produk->stok = "10";
    }
}
