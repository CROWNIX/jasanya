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
                        R_project
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
                                        action="{{ route('R_project.update',$project->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img class="rounded"
                                                    src="/img/imgTransaksi/{{ $project->foto_transaksi }}"
                                                    style="height: 200px" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <img class="rounded"
                                                    src="/img/imgProject/{{ $project->foto_completed }}"
                                                    style="height: 200px" alt="project foto kosong">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="foto_transaksi">Foto Transaksi</label>
                                                    <input type="file" name="foto_transaksi" class="form-control-file"
                                                        id="foto_transaksi">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="foto_completed">Foto Project</label>
                                                    <input type="file" name="foto_completed" class="form-control-file"
                                                        id="foto_completed">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group"><br>
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" class="form-control" id="name"
                                                        value="{{ $project->nama }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><br>
                                                    <label for="deskripsi">deskripsi</label>
                                                    <input type="text" name="deskripsi" class="form-control"
                                                        id="deskripsi" value="{{ $project->deskripsi }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><br>
                                                    <label for="date">Deadline Project</label>
                                                    <input type="date" name="deadline" class="form-control" id="date"
                                                        value="{{ $project->deadline }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><br>
                                                    <label for="time_completed">Project Selesai</label>
                                                    <input type="date" name="time_completed" class="form-control"
                                                        id="name" value="{{ $project->time_completed }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>status</label>
                                                    <select name="status" class="form-control" style="width:100%"
                                                        required>
                                                        <option value="{{ $project->status }}">{{
                                                            $project->status
                                                            }}
                                                        </option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="In progress">In progress</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>jenis</label>
                                                    <select name="jenis" class="form-control" style="width:100%"
                                                        required>
                                                        <option value="{{ $project->jenis }}">{{ $project->jenis
                                                            }}
                                                        </option>
                                                        <option value="Aplikasi Mobile">Aplikasi Mobile</option>
                                                        <option value="Website">Website</option>
                                                        <option value="Api">Api</option>
                                                        <option value="UI / UX">UI / UX</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Pekerja</label>
                                                    <div class="selectgroup selectgroup-pills">
                                                        @foreach ($pekerja as $key=> $x)
                                                        <label class="selectgroup-item">
                                                            <input type="checkbox" name="pekerja[]"
                                                                value="{{ $x->nama_lengkap }}" class="selectgroup-input"
                                                                @foreach($arrayPekerja as $key=> $p)
                                                            @if($x->nama_lengkap ==$p)
                                                            {{ "checked" }}
                                                            @endif
                                                            @endforeach required>
                                                            <span class="selectgroup-button">{{ $x->nama_lengkap
                                                                }}</span>
                                                        </label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleTextarea1">keterangan</label>
                                                    <textarea class="form-control" name="keterangan"
                                                        id="exampleTextarea1"
                                                        rows="3">{{ $project->keterangan }}</textarea>
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