@extends('layouts.app')

@section('content')
    <div id="main-wrapper">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <a href="https://BGS.com"
                           class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="{{asset('admin/')}}/assets/images/logos/dark-logo.svg" class="dark-logo"
                                 alt="Logo-Dark"/>
                            <img src="{{asset('admin/')}}/assets/images/logos/light-logo.svg" class="light-logo"
                                 alt="Logo-light"/>
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                             style="height: calc(100vh - 80px);">
                            <img src="{{asset('admin/')}}/assets/images/backgrounds/login-security.svg" alt=""
                                 class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <h2 class="mb-3 fs-7 fw-bolder">Welcome to BGS</h2>
                                <p class=" mb-9">Your Admin Dashboard</p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputtext" class="form-label">Name</label>
                                        <input id="exampleInputtext" aria-describedby="textHelp" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input id="exampleInputEmail1" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email"
                                               aria-describedby="emailHelp">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password"
                                               id="exampleInputPassword1">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password-confirm" class="form-label">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign Up
                                    </button>
                                    <div class="d-flex align-items-center">
                                        <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                                        <a class="text-primary fw-medium ms-2" href="{{route('login')}}">Sign In</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
