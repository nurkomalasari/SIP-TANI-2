@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col">
                      <h3 class="card-title">Data Produk</h3>
                      </div>
                      <div class="col text-right">
                      <a href="{{ route('admin.product.tambah') }}" class="btn btn-success"><i class="material-icons">
                        add
                      </i>Tambah</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered " id="table">
                        <thead>
                          <tr class="table-success">
                            <th width="5%">No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Berat</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Gambar</th>
                            <th width="15%">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($products as $product)
                            <tr>
                                <td align="center"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->weigth }}gr</td>
                                <td>{{ $product->nama_kategori }}</td>
                                <td>{{ $product->stok }}</td>

                                        <td>


                                            <img src="{{ asset('storage/'.$product->image) }}" class="img-circle" width="200" height="120" class="image" alt="" >

                                        </td>




                                <td align="center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="{{ route('admin.product.edit',['id'=>$product->id]) }}" class="btn btn-warning btn-sm">
                                    <i class="material-icons"> edit </i>
                                  </a>
                                  <a href="{{ route('admin.product.delete',['id'=>$product->id]) }}" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                    <i class="material-icons"> delete </i>
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
