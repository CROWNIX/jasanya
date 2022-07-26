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
                    <h3 class="page-title"> Form Create Project </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('R_team') }}">project</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Create Project</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" method="POST" action="{{ route('R_project.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputName1"
                                            placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" id="exampleInputName1"
                                            placeholder="deskripsi" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Bukti Transaksi</label>
                                        <input type="file" name="buktiTransaksi" class="file-upload-default">
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
                                        <label for="exampleInputCity1">Deadline Project</label>
                                        <input type="date" class="form-control" name="deadline" id="exampleInputCity1"
                                            placeholder="deadline">
                                    </div>
                                    <div class="form-group">
                                        <label>status</label>
                                        <select name="status" class="js-example-basic-single" style="width:100%"
                                            required>
                                            <option value="Pending">Pending</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="In progress">In progress</option>
                                            <option value="Completed">Completed</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>jenis</label>
                                        <select name="jenis" class="js-example-basic-single" style="width:100%">
                                            <option value="">Jenis Aplikasi</option>
                                            <option value="Aplikasi Mobile">Aplikasi Mobile</option>
                                            <option value="Website">Website</option>
                                            <option value="Api">Api</option>
                                            <option value="UI / UX">UI / UX</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerja</label>
                                        <select class="js-example-basic-multiple" multiple="multiple" style="width:100%"
                                            name="pekerja[]">
                                            <option value="">pilih pekerja</option>
                                            @foreach ($pekerja as $x)
                                            <option value="{{ $x->nama_lengkap }}">{{ $x->nama_lengkap }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">keterangan</label>
                                        <textarea class="form-control" name="keterangan" id="exampleTextarea1"
                                            rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-dark">Cancel</button>
                                </form>
                                <p>*Jika belum bayar maka kasih keterangan pending</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</html>