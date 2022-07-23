@extends('layouts.main')

@section('container')
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                        <h1 class="text-white animated slideInDown">Jasanya.Tech Team</h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a>
                                </li>
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
    <div class="container-xxl">
        <div class="container px-lg-5">
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
                    @slot('linkGithub')
                    '/digitalTemplate/img/team-1.jpg',
                    @endslot
                    @slot('linkLingkedin')
                    '/digitalTemplate/img/team-1.jpg',
                    @endslot

                </x-card-team>
                <x-card-team>
                    @slot('foto')
                    /img/imgTeam/bangRidwan.jpeg
                    @endslot
                    @slot('nama')
                    Muhammad Ridwan
                    @endslot
                    @slot('job')
                    UI/UX Design
                    @endslot
                    @slot('linkIg')
                    https://www.instagram.com/muhammadridwan_king11
                    @endslot
                    @slot('linkFb')
                    '/digitalTemplate/img/team-1.jpg',
                    @endslot
                    @slot('linkGithub')
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
                    @slot('linkGithub')
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
                    @slot('linkGithub')
                    '/digitalTemplate/img/team-1.jpg',
                    @endslot
                    @slot('linkLingkedin')
                    '/digitalTemplate/img/team-1.jpg',
                    @endslot

                </x-card-team>

                <x-card-team>
                    @slot('foto')
                    /img/imgTeam/bangSarul.jpg
                    @endslot
                    @slot('nama')
                    M.Syahrul Saefulah
                    @endslot
                    @slot('job')
                    Full Stack
                    @endslot
                    @slot('linkIg')
                    https://www.instagram.com/SyahrulSaef
                    @endslot
                    @slot('linkFb')
                    '/digitalTemplate/img/team-1.jpg',
                    @endslot
                    @slot('linkGithub')
                    https://github.com/sahrulprograming/
                    @endslot
                    @slot('linkLingkedin')
                    '/digitalTemplate/img/team-1.jpg',
                    @endslot

                </x-card-team>
                <x-card-team>
                    @slot('foto')
                    /img/imgTeam/rama.jpeg
                    @endslot
                    @slot('nama')
                    Syaiban Ahmad Ramadhan
                    @endslot
                    @slot('job')
                    Backend
                    @endslot
                    @slot('linkIg')
                    https://www.instagram.com/ibanrmaa
                    @endslot
                    @slot('linkFb')
                    '/digitalTemplate/img/team-1.jpg',
                    @endslot
                    @slot('linkGithub')
                    https://github.com/SyaibanAhmadRamadhan/
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
                    https://www.instagram.com/maullana_d19
                    @endslot
                    @slot('linkFb')
                    '/digitalTemplate/img/team-1.jpg',
                    @endslot
                    @slot('linkGithub')
                    https://github.com/maullana19/
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
@endsection