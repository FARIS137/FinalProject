@extends('admin.layouts.app')
@section('konten')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Pemesanan</h1>
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
                            <a href="{{route('pemesanan.create')}}"
                            class="btn btn-md btn-primary" >
                                <i class="fa-solid fa-square-plus"></i>
                            </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Tanggal Awal Booking</th>
                                            <th>Jam Awal Booking</th>
                                            <th>Catatan</th>
                                            <th>Jenis Mobil</th>
                                            <th>No Plat Mobil</th>
                                            <th>Layanan</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                            <th>No</th>
                                            <th>Tanggal Awal Booking</th>
                                            <th>Jam Awal Booking</th>
                                            <th>Catatan</th>
                                            <th>Jenis Mobil</th>
                                            <th>No Plat Mobil</th>
                                            <th>Layanan</th>

                                    </tfoot>
                                    <tbody>

                                        @foreach($pemesanan as $p)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$p->tanggal_awal_booking}}</td>
                                            <td>{{$p->jam_awal_booking}}</td>
                                            <td>{{$p->catatan}}</td>
                                            <td>{{$p->jenis_mobil}}</td>
                                            <td>{{$p->noplat_mobil}}</td>
                                            <td>{{$p->layanan_id}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection
