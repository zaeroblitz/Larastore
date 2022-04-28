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
                <form method="POST" action="{{ route('register') }}" class="auth-login-form">
                    @csrf
                    <div class="form-group">
                        <label for="name">Fullname</label>
                        <input type="text" id="name" name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" required autocomplete="name" autofocus
                            v-model="name" placeholder="Input Your Fullname">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required autocomplete="email"
                            placeholder="Input Your Email Address" v-model="email"
                            @change="checkEmail()"
                            :class="{ 'is-invalid' : this.email_unavailable }">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="Input Your Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input id="password_confirmation" type="password"
                            class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required
                            autocomplete="new-password" placeholder="Input Your Password">

                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-0">Store</label>
                        <p class="auth-sub-title">
                            Apakah anda juga ingin membuka toko?
                        </p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_store_open" id="true" value="true"
                                :value="true" v-model="is_store_open" />
                            <label class="form-check-label" for="true">Iya, boleh</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_store_open" id="false" value="false"
                                :value="false" v-model="is_store_open" />
                            <label class="form-check-label" for="false">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group" v-if="is_store_open">
                        <label for="store_name">Nama Toko</label>
                        <input type="text" id="store_name" name="store_name"
                            class="form-control @error('store_name') is-invalid @enderror"
                            required autocomplete autofocus
                            v-model="store_name" placeholder="Input Your Store Name">

                        @error('store_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group" v-if="is_store_open">
                        <label for="categories_id">Category</label>
                        <select name="categories_id" id="categories_id" class="form-control p-0">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="col-12 btn btn-success" :disable="this.email_unavailable">Sign Up Now</button>
                    <a href="{{ route('login') }}" class="col-12 btn btn-secondary mt-2">Back to Sign In</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        Vue.use(Toasted);

        let register = new Vue({
            el: "#register",
            mounted() {
                AOS.init();                
            },
            methods: {
                checkEmail: function() {
                    let self = this;
                    axios.get('{{ route('api-register-check') }}', {
                        params: {
                            email: this.email
                        }
                    })
                        .then(function (response) {
                            if (response.data == 'Available') {
                                self.$toasted.show(
                                    "Email anda tersedia! Silahkan lanjut langkah selanjutnya.", 
                                    {
                                        position: "top-center",
                                        classname: "rounded",
                                        duration: 3000,
                                    }
                                );
                                sel.email_unavailable = false;
                            } else {
                                self.$toasted.error(
                                    "Maaf, tampaknya email sudah terdaftar pada sistem kami.", 
                                    {
                                        position: "top-center",
                                        classname: "rounded",
                                        duration: 3000,
                                    }
                                );
                                sel.email_unavailable = true;
                            }

                            // handle success
                            console.log(response);
                        });
                }
            },
            data() {
                return {
                    name: "",
                    email: "",
                    is_store_open: true,
                    store_name: "",
                    email_unavailable: false
                }
            }
        });

    </script>
@endpush
