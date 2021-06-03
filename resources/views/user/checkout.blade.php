@extends('user.app')
@section('content')
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0"> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>
    <div class="wishlist-page">
        <div class="container-fluid">
            <div class="wishlist-page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <form action="{{ route('user.order.simpan') }}" method="POST">
                                @csrf
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-success">
                                        <th>Product</th>
                                        <th>Total</th>
                                        <th>Alamat Penerima</th>
                                        <th>Jumlah pembayaran</th>

                                    </tr>
                                </thead>
                                <tbody class="align-middle">

                                  <?php $subtotal=0;?>
                                  @foreach($keranjangs as $keranjang)
                                    <tr>
                                        <td>
                                            <div class="img">
                                            <img src="{{ asset('storage/'.$keranjang->image) }}" alt="Image" style="width: 150px" class="card-img-top">
                                            {{-- <td>{{ $keranjang->nama_produk }} <strong class="mx-2">x</strong> {{ $keranjang->qty }}</td> --}}
                                            <h5>{{ $keranjang->nama_produk }} <strong class="mx-2">x</strong> {{ $keranjang->qty }}</h5>

                                            </div>
                                        </td>
                                        <?php
                                      $total = $keranjang->price * $keranjang->qty;
                                      $subtotal = $subtotal + $total;
                                         ?>
                                        <td>Rp. {{ number_format($total,2,',','.') }}</td>
                                        <td>{{ $alamat->detail }}, {{ $alamat->kota }}, {{ $alamat->prov }}</td>
                                        @endforeach

                                  <?php $alltotal = $subtotal ; ?>
                                  <td><strong>Rp. {{ number_format($subtotal,2,',','.') }}</strong></td>


                                    </tr>



                                </tbody>
                            </table>
                            <div class="form-group">
                                <label for="">Waktu Pengambilan</label>
                                <textarea name="pesan" class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="">No telepon </label>
                                <input type="text" name="no_hp" id="" class="form-control">
                              </div>
                              <input type="hidden" name="invoice" value="{{ $invoice }}">
                              <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                              <div class="form-group">
                                <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Pesan Sekarang</button>
                                {{-- <small>Mohon periksa alamat penerima dengan benar agar tidak terjadi salah pengiriman</small> --}}
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


