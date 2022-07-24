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
                                        <h3 class="page-title"> Kritik Saran </h3>
                                        <thead>
                                            <tr>
                                                <th> no </th>
                                                <th> name </th>
                                                <th> email </th>
                                                <th> subject </th>
                                                <th class="text-center"> aksi </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kritikSaran as $x)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $x->name }}</td>
                                                <td>{{ $x->email }}</td>
                                                <td>{{ $x->subject }}</td>
                                                {{-- <td>{{ $x->message }}</td> --}}
                                                <td class="text-center">
                                                    <form action="{{ route('adminView.destroy', $x->id) }}"
                                                        method="POST">
                                                        <a class="btn btn-info"
                                                            href="{{ route('adminView.show',$x->id) }}">Show</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                        @include('sweetalert::alert')
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <div class="alert alert-danger">
                                                Tidak Ada Kritik Saran.
                                            </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <div class="r">
                                        {!! $kritikSaran->links('vendor.pagination.custom') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection

</html>