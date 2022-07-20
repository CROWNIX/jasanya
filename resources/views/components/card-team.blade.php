<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="shadow hover-scale-1 team-item bg-light rounded">
        <div class="text-center border-bottom p-4">
            <img class="img-fluid rounded-circle mb-4" src="{{ $foto }}" alt="" style="height: 14rem;">
            <h5>{{ $nama }}</h5>
            <span>{{ $job }}</span>
        </div>
        <div class="d-flex justify-content-center p-4">
            <a class="btn btn-square mx-1" href="{{ $linkGithub }}"><i class="fab fa-github"></i></a>
            <a class="btn btn-square mx-1" href="{{ $linkIg }}"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-square mx-1" href="{{ $linkLingkedin }}"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-square mx-1" href="{{ $linkFb }}"><i class="fab fa-facebook-f"></i></a>
        </div>
    </div>
</div>
