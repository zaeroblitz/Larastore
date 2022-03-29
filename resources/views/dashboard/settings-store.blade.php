@extends('layouts.dashboard')

@section('title')
Dashboard Store Settings - Larastore
@endsection

@section('content')
<div class="container-fluid py-4 dashboard-settings">
    <div class="row dasboard-header">
        <div class="col-12">
            <h2>Store Settings</h2>
            <p>Make store that profitable</p>

            <div class="card col-lg-6 col-md-8 col-12 p-3 mt-4">
                <form action="#" class="auth-login-form">
                    <div class="form-group">
                        <label for="store_name">Store Name</label>
                        <input type="text" name="store_name" id="store_name" class="form-control"
                            placeholder="Input Your Store Name" value="Papel La Casa" />
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="Furniture">Furniture</option>
                            <option value="Sneaker">Sneaker</option>
                            <option value="Gadget">Gadget</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="mb-0">Store Status</label>
                        <p class="auth-sub-title">Apakah saat ini toko Anda buka?</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="isStoreOpen" id="true" value="true" />
                            <label class="form-check-label" for="true">Buka</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="isStoreOpen" id="false" value="false" />
                            <label class="form-check-label" for="false">Tutup</label>
                        </div>
                    </div>

                    <a href="" class="mt-4 col-4 btn btn-info">Save Now</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
