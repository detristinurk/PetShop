@extends('layouts.frontend')
@section('content')
  <section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-black">
            Products
          </h1>
          <p class="text-black link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="products.html"> Products</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

  <!-- Start products Area -->
  <section class="products-area product-page section-gap">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 pb-40 header-text text-center">
          <h1 class="pb-10">Featured Pets Products to Show</h1>
          <p>
          Who are in extremely love with pets.
          </p>
        </div>
      </div>
      <div class="row">
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
        </div>
                @endforeach
     
    </div>
    </div>
  </section>
  <!-- End products Area -->
@endsection