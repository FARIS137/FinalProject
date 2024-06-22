@extends('front.layout.app')
@section('content')

<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Layanan //</h6>
            <h1 class="mb-5">Layanan Kami</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <i class="fa fa-car-side fa-2x me-3"></i>
                        <h4 class="m-0">Regular</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <i class="fa fa-car fa-2x me-3"></i>
                        <h4 class="m-0">DryWash</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <i class="fa fa-cog fa-2x me-3"></i>
                        <h4 class="m-0">Medium</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <i class="fa fa-oil-can fa-2x me-3"></i>
                        <h4 class="m-0">Complete</h4>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100 no-repeat" src="{{asset('front')}}/assets/img/car1.jpeg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Layanan Reguler</h3>
                                <p class="mb-4">Layanan reguler kami menawarkan pencucian dasar yang mencakup pembersihan eksterior dan interior mobil. Dengan pengalaman lebih dari 15 tahun, kami memastikan mobil Anda mendapatkan perawatan terbaik dari para ahli kami.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Pembersihan eksterior dan interior</p>
                                <p><i class="fa fa-check text-success me-3"></i>Pekerja ahli dan berpengalaman</p>
                                <p><i class="fa fa-check text-success me-3"></i>Peralatan modern dan berkualitas</p>
                                <h3>RP 55.000 Rupiah</h3>

                                <a href="{{ url('/booking') }}" class="btn btn-primary py-3 px-5 mt-3">Booking<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('front')}}/assets/img/service-2.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Layanan Drywash</h3>
                                <p class="mb-4">Layanan Drywash kami adalah solusi ramah lingkungan untuk menjaga mobil Anda tetap bersih dan mengkilap tanpa menggunakan banyak air. Cocok untuk Anda yang peduli dengan lingkungan dan tetap ingin mobil Anda terlihat prima.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Pembersihan tanpa air</p>
                                <p><i class="fa fa-check text-success me-3"></i>Produk ramah lingkungan</p>
                                <p><i class="fa fa-check text-success me-3"></i>Efektif dan efisien</p>
                                <h3>RP 75.000 Rupiah</h3>

                                <a href="{{ url('/booking') }}" class="btn btn-primary py-3 px-5 mt-3">Booking<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100 " src="{{asset('front')}}/assets/img/car3.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Layanan Medium</h3>
                                <p class="mb-4">Layanan Medium kami menawarkan paket perawatan menyeluruh yang mencakup pencucian eksterior, pembersihan interior, dan detailing dasar. Solusi ini dirancang untuk Anda yang menginginkan mobil bersih luar dalam tanpa repot.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Pembersihan menyeluruh</p>
                                <p><i class="fa fa-check text-success me-3"></i>Detailing dasar</p>
                                <p><i class="fa fa-check text-success me-3"></i>Waktu pengerjaan cepat</p>
                                <h3>RP 125.000 Rupiah</h3>

                                <a href="{{ url('/booking') }}" class="btn btn-primary py-3 px-5 mt-3">Booking<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('front')}}/assets/img/service-4.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Layanan Complete</h3>
                                <p class="mb-4">Layanan Complete kami adalah paket premium yang menawarkan perawatan maksimal untuk mobil Anda. Mulai dari pencucian eksterior, pembersihan interior, hingga detailing menyeluruh dan pelindungan cat, kami pastikan mobil Anda tampak baru dan terawat.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Pembersihan dan detailing menyeluruh</p>
                                <p><i class="fa fa-check text-success me-3"></i>Pelindungan cat premium</p>
                                <p><i class="fa fa-check text-success me-3"></i>Perawatan menyeluruh dari ahli</p>
                                <h3>RP 220.000 Rupiah</h3>
                                <a href="{{ url('/booking') }}" class="btn btn-primary py-3 px-5 mt-3">Booking<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



@endsection

