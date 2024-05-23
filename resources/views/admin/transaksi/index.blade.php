@extends('admin.layouts.app')
@section('konten')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Transaksi</h1>
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
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Bukti Bayar</th>
                                            <th>Total Biaya</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                            <th>No</th>
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
                                            <td>{{$t->tanggal_transaksi}}</td>
                                            <td>{{$t->metode_pembayaran}}</td>
                                            <td>{{$t->bukti_bayar}}</td>
                                            <td>{{$t->total_biaya}}</td>
                                            <td>
                                                <a href="{{ route('transaksi.show', $t->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection
