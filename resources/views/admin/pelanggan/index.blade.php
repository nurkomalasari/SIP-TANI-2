@extends('admin.layout.app')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table">
                      <thead>
                        <tr class="table-success">
                          <th width="5%">No</th>
                          <th>Nama Pelanggan</th>
                          <th>Email</th>
                          <th>Alamat</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pelanggan as $pel)
                          <tr>
                              <td align="center"></td>
                              <td>{{ $pel->name }}</td>
                              <td>{{ $pel->email }}</td>
                              <td>{{ $pel->detail }}, {{ $pel->kota }}, {{ $pel->prov }}</td>
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
  </div>


@endsection
