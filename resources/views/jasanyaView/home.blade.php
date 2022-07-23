@extends('layouts.main')

@section('container')
<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    @include('partials.navbar')
    <div class="container-xxl bg-primary hero-header">
        <div class="container px-lg-5" id="home">
            <div class="row g-5 align-items-end">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated slideInDown">Jasa <span class="auto-type text-warning"></span>
                    </h1>
                    <p class="text-white pb-3 animated slideInDown">Penyedia jasa pembuatan Website, aplikasi mobile,
                        rest api.
                        baik dalam bidang frontend, backend, fullstack, UI/UX desaign.
                        jika berminat, silangkah hubungi kami via whatsapp
                    </p>
                    <a href="https://wa.me/6281290853613?text=Halo%20admin%20jasanya" target="_blank"
                        class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">
                        <i class="fa fa-phone-alt"></i> Hubungi Kami</a>
                    <a href="#contact" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact
                        Us</a>
                </div>
                <div class="col-lg-5 text-center text-lg-end">
                    <img class="img-fluid animated zoomIn" src="/img/image-removebg-preview.png" alt=""
                        style=" width:330px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->

<!-- Feature Start -->
<div class="container-xxl">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-server text-primary mb-4"></i>
                    <h5 class="mb-3">API</h5>
                    <p class="m-0">Application Programming Interface, cara berinteraksi secara terprogram dengan
                        komponen perangkat lunak</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-mobile text-primary mb-4"></i>
                    <h5 class="mb-3">Aplikasi Mobile</h5>
                    <p class="m-0">Aplikasi mobile (Mobile Apps) yaitu aplikasi yang dibuat untuk perangkat-perangkat
                        bergerak (Mobile)</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                    <h5 class="mb-3">UI / UX</h5>
                    <p class="m-0">Desain Antarmuka Pengguna, adalah desain yang berfokus pada pengalaman
                        pengguna dan interaksi</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- About Start -->
<div class="container-xxl py-5" id="about">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                {{-- <p class="section-title text-secondary">About Us<span></span></p> --}}
                <h1 class="mb-5">Jasanya.Tech</h1>
                <p class="mb-4">Di era 2022 ini, kita tidak akan asing apa itu tekhnologi, baik dalam bidang website,
                    aplikasi android, maupun, aplikasi desktop. Jasanya Company ini menyediakan jasa, untuk yang
                    berkeinginan membuat aplikasi, baik dari segi backend maupun frontend. Terkhususnya untuk Website
                    dan Aplikasi Android(mobil)
                </p>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Fullstack</p>
                        <p class="mb-2">85%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Backend / frontend</p>
                        <p class="mb-2">90%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">UI / UX</p>
                        <p class="mb-2">95%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                {{-- <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a> --}}
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="/img/logo/4.png">
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Facts Start -->
<div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">{{ $hari }}</h1>
                <p class="text-white mb-0">Days Experience</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">7</h1>
                <p class="text-white mb-0">Team Members</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                <p class="text-white mb-0">Compleate Projects</p>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

<!-- Service Start -->
<div class="container-xxl" id="service">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            {{-- <p class="section-title text-secondary justify-content-center"><span></span>Our Services<span></span>
            </p> --}}
            <h1 class="text-center mb-5">Jasa Kami</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0 ">
                        <i class="fa fa-laptop fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Website</h5>
                    <p class="m-0">Penyedia Jasa website</p>
                    <a class="btn btn-square"
                        href="https://wa.me/6281290853613?text=Halo%20admin%20jasanya,%20jasa%20pembuatan%20website"
                        target="blank"><i class="fa fa-phone-alt"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-laptop-code fa-2x"></i>
                    </div>
                    <h5 class="mb-3">UI / UX</h5>
                    <p class="m-0">Penyedia Jasa UI / UX</p>
                    <a class="btn btn-square"
                        href="https://wa.me/6281290853613?text=Halo%20admin%20jasanya,%20jasa%20pembuatan%UI%20/%20UX"
                        target="blank"><i class="fa fa-phone-alt"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-mobile fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Aplikasi Mobile</h5>
                    <p class="m-0">Penyedia Jasa aplikasi mobile</p>
                    <a class="btn btn-square"
                        href="https://wa.me/6281290853613?text=Halo%20admin%20jasanya,%20jasa%20pembuatan%20aplikasi%20mobile"
                        target="blank"><i class="fa fa-phone-alt"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-server fa-2x"></i>
                    </div>
                    <h5 class="mb-3">API</h5>
                    <p class="m-0">Penyedia Jasa API</p>
                    <a class="btn btn-square"
                        href="https://wa.me/6281290853613?text=Halo%20admin%20jasanya,%20jasa%20pembuatan%20API"
                        target="blank"><i class="fa fa-phone-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Service End -->

