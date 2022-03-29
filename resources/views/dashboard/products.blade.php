@extends('layouts.dashboard')

@section('title')
Dashboard Product - Larastore
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row dasboard-header">
        <div class="col-12">
            <h2>My Products</h2>
            <p>Manage it well and get money</p>
        </div>
    </div>

    <div class="row col-lg-3 col-md-4 col-6">
        <a href="dashboard-products-create.html" class="btn btn-info">Add New Product</a>
    </div>

    <div class="row dashboard-products">
        <div class="product-item card p-md-3 p-2 mr-2 mb-4 col-lg-4 col-md-4 col-6">
            <a href="dashboard-products-details.html">
                <img src="/images/product_5.png" alt="product" />
                <h4>Shirup Marzzan</h4>
                <p class="mb-0">Foods</p>
            </a>
        </div>
        <div class="product-item card p-md-3 p-2 mr-2 mb-4 col-lg-4 col-md-4 col-6">
            <a href="dashboard-products-details.html">
                <img src="/images/product_1.png" alt="product" />
                <h4>Apple Watch 4</h4>
                <p class="mb-0">Gadgets</p>
            </a>
        </div>
        <div class="product-item card p-md-3 p-2 mr-2 mb-4 col-lg-4 col-md-4 col-6">
            <a href="dashboard-products-details.html">
                <img src="/images/product_2.png" alt="product" />
                <h4>LeBron X</h4>
                <p class="mb-0">Sneakers</p>
            </a>
        </div>
        <div class="product-item card p-md-3 p-2 mr-2 mb-4 col-lg-4 col-md-4 col-6">
            <a href="dashboard-products-details.html">
                <img src="/images/product_5.png" alt="product" />
                <h4>Shirup Marzzan</h4>
                <p class="mb-0">Foods</p>
            </a>
        </div>
        <div class="product-item card p-md-3 p-2 mr-2 mb-4 col-lg-4 col-md-4 col-6">
            <a href="dashboard-products-details.html">
                <img src="/images/product_1.png" alt="product" />
                <h4>Apple Watch 4</h4>
                <p class="mb-0">Gadgets</p>
            </a>
        </div>
        <div class="product-item card p-md-3 p-2 mr-2 mb-4 col-lg-4 col-md-4 col-6">
            <a href="dashboard-products-details.html">
                <img src="/images/product_2.png" alt="product" />
                <h4>LeBron X</h4>
                <p class="mb-0">Sneakers</p>
            </a>
        </div>
    </div>
</div>
@endsection
