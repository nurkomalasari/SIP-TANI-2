@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col">
                      <h4 class="card-title">Data Kategori</h4>
                      </div>
                      <div class="col text-right">
                      <a href="{{ route('admin.categories.tambah') }}" class="btn btn-success"><i class="material-icons">
                        add
                      </i>Tambah</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered" id="table">
                        <thead>
                          <tr class="table-success">
                            <th width="5%">No</th>
                            <th>Nama Kategori</th>
                            <th width="15%">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($categories as $categorie)
                            <tr>
                                <td align="center"></td>
                                <td>{{ $categorie->name }}</td>
                                <td align="center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="{{ route('admin.categories.edit',['id'=>$categorie->id]) }}" class="btn btn-warning btn-sm">
                                    <i class="material-icons"> edit </i>

                                  </a>
                                  <a href="{{ route('admin.categories.delete',['id'=>$categorie->id]) }}" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
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
