@extends('layouts.mainAdmin')

@section('container')
<div class="wrapper sidebar_minimize">

    {{-- side bar --}}
    @include('partials.navbarAdmin')
    {{-- end side bar --}}

    <div class="container-fluid page-body-wrapper">

        {{-- navbar --}}
        @include('partials.sidebarAdmin')
        {{-- end navbar --}}


        <div class="main-panel">
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
                                    <form class="forms-sample" method="POST"
                                        action="/project/{{ $project->id }}"
                                        enctype="multipart/form-data">
                                        @method("put")
                                        @csrf
                                        <input type="hidden" name="oldfoto_transaksi" value="{{ $project->foto_transaksi }}">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="foto1">Foto Project</label>
                                                    <input type="file" name="foto_completed" class="form-control-file"
                                                        id="foto1" onchange="previewImage1()">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><br>
                                                    <label for="name">Name Client</label>
                                                    <input type="text" name="nama_client" class="form-control" id="name"
                                                        value="{{ old("nama", $project->nama) }}">
                                                        @error("nama")
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
                                                        id="name" value="{{ $project->nama_project }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="deskripsi">deskripsi</label>
                                                    <input type="text" name="deskripsi" class="form-control"
                                                        id="deskripsi" value="{{ old("deskripsi", $project->deskripsi) }}" placeholder="Deskripsi">
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
                                                        id="exampleTextarea1" rows="3" placeholder="Keterangan">{{ old("keterangan", $project->keterangan) }}</textarea>
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
                                                    <input type="date" name="deadline" class="form-control" id="date" value="{{ $project->deadline }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleTextarea1">keterangan</label>
                                                    <textarea class="form-control" name="keterangan"
                                                        id="exampleTextarea1"
                                                        rows="3">{{ $project->keterangan }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>status</label>
                                                    <select name="status" class="form-control" style="width:100%"
                                                        required>
                                                        <option value="Pending" {{ old("status", $project->status) == "Pending" ? "selected" : "" }}>Pending</option>
                                                        <option value="Rejected" {{ old("status", $project->status) == "Rejected" ? "selected" : "" }}>Rejected</option>
                                                        <option value="In progress" {{ old("status", $project->status) == "In progress" ? "selected" : "" }}>In progress</option>
                                                        <option value="Completed" {{ old("status", $project->status) == "Completed" ? "selected" : "" }}>Completed</option>
                                                        <option value="Special" {{ old("status", $project->status) == "Special" ? "selected" : "" }}>Special</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>jenis</label>
                                                    <select name="jenis" class="form-control" style="width:100%"
                                                        required>
                                                        @foreach ($layanan as $x)
                                                        <option value="{{ $x->nama }}" {{ old("jenis", $project->jenis) == $x->nama ? "selected" : "" }}>{{ $x->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Pekerja</label>
                                                    <div class="selectgroup selectgroup-pills">
                                                        @if (count($arrayPekerja) > 1)
                                                            @foreach ($pekerja as $x)
                                                                @foreach ($arrayPekerja as $p) 
                                                                @if ($x->nama_lengkap == $p)
                                                                <label class="selectgroup-item">
                                                                    <input type="checkbox" name="pekerja[]"
                                                                        value="{{ $x->nama_lengkap }}"
                                                                        class="selectgroup-input" checked>
                                                                    <span class="selectgroup-button">{{
                                                                        $x->nama_lengkap}}</span>
                                                                </label>
                                                                @php
                                                                    $same = true;  
                                                                    break; 
                                                                @endphp 
                                                                @else
                                                                @php
                                                                    $same = false;
                                                                @endphp 
                                                                @endif
                                                                @endforeach
                                                                @if ($same == true)
                                                                @php
                                                                    continue;
                                                                @endphp
                                                                @endif
                                                                <label class="selectgroup-item">
                                                                    <input type="checkbox" name="pekerja[]"
                                                                        value="{{ $x->nama_lengkap }}"
                                                                        class="selectgroup-input">
                                                                    <span class="selectgroup-button">{{
                                                                        $x->nama_lengkap}}</span>
                                                                </label>  
                                                            @endforeach
                                                        @else
                                                            @foreach ($pekerja as $x)
                                                                @foreach ($arrayPekerja as $p) 
                                                                <label class="selectgroup-item">
                                                                    <input type="checkbox" name="pekerja[]"
                                                                        value="{{ $x->nama_lengkap }}"
                                                                        class="selectgroup-input" {{ old("pekerja[]", $x->nama_lengkap) == $p ? "checked" : "" }}>
                                                                    <span class="selectgroup-button">{{
                                                                        $x->nama_lengkap}}</span>
                                                                </label>
                                                                @endforeach
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto_transaksi">Foto Transaksi</label>
                                                    <img src="{{ asset("storage/" . $project->foto_transaksi) }}" class="img-show mb-3 img-fluid rounded d-block"
                                                        style="height: 200px" alt="">
                                                    <input type="file" name="foto_transaksi" class="form-control-file"
                                                        id="foto" onchange="previewImage()">
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
        </div>
    </div>
</div>
@endsection