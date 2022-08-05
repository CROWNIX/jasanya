@extends('layouts.mainCorona')
@section('container')
<main class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto shadow">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Register</h3>
                        <form action="/register" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="name" class="form-control p_input @error('username')
                                is-invalid
                            @enderror">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control p_input @error('email')
                                    is-invalid
                                @enderror">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" autocomplete="off" name="password" class="form-control p_input @error('password')
                                is-invalid
                            @enderror">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
</main>
@endsection