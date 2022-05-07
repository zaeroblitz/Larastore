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
                <form action="{{ route('dashboard-settings-update', 'dashboard-settings-store') }}" method="POST" class="auth-login-form">
                    @csrf
                    <div class="form-group">
                        <label for="store_name">Store Name</label>
                        <input type="text" name="store_name" id="store_name" class="form-control"
                            placeholder="Input Your Store Name" value="{{ $user->store_name }}" />
                    </div>

                    <div class="form-group">
                        <label for="categories_id">Category</label>
                        <select name="categories_id" id="categories_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $user->categories_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="mb-0">Store Status</label>
                        <p class="auth-sub-title">Apakah saat ini toko Anda buka?</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="store_status" id="true" value="1" {{ $user->store_status == 1 ? 'checked' : '' }} />
                            <label class="form-check-label" for="true">Buka</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="store_status" id="false" value="0" {{ $user->store_status == 0 ||$user->store_status == NULL ? 'checked' : '' }}/>
                            <label class="form-check-label" for="false">Tutup</label>
                        </div>
                    </div>

                    <button type="submit" class="mt-4 col-4 btn btn-info">Save Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
