@extends('front.layout.app')
@section('content')

<div class="container-fluid px-4">
   
    <div class="card mb-4 mt-4">
        <div class="card-header">
            <h2>Histori </h2>
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
                        <th>Status</th>
                    </tr>
                </thead>
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
                        <td>{{ $p->layanan_id }}</td>
                        <td>
                            @if($p->status == 'no-validasi')
                            <span class="badge bg-warning">Menunggu Konfirmasi</span>
                            @elseif($p->status == 'validasi')
                            <span class="badge bg-info">Sudah Konfirmasi</span>
                            <a class="badge bg-warning" href="{{asset('print-kupon?id=' . $p->id)}}">
                                <i class="bi bi-printer"></i>
                                Print Kupon
                            </a>
                            @elseif($p->status == 'success')
                            <span class="badge bg-success">Selesai</span>
                            @elseif($p->status == 'failed')
                            <span class="badge bg-danger">Transaksi Dihapus</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection