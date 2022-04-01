@extends('layouts.admin')

@section('title')
Admin - Larastore
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row dasboard-header">
        <div class="col-12">
            <h3>User</h3>
            <p>Edit User</p>
        </div>
    </div>   
    
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card col-md-6">
                    <div class="card-body">
                        <form action="{{ route('user.update', $item->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $item->email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Password</label>
                                        <input type="password" name="password" class="form-control">
                                        <small>*Kosongkan jika tidak ingin mengganti password</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Pilih Role</label>
                                        <select name="role" class="form-control" required>
                                            <option value="ADMIN" {{ ($item->role == 'ADMIN') ? 'selected' : ''  }}>ADMIN</option>
                                            <option value="USER" {{ ($item->role == 'USER') ? 'selected' : '' }}>USER</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-info px-5">Save Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
