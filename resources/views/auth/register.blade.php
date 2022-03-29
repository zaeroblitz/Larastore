@extends('layouts.auth')

@section('title')
Register - Larastore
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <div class="row align-items-center auth-login" id="register">
            <div class="col-lg-7 d-none d-lg-block">
                <img src="images/illust_register.svg" alt="banner" class="w-100" />
            </div>
            <div class="col-lg-5 col-md-8">
                <h2>Memulai untuk jual beli<br />dengan cara terbaru</h2>
                <form action="#" class="auth-login-form">
                    <div class="form-group">
                        <label for="name">Fullname</label>
                        <input type="text" name="name" id="name" class="form-control is-valid"
                            placeholder="Input Your Fullname" v-model="name" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control is-invalid"
                            placeholder="Input Your Email Address" v-model="email" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Input Your Password" />
                    </div>
                    <div class="form-group">
                        <label class="mb-0">Store</label>
                        <p class="auth-sub-title">
                            Apakah anda juga ingin membuka toko?
                        </p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="isStoreOpen" id="true" value="true"
                                :value="true" v-model="isStoreOpen" />
                            <label class="form-check-label" for="true">Iya, boleh</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="isStoreOpen" id="false" value="false"
                                :value="false" v-model="isStoreOpen" />
                            <label class="form-check-label" for="false">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group" v-if="isStoreOpen">
                        <label for="store_name">Nama Toko</label>
                        <input type="text" name="store_name" id="store_name" class="form-control"
                            placeholder="Input Your Store Name" />
                    </div>
                    <div class="form-group" v-if="isStoreOpen">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <a href="index.html" class="col-12 btn btn-success">Sign Up Now</a>
                    <a href="register.html" class="col-12 btn btn-secondary mt-2">Back to Sign In</a>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container" style="display: none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required
                                    autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script>
        Vue.use(Toasted);

        let register = new Vue({
            el: "#register",
            mounted() {
                AOS.init();
                this.$toasted.error(
                    "Maaf, tampaknya email sudah terdaftar pada sistem kami.", {
                        position: "top-center",
                        classname: "rounded",
                        duration: 3000,
                    }
                );
            },
            data: {
                name: "Zaero Blitz",
                email: "zaeroblitz@gmail.com",
                password: "",
                isStoreOpen: true,
                storeName: "",
            },
        });

    </script>
@endpush
