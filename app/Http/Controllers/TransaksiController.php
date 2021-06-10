<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
  public function index()
  {
     $transaksi = \App\Transaksi::join('users','transaksis.user_id','=','users.id')->
     join('produks','transaksis.produk_id','=','produks.id_produk')->get();

    return view('admin.transaksi.index', compact('transaksi'));
  }

  public function create()
  {
    $produk = \App\Produk::get();
    return view('admin.transaksi.create',compact('produk'));
  }

  public function store(Request $request)
  {
    $jumlah = $request->jumlah;
    $produk_id = $request->produk_id;

    $transaksi = new \App\Transaksi;
    $transaksi->jumlah = $jumlah;
    $transaksi->user_id =\Auth::user()->id;
    $transaksi->produk_id = $produk_id;
    $transaksi->save();

    return redirect('admin/transaksi');
  }

  public function edit($id)
  {
      $produk = \App\Transaksi::find($id);
      return view('admin.transaksi.update', compact('transaksi'));
  }

  public function update(Request $request, $id)
  {

    $jumlah = $request->jumlah;
    $produk_id = $request->produk_id;
    

    $transaksi = \App\Transaksi::find($id);
    $transaksi->jumlah = $jumlah;
    $transaksi->user_id =\Auth::user()->id;
    $transaksi->produk_id = $produk_id;
    $transaksi->save();

    return redirect('admin/transaksi');
  }

  public function destroy($id)
  {
    $transaksi = \App\Transaksi::find($id);
    $transaksi->delete();

    return redirect('/admin/transaksi');
  }
}
