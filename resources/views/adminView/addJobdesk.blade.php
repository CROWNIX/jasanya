@extends('layouts.mainAdmin')

@section('container')
<div class="container-scroller">

    {{-- side bar --}}
    @include('partials.sidebarAdmin')
    {{-- end side bar --}}

    <div class="container-fluid page-body-wrapper">

        {{-- navbar --}}
        @include('partials.navbarAdmin')
        {{-- end navbar --}}

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Form Create Team </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('R_jobdesk') }}">jobdesk</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Create Team</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" method="POST" action="{{ route('R_jobdesk.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputName1"
                                            placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Jobdesk</label>
                                        <select class="form-control" style="width:100%">
                                            <option value="">JobDesk yang sudah tersedia</option>
                                            @foreach ( $M_jobdesk as $x )
                                            <option value="{{ $x->nama }}">{{ $x->nama }}</option>
                                            @endforeach ()
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Tambah</button>
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
@endsection

</html>