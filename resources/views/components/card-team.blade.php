<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="shadow hover-scale-1 team-item bg-light rounded">
        <div class="text-center border-bottom p-4">
            <img class="img-fluid rounded-circle mb-4" src="{{ $foto }}" alt="" style="height: 14rem; width: 14rem;">
            <h5>{{ $nama }}</h5>
            <span>{{ $job }}</span>
        </div>
        <div class="d-flex justify-content-center p-4">
            <a class="btn btn-square mx-1 bg-dark" href="{{ $linkGithub }}" target="_blank" ><i
                    class="fab fa-github text-white"></i></a>
            <a class="btn btn-square mx-1 ig-icon" href="{{ $linkIg }}" target="_blank"><i
                    class="fab fa-instagram text-white"></i></a>
            <a class="btn btn-square mx-1 bg-info" href="{{ $linkLingkedin }}" target="_blank"><i
                    class="fab fa-linkedin-in text-white"></i></a>
            <a class="btn btn-square mx-1 facebook-icon" href="{{ $linkFb }}" target="_blank"><i
                    class="fab fa-facebook-f text-white"></i></a>
        </div>
    </div>
</div>