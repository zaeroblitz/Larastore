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
                            <tr>
                                <td style="width: 20%">
                                    <img src="/images/product_1.png" alt="product" class="product-image" />
                                </td>
                                <td style="width: 35%">
                                    <div class="product-name">Apple Watch 4</div>
                                    <div class="product-sub-title">By Andi Sukka</div>
                                </td>
                                <td style="width: 25%">
                                    <div class="product-price">$890</div>
                                    <div class="product-sub-title">USD</div>
                                </td>
                                <td style="width: 20%">
                                    <a href="#" class="btn btn-remove">Remove</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 20%">
                                    <img src="/images/product_2.png" alt="product" class="product-image" />
                                </td>
                                <td style="width: 35%">
                                    <div class="product-name">Orange Bogotta</div>
                                    <div class="product-sub-title">By BuildWithAngga</div>
                                </td>
                                <td style="width: 25%">
                                    <div class="product-price">$94,509</div>
                                    <div class="product-sub-title">USD</div>
                                </td>
                                <td style="width: 20%">
                                    <a href="#" class="btn btn-remove">Remove</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 20%">
                                    <img src="/images/product_5.png" alt="product" class="product-image" />
                                </td>
                                <td style="width: 35%">
                                    <div class="product-name">Tatakan Gelas</div>
                                    <div class="product-sub-title">By WoodCraft</div>
                                </td>
                                <td style="width: 25%">
                                    <div class="product-price">$10</div>
                                    <div class="product-sub-title">USD</div>
                                </td>
                                <td style="width: 20%">
                                    <a href="#" class="btn btn-remove">Remove</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="section-shipping" data-aos="fade-up" data-aos-delay="100">
            <h4 class="component-header">Shipping Details</h4>
            <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="addressOne">Address 1</label>
                        <input type="text" name="addressOne" id="addressOne" class="form-control"
                            placeholder="Input Your Address" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="addressTwo">Address 2</label>
                        <input type="text" name="addressTwo" id="addressTwo" class="form-control"
                            placeholder="Input Your Address" />
                    </div>
                </div>
            </div>
            <div class="row shipping-group" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="province">Province</label>
                        <input type="text" name="province" id="province" class="form-control"
                            placeholder="Input Your Province" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="Input Your City" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="postalcode">Postal code</label>
                        <input type="number" name="postalcode" id="postalcode" class="form-control"
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
                        <label for="mobile">Mobile</label>
                        <input type="text" name="mobile" id="mobile" class="form-control"
                            placeholder="Input Your Mobile Phone Number" />
                    </div>
                </div>
            </div>
        </section>

        <section class="section-payment" data-aos="fade-up" data-aos-delay="250">
            <h4 class="component-header">Payment Details</h4>
            <div class="row justify-content-between">
                <div class="col-12 col-md-3 col-lg-2">
                    <div class="payment-title">$10</div>
                    <div class="payment-sub-title">Country Tax</div>
                </div>
                <div class="col-12 col-md-3 col-lg-2 mt-4 mt-md-0 mt-lg-0">
                    <div class="payment-title">$280</div>
                    <div class="payment-sub-title">Payment Insurance</div>
                </div>
                <div class="col-12 col-md-3 col-lg-2 mt-4 mt-md-0 mt-lg-0">
                    <div class="payment-title">$580</div>
                    <div class="payment-sub-title">Shippping</div>
                </div>
                <div class="col-12 col-md-3 col-lg-2 mt-4 mt-md-0 mt-lg-0">
                    <div class="payment-total">$392,482</div>
                    <div class="payment-sub-title">Total</div>
                </div>
                <div class="col-12 col-md-12 col-lg-2 ml-lg-2 mt-4 mt-md-4 mt-lg-0">
                    <a href="success.html" class="btn btn-success d-block d-md-block">Checkout Now</a>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
