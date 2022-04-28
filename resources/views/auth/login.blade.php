@extends('layouts.auth')

@section('title')
Login - Larastore
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <div id="login" class="row align-items-center auth-login">
            <div class="col-lg-6 col-md-6 d-none d-md-block">
                <img src="/images/login_banner.png" alt="banner" class="w-75" />
            </div>
            <div class="col-lg-5 col-md-6">
                <h2>Belanja kebutuhan utama,<br />menjadi lebih mudah</h2>
                <form method="POST" action="{{ route('login') }}" class="auth-login-form">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" class="form-control w-75 @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email"
                            autofocus placeholder="Input Your Email Address">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password"
                            class="form-control w-75 @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Input Your Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="w-75 btn btn-success">Sign In to My Account</button>
                    <a href="{{ route('register') }}" class="w-75 btn btn-secondary mt-2">Sign Up</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
