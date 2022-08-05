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
                                Form Edit Project
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
                                        <form class="forms-sample form-valide" method="POST" action="/project/{{ $project->id }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="oldfoto_transaksi"
                                                value="{{ $project->foto_transaksi }}">
                                            <input type="hidden" name="oldfoto_completed"
                                                value="{{ $project->foto_completed }}">
                                            <div class="form-group row has-success">
                                                <label for="name" class="col-lg-4 col-form-label">Name Client</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="nama_client" class="form-control"
                                                        id="name" value="{{ old(' nama', $project->nama_client) }}"
                                                        placeholder="Name Client">
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label class="col-lg-4 col-form-label" for="name">Name Project</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="nama_project" class="form-control"
                                                        id="name" value="{{ $project->nama_project }}"
                                                        placeholder="Nama Project">
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">

                                                <label class="col-lg-4 col-form-label" for="deskripsi">deskripsi</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="deskripsi" class="form-control"
                                                        id="deskripsi"
                                                        value="{{ old(' deskripsi', $project->deskripsi) }}"placeholder="Deskripsi Project">
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label class="col-lg-4 col-form-label"
                                                    for="exampleTextarea1">keterangan</label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" name="keterangan" id="exampleTextarea1" rows="3" placeholder="Keterangan Project">{{ old('keterangan', $project->keterangan) }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">

                                                <label class="col-lg-4 col-form-label" for="date">Deadline
                                                    Project</label>
                                                <div class="col-lg-6">
                                                    <input type="date" name="deadline" value="{{ $project->deadline }}"
                                                        class="form-control" id="date">
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">

                                                <label class="col-lg-4 col-form-label" for="date">Time Completed</label>
                                                <div class="col-lg-6">
                                                    <input type="date" name="time_completed"
                                                        value="{{ $project->time_completed }}" class="form-control"
                                                        id="date">
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label class="col-lg-4 col-form-label" for="status">status</label>
                                                <div class="col-lg-6">
                                                    <select name="status" class="form-control"
                                                        id="status"style="width:100%" required>
                                                        <option value="Pending"
                                                            {{ old('status', $project->status) == 'Pending' ? 'selected' : '' }}>
                                                            Pending</option>
                                                        <option value="Rejected"
                                                            {{ old('status', $project->status) == 'Rejected' ? 'selected' : '' }}>
                                                            Rejected</option>
                                                        <option value="In progress"
                                                            {{ old('status', $project->status) == 'In progress' ? 'selected' : '' }}>
                                                            In progress</option>
                                                        <option value="Completed"
                                                            {{ old('status', $project->status) == 'Completed' ? 'selected' : '' }}>
                                                            Completed</option>
                                                        <option value="Special"
                                                            {{ old('status', $project->status) == 'Special' ? 'selected' : '' }}>
                                                            Special</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label class="col-lg-4 col-form-label">jenis</label>
                                                <div class="col-lg-6">
                                                    <select name="jenis" class="form-control" style="width:100%">
                                                        @foreach ($layanan as $x)
                                                            <option value="{{ $x->nama_layanan }}"
                                                                {{ old('jenis', $project->jenis) == $x->nama_jenis ? 'selected' : '' }}>
                                                                {{ $x->nama_layanan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label class="col-lg-4 col-form-label">Pekerja</label>
                                                <div class="selectgroup selectgroup-pills">
                                                    @if ($project->pekerja != 'null')
                                                        @foreach ($pekerja as $key => $x)
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="pekerja[]"
                                                                    value="{{ $x->nama_lengkap }}"
                                                                    class="selectgroup-input"
                                                                    @foreach ($arrayPekerja as $key => $p) @if ($x->nama_lengkap == $p)
                                                            {{ 'checked' }} @endif
                                                                    @endforeach>
                                                                <span
                                                                    class="selectgroup-button">{{ $x->nama_lengkap }}</span>
                                                            </label>
                                                        @endforeach
                                                    @elseif ($project->pekerja == 'null')
                                                        @foreach ($pekerja as $key => $x)
                                                            <label class="selectgroup-item">
                                                                <input type="checkbox" name="pekerja[]"
                                                                    value="{{ $x->nama_lengkap }}"
                                                                    class="selectgroup-input">
                                                                <span
                                                                    class="selectgroup-button">{{ $x->nama_lengkap }}</span>
                                                            </label>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                    <div class="form-group row has-success">
                                        <label class="col-lg-4 col-form-label" for="foto_transaksi">Foto
                                            Transaksi</label>
                                        <div class="col-lg-6">
                                            @if ($project->foto_transaksi)
                                                <img src="{{ asset('storage/' . $project->foto_transaksi) }}"
                                                    class="img-show mb-3 img-fluid rounded d-block" style="height: 200px"
                                                    alt="">
                                            @else
                                                <img src="" class="img-show mb-3 img-fluid rounded d-block"
                                                    style="height: 200px" alt="">
                                            @endif

                                            <input type="file" name="foto_transaksi" class="form-control-file"
                                                id="foto" onchange="previewImage()">
                                        </div>
                                    </div>
                                    <div class="form-group row has-success">
                                        <label class="col-lg-4 col-form-label" for="foto1">Foto Project</label>
                                        <div class="col-lg-6">
                                            @if ($project->foto_completed)
                                                <img src="{{ asset('storage/' . $project->foto_completed) }}"
                                                    class="img-show1 mb-3 img-fluid rounded d-block" style="height: 200px"
                                                    alt="">
                                            @else
                                                <img src="" class="img-show1 mb-3 img-fluid rounded d-block"
                                                    style="height: 200px" alt="">
                                            @endif
                                            <input type="file" name="foto_completed" class="form-control-file"
                                                id="foto1" onchange="previewImage1()">
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
