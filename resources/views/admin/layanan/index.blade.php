@extends('admin.layouts.app')
@section('konten')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Layanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{url('admin/layanan/store')}}"
        method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
        <input type="tex" class="form-control" name="jenis_layanan" id="exampleInputEmail1" aria-describedby="emailHelp"
    placeholder="Input Layanan">
    </div>
    <div class="mb-3">
    <input type="tex" class="form-control" name="harga" id="exampleInputEmail1" aria-describedby="emailHelp"
    placeholder="Input Harga">
    </div>
    <div class="mb-3">
    <input type="tex" class="form-control" name="deskripsi" id="exampleInputEmail1" aria-describedby="emailHelp"
    placeholder="Input Deskripsi">
    </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Batas Modal -->

<div class="container-fluid px-4">
                        <h1 class="mt-4">Layanan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            <a href="" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            ><i class="fa-solid fa-square-plus"></i></a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Jenis_Layanan</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                            <th>No</th>
                                            <th>Jenis_Layanan</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                    </tfoot>
                                    <tbody>

                                        @foreach($layanan as $l)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$l->jenis_layanan}}</td>
                                            <td>{{$l->harga}}</td>
                                            <td>{{$l->deskripsi}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection
