@extends('layouts.app')

@section('title')
Cart - Larastore
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <section class="section-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </section>

        @if(isset($total_price))
            <section class="section-cart" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name &amp; Seller</th>
                                    <th>Price</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php $total_price = 0; @endphp
                                    @foreach($carts as $cart)
                                        <tr>
                                            <td style="width: 20%">
                                                @if($cart->product->galleries)
                                                    <img src="{{ Storage::url($cart->product->galleries->first()->photo) }}"
                                                        alt="product" class="product-image" />
                                                @endif
                                            </td>
                                            <td style="width: 35%">
                                                <div class="product-name">{{ $cart->product->name }}</div>
                                                <div class="product-sub-title">By
                                                    {{ $cart->product->user->store_name }}</div>
                                            </td>
                                            <td style="width: 25%">
                                                <div class="product-price">${{ number_format($cart->product->price) }}
                                                </div>
                                                <div class="product-sub-title">USD</div>
                                            </td>
                                            <td style="width: 20%">
                                                <form
                                                    action="{{ route('cart-delete', $cart->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-remove">Remove</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @php
                                            $total_price += $cart->product->price;
                                        @endphp
                                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            
            <form action="{{ route('checkout') }}"  method="POST" id="locations" enctype="multipart/form-data">
                @csrf
                <section class="section-shipping" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="component-header">Shipping Details</h4>            
                    <input type="hidden" name="total_price" value="{{ $total_price }}">
                    <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_one">Address 1</label>
                                <input type="text" name="address_one" id="address_one" class="form-control"
                                    placeholder="Input Your Address" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_two">Address 2</label>
                                <input type="text" name="address_two" id="address_two" class="form-control"
                                    placeholder="Input Your Address" />
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
                                <input type="number" name="zip_code" id="zip_code" class="form-control p-0"
                                    placeholder="Input Your Postal code" />
                            </div>
                        </div>
                    </div>
                    <div class="row shipping-group" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country" class="form-control"
                                    placeholder="Input Your Country" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_number">Mobile</label>
                                <input type="text" name="phone_number" id="phone_number" class="form-control"
                                    placeholder="Input Your Mobile Phone Number" />
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-payment" data-aos="fade-up" data-aos-delay="250">
                    <h4 class="component-header">Payment Details</h4>
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-3 col-lg-2">
                            <div class="payment-title">$0</div>
                            <div class="payment-sub-title">Country Tax</div>
                        </div>
                        <div class="col-12 col-md-3 col-lg-2 mt-4 mt-md-0 mt-lg-0">
                            <div class="payment-title">$0</div>
                            <div class="payment-sub-title">Payment Insurance</div>
                        </div>
                        <div class="col-12 col-md-3 col-lg-2 mt-4 mt-md-0 mt-lg-0">
                            <div class="payment-title">$0</div>
                            <div class="payment-sub-title">Shippping</div>
                        </div>
                        <div class="col-12 col-md-3 col-lg-2 mt-4 mt-md-0 mt-lg-0">
                            <div class="payment-total">${{ number_format($total_price ?? 0) }}</div>
                            <div class="payment-sub-title">Total</div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-2 ml-lg-2 mt-4 mt-md-4 mt-lg-0">
                            <button type="submit" class="btn btn-success d-block d-md-block">Checkout Now</button>
                        </div>
                    </div>
                </section>
            
            </form>
        @else
            <section class="section-empty-cart text-center" data-aos="fade-up">
                <h4>Ooppss! Cart Anda Masih Kosong.</h4>
                <img src="/images/empty_cart.svg" alt="Empty Cart" width="480">
            </section>
        @endif        
    </div>
</div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let locations = new Vue({
            el: "#locations",
            mounted() {
                AOS.init();                
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
    <script src="/scripts/navbar-scroll.js"></script>
@endpush
