@extends('layouts.admin')

@section('title')
Admin - Larastore
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
                <h4>{{ $customer }}</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 mb-2">
            <div class="card card-summary">
                <p class="text-muted">Revenue</p>
                <h4>${{ $revenue }}</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 mb-2">
            <div class="card card-summary">
                <p class="text-muted">Transaction</p>
                <h4>{{ $transactions }}</h4>
            </div>
        </div>
    </div>
</div>
@endsection
