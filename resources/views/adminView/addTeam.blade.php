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
                    <h3 class="page-title"> Form Create Team </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('R_team') }}">team</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Create Team</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" method="POST" action="{{ route('R_team.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputName1"
                                            placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Jobdesk</label>
                                        <input type="text" name="jobdesk" class="form-control" id="exampleInputEmail3"
                                            placeholder="Jobdesk">
                                    </div>
                                    <div class="form-group">
                                        <label>Jobdesk</label>
                                        <select name="jobdesk" class="form-control" style="width:100%" required>
                                            <option value="">Pilih Job</option>
                                            @foreach ( $M_jobdesk as $x )
                                            <option value="{{ $x->nama }}">{{ $x->nama }}</option>
                                            @endforeach ()
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="foto" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity1">instagram</label>
                                        <input type="text" class="form-control" name="instagram" id="exampleInputCity1"
                                            placeholder="instagram">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity1">github</label>
                                        <input type="text" class="form-control" name="github" id="exampleInputCity1"
                                            placeholder="github">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity1">linkedin</label>
                                        <input type="text" class="form-control" name="linkedin" id="exampleInputCity1"
                                            placeholder="linkedin">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity1">facebook</label>
                                        <input type="text" class="form-control" name="facebook" id="exampleInputCity1"
                                            placeholder="facebook">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-dark">Cancel</button>
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