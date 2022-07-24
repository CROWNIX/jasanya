@extends('layouts.mainAdmin')

@section('container')
<div class="container-scroller">

    {{-- side bar --}}
    @include('partials.sidebarAdmin')
    {{-- end side bar --}}

    <div class="container-fluid page-body-wrapper">

        {{-- navbar --}}
        @include('partials.navbarAdmin')
        {{-- end navbar --}}

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> detail kritik saran, {{ $detailKritikSaran->name }} </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/kritikSaran') }}">kritik saran</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <form class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputName1">name</label>
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            placeholder="{{ $detailKritikSaran->name }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail3"
                                            placeholder="{{ $detailKritikSaran->email }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">subject</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4"
                                            placeholder="{{ $detailKritikSaran->email }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Textarea</label>
                                        <textarea class="form-control" id="exampleTextarea1" rows="6"
                                            placeholder="{{ $detailKritikSaran->message }}" readonly></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                        bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                            href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                            admin templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection

</html>