@extends('../../layouts/backend')
@section('content')

  <div class="col-md-12">
         <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Form Create Produk</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" action="/admin/produk" method="post">
             {{csrf_field()}}
             <div class="box-body">
              <div class="form-group">
                <label >Id Kategori</label>
                <input type="text" name="kategori" class="form-control" placeholder="Masukkan Id Kategori">
              </div>
               <div class="form-group">
                 <label >Nama Produk</label>
                 <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan Nama Produk">
               </div>
               <div class="form-group">
                 <label>Merk Produk</label>
                 <input type="text" name="merk_produk" class="form-control" placeholder="Masukkan Merk Produk">
               </div>
               <div class="form-group">
                 <label>Harga Beli</label>
                 <input type="text" name="harga_beli" class="form-control" placeholder="Masukkan Harga Beli">
               </div>
               <div class="form-group">
                <label>Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control" placeholder="Masukkan Harga Jual">
              </div>
              <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" placeholder="Masukkan Stok">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Gambar</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Masukkan Gambar Produk</p>
              </div>
             </div>
             <!-- /.box-body -->

             <div class="box-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
             </div>
           </form>
         </div>
         <!-- /.box -->

@endsection
