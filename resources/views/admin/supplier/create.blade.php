@extends('../../layouts/backend')
@section('content')

  <div class="col-md-12">
         <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Form Create Supplier</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" action="/admin/supplier" method="post">
            {{csrf_field()}}
            
             <div class="box-body">
               <div class="form-group">
                <label >Nama Supplier</label>
                <input type="text"  class="form-control" placeholder="Masukkan Nama Supplier">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text"  class="form-control" placeholder="Masukkan Alamat">
              </div>
              <div class="form-group">
                <label>No Telepon</label>
                <input type="text"  class="form-control" placeholder="Masukkan No Telepon">
              </div>
              <div class="form-group">
               <label>Produk</label>
               <input type="text" class="form-control" placeholder="Masukkan Produk">
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
