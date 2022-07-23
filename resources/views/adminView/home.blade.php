@extends('layouts.mainAdmin')

@section('container')
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('partials.sidebarAdmin')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('partials.navbarAdmin')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row ">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Order Status</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check form-check-muted m-0">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                        </label>
                                                    </div>
                                                </th>
                                                <th> Client Name </th>
                                                <th> Order No </th>
                                                <th> Product Cost </th>
                                                <th> Project </th>
                                                <th> Payment Mode </th>
                                                <th> Start Date </th>
                                                <th> Payment Status </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-muted m-0">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="/coronaAdminTemplate/template/assets/images/faces/face2.jpg"
                                                        alt="image" />
                                                    <span class="pl-2">Estella Bryan</span>
                                                </td>
                                                <td> 02312 </td>
                                                <td> $14,500 </td>
                                                <td> Website </td>
                                                <td> Cash on delivered </td>
                                                <td> 04 Dec 2019 </td>
                                                <td>
                                                    <div class="badge badge-outline-warning">Pending</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-muted m-0">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="/coronaAdminTemplate/template/assets/images/faces/face5.jpg"
                                                        alt="image" />
                                                    <span class="pl-2">Lucy Abbott</span>
                                                </td>
                                                <td> 02312 </td>
                                                <td> $14,500 </td>
                                                <td> App design </td>
                                                <td> Credit card </td>
                                                <td> 04 Dec 2019 </td>
                                                <td>
                                                    <div class="badge badge-outline-danger">Rejected</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-muted m-0">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="/coronaAdminTemplate/template/assets/images/faces/face4.jpg"
                                                        alt="image" />
                                                    <span class="pl-2">Sallie Reyes</span>
                                                </td>
                                                <td> 02312 </td>
                                                <td> $14,500 </td>
                                                <td> Website </td>
                                                <td> Credit card </td>
                                                <td> 04 Dec 2019 </td>
                                                <td>
                                                    <div class="badge badge-outline-success">Approved</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('partials.footerAdmin')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection

</html>