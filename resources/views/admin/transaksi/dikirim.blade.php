@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col">
                      <h4 class="card-title">Data Pesanan Sedang Di Kirim</h4>
                      </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered " id="table">
                            <thead>
                              <tr class="table-success">
                          <tr>
                            <th width="5%">No</th>
                            <th>No Invoice</th>
                            <th>Pemesan</th>
                            <th>Subtotal</th>
                            <th>Metode Pembayaran</th>
                            <th>Status Pesanan</th>
                            <th width="15%">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($orderbaru as $order)
                            <tr>
                                <td align="center"></td>
                                <td>{{ $order->invoice }}</td>
                                <td>{{ $order->nama_pemesan }}</td>
                                <td>{{ $order->subtotal + $order->biaya_cod }}</td>
                                <td>{{ $order->metode_pembayaran }}</td>
                                <td>{{ $order->name }}</td>
                                <td align="center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="{{ route('admin.transaksi.detail',['id'=>$order->id]) }}" class="btn btn-warning btn-sm">
                                    Detail
                                  </a>
                                </div>
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
