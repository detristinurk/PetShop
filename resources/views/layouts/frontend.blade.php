<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="user/img/paws.png">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>PetShop</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->

    <link rel="stylesheet" href="{{ URL::asset('user/css/linearicons.css')}}      ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/font-awesome.min.css')}} ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/bootstrap.css')}}        ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/magnific-popup.css')}}   ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/nice-select.css')}}      ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/hexagons.min.css')}}     ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/animate.min.css')}}      ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/owl.carousel.css')}}     ">
    <link rel="stylesheet" href="{{ URL::asset('user/css/main.css')}}             ">
    @yield('css')
  </head>
  <body>
      <header id="header" id="home">
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="/" style="color:white; font-size:24px;"><img src="user/img/paws.png" width="50px" height="50px" 
              alt="" title="PetShop" /> Kak PetShop</a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="/">Beranda</a></li>
                <li><a href="/list">List </a></li>
                  <li><a href="/login">Login</a></li>
                  <li><a href="/register">Register</a></li>
                  <li><a href="/about">About Us</a></li>
                
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </div>
      </header><!-- #header -->

      @yield('content')


    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="single-footer-widget">
              <h6><b>KakPetShop Online Pet Shop Terbaik di Indonesia</b></h6>
              <p><h5>Kami menyediakan beragam pet food <br>
                makanan kucing, makanan anjing, alat grooming <br> 
                mulai dari sampo, sikat, sisir, brush handy <br>
                untuk kucing kesayangan Anda. </h5></p>
            </div>
          </div>
          <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
            Copyright &copy;<script>document.write(new Date().getFullYear());
          </script> KakPetShop-All rights reserved 
          
           
        </div>

        
    </footer>
    <!-- End footer Area -->

    <script src="{{URL::asset('user/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{URL::asset('user/js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="{{URL::asset('user/js/easing.min.js')}}"></script>
    <script src="{{URL::asset('user/js/hoverIntent.js')}}"></script>
    <script src="{{URL::asset('user/js/superfish.min.js')}}"></script>
    <script src="{{URL::asset('user/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{URL::asset('user/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('user/js/hexagons.min.js')}}"></script>
    <script src="{{URL::asset('user/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{URL::asset('user/js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('user/js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('user/js/mail-script.js')}}"></script>
    <script src="{{URL::asset('user/js/main.js')}}"></script>
    @yield('js')
  </body>
</html>