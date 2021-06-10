@extends('../../layouts/backend')
@section('content')

  <div class="col-md-12">
         <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Form Create Transaksi</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" action="/admin/transaksi" method="post">
            {{csrf_field()}}
                
             <div class="box-body">
               <div class="form-group">
                 <label for="exampleInputEmail1">Pilih Produk</label>
                 <select class="form-control" name="produk_id">
                  @foreach ($produk as $produks)
                  <option value="{{ $produks->id }}">{{ $produks->nama_produk }}</option>
                @endforeach
                 </select>
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1">Jumlah</label>
                 <input type="number" name="jumlah" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
