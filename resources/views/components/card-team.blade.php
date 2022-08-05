<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="shadow hover-scale-1 team-item bg-light rounded mb-sm-3 mb-3">
        <div class="text-center border-bottom p-4">
            <img class=" rounded-circle mb-4" src="{{ $foto }}" alt="" style="height: 14rem; width: 13rem; object-fit:cover; ">
            <h5>{{ $nama }}</h5>
            <span>{{ $job }}</span>
        </div>
        <div class="d-flex justify-content-center p-4">
            <a class="btn shadow btn-square mx-1 bg-dark" href="{{ $linkGithub }}" target="_blank" ><i
                    class="fab fa-github text-white"></i></a>
            <a class="btn shadow btn-square mx-1 ig-icon" href="{{ $linkIg }}" target="_blank"><i
                    class="fab fa-instagram text-white"></i></a>
            <a class="btn shadow btn-square mx-1 bg-info" href="{{ $linkLingkedin }}" target="_blank"><i
                    class="fab fa-linkedin-in text-white"></i></a>
            <a class="btn shadow btn-square mx-1 facebook-icon" href="{{ $linkFb }}" target="_blank"><i
                    class="fab fa-facebook-f text-white"></i></a>
        </div>
    </div>
</div>
