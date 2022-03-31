@extends('layouts.dashboard')

@section('title')
Dashboard Transactions - Larastore
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row dasboard-header">
        <div class="col-12">
            <h2>#STORE0839</h2>
            <p>Transaction Details</p>
        </div>
    </div>

    <div class="card mt-4 p-4" id="transactionDetails">
        <div class="row transaction-details-info align-items-center mb-2">
            <div class="col-md-4 col-12">
                <img src="/images/product_1.png" alt="product" class="w-100" />
            </div>
            <div class="col-md-8">
                <div class="row justify-content-around mb-4 mt-4 mt-md-0">
                    <div class="col-6">
                        <p class="text-muted mb-0">Customer Name</p>
                        <h5>Angga Risky</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-0">Product Name</p>
                        <h5>Apple Watch 4</h5>
                    </div>
                </div>
                <div class="row justify-content-around mb-4">
                    <div class="col-6">
                        <p class="text-muted mb-0">Date of Transaction</p>
                        <h5>30 Maret, 2022</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-0">Transaction Status</p>
                        <h5 class="text-danger">Pending</h5>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-6">
                        <p class="text-muted mb-0">Total Amount</p>
                        <h5>$1500</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-0">Mobile Phone</p>
                        <h5>+62 1234 5678</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row transaction-details-shipping mt-4">
            <h3>Shipping Details</h3>
            <div class="row mb-2 mt-4">
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">Address I</p>
                    <h5>Setra Duta Cemara</h5>
                </div>
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">Address II</p>
                    <h5>Blok B2 No.34</h5>
                </div>
            </div>
            <div class="row mb-2 mb-4">
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">Province</p>
                    <h5>West Java</h5>
                </div>
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">City</p>
                    <h5>Bandung</h5>
                </div>
            </div>
            <div class="row mb-2 mb-4">
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">Postal Code</p>
                    <h5>123999</h5>
                </div>
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">Country</p>
                    <h5>Indonesia</h5>
                </div>
            </div>
            <div class="row mb-2 mb-4">
                <div class="col-md-3 col-5">
                    <p class="text-muted mb-0">Shipping Status</p>
                    <select name="status" id="status" class="form-control" style="padding: 0px" v-model="status">                        
                        <option value="PENDING">Pending</option>
                        <option value="SHIPPING">Shipping</option>
                        <option value="SUCCESS">Success</option>
                    </select>
                </div>
                <template v-if="status == 'SHIPPING'">
                    <div class="col-md-6 col-7">
                        <p class="text-muted mb-0" style="color: transparent !important">
                            Resi
                        </p>
                        <div class="row">
                            <input type="text" name="resi" id="resi" class="col-md-4 form-control mr-2" v-model="resi"
                                style="width: min-content" />
                            <button class="btn btn-success col-lg-3 col-md-4 col-10">
                                Update Resi
                            </button>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <a href="#" class="btn btn-info col-4">Save Changes</a>
    </div>
</div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        let transactionDetails = new Vue({
            el: "#transactionDetails",
            data: {
                status: "SHIPPING",
                resi: "JNE20839149021029301231",
            },
        });
    </script>
@endpush
