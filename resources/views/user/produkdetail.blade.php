@extends('user.app')
@section('content').
<div class="product-detail">
    <div class="container-fluid">
 <div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Detail Produk</strong></div>
    </div>
    </div>

<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                <img src="{{ asset('storage/'.$produk->image) }}" alt=""style="width: 350px" class="card-img-top">

                        </div>
                        <div class="col-md-7">
                            <h3>{{$produk->name}}</h3>
                            <table class="table ">
                                <thead>

                                        <tr>
                                            <td> <strong>Harga</strong></td>
                                            <td>:</td>
                                            <td>RP. {{number_format($produk->price)}}</td>
                                        </tr>
                                        {{-- <tr>
                                            <td> <strong>Deskripsi</strong> </td>
                                            <td>:</td>
                                            <td>{{$produk->description}}</td>
                                        </tr> --}}
                                        <tr>
                                            <td> <strong>Stok</strong> </td>
                                            <td>:</td>
                                            <td>{{$produk->stok}}</td>
                                        </tr>


                                        <tr>
                                            <td><strong>Jumlah Pesanan</strong></td>
                                            <td>:</td>
                                            <td>
                                                <div class="mb-5">
                                                    <form action="{{ route('user.keranjang.simpan') }}" method="post">
                                                        @csrf
                                                        @if(Route::has('login'))
                                                            @auth
                                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                            @endauth
                                                        @endif
                                                    <input type="hidden" name="products_id" value="{{ $produk->id }}">
                                                    <small>Sisa Stok {{ $produk->stok }}</small>
                                                    <input type="hidden" value="{{ $produk->stok }}" id="sisastok">
                                                    <div class="input-group mb-3" style="max-width: 120px;">
                                                    <div class="input-group-prepend">

                                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                                    </div>
                                                    <input type="text" name="qty" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                    <div class="input-group-append">
                                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                                    </div>

                                            </div>
                                        <p><button type="submit" class="buy-now btn btn-sm btn-primary"><i class="fas fa-cart-plus"></i>Masukan Ke Keranjang</button></p>
                                        </form>
                                            </td>
                                        </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                {{-- <button type="submit" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Masukan Ke Keranjang</button> --}}
                                            </td>
                                        </tr>


                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
 </div>
 </div>

<br>
                <div class="row product-detail-bottom">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <h4 class="bg-success">Product description</h4>
                                {{-- <a class="nav-link active" data-toggle="pill" href="#description">Description</a> --}}
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="description" class="container tab-pane active">

                                <p>
                                    {{$produk->description}}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="section-header">
                        <h1>Related Products</h1>
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
                                        <img src="{{ asset('storage/'.$produk->image) }}" alt="Product Image" alt="Image placeholder" class="img-fluid" width="100%" style="height:200px">
                                    </a>
                                    <div class="product-action">
                                        <h3><span>Stok : </span> {{$produk->stok}} </h3>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h5><span>Rp. </span>{{ number_format($produk->price)}}</h5>

                                    <a class="btn" href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}"><i class="fa fa-shopping-cart text-white"></i>Buy Now</a>
                                </div>
                                <br>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>

            <!-- Side Bar Start -->

            <!-- Side Bar End -->
        </div>
    </div>
</div>
{{-- <div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Detail Produk</strong></div>
    </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                <img src="{{ asset('storage/'.$produk->image) }}" alt=""style="width: 350px" class="card-img-top">

                        </div>
                        <div class="col-md-7">
                            <h3>{{$produk->name}}</h3>
                            <table class="table ">
                                <thead>

                                        <tr>
                                            <td> <strong>Harga</strong></td>
                                            <td>:</td>
                                            <td>RP. {{number_format($produk->price)}}</td>
                                        </tr>
                                        <tr>
                                            <td> <strong>Deskripsi</strong> </td>
                                            <td>:</td>
                                            <td>{{$produk->description}}</td>
                                        </tr>
                                        <tr>
                                            <td> <strong>Stok</strong> </td>
                                            <td>:</td>
                                            <td>{{$produk->stok}}</td>
                                        </tr>


                                        <tr>
                                            <td><strong>Jumlah Pesanan</strong></td>
                                            <td>:</td>
                                            <td>
                                                <div class="mb-5">
                                                    <form action="{{ route('user.keranjang.simpan') }}" method="post">
                                                        @csrf
                                                        @if(Route::has('login'))
                                                            @auth
                                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                            @endauth
                                                        @endif
                                                    <input type="hidden" name="products_id" value="{{ $produk->id }}">
                                                    <small>Sisa Stok {{ $produk->stok }}</small>
                                                    <input type="hidden" value="{{ $produk->stok }}" id="sisastok">
                                                    <div class="input-group mb-3" style="max-width: 120px;">
                                                    <div class="input-group-prepend">
                                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                                    </div>
                                                    <input type="text" name="qty" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                    <div class="input-group-append">
                                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                                    </div>

                                            </div>
                                        <p><button type="submit" class="buy-now btn btn-sm btn-primary"><i class="fas fa-cart-plus"></i>Masukan Ke Keranjang</button></p>
                                        </form>
                                            </td>
                                        </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                {{-- <button type="submit" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Masukan Ke Keranjang</button> --}}
                                                </td>
                                            </tr>


                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
{{-- </div>  --}}
@endsection
