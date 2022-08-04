@extends('layouts.mainAdmin')

@section('container')
    <div class="wrapper">

        {{-- side bar --}}
        @include('partials.navbarAdmin')
        {{-- end side bar --}}

        <div class="container-fluid page-body-wrapper">

            {{-- navbar --}}
            @include('partials.sidebarAdmin')
            {{-- end navbar --}}

            <main class="main-panel">
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
                                        <form class="forms-sample form-valide" method="POST"
                                            action="{{ route('team.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="name" class="col-lg-4 col-form-label">Name Team</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="nama_lengkap" class="form-control"
                                                        id="name" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Jobdesk</label>
                                                <div class="col-lg-6">
                                                    <select name="jobdesk" class="form-control" style="width:100%" required>
                                                        <option value="">Pilih Jobdesk</option>
                                                        @foreach ($M_jobdesk as $x)
                                                            <option value="{{ $x->nama }}">{{ $x->nama }}</option>
                                                        @endforeach ()
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label"
                                                    for="exampleInputCity1">instagram</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="instagram"
                                                        id="exampleInputCity1" placeholder="instagram">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="github">github</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="github" id="github"
                                                        placeholder="github">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="linkedin">linkedin</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="linkedin"
                                                        id="linkedin" placeholder="linkedin">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="facebook">facebook</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="facebook"
                                                        id="facebook" placeholder="facebook">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="foto">Foto Team</label>
                                                <div class="col-lg-6">
                                                    <img class="img-show img-fluid mb-3 rounded d-block"
                                                        style="height: 200px">
                                                    <input type="file" name="foto" class="form-control-file"
                                                        id="foto" onchange="previewImage()">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <a href="/team" class="btn btn-dark">Cancel</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
