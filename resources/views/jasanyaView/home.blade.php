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
<x-navbar-hero>

</x-navbar-hero>
<!-- Navbar & Hero End -->

<!-- Feature Start -->
<x-feature>

</x-feature>
<!-- Feature End -->

<!-- About Start -->
<x-about>

</x-about>
<!-- About End -->

<!-- Facts Start -->
<x-fatch>
    @slot('hari')
    {{ $hari }}
    @endslot
</x-fatch>
<!-- Facts End -->

<!-- Service Start -->
<x-service>

</x-service>
<!-- Service End -->

<!-- Newsletter Start -->
<x-newslater>

</x-newslater>
<!-- Newsletter End -->


<!-- Projects Start -->
<x-project>

</x-project>
<!-- Projects End -->


<!-- Testimonial Start -->
<x-testimonial>

</x-testimonial>
<!-- Testimonial End -->

<!-- Contact Start -->
<x-contact>

</x-contact>
<!-- Contact End -->

<!-- Footer Start -->
@include('partials.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection