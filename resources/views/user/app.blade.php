<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SIP TANI</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="{{ asset('estore') }}/img/icon.png" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('estore') }}/lib/slick/slick.css" rel="stylesheet">
        <link href="{{ asset('estore') }}/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('estore') }}/css/style.css" rel="stylesheet">
        {{-- tamplate shopper --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{ asset('shopper') }}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    {{-- <link rel="stylesheet" href="{{ asset('shopper') }}/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('shopper') }}/css/magnific-popup.css"> --}}
    <link rel="stylesheet" href="{{ asset('shopper') }}/css/jquery-ui.css">
    {{-- <link rel="stylesheet" href="{{ asset('shopper') }}/css/owl.carousel.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('shopper') }}/css/owl.theme.default.min.css"> --}}


    {{-- <link rel="stylesheet" href="{{ asset('shopper') }}/css/aos.css"> --}}

    {{-- <link rel="stylesheet" href="{{ asset('shopper') }}/css/style.css"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        Anang_Tani@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +628997339640
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->

        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">

                            <li class="{{ Request::path() === '/' ? '' : '' }}"><a href="{{ route('home') }}" class="nav-item nav-link">Home</a></li>
                            <li class="{{ Request::path() === 'produk' ? '' : '' }}"><a href="{{ route('user.produk') }}" class="nav-item nav-link">Produk</a></li>

                            <li class="{{ Request::path() === 'kontak' ? '' : '' }}"><a href="{{ route('kontak') }}" class="nav-item nav-link">Profil</a>
                            </li>


                        </div>

                        <div class="dropdown">
                                <div class="site-top-icons">
                                    <ul>
                                    @if (Route::has('login'))
                                          @auth

                                                <div class="dropdown">
                                                  <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <span> <i class="fas fa-user-circle"></i> {{ Auth::user()->name }} </span>
                                                  </a>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                      <a class="dropdown-item" href="{{ route('user.alamat') }}">Pengaturan Alamat</a>
                                                      {{-- <a class="dropdown-item" href="#">Pengaturan Akun</a> --}}
                                                      <a class="dropdown-item" href="#">

                                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                      document.getElementById('logout-form').submit();">
                                                        <i class="mdi mdi-logout mr-2 text-primary"></i> Logout
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                  </div>
                                                  </div>


                                          @else

                                          {{-- <button type="button" class="btn btn-success active"> <a href="{{ route('login') }}"></a>Login</button> --}}
                                          {{-- <li class="get-started"><a href="{{ url('/register') }}" class="nav-item nav-link ">Daftar Konsumen</a></li> --}}

                                          <div class="dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>

                      {{--
                                                      <span class="icon icon-person"></span> --}}
                                                  </a>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                      <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                                      @if (Route::has('register'))
                                                        <a class="dropdown-item" href="{{ route('register') }}">Registrasi</a>
                                                      @endif
                                                  </div>
                                                  </div>
                                          @endauth
                                      </div>
                                  @endif
                                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                                  </div>
                                  </ul>
                                  </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('estore') }}/img/siptani.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <form action="{{ route('user.produk.cari') }}" method="get" class="site-block-top-search" >
                                @csrf
                                {{-- <span class="icon icon-search2"></span> --}}
                                <input type="text" class="form-control border-2" name="cari" placeholder="Search">
                              </form>
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            @if (Route::has('login'))
                            @auth
                            <?php
                                                  $user_id = \Auth::user()->id;
                                                  $total_keranjang = \DB::table('keranjang')
                                                  ->select(DB::raw('count(id) as jumlah'))
                                                  ->where('user_id',$user_id)
                                                  ->first();
                                                ?>
                                                  <a href="{{ route('user.keranjang') }}"class="btn" class="letter-1">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span class="count">{{ $total_keranjang->jumlah }}</span>

                                                </a>


                                                    <?php
                                                        $user_id = \Auth::user()->id;
                                                        $total_order = \DB::table('order')
                                                        ->select(DB::raw('count(id) as jumlah'))
                                                        ->where('user_id',$user_id)
                                                        ->where('status_order_id','!=',5)
                                                        ->where('status_order_id','!=',6)
                                                        ->first();
                                                      ?>
                                                    <a href="{{ route('user.order') }}" class="btn">
                                                        <i class="fas fa-shopping-bag"></i>
                                                        <span class="count">{{ $total_order->jumlah }}</span>
                                                        </a>

                            @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
            {{-- <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class=" navbar bg-success">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="bg-success">
                                            <td> <strong> KATEGORI PRODUK</strong></td>
                                        </tr>
                                        @foreach($categories as $categori)
                                            <tr>
                                                <td> <strong><a href="{{ route('user.kategori',['id' => $categori->id]) }}" class="d-flex"><span>{{ $categori->name }}</span> <span class="text-black ml-auto">( {{ $categori->jumlah }} )</span></a></strong></td>
                                            </tr>

                                            @endforeach


                                    </thead>
                                </table>



                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="{{ asset('estore') }}/img/sawah.jpeg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href="{{ route('user.produk') }}"><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                    <p class="mb-4">Toko Anang menyediakan kebutuhan pertanian, kualitas terjamin 100%. </p>
                                    <p>

                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="{{ asset('estore') }}/img/kebun.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="{{ asset('estore') }}/img/sayur.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="{{ asset('estore') }}/img/pupukok.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="{{ asset('estore') }}/img/panen.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Secure Payment</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Worldwide Delivery</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>90 Days Return</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Support</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any Request</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+628997339640</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Produk Anang Tani</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    @foreach($produks as $produk)

                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">{{ $produk->name }}</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="{{ asset('storage/'.$produk->image) }}" alt="Product Image">
                                </a>
                                <div class="product-action">

                                    <h3><span>Stok : </span> {{$produk->stok}} </h3>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rp. </span>{{ number_format($produk->price)}}</h3>

                                <a class="btn" href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>  --}}



        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">


                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="{{ asset('estore') }}/img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="{{ asset('estore') }}/img/godaddy.svg" alt="Payment Security" />
                            <img src="{{ asset('estore') }}/img/norton.svg" alt="Payment Security" />
                            <img src="{{ asset('estore') }}/img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">Anang Tani 2021</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">Anang Tani</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> --}}
        <script src="{{ asset('estore') }}/lib/easing/easing.min.js"></script>
        <script src="{{ asset('estore') }}/lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('estore') }}/js/main.js"></script>
{{-- tamplate shopper --}}
        <script src="{{ asset('shopper') }}/js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
        <script src="{{ asset('shopper') }}/js/jquery-ui.js"></script>
        <script src="{{ asset('shopper') }}/js/popper.min.js"></script>
        <script src="{{ asset('shopper') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('shopper') }}/js/owl.carousel.min.js"></script>
        <script src="{{ asset('shopper') }}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('shopper') }}/js/aos.js"></script>

        <script src="{{ asset('shopper') }}/js/main.js"></script>
          @yield('js')
    </body>
</html>
