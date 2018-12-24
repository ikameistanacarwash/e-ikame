
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.png')}}">

    <title>Fixed top navbar example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

    <!-- Flexslider-->
    <link rel="stylesheet" href="{{ asset('css/vendor/flexslider.css')}}" type="text/css" media="screen" />

    <!--slider-->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="{{ asset('css/flickity.css')}}" media="screen">

    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('css/flickity.pkgd.min.js')}}"></script>

    <style>
      #navbar {
        overflow: hidden;
        background-color: #333;
        z-index: 999;
      }

      #navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }

      #navbar a:hover {
        background-color: #ddd;
        color: black;
      }

      #navbar a.active {
        background-color: #4CAF50;
        color: white;
      }

      .content {
        padding: 16px;
      }

      .sticky {
        position: fixed;
        top: 0;
        width: 100%;
      }

      .sticky + .content {
        padding-top: 60px;
      }

      .logo-50{
        width: 60%;
      }

      .header__search__input {
          background: #fff;
          opacity: .9;
          border: 0;
          padding: 11px 15px;
          padding-right: 40px;
          color: #000;
          width: 100%;
      }

      /* .header__search__submit{padding:0 10px;position:absolute;right:0;top:0;bottom:0; width: 10px;} */
    </style>

  </head>

<body>

  <div class="header-top bg-orange  border-bottom">
    <div class="container nopadding3">
      <div class="nav-scroller hide-on-mobile">
        <nav class="nav nav-underline" style="font-size: 10pt;">
          <a class="nav-link" href="{{ url('/')}}">Home</a>
          <a class="nav-link" href="#">Cara Belanja</a>
          <a class="nav-link" href="#">Konfirmasi Pembayaran</a>
          <a class="nav-link" href="#">Nomor Rekening </a>
          <a class="nav-link" href="#">Tentang </a>
        </nav>
      </div>
    </div>
  </div>


  <div id="navbar">
    <div class="d-flex flex-column flex-md-row align-items-center px-md-4 bg-orange box-shadow" id="myHeader">
      <div class="container mt-2 mb-2">
        <div class="row">
          
              <div class="col-6 col-md-3">
                <!--<img class="mt-2 mb-2" src="https://barokah.shope/assets/img/barokahshope.png" alt="" width="48" height="48">-->
               
                <img id="logoIkm" width="100%" class="my-0 mr-md-auto logo-mb" src="{{ asset('image/logo_ikame_putih2.png')}}">           
              </div>

              <div class="col-4 col-md-6 hide-on-mobile">
                <form method="get" id="searchform" action="#">
                  <div class="input-group mt-1 ">
                    <input type="search" style="background-color:#f3f3f3bf; border: 0px solid #ced4da; border-radius: 0rem" class="form-control" placeholder="cari alat cuci mobil dan motor" value="" name="s" id="s">
                  </div>
                </form>
              </div>

              <div class="col-6 col-md-3">
                <nav class="navbar navbar-light flot-right" style="padding: .2rem .0rem; float: right;">
                    
                    <div class="mr-3 hide-on-mobile"><a href="#">Login</a> <a href="#">Daftar</a></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="width: 20px; color: #343a40;" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hide-on-tab feather feather-search mr-0 mt-2 pencarian collapsed" style="width: 20px; color: #343a40;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </nav>
              </div>

          </div>
        </div>
    </div>
  </div>

  <div class="content pt-0 pb-0">
    <div class="row">
        <div class="container nopadding2">
           
          <div class="col-md-12 nopadding2">
             <div class="cat__menu">
                          asdsd
                  </div>
               <!-- Flickity HTML init -->
               <div class="carousel" data-flickity='{ "contain": true, "autoPlay": 5000}'>
                
                        <div class="col-md-12 nopadding2 pr-0">
                          <div class="card img-produk">
                            <img class="card-img-top" src="https://alatcucianmobiljakarta.com/wp-content/uploads/2018/08/header-slider2.jpg" alt="">
                          </div>
                        </div>
                        <div class="col-md-12 nopadding2 pr-0">
                          <div class="card img-produk">
                            <img class="card-img-top" src="https://alatcucianmobiljakarta.com/wp-content/uploads/2018/08/header-slider1.jpg" alt="">
                          </div>
                        </div>
              </div>
              


          </div>
        </div>
    </div>
  </div>

  <div class="content">
    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
      </div>
    </main>
  </div>

  <div class="content">
    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
      </div>
    </main>
  </div>

  <div class="content">
    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
      </div>
    </main>
  </div>

  <div class="content">
    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
      </div>
    </main>
  </div>
    
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('js/vendor/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

    <script>
      window.onscroll = function() {myFunction()};

      var navbar = document.getElementById("navbar");
      var logoikm = document.getElementById("logoIkm");
      var sticky = navbar.offsetTop;

      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
          logoikm.classList.add("logo-50")
        } else {
          navbar.classList.remove("sticky");
          logoikm.classList.remove("logo-50")
        }
      }
    </script>

  </body>
</html>
