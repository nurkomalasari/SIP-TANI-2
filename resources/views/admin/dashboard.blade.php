@extends('admin.layout.app')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">payments</i>
              </div>
              <h4 class="card-category">Pendapatan</h4>
              <h6 class="card-title">Rp. {{ number_format($pendapatan->penghasilan,2,',','.') }}

              </h6>
            </div>
            <div class="card-footer">
              <div class="stats">
                {{-- <i class="material-icons text-danger">warning</i>
                <a href="javascript:;">Get More Space...</a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <h4 class="card-category">Transaksi</h4>
              <h3 class="card-title">{{ $transaksi->total_order }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                {{-- <i class="material-icons">date_range</i> Last 24 Hours --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <h4 class="card-category">Pelanggan</h4>
              <h3 class="card-title">{{ $pelanggan->count()}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                {{-- <i class="material-icons">local_offer</i> Tracked from Github --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">category</i>
              </div>
              <h4 class="card-category">Produk</h4>
              <h3 class="card-title">{{ $produk->total_produk }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">



              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-success">
              <h4 class="card-title">Transaksi Terbaru</h4>
              <p class="card-category"></p>
            </div>
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th> Invoice </th>
                      <th> Pemesan </th>
                      <th> Subtotal </th>
                      <th> Status Pesanan </th>
                      <th> Aksi </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($order_baru as $order)
                      <tr>
                        <td>{{ $order->invoice }}</td>
                        <td>{{ $order->nama_pemesan }}</td>
                        <td>{{ $order->subtotal + $order->biaya_cod }}</td>
                        <td>{{ $order->name }}</td>
                        <td> <a href="{{ route('admin.transaksi.detail',['id'=>$order->id]) }}" class="btn btn-success btn-sm">Detail</a></td>
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
