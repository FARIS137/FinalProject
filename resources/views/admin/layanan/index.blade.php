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
                            <div class="card-header">
                                <a href="{{route('layanan.create')}}" 
                            class="btn btn-md btn-primary" >
                                <i class="fa-solid fa-square-plus">
                                </i> Add Layanan</a>
                            </div>
        <div class="card-body">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Jenis_Layanan</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                            <th>No</th>
                                            <th>Jenis_Layanan</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                    </tfoot>
                                    <tbody>
                                        
                                        @foreach($layanan as $l)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$l->jenis_layanan}}</td>
                                            <td>{{$l->harga}}</td>
                                            <td>{{$l->deskripsi}}</td>
                                            <td>
                                            <a href="{{ route('layanan.show', $l->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a href="{{ route('layanan.edit', $l->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                                              

                                                     <!-- ini untuk modal hapus -->
                                        <!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" 
data-bs-toggle="modal" data-bs-target="#exampleModal{{$l->id}}">
<i class="fa-solid fa-trash-can"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$l->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Layanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin akan menghapus data {{$l->layanan}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        <form action="{{ route('layanan.destroy', $l->id) }}"
         method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection