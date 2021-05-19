@extends('user.app')
@section('content')

<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Pesanan Dibuat</strong></div>
    </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="row">
            <div class="col-md-6">
                {{-- <span class="icon-check_circle display-3 text-success"></span> --}}
                <h2 class="display-3 text-green">Terimakasih :) {{ Auth::user()->name }}</h2>
                <p class="lead mb-5">Pesanan Kamu Berhasil Dibuat Dengan No Invoice Silahkan Melakukan Pembayaran Melalui Pembayaran Payment Gateway.</p>
                <p><a href="{{ route('user.order') }}" class="btn btn-sm btn-primary">Menu Transaksi <i class="fas fa-arrow-right"></i></a></p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('shopper/images/thanks.png')}}" alt="" class="card-img-top">

            </div>
            </div>

        </div>
    </div>
</div>
@endsection
