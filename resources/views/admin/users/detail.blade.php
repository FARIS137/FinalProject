@extends('admin.layouts.app')
@section('konten')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<style>
    /* Add your styles here */
</style>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-5">
            <div class="project-info-box mt-0">
                <h5>DETAILS Users</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto asperiores error autem, dignissimos quibusdam repudiandae libero nam recusandae voluptatibus..</p>
            </div><!-- / project-info-box -->

            <div class="project-info-box">
                <p><b>Username:</b> {{ $users->username }}</p>
                <p><b>Password:</b> {{ $users->password }}</p>
                <p><b>Email:</b> {{ $users->email }}</p>
                <p><b>Hak Akses: </b> {{ $users->hak_akses }}</p>
                {{-- <p><b>NoPlat Mobil: </b> {{ $pemesanan->noplat_mobil }}</p>
                <p ><b>Nama Pelanggan:</b> {{ $pemesanan->customer_name }}</p>
                <p ><b>Layanan:</b> {{ $pemesanan->layanan->jenis_layanan }}</p> --}}
            </div><!-- / project-info-box -->

            <div class="project-info-box mt-0 mb-0">
                <p class="mb-0">
                    <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
                    <a href="#" class="btn btn-xs btn-facebook btn-circle btn-icon mr-5 mb-0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-xs btn-twitter btn-circle btn-icon mr-5 mb-0"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-xs btn-pinterest btn-circle btn-icon mr-5 mb-0"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="btn btn-xs btn-linkedin btn-circle btn-icon mr-5 mb-0"><i class="fab fa-linkedin-in"></i></a>
                </p>
            </div><!-- / project-info-box -->
        </div><!-- / column -->

        <div class="col-md-7">
            @if(empty($users->foto))    
                <img src="{{ url('admin/image/tesla.jpg') }}" alt="project-image" class="rounded">
            @else
                <img src="{{ url('admin/image') }}/{{ $users->foto }}" alt="project-image" class="rounded">
            @endif
        </div><!-- / column -->
    </div>
</div>

@endsection
