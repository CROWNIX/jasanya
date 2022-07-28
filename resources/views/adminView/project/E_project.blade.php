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
                                        action="{{ route('project.update',$project->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            {{-- foto transaki --}}
                                            <div class="col-md-6">
                                                <input type="hidden" name="oldfoto_transaksi" id=""
                                                    value="{{ $project->foto_transaksi }}">
                                                @if ($project->foto_transaksi)
                                                <img class="img-show rounded mx-auto d-block"
                                                    src="{{ asset('storage/'.$project->foto_transaksi) }}"
                                                    style="height: 200px" alt="tidak ada foto transaksi">
                                                @else
                                                <img class="img-show rounded" alt="" style="height: 200px">
                                                @endif
                                            </div>
                                            {{-- foto project --}}
                                            <div class="col-md-6">
                                                <input type="hidden" name="oldfoto_completed" id=""
                                                    value="{{ $project->foto_completed }}">
                                                @if ($project->foto_completed)
                                                <img class="img-show1 rounded mx-auto d-block"
                                                    src="{{ asset('storage/'.$project->foto_completed) }}"
                                                    style="height: 200px" alt="tidak ada foto project">
                                                @else
                                                <img class="img-show1 rounded mx-auto d-block" alt=""
                                                    style="height: 200px">
                                                @endif
                                            </div>
                                            {{-- foto transaki --}}
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="foto">Foto Transaksi</label>
                                                    <input type="file" name="foto_transaksi" class="form-control-file"
                                                        id="foto" onchange="previewImage()">
                                                </div>
                                            </div>
                                            {{-- foto project --}}
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
                                                        <option value="Special">Special</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>jenis</label>
                                                    <select name="jenis" style="width:100%" class="form-control"
                                                        required>
                                                        <option value="{{ $project->jenis }}">{{ $project->jenis}}
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
                                                        @if ($project->pekerja != 'null')
                                                        @foreach ($pekerja as $key=> $x)
                                                        <label class="selectgroup-item">
                                                            <input type="checkbox" name="pekerja[]"
                                                                value="{{ $x->nama_lengkap }}" class="selectgroup-input"
                                                                @foreach($arrayPekerja as $key=> $p)
                                                            @if($x->nama_lengkap ==$p)
                                                            {{ "checked" }}
                                                            @endif
                                                            @endforeach>
                                                            <span class="selectgroup-button">{{ $x->nama_lengkap
                                                                }}</span>
                                                        </label>
                                                        @endforeach
                                                        @elseif ($project->pekerja == 'null')
                                                        @foreach ($pekerja as $key=> $x)
                                                        <label class="selectgroup-item">
                                                            <input type="checkbox" name="pekerja[]"
                                                                value="{{ $x->nama_lengkap }}"
                                                                class="selectgroup-input">
                                                            <span class="selectgroup-button">{{ $x->nama_lengkap
                                                                }}</span>
                                                        </label>
                                                        @endforeach
                                                        @endif

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