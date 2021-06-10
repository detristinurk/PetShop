    @extends('layouts.frontend')
@section('content')
<section class="banner-area" id="home">
  <div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-center">
      <div class="banner-content col-lg-6 col-md-6">
        <h1>
          SmartBuy  <br>
        </h1>
        <h2>
            Dapatkan rekomendasi kebutuhan hewan kesayanganmu <br>
            Berdasarkan Ceritamu <br>
            BISA <b>BELI SEBAGIAN </b> atau <b>BELI SEMUA </b>
        </h2>

      </div>
      <div class="banner-img col-lg-6 col-md-6">
        
      </div>
    </div>
  </div>
</section>

<section class="products-area section-gap">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 pb-40 header-text text-center">
        <h1 class="pb-10">Featured Product to Show</h1>
        <p>
          Who are in extremely love with pets.
        </p>
      </div>
    </div>
    @foreach ($produk as $produks)


    <div class="single-product">
      <div class="thumb">
        <img src="user/img/p1.jpg" alt="">
      </div>
      <div class="details">
        <h4>{{ $produks->nama_produk }}</h4>
        <p>
          Merk {{ $produks->merk_produk }}<br/>
          Harga {{ $produks->harga_jual }}
        </p>

      </div>
      <div class="thumb">
        <img src="user/img/p2.jpg" alt="">
      </div>
      <div class="details">
        <h4>{{ $produks->nama_produk }}</h4>
        <p>
          Merk {{ $produks->merk_produk }}<br/>
          Harga {{ $produks->harga_jual }}
        </p>

      </div>
      <div class="thumb">
        <img src="user/img/p3.jpeg" alt="">
      </div>
      <div class="details">
        <h4>{{ $produks->nama_produk }}</h4>
        <p>
          Merk {{ $produks->merk_produk }}<br/>
          Harga {{ $produks->harga_jual }}
        </p>

        
        
      </div>
    </div>
            @endforeach
    
      
   
    </div>
  </div>
</section>
@endsection