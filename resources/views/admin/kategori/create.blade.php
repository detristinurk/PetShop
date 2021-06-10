@extends('../../layouts/backend')
@section('content')

  <div class="col-md-12">
         <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Form Create Kategori</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" action="/admin/kategori" method="post">
            {{csrf_field()}}>
            
             <div class="box-body">
               <div class="form-group">
                 <label >Nama Kategori</label>
                 <input type="text" name="nama_kategori" class="form-control" placeholder="Masukkan Nama Produk">
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
