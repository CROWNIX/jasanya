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
                    Jobdesk
                    @endslot
                    @slot('url')
                    jobdesk
                    @endslot
                    @slot('nameurl')
                    jobdesk
                    @endslot
                </x-headerTableForm>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                        data-target="#addRowModal">
                                        <i class="fa fa-plus"></i>
                                        Add Row
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
                                                        Add Jobdesk</span>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('jobdesk.store') }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Name</label>
                                                                <input id="addName" name="nama" type="text"
                                                                    class="form-control" placeholder="Jobdesk Name">
                                                            </div>
                                                            <div class="form-group form-group-default">
                                                                <label for="exampleFormControlSelect2">Job Yang Sudah
                                                                    Tersedia</label>
                                                                <select multiple class="form-control"
                                                                    id="exampleFormControlSelect2">
                                                                    @foreach ( $M_jobdesk as $x )
                                                                    <option value="{{ $x->nama }}">{{ $x->nama }}
                                                                    </option>
                                                                    @endforeach ()
                                                                </select>
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
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> No </th>
                                                <th> Nama Jobdesk </th>
                                                <th style="width: 10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($M_jobdesk as $x)
                                            <tr>
                                                <td> {{ $no++ }}</td>
                                                <td>{{ $x->nama}}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <form class="form-button-action"
                                                            action="{{ route('jobdesk.destroy', $x->id) }}"
                                                            method="POST">

                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" data-toggle="tooltip" title=""
                                                                class="btn btn-link btn-danger"
                                                                data-original-title="Remove">
                                                                <i class="
                                                                icon-trash"></i>
                                                            </button>
                                                        </form>
                                                        <button class="btn btn-link btn-success" type="button"
                                                            data-toggle="modal" data-target="#editRowModal{{ $x->id }}"
                                                            data-original-title="Edit" data-toggle="tooltip" title=""><i
                                                                class="
                                                                icon-pencil"></i></button>
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
                                                                    <form action="/jobdesk/{{ $x->id }}" method="post">
                                                                        @method("put")
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Jobdeks</label>
                                                                                    <input id="addName" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->nama }}"
                                                                                        name="nama" required>
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
                                            <div class="alert alert-danger">
                                                Tidak Jobdesk.
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