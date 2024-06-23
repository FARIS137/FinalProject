@extends('front.layout.app')
@section('content')

<style>
    .booking-bg {
        background-image: url('/front/assets/img/3d.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
    }

    .bg-overlay {
        background: rgba(255, 255, 255, 0.5); /* Transparan */
        border-radius: 10px;
    }

    .text-transparent {
        background: rgba(255, 255, 255, 0.8); /* Transparan */

    }
</style>

<div class="container-fluid booking wow fadeInUp booking-bg" data-wow-delay="0.1s">
    <div class="container">
        <div class="col-lg-66">
            <div class="bg-primary h-100 d-flex flex-column justify-content-center p-5 wow zoomIn bg-overlay" data-wow-delay="0.6s">
                <h1 class="mb-4" align="center">Booking Steam</h1>
                <form action="{{ asset("pembayaran") }}" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <label>Nama Lengkap</label>
                            <input type="text" name="customer_name" class="form-control border-0 text-transparent" placeholder="Masukan Nama Lengkap" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Tanggal Booking</label>
                            <input type="date" name="tanggal_awal_booking" class="form-control border-0 text-transparent" placeholder="tanggal booking" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <label >Jam Booking</label>
                            <input type="time" name="jam_awal_booking" class="form-control border-0 text-transparent" placeholder="jam booking" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <label >Jenis Layanan</label>
                            <select name="layanan_id" class="form-select border-0 text-transparent" style="height: 55px;" >
                                <option selected disabled>Jenis Layanan</option>
                                <option value="regular">Regular</option>
                                <option value="drywash">DryWash</option>
                                <option value="medium">Medium</option>
                                <option value="complete">Complete</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>No Plat Mobil</label>
                            <input type="text" name="noplat_mobil" class="form-control border-0 text-transparent" placeholder="Masukan No Plat Mobil" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Jenis mobil</label>
                            <select class="form-select border-0 text-transparent" name="jenis_mobil" style="height: 55px;">
                                <option selected disabled>Jenis Mobil</option>
                                <option value="sport">Mobil Sport</option>
                                <option value="biasa">Mobil Biasa</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0 text-transparent" name="catatan" placeholder="Catatan" rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary w-100 py-3">Pembayaran</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
