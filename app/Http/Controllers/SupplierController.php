<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $supplier = \App\Supplier::get();
        
        return view('admin.supplier.index', compact('supplier'));
    }

    public function create(){
        return view('admin.supplier.create');
    }

    public function store(Request $request){
    $nama_supplier = $request->nama_supplier;
    $alamat = $request->alamat;
    $telepon = $request->telepon;
    $produk_supplier = $request->produk_supplier;
    

    $supplier = new \App\Supplier;
    $supplier->nama_supplier = $nama_supplier;
    $supplier->alamat = $alamat;
    $supplier->telepon = $telepon;
    $supplier->produk_supplier = $produk_supplier;
    
    $supplier->save();

    return redirect('admin/supplier');
    }

    public function edit ($id){
        $supplier = \App\Supplier::find($id);
        return view('admin.supplier.update',compact('supplier'));
    }

    public function update(Request $request, $id){
        $nama_supplier = $request->nama_supplier;
        $alamat = $request->alamat;
        $telepon = $request->telepon;
        $produk_supplier = $request->produk_supplier;
        
    
        $supplier = \App\Supplier::find($id);
        $supplier->nama_supplier = $nama_supplier;
        $supplier->alamat = $alamat;
        $supplier->telepon = $telepon;
        $supplier->produk_supplier = $produk_supplier;
        
        $supplier->save();
    
        return redirect('admin/supplier');
    }

    public function destroy($id){
        $supplier = \App\Produk::find($id);
        $supplier->delete();

        return redirect('/admin/supplier');
    }
}
