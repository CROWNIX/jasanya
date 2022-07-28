@extends('layouts.mainCorona')

@section('container')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper ">
        <div class="row w-100 m-0 ">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg ">
                <div class="card col-lg-4 mx-auto shadow">
                    {{-- @if (session()->has('succes'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('succes') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif --}}
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Login</h3>
                        @if (session()->has("error"))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session("error") }}
                        </div>
                        @endif
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" autofocus class="form-control text-white @error('email')
                                    is-invalid
                                @enderror" value="{{ old(" email") }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" autocomplete="off" class="form-control text-white @error('password')
                                    is-invalid
                                @enderror">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Remember me </label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
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
</div>
@endsection