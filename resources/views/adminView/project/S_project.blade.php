@extends('layouts.mainAdmin')

@section('container')
<div class="wrapper sidebar_minimize">
    <!-- Navbar Header -->
    @include('partials.navbarAdmin')
    <!-- End Navbar -->
    <!-- Sidebar -->
    @include('partials.sidebarAdmin')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <x-headerTableForm>
                    @slot('nama')
                    Data Project
                    @endslot
                    @slot('url')
                    R_project
                    @endslot
                    @slot('nameurl')
                    project
                    @endslot
                </x-headerTableForm>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Modal -->
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> no </th>
                                                <th> Name Client </th>
                                                <th> deadline </th>
                                                <th> status </th>
                                                <th style="width: 10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($project as $x)
                                            <tr>
                                                <td> {{ $no++ }}</td>
                                                <td>{{ $x->nama}}</td>
                                                <td>{{ $x->deadline}}</td>
                                                <td>{{ $x->status}}</td>
                                                <td>
                                                    <form class="form-button-action"
                                                        action="{{ route('R_project.destroy', $x->id) }}" method="POST">
                                                        <button class="btn btn-light btn-link" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false"><i
                                                                class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu">
                                                            <button class="btn" type="button" data-toggle="modal"
                                                                data-target="#addRowModal{{ $x->id }}">detail</button>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item"
                                                                href="{{ route('R_project.show',$x->id ) }}">edit</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn">Hapus</button>
                                                        </div>
                                                    </form>
                                                    <div class="modal fade" id="addRowModal{{ $x->id }}" tabindex="-1"
                                                        role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header no-bd">
                                                                    <h5 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                            {{ $x->nama }}</span>
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label for="name">Bukti
                                                                                        Transaksi</label>
                                                                                    <img class="rounded"
                                                                                        src="{{ asset('storage/'.$x->foto_transaksi) }}"
                                                                                        style="height: 200px"
                                                                                        alt="bukti traksaksi kosoong">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label for="name">Foto
                                                                                        Project</label>
                                                                                    <img class="rounded"
                                                                                        src="{{ asset('storage/'.$x->foto_completed) }}"
                                                                                        style="height: 200px"
                                                                                        alt="project foto kosong">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">

                                                                                    <label for="name">Name
                                                                                        Client</label>
                                                                                    <input type="text" name="name"
                                                                                        class="form-control" id="name"
                                                                                        value="{{ $x->nama }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">

                                                                                    <label
                                                                                        for="deskripsi">deskripsi</label>
                                                                                    <input type="text" name="deskripsi"
                                                                                        class="form-control"
                                                                                        id="deskripsi"
                                                                                        value="{{ $x->deskripsi }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">

                                                                                    <label for="date">Deadline
                                                                                        Project</label>
                                                                                    <input type="text" name="deadline"
                                                                                        class="form-control" id="date"
                                                                                        value="{{ $x->deadline }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">

                                                                                    <label for="time_completed">Project
                                                                                        Selesai</label>
                                                                                    <input type="text"
                                                                                        name="time_completed"
                                                                                        class="form-control" id="name"
                                                                                        value="{{ $x->time_completed }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">

                                                                                    <label
                                                                                        for="time_completed">status</label>
                                                                                    <input type="text"
                                                                                        name="time_completed"
                                                                                        class="form-control" id="name"
                                                                                        value="{{ $x->status }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">

                                                                                    <label
                                                                                        for="time_completed">jenis</label>
                                                                                    <input type="text"
                                                                                        name="time_completed"
                                                                                        class="form-control" id="name"
                                                                                        value="{{ $x->jenis }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label
                                                                                        for="exampleTextarea1">keterangan</label>
                                                                                    <textarea class="form-control"
                                                                                        name="keterangan"
                                                                                        id="exampleTextarea1"
                                                                                        rows="1">{{ $x->keterangan }}</textarea>
                                                                                </div>
                                                                            </div>

                                                                            @foreach (json_decode($x->pekerja) as $p)

                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label for="time_completed">Pekerja
                                                                                        {{ $noDetail++ }}</label>
                                                                                    <input type="text"
                                                                                        name="time_completed"
                                                                                        class="form-control" id="name"
                                                                                        value="{{ $p }}">
                                                                                </div>
                                                                            </div>
                                                                            @endforeach

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <div class="alert alert-danger">
                                                Tidak Project.
                                            </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom template | don't include it in your project! -->
    @include('partials.theme')
    <!-- End Custom template -->
</div>
@endsection