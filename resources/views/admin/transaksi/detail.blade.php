@extends('admin.layouts.app')
@section('konten')

<style>
    body {
        background: #87CEFA;
    }

    .container-fluid {
        display: flex;
        flex-wrap: wrap;
    }

    .image-container, .transaction-container {
        flex: 1;
        margin: 20px;
    }

    .image-container img {
        max-width: 100%;
        height: auto;
        display: block;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .transaction-container {
        max-width: 600px;
    }

    .card-footer-btn {
        display: flex;
        align-items: center;
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important;
    }

    .text-uppercase-bold-sm {
        text-transform: uppercase !important;
        font-weight: 500 !important;
        letter-spacing: 2px !important;
        font-size: .85rem !important;
    }

    .hover-lift-light {
        transition: box-shadow .25s ease, transform .25s ease, color .25s ease, background-color .15s ease-in;
    }

    .justify-content-center {
        justify-content: center !important;
    }

    .btn-group-lg>.btn, .btn-lg {
        padding: 0.8rem 1.85rem;
        font-size: 1.1rem;
        border-radius: 0.3rem;
    }

    .btn-dark {
        color: #fff;
        background-color: #1e2e50;
        border-color: #1e2e50;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(30, 46, 80, .09);
        border-radius: 0.25rem;
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .p-5 {
        padding: 3rem !important;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.5rem 1.5rem;
    }

    .table td, .table th {
        border-bottom: 0;
        border-top: 1px solid #edf2f9;
    }

    .table>:not(caption)>*>* {
        padding: 1rem 1rem;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

    .px-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }

    .table thead th, tbody td, tbody th {
        vertical-align: middle;
    }

    .mt-5 {
        margin-top: 3rem !important;
    }

    .icon-circle[class*=text-] [fill]:not([fill=none]), .icon-circle[class*=text-] svg:not([fill=none]), .svg-icon[class*=text-] [fill]:not([fill=none]), .svg-icon[class*=text-] svg:not([fill=none]) {
        fill: currentColor !important;
    }

    .svg-icon>svg {
        width: 1.45rem;
        height: 1.45rem;
    }
    .amount {
        white-space: nowrap; /* Memastikan teks tetap dalam satu baris */
    }
</style>

<div class="container-fluid">
    <div class="image-container">
        <div class="card border-0 shadow">
            <h3 align= "center">Bukti Bayar</h3>
            @empty($transaksi->bukti_bayar)
            <img src="{{url('admin/image/nofoto.jpeg')}}" alt="No Image Available">
            @else
            <img src="{{url('admin/image')}}/{{$transaksi->bukti_bayar}}" alt="Transaction Proof">
            @endempty
        </div>
    </div>
    <div class="transaction-container">
        <div class="card">
            <div class="card-body p-5">
                <h2>Transaksi</h2>
                <p class="fs-sm">Ini adalah tanda terima pembayaran sebesar <strong>Rp {{$transaksi->total_biaya}}</strong></p>

                <div class="border-top border-gray-200 pt-4 mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-muted mb-2">Nomer Plat Mobil:</div>
                            <strong>{{$transaksi->noplat_mobil}}</strong>
                          </div>
                        <div class="col-md-6 text-md-end">
                            <div class="text-muted mb-2">Tanggal Transaksi</div>
                            <strong>{{$transaksi->tanggal_transaksi}}</strong>
                        </div>
                    </div>
                </div>
                <table class="table border-bottom border-gray-200 mt-3">
                    <thead>
                        <tr>
                            <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm px-0">Layanan</th>
                            <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm text-end px-0">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-0">{{$transaksi->diskripsi}}</td>
                            <td class="text-end px-0"><span class="amount">Rp {{$transaksi->total_biaya}}</span></td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-5">
                    <div class="d-flex justify-content-end mt-3">
                        <h5 class="me-3">Total:</h5>
                        <h5 class="text-success">Rp {{$transaksi->total_biaya}}</h5>
                    </div>
                </div>
            </div>
            <a href="#!" class="btn btn-dark btn-lg card-footer-btn justify-content-center text-uppercase-bold-sm hover-lift-light">
                <span class="svg-icon text-white me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-g</title></svg>
                </span>
            </a>
        </div>
    </div>
</div>

@endsection
