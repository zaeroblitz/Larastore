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
                <h4>{{ number_format($customer) }}</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 mb-2">
            <div class="card card-summary">
                <p class="text-muted">Revenue</p>
                <h4>{{ number_format($revenue) }}</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6 mb-2">
            <div class="card card-summary">
                <p class="text-muted">Transaction</p>
                <h4>{{ number_format($transaction_count) }}</h4>
            </div>
        </div>
    </div>
    
    <div class="row dashboard-transactions">
        <h4 class="col-12 mb-3">Recent Transaction</h4>
        <!-- Desktop Mode -->
        @foreach ($transaction_data as $transaction)
            <a href="{{ route('dashboard-transactions-details', $transaction->id) }}"
            class="card card-transaction-product d-none d-md-block d-lg-block mb-4">
                <div class="row align-items-center">
                    <div class="col-md-1">
                        <img src="{{ Storage::url($transaction->product->galleries->first()->photo) }}" width="44px" height="44px" alt="product" />
                    </div>
                    <div class="col-md-4">
                        <p class="mb-0">{{ $transaction->product->name }}</p>
                    </div>
                    <div class="col-md-3">
                        <p class="mb-0">{{ $transaction->transaction->user->name }}</p>
                    </div>
                    <div class="col-md-3">
                        <p class="mb-0">{{ $transaction->created_at }}</p>
                    </div>
                    <div class="col-md-1">
                        <img src="images/icon_arrow.svg" alt="icon" />
                    </div>
                </div>
            </a>
        @endforeach

        <!-- Mobile Mode -->
        @foreach ($transaction_data as $transaction)
            <a href="dashboard-transaction-details.html"
            class="card card-transaction-product d-block d-sm-block d-md-none d-lg-none mb-4">
                <div class="row align-items-center justify-content-around">
                    <div class="col-3">
                        <img src="{{ Storage::url($transaction->product->galleries->first()->photo) }}" width="80px" height="80px" alt="product" />
                    </div>
                    <div class="col-7">
                        <div class="col-12">
                            <p class="mb-0 font-weight-bolder">{{ $transaction->product->name }}</p>
                        </div>
                        <div class="col-12">
                            <p class="mb-0 font-weight-lighter">{{ $transaction->transaction->user->name }}</p>
                        </div>
                        <div class="col-12">
                            <p class="mb-0 font-weight-lighter">{{ $transaction->created_at }}</p>
                        </div>
                    </div>
                    <div class="col-1 mr-auto">
                        <img src="images/icon_arrow.svg" alt="icon" />
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
