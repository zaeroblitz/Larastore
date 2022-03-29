@extends('layouts.dashboard')

@section('title')
Dashboard Transactions - Larastore
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row dasboard-header">
        <div class="col-12">
            <h2>Transactions</h2>
            <p>Big result start from the small one</p>
        </div>
    </div>

    <h3 class="mt-3">Sell Product</h3>
    <div class="row dashboard-transactions card p-3">
        <!-- Desktop Mode -->
        <a href="dashboard-transactions-details.html"
            class="card-transaction-product d-none d-md-block d-lg-block mb-4">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="/images/dashboard_icon_product_1.png" width="44px" height="44px" alt="product" />
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
                    <img src="/images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>
        <a href="dashboard-transactions-details.html"
            class="card-transaction-product d-none d-md-block d-lg-block mb-4">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="/images/dashboard_icon_product_2.png" width="44px" height="44px" alt="product" />
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
                    <img src="/images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>
        <a href="dashboard-transactions-details.html"
            class="card-transaction-product d-none d-md-block d-lg-block mb-4">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="/images/dashboard_icon_product_3.png" width="44px" height="44px" alt="product" />
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
                    <img src="/images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>

        <!-- Mobile Mode -->
        <a href="dashboard-transactions-details.html"
            class="card-transaction-product d-block d-sm-block d-md-none d-lg-none mb-4">
            <div class="row align-items-center justify-content-around">
                <div class="col-3">
                    <img src="/images/dashboard_icon_product_1.png" width="80px" height="80px" alt="product" />
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
                    <img src="/images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>
        <a href="dashboard-transactions-details.html"
            class="card-transaction-product d-block d-sm-block d-md-none d-lg-none mb-4">
            <div class="row align-items-center justify-content-around">
                <div class="col-3">
                    <img src="/images/dashboard_icon_product_2.png" width="80px" height="80px" alt="product" />
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
                    <img src="/images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>
        <a href="dashboard-transactions-details.html"
            class="card-transaction-product d-block d-sm-block d-md-none d-lg-none mb-4">
            <div class="row align-items-center justify-content-around">
                <div class="col-3">
                    <img src="/images/dashboard_icon_product_3.png" width="80px" height="80px" alt="product" />
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
                    <img src="/images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>
    </div>

    <h3 class="mt-4">Buy Product</h3>
    <div class="row dashboard-transactions card p-3">
        <!-- Desktop Mode -->
        <a href="dashboard-transactions-details.html"
            class="card-transaction-product d-none d-md-block d-lg-block mb-4">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="/images/product_1.png" width="44px" height="44px" alt="product" />
                </div>
                <div class="col-md-4">
                    <p class="mb-0">Apple Watch 4</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0">iBox</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0">30 Maret, 2022</p>
                </div>
                <div class="col-md-1">
                    <img src="/images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>

        <!-- Mobile Mode -->
        <a href="dashboard-transactions-details.html"
            class="card-transaction-product d-block d-sm-block d-md-none d-lg-none mb-4">
            <div class="row align-items-center justify-content-around">
                <div class="col-3">
                    <img src="/images/product_1.png" width="80px" height="80px" alt="product" />
                </div>
                <div class="col-7">
                    <div class="col-12">
                        <p class="mb-0 font-weight-bolder">Apple Watch 4</p>
                    </div>
                    <div class="col-12">
                        <p class="mb-0 font-weight-lighter">iBox</p>
                    </div>
                    <div class="col-12">
                        <p class="mb-0 font-weight-lighter">30 Maret, 2022</p>
                    </div>
                </div>
                <div class="col-1 mr-auto">
                    <img src="/images/icon_arrow.svg" alt="icon" />
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
