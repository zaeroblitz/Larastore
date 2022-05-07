@extends('layouts.dashboard')

@section('title')
Dashboard Account Settings - Larastore
@endsection

@section('content')
<div class="container-fluid py-4 dashboard-settings">
    <div class="row dasboard-header">
        <div class="col-12">
            <h2>My Account</h2>
            <p>Update your current profile</p>

            <div class="card col-12 px-4 pb-4">                
                <form action="{{ route('dashboard-settings-update', 'dashboard-settings-account') }}" method="POST" id="form">
                    @csrf
                    <section class="section-shipping" data-aos="fade-up" data-aos-delay="100" style="margin-top: 0px">
                        <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Input Your Name" value="{{ $user->name }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Input Your Email Address" value="{{ $user->email }}" />
                                </div>
                            </div>
                        </div>
                        <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address_one">Address 1</label>
                                    <input type="text" name="address_one" id="address_one" class="form-control"
                                        placeholder="Input Your Address" value="{{ $user->address_one }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address_two">Address 2</label>
                                    <input type="text" name="address_two" id="address_two" class="form-control"
                                        placeholder="Input Your Address" value="{{ $user->address_two }}" />
                                </div>
                            </div>
                        </div>
                        <div class="row shipping-group" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="provinces_id">Province</label>
                                    <select name="provinces_id" id="provinces_id" class="form-control p-0" v-if="provinces" v-model="provinces_id">
                                        <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                                    </select>
                                    <select v-else class="form-control p-0"></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="regencies_id">City</label>
                                    <select name="regencies_id" id="regencies_id" class="form-control p-0" v-if="regencies" v-model="regencies_id">
                                        <option v-for="regency in regencies" :value="regency.id">@{{ regency.name }}</option>
                                    </select>
                                    <select v-else class="form-control p-0"></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="zip_code">Postal code</label>
                                    <input type="number" name="zip_code" id="zip_code" class="form-control"
                                        placeholder="Input Your Postal code" value="{{ $user->zip_code }}" />
                                </div>
                            </div>
                        </div>
                        <div class="row shipping-group" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" name="country" id="country" class="form-control"
                                        placeholder="Input Your Country" value="{{ $user->country }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Mobile</label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control"
                                        placeholder="Input Your Mobile Phone Number" value="{{ $user->phone_number }}" />
                                </div>
                            </div>
                        </div>
                    </section>

                    <button type="submit" class="mt-4 col-lg-2 col-md-3 col-4 btn btn-info">Save Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let locations = new Vue({
            el: "#form",
            mounted() {   
                this.getProvincesData();
            },
            data: {
                provinces: null,
                regencies: null,
                provinces_id: null,
                regencies_id: null
            },
            methods: {
                getProvincesData() {
                    let self = this;
                    axios.get('{{ route('api-provinces') }}')
                        .then(function(response) {
                            self.provinces = response.data;
                        });
                },

                getRegenciesData() {
                    let self = this;
                    axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
                        .then(function(response) {
                            self.regencies = response.data;
                        });
                },
            },
            watch: {
                provinces_id: function(val, oldVal) {
                    this.regencies_id = null;
                    this.getRegenciesData();
                }
            }
        });

    </script>
@endpush
