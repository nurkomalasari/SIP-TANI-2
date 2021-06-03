@extends('user.app')
@section('content')
<div class="header">
    <div class="container-fluid">
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
                            <p class="mb-4">Toko Anang menyediakan kebutuhan pertanian, kualitas terjamin 100%. </p>
                            <a class="btn" href="{{ route('user.produk') }}"><i class="fa fa-shopping-cart"></i>Shop Now</a>

                            <p>

                        </div>
                    </div>
                    <div class="header-slider-item">
                        <img src="{{ asset('estore') }}/img/kebun.jpg" alt="Slider Image" />
                        {{-- <div class="header-slider-caption">
                            <p class="mb-4">Toko Anang menyediakan kebutuhan pertanian, kualitas terjamin 100%. </p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                        </div> --}}
                    </div>
                    <div class="header-slider-item">
                        <img src="{{ asset('estore') }}/img/sayur.jpg" alt="Slider Image" />
                        {{-- <div class="header-slider-caption">
                            <p>Some text goes here that describes the image</p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="header-img">

                    <div class="elementor-widget-container">
                        <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                <iframe class="elementor-video-iframe" allowfullscreen="" src="https://www.youtube.com/embed/kZkfUg2x52I?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>		</div>
                    </div>

                    <div class="elementor-widget-container">
                        <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                <iframe class="elementor-video-iframe" allowfullscreen="" src="https://www.youtube.com/embed/MJ4-vKmV94s?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>		</div>
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
                        Pembayaran Menggunakan Pembayaran Digital 100% Aman
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-truck"></i>
                    <h2>Worldwide Delivery</h2>
                    <p>
                        Pesanan Dapat Diambil Langsung Di Toko Tanpa Antre
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-sync-alt"></i>
                    <h2>90 Days Return</h2>
                    <p>
                        Barang Dapat Dikembalikan Jika Tidak Sesuai
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-comments"></i>
                    <h2>24/7 Support</h2>
                    <p>
                        Pelayanan Dengan Respon Tanggap 24 Jam
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
                <h1>Hubungi Kami Pada Nomor</h1>
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
                            <img src="{{ asset('storage/'.$produk->image) }}" alt="Product Image" alt="Product Image" alt="Image placeholder" class="img-fluid" width="100%" style="height:200px">
                        </a>
                        <div class="product-action">
                            <h3><span>Stok : </span> {{$produk->stok}} </h3>
                        </div>
                    </div>
                    <div class="product-price">
                        <h5><span>Rp. </span>{{ number_format($produk->price)}}</h5>
                        <a class="btn" href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>

 @endsection



