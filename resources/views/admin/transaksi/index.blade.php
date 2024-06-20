@extends('admin.layouts.app')
@section('konten')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Transaksi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="{{route('transaksi.create')}}" 
                            class="btn btn-md btn-primary" >
                                <i class="fa-solid fa-square-plus">
                                </i> Add Transaksi</a>
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
                                    table#datatablesSimple td:nth-child(4) { width: 15%; } 
                                    table#datatablesSimple td:nth-child(5) { width: 10%; } 
                                    table#datatablesSimple td:nth-child(6) { width: 10%; } 
                                  
                                </style>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>No</th>

                                            <th>Nama Pelanggan</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Bukti Bayar</th>
                                            <th>Total Biaya</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Bukti Bayar</th>
                                            <th>Total Biaya</th>
                                            <th>Action</th>
                                    </tfoot>
                                    <tbody>
                                        
                                        @foreach($transaksi as $t)
                                        <tr>    
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$t->pemesanan->customer_name}}</td>
                                            <td>{{$t->tanggal_transaksi}}</td>
                                            <td>{{$t->metode_pembayaran}}</td>
                                            <td>{{$t->bukti_bayar}}</td>
                                            <td>{{$t->total_biaya}}</td>
                                            <td>
                                                <a href="{{route('transaksi.show', $t->id)}}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fa-solid fa-eye"></i></a>
                                                <a href="{{route('transaksi.edit', $t->id)}}"
                                                    class="btn btn-sm btn-warning">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>  
                                                <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $t->id }}">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Pemesanan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin akan menghapus data tanggal {{ $t->tanggal_transaksi }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('transaksi.destroy', $t->id) }}" method="POST" style="display:inline;">
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