<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function index()
  {
     $produk = \App\Produk::get();

    return view('index', compact('produk'));
  }

  public function list()
  {
     $produk = \App\Produk::get();
    return view('list',compact('produk'));
  }

  public function logout()
  {
    \Auth::logout();
      return redirect('/');
  }

  public function beli($id)
  {

      $transaksi = new \App\Transaksi;
      $transaksi->jumlah = 1;
      $transaksi->user_id =\Auth::user()->id;
      $transaksi->produk_id = $id;
      $transaksi->save();

      return redirect('/user/myproduct');
  }

  public function myproduct()
  {
    $produk = \App\Transaksi::where('user_id','=',\Auth::user()->id)->get();
    return view('user/myproduct',compact('produk'));
  }
}
