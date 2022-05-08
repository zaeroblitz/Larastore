@extends('layouts.dashboard')

@section('title')
Dashboard Transactions - Larastore
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row dasboard-header">
        <div class="col-12">
            <h2>#{{ $transaction->code }}</h2>
            <p>Transaction Details</p>
        </div>
    </div>

    <div class="card mt-4 p-4" id="transactionDetails">
        <div class="row transaction-details-info align-items-center mb-2">
            <div class="col-md-4 col-12">
                <img src="{{ Storage::url($transaction->product->galleries->first()->photo) }}" alt="product" class="w-100" />
            </div>

            <div class="col-md-8">
                <div class="row justify-content-around mb-4 mt-4 mt-md-0">
                    <div class="col-6">
                        <p class="text-muted mb-0">Customer Name</p>
                        <h5>{{ $transaction->transaction->user->name }}</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-0">Product Name</p>
                        <h5>{{ $transaction->product->name }}</h5>
                    </div>
                </div>
                <div class="row justify-content-around mb-4">
                    <div class="col-6">
                        <p class="text-muted mb-0">Date of Transaction</p>
                        <h5>{{ $transaction->created_at }}</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-0">Transaction Status</p>
                        <h5 class="text-danger">{{ $transaction->transaction->transaction_status }}</h5>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-6">
                        <p class="text-muted mb-0">Total Amount</p>
                        <h5>${{ $transaction->transaction->total_price }}</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-0">Mobile Phone</p>
                        <h5>{{ $transaction->transaction->user->phone_number }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row transaction-details-shipping mt-4">
            <h3>Shipping Details</h3>            
            <div class="row mb-2 mt-4">
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">Address I</p>
                    <h5>{{ $transaction->transaction->user->address_one }}</h5>
                </div>
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">Address II</p>
                    <h5>{{ $transaction->transaction->user->address_two }}</h5>
                </div>
            </div>
            <div class="row mb-2 mb-4">
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">Province</p>
                    <h5>{{ \App\Models\Province::find($transaction->transaction->user->provinces_id)->name }}</h5>
                </div>
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">City</p>
                    <h5>{{ \App\Models\Regency::find($transaction->transaction->user->regencies_id)->name }}</h5>
                </div>
            </div>
            <div class="row mb-2 mb-4">
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">Postal Code</p>
                    <h5>{{ $transaction->transaction->user->zip_code }}</h5>
                </div>
                <div class="col-md-4 col-6">
                    <p class="text-muted mb-0">Country</p>
                    <h5>{{ $transaction->transaction->user->country }}</h5>
                </div>
            </div>
            <form action="{{ route('dashboard-transactions-update', $transaction->id) }}" method="POST">           
                @csrf 
                <div class="row mb-2 mb-4">                
                    <div class="col-md-3 col-5">
                        <p class="text-muted mb-0">Shipping Status</p>
                        <select name="shipping_status" id="shipping_status" class="form-control" style="padding: 0px" v-model="status">                        
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
                                <button type="submit" class="btn btn-success col-lg-3 col-md-4 col-10">
                                    Update Resi
                                </button>
                            </div>
                        </div>
                    </template>
                    <button type="submit" class="btn btn-info col-4 mt-4">Save Changes</button>                
                </div>          
            </form>  
        </div>        
    </div>
</div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        let transactionDetails = new Vue({
            el: "#transactionDetails",
            data: {
                status: "{{ $transaction->shipping_status }}",
                resi: "{{ $transaction->resi }}",
            },
        });
    </script>
@endpush
