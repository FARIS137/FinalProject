@extends('front.layout.app')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('front')}}/assets/img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Contact Us //</h6>
            <h1 class="mb-5">Contact For Any Query</h1>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Booking //</h5>
                            <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>MawSteam@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// General //</h5>
                            <p class="m-0"><i class="fa fa-phone-alt text-primary me-2"></i>+62758204554</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Technical //</h5>
                            <p class="m-0"><i class="fa fa-phone-alt text-primary me-2"></i>+6285966390424</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27459.085360883597!2d106.95867038513995!3d-6.314060564233746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69923596b0a2c3%3A0x5a5ea0696e014d93!2sAa%20Steam!5e0!3m2!1sid!2sid!4v1718086754863!5m2!1sid!2sid" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
