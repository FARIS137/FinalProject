@extends('front.layout.app')
@section('content')

<div class="container-fluid booking my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        {{-- <div class="row gx-5"> --}}
            <div class="col-lg-66">
                <div class="bg-primary h-100 d-flex flex-column justify-content-center  p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4" align="center">Booking Steam</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control border-0" placeholder="Masukan Nama Lengkap" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label>Tanggal Booking</label>
                                <input type="date" class="form-control border-0" placeholder="tanggal booking" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label>Jam Booking</label>
                                <input type="time" class="form-control border-0" placeholder="jam booking" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label>Jenis Layanan</label>
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Jenis Layanan</option>
                                    <option value="regular">Regular</option>
                                    <option value="drywash">DryWash</option>
                                    <option value="medium">Medium</option>
                                    <option value="complete">Complete</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label>No Plat Mobil</label>
                                <input type="text" class="form-control border-0" placeholder="Masukan No Plat Mobil" style="height: 55px;">
                            </div>
                                <div class="col-12 col-sm-6">
                                    <label>Jenis mobil</label>
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Jenis Mobil</option>
                                        <option value="sport">Mobil Sport</option>
                                        <option value="biasa">Mobil Biasa</option>
                                    </select>
                                </div>
                            <div class="col-12 col-sm-6">
                            </div>
                            <div class="col-12">    
                                <textarea class="form-control border-0" placeholder="Catatan" rows="5"></textarea>
                            </div>
                            <div class="col-12">
                                <a href="/pembayaran"class="btn btn-secondary w-100 py-3">Pembayaran</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        {{-- </div> --}}
    </div>
</div>
@endsection
