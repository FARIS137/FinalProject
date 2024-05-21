@extends('admin.layouts.app')
@section('konten')

<div class="container-fluid px-4">
    <h1 class="mt-4">Pemesanan</h1>
    <ol class="breadcrumb mb=4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>.
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{route('pemesanan.create')}}" class="btn btn-md btn-primary">
                <i class="fa-solid fa-square-plus"></i>
            </a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Booking</th>
                        <th>Jam Booking</th>
                        <th>Catatan</th>
                        <th>Jenis Mobil</th>
                        <th>NoPlat Mobil</th>
                        <th>Nama Pelanggan</th>
                        <th>Layanan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Booking</th>
                        <th>Jam Booking</th>
                        <th>Catatan</th>
                        <th>Jenis Mobil</th>
                        <th>NoPlat Mobil</th>
                        <th>Nama Pelanggan</th>
                        <th>Layanan</th>
                        <th>Action</th>
                    </tr>
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
                        <td>{{$p->customer_name}}</td>
                        <td>{{$p->layanan->jenis_layanan}}</td>
                        <td>
                            <a href="{{ route('pemesanan.show', $p->id) }}" 
                                class="btn btn-sm btn-success">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{route('pemesanan.edit', $p->id)}}" 
                                                    class="btn btn-sm btn-warning">edit</a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection