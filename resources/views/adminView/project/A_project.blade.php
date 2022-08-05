@extends('layouts.mainAdmin')

@section('container')
    <div class="wrapper">

        {{-- side bar --}}
        @include('partials.navbarAdmin')
        {{-- end side bar --}}

        <div class="container-fluid page-body-wrapper">

            {{-- navbar --}}
            @include('partials.sidebarAdmin')
            {{-- end navbar --}}


            <main class="main-panel">
                <div class="content">
                    <div class="page-inner">
                        <x-headerTableForm>
                            @slot('nama')
                                Form Add Project
                            @endslot
                            @slot('url')
                                project
                            @endslot
                            @slot('nameurl')
                                Project
                            @endslot
                        </x-headerTableForm>
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="forms-sample form-valide" method="POST" action="/project"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row has-success">
                                                <label for="name" class="col-lg-4 col-form-label">Name Client</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="nama_client" class="form-control"
                                                        id="name" placeholder="Name Client">
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label class="col-lg-4 col-form-label" for="name">Name Project</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="nama_project" class="form-control"
                                                        id="name" value="" placeholder="Nama Project">
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">

                                                <label class="col-lg-4 col-form-label" for="deskripsi">deskripsi</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="deskripsi" class="form-control"
                                                        id="deskripsi" placeholder="Deskripsi Project">
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label class="col-lg-4 col-form-label"
                                                    for="exampleTextarea1">keterangan</label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" name="keterangan" id="exampleTextarea1" rows="3" placeholder="Keterangan Project"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">

                                                <label class="col-lg-4 col-form-label" for="date">Deadline
                                                    Project</label>
                                                <div class="col-lg-6">
                                                    <input type="date" name="deadline" class="form-control"
                                                        id="date">
                                                </div>
                                            </div>

                                            <div class="form-group row has-success">
                                                <label class="col-lg-4 col-form-label" for="status">status</label>
                                                <div class="col-lg-6">
                                                    <select name="status" class="form-control"
                                                        id="status"style="width:100%" required>
                                                        <option value="">Status Project</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="In progress">In progress</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label class="col-lg-4 col-form-label">jenis</label>
                                                <div class="col-lg-6">
                                                    <select name="jenis" class="form-control" style="width:100%">
                                                        <option value="">Jenis Project</option>
                                                        @foreach ($layanan as $x)
                                                            <option value="{{ $x->nama_layanan }}">{{ $x->nama_layanan }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label class="col-lg-4 col-form-label">Pekerja</label>
                                                <div class="selectgroup selectgroup-pills">
                                                    @foreach ($pekerja as $x)
                                                        <label class="selectgroup-item">
                                                            <input type="checkbox" name="pekerja[]"
                                                                value="{{ $x->nama_lengkap }}" class="selectgroup-input">
                                                            <span class="selectgroup-button">{{ $x->nama_lengkap }}</span>
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label class="col-lg-4 col-form-label" for="foto_transaksi">Foto
                                                    Transaksi</label>
                                                <div class="col-lg-6">
                                                    <img class="img-show mb-3 img-fluid rounded d-block"
                                                        style="height: 200px" alt="">
                                                    <input type="file" name="foto_transaksi" class="form-control-file"
                                                        id="foto" onchange="previewImage()">
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <a href="/project" class="btn btn-dark">Cancel</a>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
