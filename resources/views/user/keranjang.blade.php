@extends('user.app')
@section('content')
<div class="cart-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-page-inner">
                    <div class="table-responsive">
                        <form class="col-md-12" method="post" action="{{ route('user.keranjang.update') }}">
                            @csrf
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr class="bg-success">
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">


                                <tr>
                                    <?php $subtotal=0; foreach($keranjangs as $keranjang): ?>
                                    <td>
                                        <div class="img">
                                          <img src="{{ asset('storage/'.$keranjang->image) }}" alt="Image" class="img-fluid" width="150">
                                            <p>{{ $keranjang->nama_produk }}</p>
                                        </div>
                                    </td>
                                    <td>Rp. {{ number_format($keranjang->price,2,',','.') }}</td>
                                    <td>
                                        <div class="input-group mb-3" style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                            </div>
                                            <input type="hidden" name="id[]" value="{{ $keranjang->id }}">
                                            <input type="text" name="qty[]" class="form-control text-center" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="{{ $keranjang->qty }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-success js-btn-plus" type="button">&plus;</button>
                                            </div>
                                            </div>
                                    </td>
                                    <?php
                                        $total = $keranjang->price * $keranjang->qty;
                                        $subtotal = $subtotal + $total;
                                    ?>
                                    <td>Rp. {{ number_format($total,2,',','.') }}</td>
                                    <td><a href="{{ route('user.keranjang.delete',['id' => $keranjang->id]) }}"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <?php endforeach;?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-page-inner">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="cart-summary">
                                <div class="cart-content">
                                    <h1>Total Pesanan</h1>
                                    <p>Total<span>Rp. {{ number_format($subtotal,2,',','.') }}</span></p>
                                    {{-- <p>Shipping Cost<span>$1</span></p> --}}
                                    {{-- <h2>Grand Total<span>$100</span></h2> --}}
                                </div>
                                <div class="cart-btn">
                                    <button type="submit">Update Cart</button>
                                    @if($cekalamat > 0)

                                    <a class="btn" href="{{ route('user.checkout') }}">Checkout</a>
                                    @else
                                    <div class="col-md-12">
                                    <a href="{{ route('user.alamat') }}" class="btn" >Atur Alamat</a>
                                    <small>Anda Belum Mengatur Alamat</small>
                                    </div>
                                    @endif
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
