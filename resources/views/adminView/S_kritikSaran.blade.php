@extends('layouts.mainAdmin')

@section('container')
<div class="wrapper">
    <!-- Navbar Header -->
    @include('partials.navbarAdmin')
    <!-- End Navbar -->
    <!-- Sidebar -->
    @include('partials.sidebarAdmin')
    <main class="main-panel">
        <div class="content">
            <div class="page-inner">
                <x-headerTableForm>
                    @slot('nama')
                    kritik saran
                    @endslot
                    @slot('url')
                    /kritikSaran
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
                                                <th> email </th>
                                                <th> name </th>
                                                <th> subject </th>
                                                <th style="width: 10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kritikSaran as $x)
                                            <tr>
                                                <td> {{ $no++ }}</td>
                                                <td>{{ $x->email}}</td>
                                                <td>{{ $x->name }}</td>
                                                <td>{{ $x->subject }}</td>
                                                <td>
                                                    <form class="form-button-action"
                                                        action="{{ route('adminView.destroy', $x->id) }}" method="POST">
                                                        <button class="btn btn-light btn-link" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false"><i
                                                                class="fas fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu">
                                                                <button class="btn dropdown-item" type="button"
                                                                data-toggle="modal"
                                                                data-target="#addRowModal{{ $x->id }}">Detail</button>
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
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>email</label>
                                                                                    <input id="addOffice" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->email }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>name</label>
                                                                                    <input id="addOffice" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->name }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>subject</label>
                                                                                    <input id="addName" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->subject }}">
                                                                                </div>
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>pesan</label>
                                                                                    <input id="addPosition" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $x->message }}" />
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
                                                Tidak KritikSaran.
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
    </main>

    <!-- Custom template | don't include it in your project! -->
    @include('partials.theme')
    <!-- End Custom template -->
</div>
@endsection