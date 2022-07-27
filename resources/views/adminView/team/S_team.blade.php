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
                    team
                    @endslot
                    @slot('url')
                    R_team
                    @endslot
                    @slot('nameurl')
                    team
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
                                                <th> name </th>
                                                <th> jobdesk </th>
                                                <th style="width: 10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($M_team as $x)
                                            <tr>
                                                <td> {{ $no++ }}</td>
                                                <td>{{ $x->nama_lengkap}}</td>
                                                <td>{{ $x->jobdesk }}</td>
                                                <td>
                                                    <form class="form-button-action"
                                                        action="{{ route('R_team.destroy', $x->id) }}" method="POST">
                                                        <button class="btn btn-light btn-link" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false"><i
                                                                class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu">
                                                            <button class="btn" type="button" data-toggle="modal"
                                                                data-target="#addRowModal{{ $x->id }}">detail</button>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item"
                                                                href="{{ route('R_team.show',$x->id ) }}">edit</a>
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
                                                                            {{ $x->nama_lengkap }}</span>
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
                                                                                    <img class="rounded mx-auto d-block"
                                                                                        src="{{ asset('storage/'.$x->foto) }}"
                                                                                        style="height: 200px" alt="">
                                                                                </div>
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Name</label>
                                                                                    <input id="addName" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->nama_lengkap }}">
                                                                                </div>

                                                                                {{-- <div class="col-md-6 pr-0"> --}}
                                                                                    <div
                                                                                        class="form-group form-group-default">
                                                                                        <label>Jobdesk</label>
                                                                                        <input id="addPosition"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            value="{{ $x->jobdesk }}" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div
                                                                                        class="form-group form-group-default">
                                                                                        <label>Instagram</label>
                                                                                        <input id="addOffice"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            value="{{ $x->instagram }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div
                                                                                        class="form-group form-group-default">
                                                                                        <label>github</label>
                                                                                        <input id="addOffice"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            value="{{ $x->github }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div
                                                                                        class="form-group form-group-default">
                                                                                        <label>facebook</label>
                                                                                        <input id="addOffice"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            value="{{ $x->facebook }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div
                                                                                        class="form-group form-group-default">
                                                                                        <label>Linkedin</label>
                                                                                        <input id="addOffice"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            value="{{ $x->linkedin }}">
                                                                                    </div>
                                                                                </div>
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
                                                Tidak Team.
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