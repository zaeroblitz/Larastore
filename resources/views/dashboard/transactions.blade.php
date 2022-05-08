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
        @if (count($sellTransactions) > 0)
            @foreach ($sellTransactions as $transaction)
                <!-- Desktop Mode -->
                <a href="{{ route('dashboard-transactions-details', $transaction->id) }}"
                class="card-transaction-product d-none d-md-block d-lg-block mb-4">
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
                            <img src="/images/icon_arrow.svg" alt="icon" />
                        </div>
                    </div>
                </a>

                <!-- Mobile Mode -->
                <a href="{{ route('dashboard-transactions-details', $transaction->id) }}"
                    class="card-transaction-product d-block d-sm-block d-md-none d-lg-none mb-4">
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
                            <img src="/images/icon_arrow.svg" alt="icon" />
                        </div>
                    </div>
                </a>
            @endforeach
        @else
            <p class="text-center font-weight-bold mb-0">No Transactions Found</p>
        @endif                
    </div>

    <h3 class="mt-4">Buy Product</h3>
    <div class="row dashboard-transactions card p-3">        
        @if (count($buyTransactions) > 0)
            @foreach ($buyTransactions as $transaction)
                <!-- Desktop Mode -->
                <a href="{{ route('dashboard-transactions-details', $transaction->id) }}"
                class="card-transaction-product d-none d-md-block d-lg-block mb-4">
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
                            <img src="/images/icon_arrow.svg" alt="icon" />
                        </div>
                    </div>
                </a>

                <!-- Mobile Mode -->
                <a href="{{ route('dashboard-transactions-details', $transaction->id) }}"
                    class="card-transaction-product d-block d-sm-block d-md-none d-lg-none mb-4">
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
                            <img src="/images/icon_arrow.svg" alt="icon" />
                        </div>
                    </div>
                </a>
            @endforeach
        @else
            <p class="text-center font-weight-bold mb-0">No Transactions Found</p>
        @endif                
    </div>
</div>
@endsection