<!-- Projects Start -->
<div class="container-xxl py-5" id="project">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            {{-- <p class="section-title text-secondary justify-content-center"><span></span>Our Projects<span></span>
            </p> --}}
            <h1 class="text-center mb-5">Project Yang Kami Buat</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".mobile">Aplikasi Mobile</li>
                    <li class="mx-2" data-filter=".website">Website</li>
                    <li class="mx-2" data-filter=".api">Api</li>
                    <li class="mx-2" data-filter=".ui">UI / UX</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container pb-5">
            <div class="col-lg-4 col-md-6 portfolio-item mobile wow fadeInUp" data-wow-delay="0.1s">
                <div class="card shadow rounded overflow-hidden hover-scale-1">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="/img/imgProject/aplikasiMobile.png" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="/img/imgProject/aplikasiMobile.png"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <a href="https://dart.dev/" target="blank">
                            <p class="text-primary fw-medium mb-2">Aplikasi Mobile Dart-Flutter</p>
                        </a>
                        <h5 class="lh-base mb-0">Pembuatan Aplikasi Mobile Dart Flutter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item api wow fadeInUp" data-wow-delay="0.3s">
                <div class="card shadow rounded overflow-hidden hover-scale-1 ">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="/img/imgProject/api.png" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="/img/imgProject/api.png"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <a href="https://lumen.laravel.com/docs/9.x" target="blank">
                            <p class="text-primary fw-medium mb-2">Api laravel-lumen</p>
                        </a>
                        <h5 class="lh-base mb-0">Pembuatan Api Menggunakan laravel lumen</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item website wow fadeInUp" data-wow-delay="0.5s">
                <div class="card shadow rounded overflow-hidden hover-scale-1">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="/img/imgProject/phpNative.png" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="/img/imgProject/phpNative.png"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <a href="https://www.php.net/" target="blank">
                            <p class="text-primary fw-medium mb-2">Website PHP native</p>
                        </a>
                        <h5 class="lh-base mb-0">pembuatan website dengan php-native
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item website wow fadeInUp" data-wow-delay="0.1s">
                <div class="card shadow rounded overflow-hidden hover-scale-1">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="/img/portfolio-4.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="/img/portfolio-4.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                        <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item website wow fadeInUp" data-wow-delay="0.3s">
                <div class="card shadow rounded overflow-hidden hover-scale-1">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="/img/portfolio-5.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="/img/portfolio-5.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                        <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item website wow fadeInUp" data-wow-delay="0.5s">
                <div class="card shadow rounded overflow-hidden hover-scale-1">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="/img/portfolio-6.jpg" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="/img/portfolio-6.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                        <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->


<!-- Testimonial Start -->
<div class="container-xxl pt-5 wow fadeInUp" data-wow-delay="0.1s" id="testimoni">
    <div class="container py-5 px-lg-5">
        {{-- <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>
        --}}
        <h1 class="text-center mb-5">What Say Our Clients!</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam
                    ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit
                    clita duo justo.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="/img/testimonial-1.jpg"
                        style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam
                    ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit
                    clita duo justo.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="/img/testimonial-2.jpg"
                        style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam
                    ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit
                    clita duo justo.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="/img/testimonial-3.jpg"
                        style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Contact Start -->
<div class="container-xxl" id="contact">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            {{-- <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span></p>
            --}}
            <h1 class="text-center mb-5">Kritik Dan Saran</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    {{-- <p class="text-center mb-4">The contact form is currently inactive. Get a functional and
                        working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a
                        little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.
                    </p> --}}
                    <form method="POST" action="{{ url('/kritikSaran') }}">
                        @csrf
                        @include('sweetalert::alert')
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here"
                                        id="message" style="height: 150px"></textarea>
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

<!-- Footer Start -->
@include('partials.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection