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
        <a href="{{ route('dashboard-products-create') }}" class="btn btn-info">Add New Product</a>
    </div>

    <div class="row dashboard-products">
        @foreach ($products as $product)
            <div class="product-item card p-md-3 p-2 mr-2 mb-4 col-lg-4 col-md-4 col-6">
                <a href="{{ route('dashboard-products-details', $product->id) }}">
                    <img src="{{ Storage::url($product->galleries->first()->photo ?? '') }}" alt="product" />
                    <h4>{{ $product->name }}</h4>
                    <p class="mb-0">{{ $product->category->name }}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
