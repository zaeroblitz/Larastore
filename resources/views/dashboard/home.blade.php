@extends('layouts.dashboard')

@section('title')
Dashboard - Larastore
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row dasboard-header">
        <div class="col-12">
            <h3>Dashboard</h3>
            <p>Look what you have made today!</p>
        </div>
    </div>
    <div class="row dashboard-summary">
        <div class="col-lg-4 col-md-4 col-6 mb-2">
            <div class="card card-summary">
                <p class="text-muted">Customer</p>
                <h4>15,209</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 mb-2">
            <div class="card card-summary">
                <p class="text-muted">Revenue</p>
                <h4>$931,290</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 mb-2">
            <div class="card card-summary">
                <p class="text-muted">Transaction</p>
                <h4>22,409,399</h4>
            </div>
        </div>
    </div>
    <div class="row dashboard-transactions">
        <h4 class="col-12 mb-3">Recent Transaction</h4>
        <!-- Desktop Mode -->
        <a href="dashboard-transaction-details.html"
            class="card card-transaction-product d-none d-md-block d-lg-block mb-4">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="images/dashboard_icon_product_1.png" width="44px" height="44px" alt="product" />
                </div>
                <div class="col-md-4">
                    <p class="mb-0">Shirup Marzzan</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0">Angga Risky</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0">30 Maret, 2022</p>
                </div>
                <div class="col-md-1">
                    <img src="images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>
        <a href="dashboard-transaction-details.html"
            class="card card-transaction-product d-none d-md-block d-lg-block mb-4">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="images/dashboard_icon_product_2.png" width="44px" height="44px" alt="product" />
                </div>
                <div class="col-md-4">
                    <p class="mb-0">LeBrone X</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0">Masayoshi</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0">01 April, 2022</p>
                </div>
                <div class="col-md-1">
                    <img src="images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>
        <a href="dashboard-transaction-details.html"
            class="card card-transaction-product d-none d-md-block d-lg-block mb-4">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="images/dashboard_icon_product_3.png" width="44px" height="44px" alt="product" />
                </div>
                <div class="col-md-4">
                    <p class="mb-0">Shoffa Lembutte</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0">Shayna</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0">02 April, 2022</p>
                </div>
                <div class="col-md-1">
                    <img src="images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>

        <!-- Mobile Mode -->
        <a href="dashboard-transaction-details.html"
            class="card card-transaction-product d-block d-sm-block d-md-none d-lg-none mb-4">
            <div class="row align-items-center justify-content-around">
                <div class="col-3">
                    <img src="images/dashboard_icon_product_1.png" width="80px" height="80px" alt="product" />
                </div>
                <div class="col-7">
                    <div class="col-12">
                        <p class="mb-0 font-weight-bolder">Shirup Marzzan</p>
                    </div>
                    <div class="col-12">
                        <p class="mb-0 font-weight-lighter">Angga Risky</p>
                    </div>
                    <div class="col-12">
                        <p class="mb-0 font-weight-lighter">30 Maret, 2022</p>
                    </div>
                </div>
                <div class="col-1 mr-auto">
                    <img src="images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>
        <a href="dashboard-transaction-details.html"
            class="card card-transaction-product d-block d-sm-block d-md-none d-lg-none mb-4">
            <div class="row align-items-center justify-content-around">
                <div class="col-3">
                    <img src="images/dashboard_icon_product_2.png" width="80px" height="80px" alt="product" />
                </div>
                <div class="col-7">
                    <div class="col-12">
                        <p class="mb-0 font-weight-bolder">LeBrone X</p>
                    </div>
                    <div class="col-12">
                        <p class="mb-0 font-weight-lighter">Masayoshi</p>
                    </div>
                    <div class="col-12">
                        <p class="mb-0 font-weight-lighter">01 April, 2022</p>
                    </div>
                </div>
                <div class="col-1 mr-auto">
                    <img src="images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>
        <a href="dashboard-transaction-details.html"
            class="card card-transaction-product d-block d-sm-block d-md-none d-lg-none mb-4">
            <div class="row align-items-center justify-content-around">
                <div class="col-3">
                    <img src="images/dashboard_icon_product_3.png" width="80px" height="80px" alt="product" />
                </div>
                <div class="col-7">
                    <div class="col-12">
                        <p class="mb-0 font-weight-bolder">Soffa Lembutte</p>
                    </div>
                    <div class="col-12">
                        <p class="mb-0 font-weight-lighter">Shayna</p>
                    </div>
                    <div class="col-12">
                        <p class="mb-0 font-weight-lighter">02 April, 2022</p>
                    </div>
                </div>
                <div class="col-1 mr-auto">
                    <img src="images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
