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
                        team
                        @endslot
                        @slot('nameurl')
                        Team
                        @endslot
                    </x-headerTableForm>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample" method="POST" action="/team/{{ $team->id }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="oldFoto" id="" value="{{ $team->foto }}">
                                        @if ($team->foto)
                                        <img class="img-show rounded mx-auto d-block"
                                            src="{{ asset('storage/'.$team->foto) }}" style="height: 200px" alt="asdr">
                                        @else
                                        <img class="img-show rounded mx-auto d-block" alt="">
                                        @endif
                                        <div class="form-group align-items-center">
                                            <label for="foto">Foto Team</label>
                                            <input type="file" name="foto" class="form-control-file" id="foto"
                                                onchange="previewImage()">
                                            @error('foto')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="nama_lengkap" class="form-control" id="name"
                                                value="{{ $team->nama_lengkap }}">
                                            @error('nama_lengkap')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Jobdesk</label>
                                            <select name="jobdesk" class="form-control" style="width:100%" required>
                                                <option value="{{ $team->jobdesk }}">{{ $team->jobdesk }}</option>
                                                @foreach ( $M_jobdesk as $x )
                                                <option value="{{ $x->nama }}">{{ $x->nama }}</option>
                                                @endforeach ()
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">instagram</label>
                                            <input type="text" class="form-control" name="instagram" id="instagram"
                                                value="{{ $team->instagram }}">
                                            @error('instagram')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="github">github</label>
                                            <input type="text" class="form-control" name="github" id="github"
                                                value="{{ $team->github }}">
                                            @error('github')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="linkedin">linkedin</label>
                                            <input type="text" class="form-control" name="linkedin" id="linkedin"
                                                value="{{ $team->linkedin }}">
                                            @error('linkedin')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="facebook">facebook</label>
                                            <input type="text" class="form-control" name="facebook" id="facebook"
                                                value="{{ $team->facebook }}">
                                            @error('facebook')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
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