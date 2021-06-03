@extends('user.app')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Riwayat Transaksi</strong></div>
    </div>
    </div>


<div class="site-section">
    <div class="container">
    <div class="row mb-3">
        <div class="col-md-12">
            <h2 class="text-success">Belum Dibayar</h2>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">
           <div class="table-responsive">
           <div class="table-responsive">
           <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                <th class="product-thumbnail">ID Transaksi</th>
                <th class="product-name">Total</th>
                <th class="product-price">Status Pesanan</th>
                <th class="product-quantity">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order as $o)
                <tr>
                    <td>{{ $o->invoice }}</td>
                    <td>{{ $o->subtotal + $o->biaya_cod }}</td>
                    <td>{{ $o->name }}</td>
                    <td>

                    <a href="{{ route('user.order.pesanandibatalkan',['id' => $o->id]) }}" onclick="return confirm('Yakin ingin membatalkan pesanan')" class="btn btn-danger">Batalkan</a>

                    <a href="{{ route('user.order.pembayaran',['id' => $o->id]) }}" class="btn btn-success">Bayar</a>
                    <a href="{{ route('user.order.detail',['id' => $o->id]) }}" class="btn btn-success">Detail Pesanan</a>



                    </td>

                </tr>
                @endforeach
            </tbody>
            </table>
            </div>
           </div>
        </div>
    </div>

</div>


    <div class="container">
    <div class="row mb-3">
        <div class="col-md-12">
            <h2 class="text-success">Sedang Dalam Proses</h2>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">
            <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                <th class="product-thumbnail">ID Transaksi</th>
                <th class="product-name">Total</th>
                <th class="product-price">Status Pesanan</th>
                <th class="product-quantity" width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dicek as $o)
                <tr>
                    <td>{{ $o->invoice }}</td>
                    <td>{{ $o->subtotal + $o->biaya_cod }}</td>
                    <td>
                        @if($o->name == 'Perlu Di Cek')
                        Sedang Di Cek
                        @else
                        {{ $o->name }}
                        @endif
                    </td>
                    <td>
                    <a href="{{ route('user.order.detail',['id' => $o->id]) }}" class="btn btn-success">Detail Pesanan</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

    <div class="container">
    <div class="row mb-3">
        <div class="col-md-12">
            <h2 class=" text-success">Riwayat Pesanan Anda</h2>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="table-responsive">
            <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                <th class="product-thumbnail">ID Transaksi</th>
                <th class="product-name">Total</th>
                <th class="product-price">Status Pesanan</th>
                <th class="product-quantity" width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($histori as $o)
                <tr>
                    <td>{{ $o->invoice }}</td>
                    <td>{{ $o->subtotal + $o->biaya_cod }}</td>
                    <td>{{ $o->name }}</td>
                    <td>
                    <a href="{{ route('user.order.detail',['id' => $o->id]) }}" class="btn btn-success">Detail Pesanan</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
