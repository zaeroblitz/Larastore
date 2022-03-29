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
                <section class="section-shipping" data-aos="fade-up" data-aos-delay="100" style="margin-top: 0px">
                    <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Input Your Name" value="Zaero Blitz" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Input Your Email Address" value="zaeroblitz@gmail.com" />
                            </div>
                        </div>
                    </div>
                    <div class="row shipping-group" data-aos="fade-up" data-aos-delay="150">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="addressOne">Address 1</label>
                                <input type="text" name="addressOne" id="addressOne" class="form-control"
                                    placeholder="Input Your Address" value="Jl. H. Encat No.19" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="addressTwo">Address 2</label>
                                <input type="text" name="addressTwo" id="addressTwo" class="form-control"
                                    placeholder="Input Your Address" value="RT.03 RW.13 Beji" />
                            </div>
                        </div>
                    </div>
                    <div class="row shipping-group" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="province">Province</label>
                                <input type="text" name="province" id="province" class="form-control"
                                    placeholder="Input Your Province" value="Jawa Barat" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control"
                                    placeholder="Input Your City" value="Depok" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="postalcode">Postal code</label>
                                <input type="number" name="postalcode" id="postalcode" class="form-control"
                                    placeholder="Input Your Postal code" value="16421" />
                            </div>
                        </div>
                    </div>
                    <div class="row shipping-group" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country" class="form-control"
                                    placeholder="Input Your Country" value="Indonesia" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control"
                                    placeholder="Input Your Mobile Phone Number" value="+62 81383932663" />
                            </div>
                        </div>
                    </div>
                </section>

                <a href="" class="mt-4 col-lg-2 col-md-3 col-4 btn btn-info">Save Now</a>
            </div>
        </div>
    </div>
</div>
@endsection
