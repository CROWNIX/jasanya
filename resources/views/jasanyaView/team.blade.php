<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>jasanya tech - {{$title}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/digitalTemplate/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/digitalTemplate/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/digitalTemplate/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/digitalTemplate/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/digitalTemplate/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/digitalTemplate/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- nav -->
        <div class="container-xxl position-relative p-0">
            @include('partials.navbar')
            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Our Team</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Members Team</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end nav -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-center mb-5">Team Member</h1>
                </div>
                <div class="row g-4">
                    <x-card-team> 
                        @slot('foto')
                            /digitalTemplate/img/team-1.jpg
                        @endslot
                        @slot('nama')
                            Rahmat Fauzi Widianto
                        @endslot
                        @slot('job')
                            Backend
                        @endslot
                        @slot('linkIg')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkFb')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkTwitter')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkLingkedin')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        
                    </x-card-team>
                    <x-card-team> 
                        @slot('foto')
                            /digitalTemplate/img/team-1.jpg
                        @endslot
                        @slot('nama')
                            Muhammad Ridwan
                        @endslot
                        @slot('job')
                            UI/UX Design
                        @endslot
                        @slot('linkIg')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkFb')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkTwitter')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkLingkedin')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                    </x-card-team>

                    <x-card-team> 
                        @slot('foto')
                            /digitalTemplate/img/team-1.jpg
                        @endslot
                        @slot('nama')
                            Atikah Rahmawati
                        @endslot
                        @slot('job')
                            UI/UX Design
                        @endslot
                        @slot('linkIg')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkFb')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkTwitter')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkLingkedin')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        
                    </x-card-team>

                    <x-card-team> 
                        @slot('foto')
                            /digitalTemplate/img/team-1.jpg
                        @endslot
                        @slot('nama')
                            Yesicha Audria 
                        @endslot
                        @slot('job')
                            UI/UX Design
                        @endslot
                        @slot('linkIg')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkFb')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkTwitter')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkLingkedin')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        
                    </x-card-team>

                    <x-card-team> 
                        @slot('foto')
                            /digitalTemplate/img/team-1.jpg
                        @endslot
                        @slot('nama')
                            M.Syahrul Saefulah
                        @endslot
                        @slot('job')
                            Full Stack
                        @endslot
                        @slot('linkIg')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkFb')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkTwitter')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkLingkedin')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        
                    </x-card-team>

                    <x-card-team> 
                        @slot('foto')
                            /digitalTemplate/img/team-1.jpg
                        @endslot
                        @slot('nama')
                            Dede Maulana
                        @endslot
                        @slot('job')
                            Front End & UI/UX
                        @endslot
                        @slot('linkIg')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkFb')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkTwitter')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkLingkedin')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        
                    </x-card-team>

                    <x-card-team> 
                        @slot('foto')
                            /digitalTemplate/img/team-1.jpg
                        @endslot
                        @slot('nama')
                            Syaiban Ahmad Ramadhan
                        @endslot
                        @slot('job')
                            Backend
                        @endslot
                        @slot('linkIg')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkFb')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkTwitter')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        @slot('linkLingkedin')
                            '/digitalTemplate/img/team-1.jpg',
                        @endslot
                        
                    </x-card-team>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        <!-- Footer Start -->
        @include('partials.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/digitalTemplate/lib/wow/wow.min.js"></script>
    <script src="/digitalTemplate/lib/easing/easing.min.js"></script>
    <script src="/digitalTemplate/lib/waypoints/waypoints.min.js"></script>
    <script src="/digitalTemplate/lib/counterup/counterup.min.js"></script>
    <script src="/digitalTemplate/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/digitalTemplate/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/digitalTemplate/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/digitalTemplate/js/main.js"></script>
</body>

</html>