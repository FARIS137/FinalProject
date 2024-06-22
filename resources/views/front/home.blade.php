@extends('front.layout.app')
@section('content')

<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('front')}}/assets/img/carousel-bg-2.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Washing Car  //</h6>
                                <h1 class="display-3 text-white mb-3 pb-2 animated slideInDown" style="font-size: 3rem">Anda sibuk? Mau cuci mobil tanpa antri? Cobain nih disini auto bersih dan mengkilap</h1>
                                <a href="{{ url('/booking') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Booking Now <i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <img class="img-fluid" src="{{asset('front')}}/assets/img/carousel-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <h2 class="text-center mb-5" style="font-size: 2rem;">Kenapa Harus Steam di Kami?</h2>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-money-bill-wave fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Harga Terjangkau</h5>
                        <p>Steam mobil dengan harga bersahabat! Pilih dari berbagai paket kami yang sesuai dengan kebutuhan dan anggaran Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Aplikasi Mudah Diakses</h5>
                        <p>Memudahkan para user yang ingin menggunakan aplikasi dan pelayanannya ramah.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Teknik yang Efisien</h5>
                        <p>Pembersihan yang efisien untuk menghemat waktu Anda, namun tetap memberikan hasil yang berkualitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->




<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('front')}}/assets/img/about2.jpg" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-5 text-white mb-0">Dapatkan Perawatan Terbaik untuk Mobil Anda</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">Kenapa Harus Pilih MawSteam Mobil?</h6>
                <h1 class="mb-4"><span class="text-primary">MawSteam Mobil</span>: Solusi Terbaik untuk Kebersihan Mobil Anda</h1>
                <p class="mb-4">Di MawSteam Mobil, kami tidak hanya menyediakan cuci mobil biasa. Kami hadir dengan keahlian yang profesional, efisiensi yang luar biasa, dan kualitas tinggi yang akan mengangkat penampilan mobil Anda ke level baru. kami siap memberikan perawatan terbaik untuk kendaraan Anda. Rasakan pengalaman cuci mobil yang luar biasa dan sempurna bersama MawSteam Mobil!</p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h6>Tim Ahli Profesional</h6>
                <span>Dapatkan layanan dari tim ahli yang berpengalaman dalam merawat dan mempercantik mobil Anda.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">02</span>
                            </div>
                            <div class="ps-3">
                                <h6>Pusat Layanan Berkualitas</h6>
                <span>Kami menjamin layanan cuci mobil terbaik dengan peralatan modern dan produk berkualitas tinggi.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">03</span>
                            </div>
                            <div class="ps-3">
                                <h6>Kualitas yang Dibuktikan</h6>
            <span>Kami juga memiliki bahan-bahan berkualitas tinggi untuk meencuci mobil anda.</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- About End -->

        </div>
    </div>
</div>
@endsection