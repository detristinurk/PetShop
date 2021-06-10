<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategori = \App\Kategori::get();
        
        return view('admin.kategori.index', compact('kategori'));
    }

    public function create(){
        return view('admin.kategori.create');
    }

    public function store(Request $request){
        $nama_kategori = $request->nama_kategori;
    

        $kategori = new \App\Kategori;
        $kategori->nama_kategori = $nama_kategori;
        $kategori->save();

        return redirect('admin/kategori');
    }

    public function edit ($id){
        $kategori = \App\Kategori::find($id);
        return view('admin.kategori.update',compact('kategori'));
    }

    public function update(Request $request, $id){
    $nama_kategori = $request->nama_kategori;
    

    $kategori = \App\Kategori::find($id);
    $kategori->nama_kategori = $nama_kategori;
    $kategori->save();

    return redirect('admin/kategori');
    }

    public function destroy($id){
        $kategori = \App\Kategori::find($id);
        $kategori->delete();

        return redirect('/admin/kategori');
    }
}
