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
                        Form Add Team
                        @endslot
                        @slot('url')
                        R_team
                        @endslot
                        @slot('nameurl')
                        Team
                        @endslot
                    </x-headerTableForm>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample" method="POST"
                                        action="{{ route('R_team.update',$M_team->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <img class="rounded mx-auto d-block" src="/img/imgTeam/{{ $M_team->foto }}"
                                            style="height: 200px" alt="">
                                        <div class="form-group align-items-center">
                                            <label for="foto">Foto Team</label>
                                            <input type="file" name="foto" class="form-control-file" id="foto">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                value="{{ $M_team->nama_lengkap }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Jobdesk</label>
                                            <select name="jobdesk" class="form-control" style="width:100%" required>
                                                <option value="{{ $M_team->jobdesk }}">{{ $M_team->jobdesk }}</option>
                                                @foreach ( $M_jobdesk as $x )
                                                <option value="{{ $x->nama }}">{{ $x->nama }}</option>
                                                @endforeach ()
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">instagram</label>
                                            <input type="text" class="form-control" name="instagram" id="instagram"
                                                value="{{ $M_team->instagram }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="github">github</label>
                                            <input type="text" class="form-control" name="github" id="github"
                                                value="{{ $M_team->github }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="linkedin">linkedin</label>
                                            <input type="text" class="form-control" name="linkedin" id="linkedin"
                                                value="{{ $M_team->linkedin }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="facebook">facebook</label>
                                            <input type="text" class="form-control" name="facebook" id="facebook"
                                                value="{{ $M_team->facebook }}">
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