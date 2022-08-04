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
                                    <form class="forms-sample" method="POST" action="/project"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"><br>
                                                    <label for="name">Name Client</label>
                                                    <input type="text" name="nama_client" class="form-control" id="name"
                                                        value="">
                                                    @error("nama_client")
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><br>
                                                    <label for="name">Name Project</label>
                                                    <input type="text" name="nama_project" class="form-control"
                                                        id="name" value="">
                                                    @error("nama_project")
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group"><br>
                                                    <label for="deskripsi">deskripsi</label>
                                                    <input type="text" name="deskripsi" class="form-control"
                                                        id="deskripsi">
                                                    @error("deskripsi")
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleTextarea1">keterangan</label>
                                                    <textarea class="form-control" name="keterangan"
                                                        id="exampleTextarea1" rows="3"></textarea>
                                                    @error("keterangan")
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><br>
                                                    <label for="date">Deadline Project</label>
                                                    <input type="date" name="deadline" class="form-control" id="date">
                                                    @error("deadline")
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>status</label>
                                                    <select name="status" class="form-control" style="width:100%"
                                                        required>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="In progress">In progress</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
                                                    @error("status")
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>jenis</label>
                                                    <select name="jenis" class="form-control" style="width:100%"
                                                        required>
                                                        @foreach ($layanan as $x)
                                                        <option value="{{ $x->nama }}">{{ $x->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Pekerja</label>
                                                    <div class="selectgroup selectgroup-pills">
                                                        @foreach ($pekerja as $x)
                                                        <label class="selectgroup-item">
                                                            <input type="checkbox" name="pekerja[]"
                                                                value="{{ $x->nama_lengkap }}"
                                                                class="selectgroup-input">
                                                            <span class="selectgroup-button">{{
                                                                $x->nama_lengkap}}</span>
                                                        </label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto_transaksi">Foto Transaksi</label>
                                                    <img class="img-show mb-3 img-fluid rounded d-block"
                                                        style="height: 200px" alt="">
                                                    <input type="file" name="foto_transaksi" class="form-control-file"
                                                        id="foto" onchange="previewImage()">
                                                    @error("foto_transaksi")
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-dark">Cancel</button>

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