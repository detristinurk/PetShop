<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produk = \App\Produk::get();
        
        return view('admin.produk.index', compact('produk'));
    }

    public function create(){
        return view('admin.produk.create');
    }

    public function store(Request $request){
    $id_kategori = $request->id_kategori;
    $nama_produk = $request->nama_produk;
    $merk_produk = $request->merk_produk;
    $harga_beli = $request->harga_beli;
    $harga_jual = $request->harga_jual;
    $stok = $request->stok;
    $foto = $request->foto;

    $produk = new \App\Produk;
    $produk->id_kategori = $id_kategori;
    $produk->nama_produk = $nama_produk;
    $produk->merk_produk = $merk_produk;
    $produk->harga_beli = $harga_beli;
    $produk->harga_jual = $harga_jual;
    $produk->stok = $stok;
    $produk->foto = $foto;
    $produk->save();

    return redirect('admin/produk');
    }

    public function edit ($id){
        $produk = \App\Produk::find($id);
        return view('admin.produk.update',compact('produk'));
    }

    public function update(Request $request, $id){
    $id_kategori = $request->id_kategori;
    $nama_produk = $request->nama_produk;
    $merk_produk = $request->merk_produk;
    $harga_beli = $request->harga_beli;
    $harga_jual = $request->harga_jual;
    $stok = $request->stok;
    $foto = $request->foto;

    $produk = \App\Produk::find($id);
    $produk->id_kategori = $id_kategori;
    $produk->nama_produk = $nama_produk;
    $produk->merk_produk = $merk_produk;
    $produk->harga_beli = $harga_beli;
    $produk->harga_jual = $harga_jual;
    $produk->stok = $stok;
    $produk->foto = $foto;
    $produk->save();

    return redirect('admin/produk');
    }

    public function destroy($id){
        $produk = \App\Produk::find($id);
        $produk->delete();

        return redirect('/admin/produk');
    }
}
