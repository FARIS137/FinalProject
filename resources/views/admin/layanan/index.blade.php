@extends('admin.layouts.app')
@section('konten')

<!-- Modal for Adding Service -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jenis Layanan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('admin/layanan/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="jenis_layanan" placeholder="Tambah Layanan">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="harga" placeholder="Tambah Harga">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="deskripsi" placeholder="Tambah Deskripsi">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-4">
    <h1 class="mt-4">Layanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <a href="" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-square-plus"></i> Add Layanan
            </a>
        </div>
        <div class="card-body">
            <style>
                table#datatablesSimple th, table#datatablesSimple td {
                    white-space: nowrap;
                    padding: 5px;
                }
                table#datatablesSimple th {
                    font-weight: bold;
                }
                table#datatablesSimple td:nth-child(1) { width: 3%; }
                table#datatablesSimple td:nth-child(2) { width: 10%; }
                table#datatablesSimple td:nth-child(3) { width: 7%; }
                table#datatablesSimple td:nth-child(4) { width: 10%; }
                table#datatablesSimple td:nth-child(5) { width: 10%; }

            </style>
            <table id="datatablesSimple" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Layanan</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Jenis Layanan</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($layanan as $l)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$l->jenis_layanan}}</td>
                        <td>{{$l->harga}}</td>
                        <td>{{$l->deskripsi}}</td>
                        <td>
                            <a href="{{ route('layanan.show', $l->id) }}" class="btn btn-sm btn-success">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('layanan.edit', $l->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $l->id }}">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{ $l->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteModalLabel">Hapus Layanan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin akan menghapus data {{ $l->jenis_layanan }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('layanan.destroy', $l->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
