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
                    Data Layanan
                    @endslot
                    @slot('url')
                    R_layanan
                    @endslot
                    @slot('nameurl')
                    layanan
                    @endslot
                </x-headerTableForm>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-primary rounded ml-auto" data-toggle="modal"
                                        data-target="#addRowModal">
                                        <i class="fa fa-plus mr-1"></i>
                                        Add Layanan
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header no-bd">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                        Add Layanan</span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="/layanan" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class=" row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Name</label>
                                                                <input id="addName" name="nama" type="text"
                                                                    class="form-control" placeholder="Name Layanan"
                                                                    required>
                                                            </div>
                                                            <div class="form-group form-group-default">
                                                                <label>Deskripsi</label>
                                                                <input id="deskripsi" name="deskripsi" type="text"
                                                                    class="form-control" placeholder="deskripsi"
                                                                    required>
                                                            </div>
                                                            <div class="form-group form-group-default">
                                                                <label>Icon</label>
                                                                <input id="icon" name="icon" type="text"
                                                                    class="form-control" placeholder="Icon" required>
                                                            </div>
                                                            <div class="form-group form-group-default">
                                                                <label>Link Whatsapp</label>
                                                                <input id="icon" name="whatsapp" type="text"
                                                                    class="form-control" placeholder="Icon" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="table-responsive">
                                    @if (session()->has("success"))
                                    <div class="col-lg-6">
                                        <div class="alert alert-success alert-dismissible fade show bg-success text-white"
                                            role="alert">
                                            {{ session("success") }}
                                        </div>
                                    </div>
                                    @endif
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> No </th>
                                                <th> Name </th>
                                                <th> Deskripsi </th>
                                                <th style="width: 10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($layanan as $x)
                                            <tr>
                                                <td> {{ $no++ }}</td>
                                                <td>{{ $x->nama}}</td>
                                                <td>{{ $x->deskripsi}}</td>
                                                <td>
                                                    <form class="form-button-action" action="/layanan/{{ $x->id }}"
                                                        method="POST">
                                                        <button class="btn btn-light btn-link" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false"><i
                                                                class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu">
                                                            <button class="btn dropdown-item" type="button"
                                                                data-toggle="modal"
                                                                data-target="#addRowModal{{ $x->id }}">Detail</button>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <button class="btn dropdown-item" type="button"
                                                                data-toggle="modal"
                                                                data-target="#editRowModal{{ $x->id }}">Edit</button>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn dropdown-item">Hapus</button>
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
                                                                            <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Name</label>
                                                                                    <input id="addName" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->nama }}">
                                                                                </div>
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Deskripsi</label>
                                                                                    <input id="addPosition" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->deskripsi }}" />
                                                                                </div>
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Deskripsi</label>
                                                                                    <input id="addPosition" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->icon }}" />
                                                                                </div>
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>link whatsapp</label>
                                                                                    <textarea id="addPosition"
                                                                                        type="text" class="form-control"
                                                                                        rows="4">{{ $x->whatsapp }} </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="editRowModal{{ $x->id }}" tabindex="-1"
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
                                                                    <form action="/layanan/{{ $x->id }}" method="post">
                                                                        @method("put")
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Name</label>
                                                                                    <input id="addName" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->nama }}"
                                                                                        name="nama" required>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Deskripsi</label>
                                                                                    <input id="addPosition" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->deskripsi }}"
                                                                                        name="deskripsi" required />
                                                                                </div>
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Icon</label>
                                                                                    <input id="addPosition" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->icon }}"
                                                                                        name="icon" required />
                                                                                </div>
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>link whatsapp</label>
                                                                                    <textarea id="addPosition"
                                                                                        name="whatsapp"
                                                                                        class="form-control"
                                                                                        rows="4">{{ $x->whatsapp }} </textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Update</button>
                                                                            <button type="button" class="btn btn-danger"
                                                                                data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty

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