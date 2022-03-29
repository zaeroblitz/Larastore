@extends('layouts.success')

@section('title')
Success Register
@endsection

@section('content')
<div class="page-content page-success">
    <div class="container">
        <div class="row">
            <img src="/images/illust_welcome.svg" alt="illustration" class="mx-auto" />
        </div>

        <div class="row">
            <h4 class="col-12 mx-auto text-center">Welcome to Store</h4>
            <p class="col-12 mx-auto text-center">
                Kamu sudah berhasil terdaftar<br />bersama kami. Let’s grow up now.
            </p>
        </div>

        <div class="row">
            <a href="#" class="col-10 col-md-6 col-lg-4 btn btn-success mx-auto">My Dashboard</a>
        </div>

        <div class="row mt-2">
            <a href="index.html" class="col-10 col-md-6 col-lg-4 btn btn-secondary mx-auto">Go to Shopping</a>
        </div>
    </div>
</div>
@endsection
