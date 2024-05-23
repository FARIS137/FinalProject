@extends('admin.layouts.app')
@section('konten')



<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-5">
                <div class="card-header">
                    <h3>{{ $layanan->jenis_layanan }}</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Harga: Rp{{ number_format($layanan->harga, 0, ',', '.') }}</h5>
                    <p class="card-text">{{ $layanan->deskripsi }}</p>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
