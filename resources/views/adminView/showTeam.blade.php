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
                <div class="page-header">
                    <h3 class="page-title"> Jasanya.Tech Team </h3>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-dark">
                                        <a href="{{ url('/formcreateTeam') }}"><button type="submit"
                                                class="btn btn-info">tambah</button></a>
                                        <thead>
                                            <tr>
                                                <th> no </th>
                                                <th> name </th>
                                                <th> jobdesk </th>
                                                <th> github </th>
                                                <th> instgram </th>
                                                <th> linkedin </th>
                                                <th> facebook </th>
                                                <th class="text-center"> aksi </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($M_team as $x)
                                            <tr>

                                                <td> <a href="{{ route('R_team.show',$x->id) }}">{{ $no++ }}</a></td>
                                                <td><a href="{{ route('R_team.show',$x->id) }}">{{ $x->nama_lengkap
                                                        }}</a>
                                                </td>
                                                <td><a href="{{ route('R_team.show',$x->id) }}">{{ $x->jobdesk }}</a>
                                                </td>
                                                <td><a href="{{ route('R_team.show',$x->id) }}">{{ $x->github }}</a>
                                                </td>
                                                <td><a href="{{ route('R_team.show',$x->id) }}">{{ $x->instagram }}</a>
                                                </td>
                                                <td><a href="{{ route('R_team.show',$x->id) }}">{{ $x->linkedin }}</a>
                                                </td>
                                                <td><a href="{{ route('R_team.show',$x->id) }}">{{ $x->facebook }}</a>
                                                </td>

                                                <td class="text-center">
                                                    <form action="{{ route('R_team.destroy', $x->id) }}" method="POST">
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
                                    <div class="r">
                                        {!! $M_team->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            @include('partials.footerAdmin')
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection

</html>