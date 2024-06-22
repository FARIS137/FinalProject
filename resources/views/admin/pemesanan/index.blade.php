@extends('admin.layouts.app')
@section('konten')

<div class="container-fluid px-4">
    <h1 class="mt-4">Pemesanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
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
            <a href="{{ route('pemesanan.create') }}" class="btn btn-md btn-primary">
                <i class="fa-solid fa-square-plus"></i> Add New Booking
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
                table#datatablesSimple td:nth-child(1) { width: 3%; } /* No */
                table#datatablesSimple td:nth-child(2) { width: 10%; } /* Tanggal Booking */
                table#datatablesSimple td:nth-child(3) { width: 7%; } /* Jam Booking */
                table#datatablesSimple td:nth-child(4) { width: 15%; } /* Catatan */
                table#datatablesSimple td:nth-child(5) { width: 10%; } /* Jenis Mobil */
                table#datatablesSimple td:nth-child(6) { width: 10%; } /* NoPlat Mobil */
                table#datatablesSimple td:nth-child(7) { width: 10%; } /* Nama Pelanggan */
                table#datatablesSimple td:nth-child(8) { width: 10%; } /* Layanan */
                table#datatablesSimple td:nth-child(9) { width: 15%; } /* Action */
            </style>
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
                        <th>Actions</th>
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
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($pemesanan as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->tanggal_awal_booking }}</td>
                        <td>{{ $p->jam_awal_booking }}</td>
                        <td>{{ $p->catatan }}</td>
                        <td>{{ $p->jenis_mobil }}</td>
                        <td>{{ $p->noplat_mobil }}</td>
                        <td>{{ $p->customer_name }}</td>
                        <td>{{ $p->layanan->jenis_layanan }}</td>
                        <td>
                            <a href="{{ route('pemesanan.show', $p->id) }}" 
                                class="btn btn-sm btn-success">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{route('pemesanan.edit', $p->id)}}"
                                class="btn btn-sm btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>  
                       
                       
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $p->id }}">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Pemesanan</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin akan menghapus data {{ $p->customer_name }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('pemesanan.destroy', $p->id) }}" method="POST" style="display:inline;">
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
