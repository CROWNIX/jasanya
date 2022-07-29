<!-- Navbar & Hero Start -->
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="m-0">Jasanya.Tech</h1>
            {{-- <img src="img/logo/3.png" alt="Logo"> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ url('/#home') }}" class="nav-item nav-link">Home</a>
                <a href="{{ url('/#about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('/#service') }}" class="nav-item nav-link">Service</a>
                <a href="{{ url('/#project') }}" class="nav-item nav-link">Project</a>
                <a href="{{ url('/jasanyateam') }}" class="nav-item nav-link">Team</a>
                {{-- <div class="nav-item dropdown" id="drop">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('/team') }}" class="dropdown-item">Our Team</a>
                        <a href="{{ url('/#testimoni') }}" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
                <a href="{{ url('./#contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ url('/#home') }}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
        </div>
    </nav>
<!-- Navbar & Hero End -->