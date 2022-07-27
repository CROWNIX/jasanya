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
                @forelse ($M_team as $x)
                <x-card-team>
                    @slot('foto')
                    {{-- /img/imgTeam/{{ $x->foto }} --}}
                    {{ asset('storage/'.$x->foto) }}
                    @endslot
                    @slot('nama')
                    {{ $x->nama_lengkap }}
                    @endslot
                    @slot('job')
                    {{ $x->jobdesk }}
                    @endslot
                    @slot('linkIg')
                    https://www.instagram.com/{{ $x->instagram }}
                    @endslot
                    @slot('linkFb')

                    @endslot
                    @slot('linkGithub')
                    https://github.com/{{ $x->github }}/
                    @endslot
                    @slot('linkLingkedin')

                    @endslot

                </x-card-team>
                @empty
                <div class="alert alert-danger">
                    Tidak Team.
                </div>
                @endforelse
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