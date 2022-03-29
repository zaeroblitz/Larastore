@extends('layouts.success')

@section('title')
Success Checkout
@endsection

@section('content')
<div class="page-success">
    <div class="container">
        <div class="row">
            <img src="/images/illust_success.svg" alt="illustration" class="mx-auto" />
        </div>

        <div class="row">
            <h4 class="col-12 mx-auto text-center">Transaction Processed!</h4>
            <p class="col-12 mx-auto text-center">
                Silahkan tunggu konfirmasi email dari kami dan<br />kami akan
                menginformasikan resi secepat mungkin!
            </p>
        </div>

        <div class="row">
            <a href="#" class="col-10 col-md-6 col-lg-4 btn btn-success mx-auto">My Dashboard</a>
        </div>

        <div class="row mt-2">
            <a href="index.html" class="col-10 col-md-6 col-lg-4 btn btn-secondary mx-auto">Back to Homepage</a>
        </div>
    </div>
</div>
@endsection
