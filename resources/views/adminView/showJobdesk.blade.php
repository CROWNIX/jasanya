@extends('layouts.mainAdmin')

@section('container')
<div class="container-scroller">
    <!-- partial:../../partials/_sidebar.html -->
    @include('partials.sidebarAdmin')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        @include('partials.navbarAdmin')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-dark">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <form action={{ url('/R_jobdesk') }}>
                                                    <div class="input-group mb-2">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search products" name="search"
                                                            value="{{ request('search') }}">
                                                        <button class="btn btn-info" type="submit">
                                                            search
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th> no </th>
                                                <th> name Jobdesk </th>
                                                <th class="text-center"> aksi </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($M_jobdesk as $x)
                                            <tr>

                                                <td>{{ $no++ }}</td>
                                                <td>{{ $x->nama}} </td>

                                                <td class="text-center">
                                                    <form action="{{ route('R_jobdesk.destroy', $x->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>

                                            @empty
                                            <div class="alert alert-danger">
                                                Tidak Team.
                                            </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {!! $M_jobdesk->links('vendor.pagination.custom') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection

</html>